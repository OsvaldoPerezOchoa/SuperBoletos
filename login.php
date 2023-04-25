<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
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
                        <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
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
                        <a class="nav-link  text-white" aria-current="page" href="login.html">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" aria-current="page" href="#">Contactanos</a>
                    </li>
                </ul>
                <form class="d-flex w-25" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <div class="bakc col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                >
                <div class="featured-image mb-3">
                    <img src="img/conciertos-2023-mexico.jpeg" class="img-fluid">
                </div>
                <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Descubre millones de eventos, recibe alertas de tus artistas 
                    favoritos, equipos, obras de teatro y más.</small>
            </div>

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Bienvenido</h2>
                        <p>Melodías sin fronteras, encuentra tu próximo festival aquí</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Correo Electronico">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Contraseña">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Rcordarme</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">¿Olvidaste tu Contraseña?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Iniciar Sesión</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px"
                                class="me-2"><small>Inicia con una cuenta Google</small></button>
                    </div>
                    <div class="row">
                        <small>¿No Tienes Cuenta? <a href="#">Registrate</a></small>
                    </div>
                </div>
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