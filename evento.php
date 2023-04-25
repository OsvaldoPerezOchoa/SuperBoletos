<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Super Boletos</title>
	<link rel="stylesheet" href="style/style.css">
	<script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

	<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html"><img src="img/superboletos.png" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown ">
						<a class="nav-link dropdown-toggle rounded  text-white" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="true">
							Lugar Del Evento
						</a>
						<ul class="dropdown-menu bg-primary">
							<li><a class="dropdown-item text-white" href="listaeventos.html">Queretaro</a></li>
							<li><a class="dropdown-item text-white" href="listaeventos.html">Sinaloa</a></li>
							<li><a class="dropdown-item text-white" href="listaeventos.html">Zacatecas</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle rounded text-white" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="true">
							Tipo de Evento
						</a>
						<ul class="dropdown-menu bg-primary">
							<li><a class="dropdown-item text-white" href="listaeventos.html">Concierto</a></li>
							<li><a class="dropdown-item text-white" href="listaeventos.html">Festival</a></li>
							<li><a class="dropdown-item text-white" href="listaeventos.html">Palenque</a></li>
							<li><a class="dropdown-item text-white" href="listaeventos.html">Exposicion</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link rounded text-white" aria-current="page" href="login.html">Iniciar Sesión</a>
					</li>
					<li class="nav-item">
						<a class="nav-link rounded text-white" aria-current="page" href="#">Contactanos</a>
					</li>
				</ul>
				<form class="d-flex w-25" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn btn-outline-light" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>

	<div id="carouselExampleIndicators" class="carousel slide">
		<div class="carousel-inner">
			<div class="carousel-item active d-item">
				<img src="img/img1.jpeg" class="d-block w-100 d-img" alt="slider1">
				<div class="carousel-caption top-0 mt-4">
					<h3 class="mt-5 display-1 fw-bolder text-capitalize">Festival City</h3>
					<h4>Corregidora, Queretaro</h4>
					<h5>27 de Mayo del 2023</h5>
					<a href="#" target="_blank">
						<button class="btn btn-primary px-4 py-2 fs-5 mt-5">Ir al evento</button>
					</a>
				</div>
			</div>
	</div>

	

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



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</body>

</html>