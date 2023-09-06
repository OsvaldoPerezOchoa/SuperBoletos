<?php

function esnull(array $parametros)
{
    foreach ($parametros as $parametro) {
        if (strlen(trim($parametro)) < 1) {
            return true;
        }
    }
    return false;
}

function esnullusu(array $parametros)
{
    foreach ($parametros as $parametro) {
        if (strlen(trim($parametro)) < 1) {
            return true;
        }
    }
    return false;
}

function esemail($correo)
{
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function validarpassword($password, $repassword)
{
    if (strcmp($password, $repassword) === 0) {
        return true;
    }
    return false;
}

function gentoken()
{
    return md5(uniqid(mt_rand(), false));
}

function registrarcliente(array $datos, $conn)
{
    $sqlreg = $conn->prepare("INSERT INTO cliente (nombre, apellidos, correo, estatus, fecha_alta) VALUES (?,?,?,1,now())");
    if ($sqlreg->execute($datos)) {
        return $conn->lastInsertId();
    }
    return 0;
}

function registrarusuario(array $datos, $conn)
{
    $sqlreg = $conn->prepare("INSERT INTO usuarios (usuario, password, token, id_cliente) VALUES (?,?,?,?)");
    if ($sqlreg->execute($datos)) {
        return $conn->lastInsertId();
    }
    return false;
}

function usuarioexiste($usuario, $conn)
{
    $sqlreg = $conn->prepare("SELECT id FROM usuarios WHERE usuario LIKE ? LIMIT 1");
    $sqlreg->execute([$usuario]);
    if ($sqlreg->fetchColumn() > 0) {
        return true;
    }
    return 0;
}

function emailexiste($correo, $conn)
{
    $sqlreg = $conn->prepare("SELECT id FROM cliente WHERE correo LIKE ? LIMIT 1");
    $sqlreg->execute([$correo]);
    if ($sqlreg->fetchColumn() > 0) {
        return true;
    }
    return false;
}

function mostrarmensaje(array $errors)
{
    if (count($errors) > 0) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '<ul>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
}

function validatoken($idclient, $token, $conn)
{
    $mensaje = "";
    $sqlreg = $conn->prepare("SELECT id FROM usuarios WHERE id = ? AND token LIKE ? LIMIT 1");
    $sqlreg->execute([$idclient, $token]);
    if ($sqlreg->fetchColumn() > 0) {
        if (activarclien($idclient, $conn)) {
            $mensaje = "cuenta activada";
        } else {
            $mensaje = "error al activar la cuenta";
        }
    } else {
        $mensaje = "no existe el registro del cliente";
    }
    return $mensaje;
}

function activarclien($idclient, $conn)
{
    $sqlreg = $conn->prepare("UPDATE usuarios SET activacion = 1 WHERE id = ?");
    return $sqlreg->execute([$idclient]);
}

function login($usuario, $password, $conn)
{
    $sqlreg = $conn->prepare("SELECT id, usuario, password FROM usuarios WHERE usuario LIKE ? LIMIT 1");
    $sqlreg->execute([$usuario]);
    if ($row = $sqlreg->fetch(PDO::FETCH_ASSOC)) {
        if (esactivo($usuario, $conn)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['usuario'];
                header("Location: index.php");
                exit;
            }
        }
        else{
            return 'El usuario no ha sido activado';
        }
    }
    return 'El usuario y/o el password son incorrectos';
}

function esactivo($usuario, $conn)
{
    $sqlreg = $conn->prepare("SELECT activacion FROM usuarios WHERE usuario LIKE ? LIMIT 1");
    $sqlreg->execute([$usuario]);
    $row  = $sqlreg->fetch(PDO::FETCH_ASSOC);
    if ($row['activacion'] == 1) {
        return true;
    }
    return false;
}
