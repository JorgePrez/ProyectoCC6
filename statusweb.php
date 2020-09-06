<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Status</title>
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
                <a class="btn btn-outline-danger my-2 my-sm-0"  href="index2.html">Cotizar</a>
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

        <h2 class="text-uppercase font-weight-bold">
          <?php
                $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                if (!$conn){
                    die("PostgreSQL connection failed");
                }
                $orden=$_GET["numeroorden"];
                $statusreal=0;

                $query="select numerostatus from orden where numeroorden='$orden'";
                $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());
                while ($row = pg_fetch_row($result)) {
                 $statusreal=$row[0];
                }
                $rows = pg_num_rows($result);


                if($rows==0){

                  $query2="select numerostatus from ordenes where numeroorden='$orden'";
                  $result2 = pg_query($conn, $query2) or die('ERROR : ' . pg_last_error());
                  while ($row = pg_fetch_row($result2)) {
                   $statusreal=$row[0];
                  }


                }




                echo "Estado de la orden: $orden";

                ?>
                </h2>
              <hr class="divider my-4" />

              <div id="main-container"> 
                <h3>

                <?php


                if($statusreal==1){
                echo "<div class='progress'>";
                echo "<div class='progress-bar bg-success' role='progressbar' style='width: 20%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>Orden Nueva</div>";
                echo "</div>";
                }
                if($statusreal==2){
                  echo "<div class='progress'>";
                  echo "<div class='progress-bar bg-danger' role='progressbar' style='width: 40%' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'>Surtiendose</div>";
                  echo "</div>";
                } 
                if($statusreal==3){
                  echo "<div class='progress'>";
                  echo "<div class='progress-bar bg-primary' role='progressbar' style='width: 60%' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100'>Empacandose</div>";
                  echo "</div>";
                } 
                if($statusreal==4){
                  echo "<div class='progress'>";
                  echo "<div class='progress-bar bg-warning' role='progressbar' style='width: 80%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'>En Ruta</div>";
                  echo "</div>";
                } 
                if($statusreal==5){
                  echo "<div class='progress'>";
                  echo "<div class='progress-bar bg-success' role='progressbar' style='width: 100%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'>Entregada</div>";
                  echo "</div>";
                }  
           
            

                
                ?>
                        
                 

                </h3>
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