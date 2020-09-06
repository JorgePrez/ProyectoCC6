<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enviado</title>
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
    <style>
      h1{text-align: center;}
      .fila{
          border: 3px solid blue;
          background-color:white;
          margin-bottom: 15px;
      }
      .fila2{
          border: 3px solid blue;
          background-color:lightblue;
          margin-bottom: 15px;
          height: 180px;
      }
      .columna{
          background-color:lightgreen;
          border: 2px solid green;
          padding: 10px;
      }

    
     


 </style>
    <header class="masthead" >
      <div class="container h-100">

        <div class="row fila justify-content-around">

          <div class="col sm-12">

    
          
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <img src="/webimages/1.jpg" alt="">
          </a>
           <!--   <a class="navbar-brand" href="#">Express-Exces</a>   -->

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <!--  <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>       <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li> 
              <li class="nav-item">

              <li class="nav-item">
                <!--<a class="nav-link" href="#">Realizar Envio</a> -->
                <!--<a class="btn btn-primary btn-xl js-scroll-trigger" href="index2.html">Cotizar Envio</a> -->
                <a class="btn btn-outline-warning my-2 my-sm-0"  href="index2.html">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>       
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li> 
              <li>
                <!--<a class="nav-link" href="#">Realizar Envio</a> -->
                <!--<a class="btn btn-primary btn-xl js-scroll-trigger" href="index2.html">Cotizar Envio</a> -->
                <a class="btn btn-outline-danger my-2 my-sm-0"  href="cotizarweb.php">Cotizar</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>       <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li> 

              <li class="nav-item">
                <!--<a class="nav-link" href="#">Realizar Envio</a> -->
                <a class="btn btn-outline-info my-2 my-sm-0"  href="index2.html">Realizar Envio</a>
              </li>

         
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>  <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>  <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>  <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li> 
              </li>  <li class="nav-item">
               <a class="nav-link" href="#"></a>
              </li> 
               </li>  <li class="nav-item">
               <a class="nav-link" href="#"></a>
               </li> 
            <!--  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
               -->
              
            </ul>
            <!--  action="status.php" method="get"-->
            <form class="form-inline my-2 my-lg-0" action="statusweb.php" method="get">
              <input class="form-control mr-sm-2" name="numeroorden" type="text" placeholder="Numero-de-Orden" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rastrear</button>
            </form>
          </div>
        </nav>
      </div>

    </div>


    <div class="row fila align-items-center justify-content-center text-center">

    

      <div class="col sm-12">

      <h2 class="text-uppercase font-weight-bold"></h2>

        <h2 class="text-uppercase font-weight-bold">Orden Realizada Correctamente</h2>
 
          <?php

               $origen=$_GET["origen"];	
               $destino=$_GET["destino"];	
               $pago=$_GET["pago"];	
               $precio=$_GET["preciotrue"];
               $destinatario=$_GET["destinatario"];
               $destinatariodir=$_GET["destinatariodir"];
               $remitente=$_GET["remitente"];
               $remitentedir=$_GET["remitentedir"];


                $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                if (!$conn){
                    die("PostgreSQL connection failed");
                }
                $numeroorden=0;
                $ordenmayor=0;
                $query="select max(numeroorden) from orden";
                $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());
                while ($row = pg_fetch_row($result)) {
                 $ordenmayor=$row[0];
                }
                $aleatorio=(random_int(1, 200));
                $numeroorden=$ordenmayor+$aleatorio;
               
                ?>
              <hr class="divider my-4" />

              <?php
              echo "<h2 class='text-uppercase font-weight-bold'>El numero de su orden es: $numeroorden</h2>";
              echo "<h2 class='text-uppercase font-weight-bold'>Con este numero puede rastrearlo</h2>";

              $query = "INSERT INTO ordenes VALUES ('$numeroorden','$destinatario','$destinatariodir','$remitente','$remitentedir',$precio,1,'$origen','$destino');";
              $result = pg_query($conn, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
              $tuplasaafectadas = pg_affected_rows($result);
              //echo $tuplasaafectadas . " datos registrados correctamente.\n"; 
               pg_free_result($result);
            
                pg_close($conn);
              ?>


              <div class="row align-items-center justify-content-center text-center">


             
              
           


      </div>


      <div class="col-12 justify-content-center">
                  <h2></h2>  
              </div>



      <div class="col-12 justify-content-center">
                  <h2>Comunicate ante cualquier incoveniente</h2>  
              </div>

               
              <div class="col-12 justify-content-center">
                  <h2> PBX:2240-5063</h2>  
              </div>
           

              
            





      </div>


    </div>



    
    </header>
    <!-- Optional JavaScript -->
    <script src="js/validacion.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>