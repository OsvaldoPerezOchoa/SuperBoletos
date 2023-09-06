<?php
require 'database/connect.php';
require 'database/key.php';
$db = new Database();
$conn = $db->connect();

$id = $_GET["id"];

$tipo_evento = isset($_GET["tipoevento"]) ? $_GET["tipoevento"] : '';

if ($id == '') {
	echo 'Error a procesar la informacion';
	exit;
} else {
	$sql = $conn->prepare("SELECT count(id) FROM evetos WHERE  id = ? and activo=1");
	$sql->execute([$id]);
	if ($sql->fetchColumn() > 0) {
		$sql = $conn->prepare("SELECT * FROM evetos WHERE  id = ? and activo=1");
		$sql->execute([$id]);
		$row = $sql->fetch(PDO::FETCH_ASSOC);
		$id = $row['id'];
		$nombre_evento = $row['nombre_evento'];
		$descrip_evento = $row['descrip_evento'];
		$dia_evento = $row['dia_evento'];
		$mes_evento = $row['mes_evento'];
		$hora_evento = $row['hora_evento'];
		$lugar_evento = $row['lugar_evento'];
		$cantvip_evento = $row['cantvip_evento'];
		$boletovip_evento = $row['boletovip_evento'];
		$boletopref_evento = $row['boletopref_evento'];
		$cantpref_evento = $row['cantpref_evento'];
		$boletogen_evento = $row['boletogen_evento'];
		$cantgen_evento = $row['cantgen_evento'];
		$url_evento = $row['url_evento'];
		$descrip_evento = $row['descrip_evento'];
		$spotifi_evento = $row['spotifi_evento'];
	}
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/recibo.png">
	<title>Super Boletos</title>
	<!-- Estilos css -->
	<link rel="stylesheet" href="style/style.css">
	<!-- Glider js -->
	<link href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	<!-- Fuentes -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- Font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<!-- Unicons -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>

	<header>
		<input type="checkbox" name="" id="chk1">
		<div class="logo">
			<a href="index.php"><img src="img/superboletos.png"></a>
		</div>
		<div class="search-box">
			<form>
				<input type="text" name="busqueda" id="busqueda" placeholder="Artista, Evento, Ciudad">
				<button type="submit" formaction="listaeventos.php"><i class="fa fa-search"></i></button>
			</form>
		</div>
		<ul class="opciones">
			<li><a href="index.php"><i class="fa-solid fa-house fa-beat"></i> Inicio</a></li>
			<li><a href="listaeventos.php?tipoevento="><i class="fa-solid fa-hand-back-fist fa-beat"></i>
					Eventos</a></li>
			<li><a class="btn-cont-form" id="form-open"><i class="fa-solid fa-user fa-beat"></i> Iniciar sesión</a></li>
			<li>
				<a href="#"><i class="fa-solid fa-cart-shopping fa-beat"></i></a>
			</li>
		</ul>
		<div class="menu">
			<label for="chk1">
				<i class="fa fa-bars"></i>
			</label>
		</div>
	</header>

	<section class="home">
		<!-- Formularios de iniciar sesión y registrarse -->
		<div class="form_container">
			<i class="uil uil-times form_close"></i>
			<!-- Formulario de iniciar sesión -->
			<div class="form login_form">
				<form action="index.php" autocomplete="off">
					<h2>Login</h2>
					<div class="input_box">

						<input type="email" placeholder="Ingresa tu e-mail" required />
						<i class="fa-solid fa-envelope email"></i>
					</div>
					<div class="input_box">
						<input type="password" placeholder="Ingresa tu contraseña" required />
						<i class="fa-solid fa-lock password"></i>
						<i class="uil uil-eye-slash pw_hide"></i>
					</div>
					<div class="option_field">
						<span class="checkbox">
							<input type="checkbox" id="check" />
							<label for="check">Recuerdame</label>
						</span>
						<a href="#" class="forgot_pw">¿Olvidaste tu contraseña?</a>
					</div>
					<button class="button">Iniciar Sesión</button>
					<div class="login_signup">¿No tienes cuenta?<a href="#" id="signup"> Registrate</a></div>
					<div class="redes-sociales">
						<p> O inicia sesión con</p>
						<diV class="iconos-redes">
							<a href=""><i class="fa-brands fa-facebook-f"></i></a>
							<a href=""><i class="fa-brands fa-google"></i></a>
							<a href=""><i class="fa-brands fa-instagram"></i></a>
							<a href=""><i class="fa-brands fa-twitter"></i></a>
						</diV>
					</div>
				</form>
			</div>

			<!-- Formulario de Registrarse-->
			<div class="form signup_form">
				<form action="index.php" method="post" autocomplete="off">
					<h2>Signup</h2>
					<div class="input_box">
						<input type="email" placeholder="Ingresa tu e-mail" name="correo" id="correo" requireda />
						<i class="fa-solid fa-envelope email"></i>
					</div>
					<div class="input_box">
						<input type="text" placeholder="Ingresa tu usuario" name="usuario" id="usuario" requireda />
						<i class="fa-solid fa-user email"></i>
					</div>
					<div class="input_box">
						<input type="text" placeholder="Ingresa tu nombre" name="nombre" id="nombre" requireda />
						<i class="fa-solid fa-user email"></i>
					</div>
					<div class="input_box">
						<input type="text" placeholder="Ingresa tu Apellido" name="apellido" id="apellido" requireda />
						<i class="fa-solid fa-user email"></i>
					</div>
					<div class="input_box">
						<input type="password" placeholder="Crea una contraseña" name="password" id="password" requireda />
						<i class="fa-solid fa-lock password"></i>
						<i class="uil uil-eye-slash pw_hide"></i>
					</div>
					<div class="input_box">
						<input type="password" placeholder="Confirma tu contraseña" name="repassword" id="repassword" requireda />
						<i class="fa-solid fa-lock password"></i>
						<i class="uil uil-eye-slash pw_hide"></i>
					</div>
					<button class="button" type="submit">Registrate ahora</button>
					<div class="login_signup">¿Ya tienes cuenta?<a href="#" id="login"> Inicia sesión</a></div>
				</form>
			</div>
		</div>

		<main class="contenedor1">
			<div class="imagen-principal">
				<?php
				$id = $row['id'];
				$imagen = "img/eventos/img" . $id . ".jpeg";

				if (!file_exists($imagen)) {
					$imagen = "img/eventos/no-foto.png";
				}
				?>
				<img src=<?php echo $imagen ?>>
			</div>
			<div class="informa-evento">
				<div class="row">
					<div class="col-3">
						<figure class="logo-img-evento">
							<?php
							$id = $row['id'];
							$imagen = "img/eventos/img" . $id . ".jpeg";

							if (!file_exists($imagen)) {
								$imagen = "img/eventos/no-foto.png";
							}
							?>
							<img class="icono-evento-img" src=<?php echo $imagen ?>>
						</figure>
					</div>
					<div class="col-6">
						<div class="informacion-del-evento">
							<h2 class="name-info-evento"><?php echo $nombre_evento; ?></h2>
							<ul class="lugar-fecha">
								<li><i class="fa-solid fa-map-location-dot fa-beat"></i><span><?php echo $lugar_evento; ?></span></li>
								<li><i class="fa-solid fa-calendar-days fa-beat"></i><span><?php echo $dia_evento; ?> de <?php echo $mes_evento; ?> del 2023 a de <?php echo $hora_evento; ?> </span></li>
							</ul>
						</div>
					</div>
					<div class="col-3">
						<div class="iconos-especificos">
							<h6>Comparte el evento con tus amigos</h6>
							<div class="redes-social">
								<a href="https://www.facebook.com/SuperboletosMx/" class="fa fa-facebook"></a>
								<a href="https://www.instagram.com/SuperboletosMx/" class="fa fa-instagram"></a>
								<a href="https://twitter.com/SuperboletosMx/" class="fa fa-twitter"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-desc">
				<div class="row">
					<div class="col-md-6 order-md-1">
						<div class="img-escenario">
							<img src="img/escenario.png">
						</div>
					</div>
					<div class="col-md-6 order-md-2">
						<div class="bodycardprec">
							<div class="precio-boleto">
								<h2 class="evento-name"><?php echo $nombre_evento; ?></h2>
								<input type="radio" name="cambio-precio" id="general">
								<input type="radio" name="cambio-precio" id="preferente" checked>
								<input type="radio" name="cambio-precio" id="vip">
								<div class="opcione-precio">
									<label for="general" class="general">General</label>
									<label for="preferente" class="preferente">Preferente</label>
									<label for="vip" class="vip">VIP</label>
									<div class="cambio-precio"></div>
								</div>
								<div class="cards-area">
									<div class="cards">
										<div class="fila fila-1">
											<div class="precioydetalles">
												<span>$<?php echo $boletogen_evento; ?> MNX</span>
												<p>Boletos Disponibles: <?php echo $cantgen_evento; ?></p>
											</div>
											<ul class="privilegios">
												<li><i class="fa-solid fa-xmark fa-beat"></i><span>parking en zona exclusiva</span></li>
												<li><i class="fa-solid fa-xmark fa-beat"></i><span>cocteles y comida gratis</span></li>
												<li><i class="fas fa-check fa-beat"></i><span>Descuento en mercancia (playeras, sudaderas)</span></li>
												<li><i class="fa-solid fa-xmark fa-beat"></i><span>Pase backstage para convivir con los artistas</span></li>
											</ul>
											<diV class="botones-new">
												<div class="boton-cont">
													<button class="btn-cont minus" id="mas" type="button"><i class="fa-solid fa-minus"></i></button>
													<input type="number" value="0" id="contado1" readonly>
													<button class="btn-cont plus" id="menos" type="button"><i class="fa-solid fa-plus"></i></button>
												</div>
											</diV>
											<div class="botones-compra">
												<div class="buttons">
													<button class="btn" type="button" id="btn-comprar-gen">Comprar ahora</button>
												</div>
												<div class="buttons">
													<button class="btn" type="button" id="btn-carrito-gen">Agregar al carrito</button>
												</div>
											</div>
										</div>
										<div class="fila">
											<div class="precioydetalles">
												<span>$<?php echo $boletopref_evento; ?> MNX</span>
												<p>Boletos Disponibles: <?php echo $cantpref_evento; ?></p>
											</div>
											<ul class="privilegios">
												<li><i class="fa-solid fa-xmark fa-beat"></i><span>parking en zona exclusiva</span></li>
												<li><i class="fas fa-check fa-beat"></i><span>cocteles y comida gratis</span></li>
												<li><i class="fas fa-check fa-beat"></i><span>Descuento en mercancia (playeras, sudaderas)</span></li>
												<li><i class="fa-solid fa-xmark fa-beat"></i><span>Pase backstage para convivir con los artistas</span></li>
											</ul>
											<diV class="botones-new">
												<div class="boton-cont">
													<button class="btn-cont minus" id="menos2" type="button"><i class="fa-solid fa-minus"></i></button>
													<input type="number" value="0" id="contado2" readonly>
													<button class="btn-cont plus" id="mas2" type="button"><i class="fa-solid fa-plus"></i></button>
												</div>
											</diV>
											<div class="botones-compra">
												<div class="buttons">
													<button class="btn" type="button" id="btn-comprar-pref">Comprar ahora</button>
												</div>
												<div class="buttons">
													<button class="btn" type="button" id="btn-carrito-pref">Agregar al carrito</button>
												</div>
											</div>
										</div>
										<div class="fila">
											<div class="precioydetalles">
												<span>$<?php echo $boletovip_evento; ?> MNX</span>
												<p>Boletos Disponibles: <?php echo $cantvip_evento; ?></p>
											</div>
											<ul class="privilegios">
												<li><i class="fas fa-check fa-beat"></i><span>parking en zona exclusiva</span></li>
												<li><i class="fas fa-check fa-beat"></i><span>cocteles y comida gratis</span></li>
												<li><i class="fas fa-check fa-beat"></i><span>Descuento en mercancia (playeras, sudaderas)</span></li>
												<li><i class="fas fa-check fa-beat"></i><span>Pase backstage para convivir con los artistas</span></li>
											</ul>
											<diV class="botones-new">
												<div class="boton-cont">
													<button class="btn-cont minus" id="menos3" type="button"><i class="fa-solid fa-minus"></i></button>
													<input type="number" value="0" id="contado3" readonly>
													<button class="btn-cont plus" id="mas3" type="button"><i class="fa-solid fa-plus"></i></button>
												</div>
											</diV>
											<div class="botones-compra">
												<div class="buttons">
													<button class="btn" type="button" id="btn-comprar-vip">Comprar ahora</button>
												</div>
												<div class="buttons">
													<button class="btn" type="button" id="btn-carrito-vip">Agregar al carrito</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<hr>
			<div class="multimedia">
				<div class="row row-cols-2 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-2 p-4">
					<div class="col">
						<div class="titulo-multimedia">
							<h2>Descripcion del evento</h2>
							<p><?php echo $descrip_evento ?></p>
						</div>
					</div>
					<div class="col">
						<div class="titulo-multimedia">
							<h2>Videos</h2>
						</div>
						<diV class="video">
							<?php if (empty($url_evento)) { ?>
								<h2 class="no-found">No se encontró ningun video. :/<h2>
									<?php } else { ?>
										<iframe class="video-evento" src="<?php echo $url_evento ?>" title="<?php echo $nombre_evento ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
									<?php } ?>
						</diV>
					</div>
					<div class="col">
						<div class="titulo-multimedia">
							<h2>Spotify</h2>
						</div>
						<?php if (empty($spotifi_evento)) { ?>
							<h2 class="no-found">No se encontró ninguna lista de spotify. :/<h2>
								<?php } else { ?>
									<iframe class="spotify" src="<?php echo $spotifi_evento ?>" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
								<?php } ?>
					</div>
				</div>
			</div>

		</main>

		<!-- Inicio footer -->
		<footer class="pie-pagina">
			<div class="grupo-1">
				<div class="box">
					<figure>
						<a href="#">
							<img src="img/superboletos.png" alt="Logo">
						</a>
					</figure>
				</div>
				<div class="box">
					<h2>Contactanos</h2>
					<p>servicioalcliente@superboletos.com</p>
					<p>+52 (81) 16251483</p>
				</div>
				<div class="box">
					<h2>SIGUENOS</h2>
					<div class="red-social">
						<a href="https://www.facebook.com/SuperboletosMx/" class="fa fa-facebook"></a>
						<a href="https://www.instagram.com/SuperboletosMx/" class="fa fa-instagram"></a>
						<a href="https://twitter.com/SuperboletosMx/" class="fa fa-twitter"></a>
					</div>
				</div>
			</div>
			<div class="grupo-2">
				<small>&copy; 2023 <b>Super Boletos</b> - Todos los Derechos Reservados.</small>
			</div>
		</footer>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="http://localhost/SuperBoletos/js/script.js"></script>
	<script src="http://localhost/SuperBoletos/js/script2.js"></script>
	<script src="http://localhost/SuperBoletos/js/app.js"></script>
</body>

</html>
