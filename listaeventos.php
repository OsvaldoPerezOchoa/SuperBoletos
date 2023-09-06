<?php
require 'database/connect.php';
require 'database/key.php';

$db = new Database();
$conn = $db->connect();

$tipo_evento = isset($_GET["tipoevento"]) ? $_GET["tipoevento"] : '';
$busqueda =  isset($_GET["busqueda"]) ? $_GET["busqueda"] : '';
$busquedaini =  isset($_GET["busquedaini"]) ? $_GET["busquedaini"] : '';

if ($tipo_evento == "" and $busqueda == "" and $busquedaini == "") {
	$sql = $conn->prepare("SELECT * FROM evetos WHERE activo=1");
	$sql->execute();
	$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
} elseif ($busqueda != "") {
	$sql = $conn->prepare("SELECT * FROM evetos WHERE  nombre_evento LIKE '%$busqueda%' or 	tipo_evento LIKE '%$busqueda%' or lugar_evento LIKE '%$busqueda%' and activo=1");
	$sql->execute();
	$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
} elseif ($busquedaini != "") {
	$sql = $conn->prepare("SELECT * FROM evetos WHERE  nombre_evento LIKE '%$busquedaini%' or 	tipo_evento LIKE '%$busquedaini%' or lugar_evento LIKE '%$busquedaini%' and activo=1");
	$sql->execute();
	$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
	$sql = $conn->prepare("SELECT * FROM evetos WHERE tipo_evento LIKE '%$tipo_evento%' and activo=1");
	$sql->execute();
	$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
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
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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
			<li><a class="btn-form" id="form-open"><i class="fa-solid fa-user fa-beat"></i> Iniciar sesión</a></li>
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
	div id="carouselExampleIndicators" class="carousel slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active d-item">
					<img src="img/eventos/img1.jpeg" class="d-block w-100 d-img" alt="slider1">
					<div class="carousel-caption top-0 mt-4">
						<h3 class="mt-5 display-1 fw-bolder text-capitalize">Festival City</h3>
						<h4>Corregidora, Queretaro</h4>
						<h5>27 de Mayo del 2023</h5>
						<a href="evento.php?id=1" target="_blank">
							<button class="btn btn-primary px-4 py-2 fs-5 mt-5">Ir al evento</button>
						</a>
					</div>
				</div>

				<div class="carousel-item  d-item">
					<img src="img/eventos/img2.jpeg" class="d-block w-100 d-img" alt="slider1">
					<div class="carousel-caption top-0 mt-4">
						<h3 class="mt-5 display-1 fw-bolder text-capitalize">Pachuca Rock</h3>
						<h4>Pachuca, Hidalgo</h4>
						<h5>29 de Abril del 2023</h5>
						<a href="evento.php?id=2" target="_blank">
							<button class="btn btn-primary px-4 py-2 fs-5 mt-5">Ir al evento</button>
						</a>
					</div>
				</div>

				<div class="carousel-item  d-item">
					<img src="img/eventos/img3.jpeg" class="d-block w-100 d-img" alt="slider1">
					<div class="carousel-caption top-0 mt-4">
						<h3 class="mt-5 display-1 fw-bolder text-capitalize">Note Va a Gustar</h3>
						<h4>León, Guanajuato</h4>
						<h5>27 de Mayo del 2023</h5>
						<a href="evento.php?id=3" target="_blank">
							<button class="btn btn-primary px-4 py-2 fs-5 mt-5">Ir al evento</button>
						</a>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

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
			<div id="conten-buscadorb">
				<h2>Buscar Eventos</h2>
				<form action="" method="get">
					<input type="text" name="busqueda" placeholder="Buscar evento por nombre, tipo, ciudad">
					<button type="submit" formaction="listaeventos.php"><i class="fa fa-search"></i></button>
				</form>
				<form action="" method="get">
					<div id="buttons">
						<button class="button-value" name="tipoevento" value="">Todos</button>
						<button class="button-value" name="tipoevento" value="Concierto">Concierto</button>
						<button class="button-value" name="tipoevento" value="Festival">Festival</button>
						<button class="button-value" name="tipoevento" value="Teatro">Teatro</button>
						<button class="button-value" name="tipoevento" value="Stand-up">Stand-up</button>
						<button class="button-value" name="tipoevento" value="Comida">Comida</button>
						<button class="button-value" name="tipoevento" value="Conferencia">Conferencia</button>
					</div>
				</form>
			</div>

			<br>

			<div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-2 p-4">
				<?php if (empty($resultado)) { ?>
					<h2 class="no-found">No se encontró ninguna coincidencia.<h2>
							<?php } else {
							foreach ($resultado as $row) { ?>
								<div class="col">
									<div class="carousel__elemento">
										<div class="card-abajo">
											<div class="card-custom">
												<?php
												$id = $row['id'];
												$imagen = "img/eventos/img" . $id . ".jpeg";

												if (!file_exists($imagen)) {
													$imagen = "img/eventos/no-foto.png";
												}
												?>
												<div class="card frente">
													<div class="card-img-top">
														<img class="card-img-top" src=<?php echo $imagen ?>>
													</div>
													<div class="card-body">
														<div class="fecha-evento">
															<span class="dia-evento">
																<?php echo $row['dia_evento']; ?>
															</span>
															<span class="mes-evento">
																<?php echo $row['mes_evento']; ?>
															</span>
														</div>
														<div class="descrip-evento">
															<h4 class="nombre-evento">
																<?php echo $row['nombre_evento']; ?>
															</h4>
															<span class="lugar-evento">
																<?php echo $row['lugar_evento']; ?>
															</span>
														</div>
													</div>
													<div class="card-footer">
														<span class="precio-evento">$
															<?php echo $row['boletogen_evento']; ?> MNX ~ $
															<?php echo $row['boletovip_evento']; ?> MNX
														</span>
													</div>
												</div>
												<div class="atras">
													<div class="card-img-top">
														<img class="card-img-top" src=<?php echo $imagen ?>>
													</div>
													<div class="precios-boletos">
														<div class="data">
															<h4 class="name-eventos"><?php echo $row['nombre_evento']; ?></h4>
														</div>
														<div class="boletos-precio">
															<div class="info-gen">
																<h5>General</h5>
																<span>$<?php echo $row['boletogen_evento']; ?> MNX</span>
															</div>
															<div class="info-pref">
																<h5>Preferente</h5>
																<span>$<?php echo $row['boletopref_evento']; ?> MNX</span>
															</div>
															<div class="info-vip">
																<h5>VIP</h5>
																<span>$<?php echo $row['boletovip_evento']; ?> MNX</span>
															</div>
														</div>
														<div class="buttons">
															<a href="evento.php?id=<?php echo $row['id']; ?>" class="btn">Ir al Evento</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						<?php }
						} ?>
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
