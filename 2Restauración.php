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
    <div id="restauracion" class="row align-content-center">
      <div class="table-responsive align-self-center align-middle align-content-center" style="width:100%";></div>
        <tr class=" card-deck align-middle align-content-center">
            <div class="card align-content-center" style="width: 18rem;">
              <img class="card-img-top" src="assets\imgs\obrapictorica1.png" alt="Card image cap" style="width: 18rem";>
              <div class="card-body">
                <h5 class="card-title">Producto</h5>
                <p class="card-text">Descripción de producto</p>
                <a href="#" class="btn btn-primary" style="color: lightcoral">Comprar</a>
              </div>
            </div>
            <div class="card align-content-center" style="width: 18rem;">
              <img class="card-img-top" src="assets\imgs\marcorestaurado1.png" alt="Card image cap" style="width: 18rem";>
              <div class="card-body">
                <h5 class="card-title">Producto</h5>
                <p class="card-text">Descripción de producto</p>
                <a href="#" class="btn btn-primary" style="color: lightcoral;"><strong>Comprar</strong></a>
              </div>
            </div>
        </tr>
    </div>
  </div>
  <div id="restauracion" class="row align-content-center">
      <div class="table-responsive align-self-center align-middle align-content-center" style="width:100%";></div>
        <tr class=" card-deck align-middle">
          <div class="card align-content-center" style="width: 18rem;">
            <img class="card-img-top" src="assets\imgs\marcorestaurado2.png" alt="Card image cap" style="width: 18rem";>
            <div class="card-body">
              <h5 class="card-title">Producto</h5>
              <p class="card-text">Descripción de producto</p>
              <a href="#" class="btn btn-primary" style="color: lightcoral">Comprar</a>
            </div>
          </div>
          <div class="card align-content-center" style="width: 18rem;">
            <img class="card-img-top" src="assets\imgs\marcorestaurado3.png" alt="Card image cap" style="width: 18rem";>
            <div class="card-body">
              <h5 class="card-title">Producto</h5>
              <p class="card-text">Descripción de producto</p>
              <a href="#" class="btn btn-primary" style="color: lightcoral;">Comprar</a>
            </div>
          </div>
      </tr>
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
</body>
</html>
