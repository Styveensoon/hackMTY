<doctype html>
<html lang="esp" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Casa</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      /* Estilo general para el contenedor del texto */
      /* Estilo general para el contenedor del texto */
.animated-text {
  font-size: 3rem;
  font-weight: 300;
  color: #333; /* Puedes cambiar el color según tu preferencia */
  position: relative;
  display: inline-block;
  overflow: hidden;
  white-space: nowrap;
  border-right: .15em solid #333; /* Color del cursor parpadeante */
  animation: typing 4s steps(30, end), blink-caret .75s step-end infinite;
}

/* Animación de escritura */
@keyframes typing {
  from { width: 0; }
  to { width: 100%; }
}

/* Animación de parpadeo del cursor */
@keyframes blink-caret {
  from, to { border-color: transparent; }
  50% { border-color: #333; }
}
.card-img-top {
            transition: transform 0.5s, box-shadow 0.5s;
        }
        .card-img-top:hover {
            transform: rotateY(10deg) rotateX(10deg);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }
        .btn-custom {
            background-color: #2991 ; /* Cambia el color de fondo */
            color: #000; /* Cambia el color del texto */
            border: 2px solid #007bff; /* Cambia el color del borde */
            transition: all 0.3s ease; /* Transición suave para hover */
        }
        .btn-custom:hover {
            background-color: #0056b3; /* Cambia el color de fondo al pasar el mouse */
            border-color: #0056b3; /* Cambia el color del borde al pasar el mouse */
            color: #fff; /* Asegúrate de que el color del texto siga siendo blanco */
        }
        .btn-custom:active {
            background-color: #004085; /* Cambia el color de fondo al hacer clic */
            border-color: #004085; /* Cambia el color del borde al hacer clic */
            box-shadow: none; /* Elimina la sombra de enfoque */
        }
        /* Estilos para la barra de navegación */
.navbar {
  margin-bottom: 20px;
}

.navbar-brand {
  font-weight: bold;
}

.navbar-nav .nav-link {
  color: #555 !important;
}

.navbar-nav .nav-link.active {
  color: #007bff !important;
}

.navbar-light .navbar-nav .nav-link {
  color: #007bff;
}

.navbar-light .navbar-nav .nav-link:hover {
  color: #0056b3;
}

.navbar-toggler {
  border-color: #007bff;
}

.navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='%23333' stroke-width='2' d='M4 6h22M4 15h22M4 24h22'/%3E%3C/svg%3E");
}
    </style>

    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <header data-bs-theme="dark">
      <nav class="navbar navbar-expand-md fixed-top" style="background-color: #000000; color: #ffffff;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: #ffffff;">
            <img src="/img/icono3.jpeg" alt="Icono" style="width: 60px; height: 64px; margin-right: 64px;">
            C H E C K M A T E
          </a>        
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <!-- Agregamos el botón de perfil -->
          <div class="d-none d-md-block ml-auto">
            <a href="/HackMTY/resources/views/perfil.html" class="btn btn-outline-light">Ver Perfil</a>
          </div>
        </div>
      </nav>
    </header>
    
        
   

    <main>
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <br>
            <br>
            <h1 class="fw-light animated-text">S E R V I C I O S</h1>
          </div>
        </div>
    </section>
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
  
          <div class="container mt-3">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                  <div class="card shadow-sm">
                      <img src="/img/dispositivo4.png" class="card-img-top" alt="Thumbnail">
                      <div class="card-body">
                          <p class="card-text">Rastreo tus dispositivos y conoce los beneficios</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-custom">INICIAR</button>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                      <div class="col">
                          <div class="card shadow-sm">
                              <img src="/img/rastreo2.png" class="card-img-top" alt="Thumbnail">
                              <div class="card-body">
                                  <p class="card-text">Conoce tus dispositivos y conoce los servicios que te ofrecemos</p>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-custom">INICIAR</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card shadow-sm">
                              <img src="/img/icono.png" class="card-img-top" alt="Thumbnail">
                              <div class="card-body">
                                  <p class="card-text">Descubre nuestros servicios y encuentra la solución perfecta para ti.</p>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-custom">INICIAR</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
<script src="/resources/js/bootstrap.bundle.min.js"></script>
<script src="/resources/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="/js/sidebars.js"></script></body>

    </body>
</html>
