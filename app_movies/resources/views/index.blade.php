
{{-- PAGINA PRINCIPAL DE LA APP --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- AGREGAMOS EL ICONO DE LA PAGINA --}}
    <link rel="icon" href="{{asset('img/icono.png')}}">

    {{-- LINKS PARA FUNCIONAMIENTO DEL CARRUSELL DE IMAGENES --}}
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

    {{-- AGREGAMOS CDN DE LIBRERIA DE ANIMACIONES "ANIMATE.CSS" --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    {{-- CDN DE LIBRERIA DE ICONOS DE BOOTSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    {{-- CDN DE BOOTSTRAP Y JQUERY --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
    
    {{-- REFERENCIANDO ARCHIVO style.css DE LA CARPETA CSS DENTRO DE CARPETA PUBLIC --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Yo Quiero Ver - Plataforma de Peliculas</title>
    
    {{-- imagen de la pagina principal y sus configuraciones --}}

    {{-- <style>
        
    </style> --}}
</head>
<body>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
           <div style="width: 40px"> 
          <img src="{{asset('img/icono.png')}}" alt="" width="30px">
           </div>
          <a class="navbar-brand" href="#"> Yo quiero Ver</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Favoritos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Los más vistos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Estrenos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">TV en vivo</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorias
                </a>
                {{-- MENU DE CATEGORIAS DE PELICULAS --}}
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Accion</a></li>
                  <li><a class="dropdown-item" href="#">Animacion Kids</a></li>
                  <li><a class="dropdown-item" href="#">Animes</a></li>
                  <li><a class="dropdown-item" href="#">Aventuras</a></li>
                  <li><a class="dropdown-item" href="#">Ciencia ficcion</a></li>
                  <li><a class="dropdown-item" href="#">Comedia</a></li>
                  <li><a class="dropdown-item" href="#">Crimen</a></li>
                  <li><a class="dropdown-item" href="#">Cristianos</a></li>
                  <li><a class="dropdown-item" href="#">Documentales</a></li>
                  <li><a class="dropdown-item" href="#">Domas</a></li>
                  <li><a class="dropdown-item" href="#">Dramas</a></li>
                  <li><a class="dropdown-item" href="#">Educativos</a></li>
                  <li><a class="dropdown-item" href="#">Familiar</a></li>
                  <li><a class="dropdown-item" href="#">Fantasia</a></li>
                  <li><a class="dropdown-item" href="#">Historia</a></li>
                  <li><a class="dropdown-item" href="#">Misterio</a></li>
                  <li><a class="dropdown-item" href="#">Novelas</a></li>
                  <li><a class="dropdown-item" href="#">Romanticas</a></li>
                  <li><a class="dropdown-item" href="#">Suspenso</a></li>
                  <li><a class="dropdown-item" href="#">Terror</a></li>
                  <li><a class="dropdown-item" href="#">Otros</a></li>
                </ul>
              </li>
            </ul>
            {{-- modificando --}}
            <div class="d-flex">
            {{-- Inicios de sesion --}}
                 <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
            </div>
          </div>
        </div>
      </nav>

{{-- CONTENEDOR DEL TITULO --}}
<div class="container">
    <center>
        <br>
        <h1 class="titulo1 animate__animated animate__slideInDown ">yo quiero ver</h1>

        {{-- BOTONES DE REDES SOCIALES CON ANIMACIONES DE ANIMATE.CSS --}}
        <button class="btn btn-primary btn-lg btn-facebook animate__animated animate__zoomIn animate__delay-1s"><i class="bi bi-facebook"></i></button>
        <button class="btn btn-dafault btn-lg btn-youtube animate__animated animate__zoomIn animate__delay-2s"><i class="bi bi-youtube"></i></button>
        <button class="btn btn-dafault btn-lg btn-whatsaap animate__animated animate__zoomIn animate__delay-3s"><i class="bi bi-whatsapp"></i></button>
        <br><br>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form class="d-flex">
              <label for=""><b style="color: white; font-size:25px; text-shadow: 0.1em 0.1em 0.2em black;"></style>Buscar: </b></label>
              <input class="form-control me-2" type="search" placeholder="Nombre de la pelicula que buscas..." aria-label="Search">
              <button class="btn btn-info" type="submit">
                  <i class="bi bi-search"></i>
              </button>
          </form>
          </div>
          <div class="col-md-3"></div>
        </div>
        
    </center>

</div>
<br><br>

{{-- CONTENEDOR DE IMAGENES DE PELICULAS --}}
<div class="container" style="background-color: #f6f6f6f6 ;border-radius:10px">
    <h3><p style="text-align: center"><b>Los mas vistos</b></p></h3>
    <div class="row">
      <section class="regular slider" style="margin-top: 0px">
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
        <div>
          <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
        </div>
      
      </section>
    </div>
</div>


<br><br>

{{-- CONTENEDOR DE IMAGENES DE PELICULAS --}}
<div class="container" style="background-color: #f6f6f6f6 ;border-radius:10px">
  <h3><p style="text-align: center"><b>Animacion kids</b></p></h3>
  <div class="row">
    <section class="regular slider" style="margin-top: 0px">
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
      <div>
        <img src="https://media.revistagq.com/photos/63e4f125df9a2fddd35516fc/16:9/w_2560%2Cc_limit/peliculas-disney-secuelas-toy-story-frozen.jpg" width="10px" height="200px">
      </div>
    
    </section>
  </div>
</div>

{{-- CONFIGURACIONES DE SLICK,JS --}}
{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" type="text/javascript"></script> --}}

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 6
      });
    });
</script>
{{-- CDN DE JAVASCRIPT --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>