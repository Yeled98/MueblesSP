<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head lang="es">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cotiza tus Muebles Soñados | Santiago Portillo | Ciudad de México</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="galeria.php">Galería</a></li>
            <li class="active"><a href="contacto.php">Contacto</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="galeria.php">Galería</a></li>
              <li class="active"><a href="#">Contacto</a></li>
          </ul>
        </div>
      </nav>
      <main class="fondo-contacto">
        <div class="container">
          <div class="section">
            <div class="row hide-on-large-only">
              <div class="col s10 offset-s1">
                <div class="col s10 offset-s1 card hoverable">
                  <div class="card-content">
                    <div class="row">
                      <div class="col s3">
                        <img src="img/gmail.png" alt="gmail" class="circle responsive-img">
                      </div>
                      <div class="col s9">
                        <a href="mailto:santiagoportillo006@gmail.com" class="blue-text accent-2">santiagoportillo006@gmail.com</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s3">
                        <img src="img/whatsapp.png" alt="whatsapp" class="circle responsive-img">
                      </div>
                      <div class="col s9">
                        <a href="tel:+525574000017" class="blue-text accent-2">+52 5574000017</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s3">
                        <img src="img/telefono.png" alt="oficina" class="circle responsive-img">
                      </div>
                    <div class="col s9">
                      <a href="tel:62818055" class="blue-text accent-2">62818055</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="col l7 offset-l1 s10 offset-s1">
                <div class="card hoverable">
                  <div class="card-content">
                    <form action="enviar.php" method="post">
                      <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate" name="nombre" required>
                        <label for="icon_prefix">Nombre</label>
                      </div>
                      <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="tel" class="validate" name="telefono" required>
                        <label for="icon_telephone">Teléfono</label>
                      </div>
                      <div class="input-field">
                        <i class="material-icons prefix">mail</i>
                        <input id="icon_mail" type="email" class="validate" name="email" required>
                        <label for="icon_mail">E-mail</label>
                      </div>
                        <div class="input-field">
                          <i class="material-icons prefix">check</i>
                          <select name="trabajo" required>
                              <option value="">Seleccione una opción</option>
                              <option value="1">Clóset</option>
                              <option value="2">Cocina Integral</option>
                              <option value="3">Comedor</option>
                              <option value="4">Mueble de Baño</option>
                              <option value="5">Otros</option>
                          </select>
                          <label>Trabajo</label>
                        </div>
                        <div class="input-field">
                          <i class="material-icons prefix">mode_edit</i>
                          <textarea id="icon_prefix2" type="text" class="validate materialize-textarea" name="mensaje" required></textarea>
                          <label for="icon_prefix2">Mensaje</label>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit">Enviar
                        <i class="material-icons right">send</i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col l4 hide-on-med-and-down">
                <div class="col l10 offset-l1 card hoverable">
                  <div class="card-content">
                    <div class="row">
                      <div class="col l3">
                        <img src="img/gmail.png" alt="gmail" class="circle responsive-img">
                      </div>
                      <div class="col l9">
                        <a href="mailto:santiagoportillo006.com" class="blue-text accent-2">santiagoportillo006@gmail.com</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col l3">
                        <img src="img/whatsapp.png" alt="whatsapp" class="circle responsive-img">
                      </div>
                      <div class="col l9">
                        <a href="tel:+525574000017" class="blue-text accent-2">+52 5574000017</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col l3">
                        <img src="img/telefono.png" alt="oficina" class="circle responsive-img">
                      </div>
                    <div class="col l9">
                      <a href="tel:62818055" class="blue-text accent-2">62818055</a>
                    </div>
                  </div>
                </div>
              </div>
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
    <script type="text/javascript"> $(document).ready(function() {
      $('select').material_select();
    });</script>
</html>
