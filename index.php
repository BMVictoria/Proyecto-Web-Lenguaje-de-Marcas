<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Restauracion, decoracion, restauradora, arte, muebles, lamparas, antiguedades, madera, artesania">
    <meta name="author" content="Lydia Guerrero Cáceres">
    <meta name="owner" content="Lydia Guerrero Cáceres">
    <meta name="brand" content="LilaLimón">
    <meta name="robots" content="index,follow"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets\css\styles.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet"> 

    <!-- Ionic Icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Proyecto pagina web</title>
  </head>
  <body>
  <div class=" container-fluid">
    <!-- HEADER-->
    <?php
       include 'php\Header.php';
       ?>
    <!--NAVBAR-->
    <?php
       include 'php\Navbar.php';
       ?>
    <!--CAROUSEL IMAGENES-->
    <div class="row justify-content-center align-self-auto">
      <div id="carouselfotos " class="col-auto carousel slide d-block w-75 justify-content-center align-self-center align-middle" data-ride="carousel">
        <div class="carousel-inner align-self-center align-items-center align-content-center">
          <div class="carousel-item active">
            <img class="d-block w-100 align-self-center" src="assets\imgs\lamparadiseño2.png" alt="Lámparas personalizadas">
            <h2 class=" text-center text-info">Lámparas de diseño</h2>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 align-self-center" src="assets\imgs\marcorestaurado2.png" alt="Muebles restaurados">
            <h2 class=" text-center text-info">Muebles restaurados</h2>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 align-self-center" src="assets\imgs\lamparapersonalizada1.png" alt="Decoración">
            <h2 class=" text-center text-info">Objetos de decoración</h2>
          </div>
        </div>
      </div>
    </div>

    <!--VIDEO-->
    <div class="row justify-content-center">
      <button type="button" data-toggle="modal" data-target="#modalvideo" class=" position-relative d-flex justify-content-center align-items-center border-0 p-0" onclick="showVideo()">
        <div class="play-icon position-absolute bg-dark d-flex rounded-circle align-self-center">
          <i class="icon ion-md-play text-light align-self-center mx-auto"></i>
        </div>
        <img src="assets\imgs\marcorestaurado1.png" class=" img-fluid order-last w-75">
      </button>
      <!-- Modal -->
      <div class="modal fade" id="modalvideo"  role="dialog" tabindex="-1"  aria-labelledby="modalvideoLabel" aria-hidden="true" >
        <div class=" modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header my-0">
              <span onclick="document.getElementById('modalvideo').style.display='none'" class="close">&times;</span>            
              <div class="video-container">
                <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/hwUh8UdXgkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>           
              </div>
            </div>
        </div>
      </div>
    </div>

    <!--SECCION CONTACTO Y SUSCRIPCIÓN-->

    <?php
       include 'php\Footer.php';
       ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--ICONOS-->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <!--CERRAR VIDEO-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="scripts.js"></script>
    <script type="text/javascript"></script>
  </body>
</html>
