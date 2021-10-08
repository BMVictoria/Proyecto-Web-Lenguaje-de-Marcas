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
        </div>  
        <div class="row align-self-center">
            <div class="col-auto">
              <table class="table">
                <tr>
                  <th>
                <div class="flip-card">
                    <div class="flip-card-inner justify-content-center">
                      <div class="flip-card-front flex-fill">
                        <img class="flip-card-img-top" src="assets\imgs\foto nueva.jpg" alt="Card image cap" style="width: 18rem";>
                      </div>
                      <div class="flip-card-back ">
                        <h1>Victoria Bravo</h1>
                        <p>Restauradora de Bienes Culturares</p>
                        <p>Especialidad Bienes Muebles</p>
                      </div>
                    </div>
                </div>
              </th>
              <th>
                <div class="col-auto">
                  <div class="text-container center mt-5">
                    <h2>Te contamos quienes somos</h2>
                    <p>Redacción: Aquí va un poco de nuestra experiencia vital, cv redactado e historia de la empresa
                    </p>
                  </div>
                </div>
              </th>
              </tr>
              </table>
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
</body>
</html>
