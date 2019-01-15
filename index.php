<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head lang="es">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
      <nav class="indigo darken-4">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#!" class="hide-on-med-and-down"> <img src="img/Logo-SP.png" class="responsive-img logo"></a>
            <a href="#!" class="brand-logo hide-on-large-only left"> <img src="img/Logo-SP.png" class="responsive-img log"></a>
            <a href="#!" class="texto hide-on-med-and-down lo">Santiago Portillo</a>
            <a href="#!" class="brand-logo hide-on-large-only center mini">Santiago Portillo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse right logo"><i class="material-icons">list</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="galeria.php">Galería</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li class="active"><a href="#">Inicio</a></li>
              <li><a href="galeria.php">Galería</a></li>
              <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </nav>
      <main class="fondos">
        <div class="row">
        <div class="carousel col m12">
          <a class="carousel-item" href="#one!"><img src="img/img-carusel.jpg"></a>
          <a class="carousel-item" href="#two!"><img src="img/apertura.jpeg"></a>
          <a class="carousel-item" href="#three!"><img src="img/img-carusel-2.jpeg"></a>
        </div>
        </div>
        <div class="row">
          <div class="col s12 offset-m4 m4">
            <div class="card-panel indigo darken-2 center">
              <span class="white-text">Actualmente en el merdao de muebles solamente encontramos opciones que son de baja calidad y que no priorizan por la experiancia de los clientes, es por ello que nosotros en primer lugar lo que nos interesa es dar el mejor producto a nuestros clientes.</span>
            </div>
          </div>
        </div>
      </main>
      <footer class="page-footer indigo darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Carpintería y Ebanistería</h5>
                <p class="grey-text text-lighten-4">La ebanistería es todo un arte, que pocas personas saben desempeñar a día de hoy.</p>
                <p>Gracias a la herencia de generaciones nosotros brindamos el mejor servicio y nos adecuamos a las necesidades de cada cleinte</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Salas</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Comedores</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Cocinas Integrales</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Puertas</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    </body>
    <script src="js/jQuery.js"></script>
    <script src="js/materialize.min.js"></script>
    <script> $(document).ready(function(){
      $('.carousel').carousel();
    });</script>
    <script>$(".button-collapse").sideNav();</script>
</html>
