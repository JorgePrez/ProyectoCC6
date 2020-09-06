<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Enviar Tienda</title>
      <link rel="stylesheet" href="css/estilos.css">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
      <!-- Core theme CSS con Bootstrap-->
      <link href="css/styles.css" rel="stylesheet" /> 
   </head>
   <body id="page-top">
      <header class="masthead">
         <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
               <div class="col-lg-10 align-self-end">
                     <h2 class="text-uppercase text-white font-weight-bold">La tienda fue Ingresada Correctamente</h2>
                     <hr class="divider my-4" />
               </div>
               <!--------------------------------------------------------------------->
               <div class="row" >
                  <?php
                  $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                  if (!$conn){
                     die("PostgreSQL connection failed");
                  }
                  //echo "PostgreSQL connected succesfully";
                  $codigotienda = $_POST['codigotienda'];
                  $nombretienda = $_POST['nombretienda'];
                  $query = "INSERT INTO tienda VALUES ('$codigotienda','$nombretienda');";
                  $result = pg_query($conn, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                  $tuplasaafectadas = pg_affected_rows($result);
                  //echo $tuplasaafectadas . " datos registrados correctamente.\n"; 
                  pg_free_result($result);
                  pg_close($conn);
                  ?>
               </div>
               <!--------------------------------------------------------------------->
               <center> <h4> <a href="administracion.html">-  Regresar a Menu Administrativo</a> </h4> </center>
            </div>
         </div>
      </header>
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>

