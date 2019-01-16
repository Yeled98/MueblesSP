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
        <link rel="help" href="prueba.php">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>
      <nav class="indigo darken-4">
        <div class="container">
          <div class="nav-wrapper">
            <a href="index.php" class="hide-on-med-and-down"> <img src="img/Logo-SP.png" class="responsive-img logo"></a>
            <a href="index.php" class="brand-logo hide-on-large-only left"> <img src="img/Logo-SP.png" class="responsive-img log"></a>
            <a href="index.php" class="texto hide-on-med-and-down lo">Santiago Portillo</a>
            <a href="index.php" class="brand-logo hide-on-large-only center mini">Santiago Portillo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse right logo"><i class="material-icons">list</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a  href="index.php">Inicio</a></li>
            <li class="active"><a href="galeria.php">Galería</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a  href="index.php">Inicio</a></li>
              <li class="active"><a href="#">Galería</a></li>
              <li><a href="contacto.php">Contacto</a></li>
          </ul>
        </div>
      </nav>
      <main>
        <div class="section">
          <div class="row">
            <h1 class="center">Comedores</h1>
            <div class="container row">
              <div class="card hoverable col l2 s10 offset-s1">
                <div class="card-image">
                  <img class="materialboxed" height="275" alt="Comedor" data-caption="Closet pequeño con finos detalles"  src="img/comedor.jpg">
                </div>
              </div>
              <!--<div class="card hoverable col l2 offset-l1 s10 offset-s1">
                <div class="card-image">
                  <img class="materialboxed" height="275" alt="Clóset" data-caption="Closet amplio con muchos compartimentos"  src="img/fondo3.jpg">
                </div>
              </div>
              <div class="card hoverable col l2 offset-l1 s10 offset-s1">
                <div class="card-image">
                  <img class="materialboxed" height="275" alt="Clóset" data-caption="Closet amplio con muchos compartimentos"  src="img/closet-blanco.jpg">
                </div>
              </div>
              <div class="card hoverable col l2 offset-l1 s10 offset-s1">
                <div class="card-image">
                  <img class="materialboxed" height="275" alt="Clóset" data-caption="Closet amplio con muchos compartimentos"  src="img/closet-madera.jpg">
                </div>
              </div>-->
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
                  <li><a class="grey-text text-lighten-3" href="closets.php">Clósets</a></li>
                  <li><a class="grey-text text-lighten-3" href="cocinas-integrales.php">Cocinas Integrales</a></li>
                  <li><a class="grey-text text-lighten-3" href="comedores.php">Comedores</a></li>
                  <li><a class="grey-text text-lighten-3" href="muebles-de-baño.php">Muebles de Baño</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    </body>
    <script src="js/jQuery.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>$(".button-collapse").sideNav();</script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.materialboxed');
      var instances = M.Materialbox.init(elems, options);
      });
    </script>
</html>
