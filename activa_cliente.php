<?php 
require 'database/funciones_clientes.php';
require 'database/connect.php';
require 'database/key.php';

$idclient = isset($_GET['idclient']) ? $_GET['idclient'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';


if($idclient == '' || $token == ''){
    header("location: index.php");
    exit;
}

$db = new Database();
$conn = $db->connect();

echo validatoken($idclient, $token, $conn);


?>