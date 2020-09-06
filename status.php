

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Status</title>
    <link rel="stylesheet" href="css/other.css"> 
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS con Bootstrap-->
    <link href="css/styles.css" rel="stylesheet" />      
  </head>
  <body id="page-top">
    <header class="">
      <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
              <div class="col-lg-10 align-self-end">
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
              </div>
              <!--------------------------------------------------------------------->
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
              <!--------------------------------------------------------------------->
              <?php
              echo "<div class='col-12 justify-content-center'>";
              echo "<div class='col-12  d-flex justify-content-center align-items-center'>";
                  
              echo "<form action='/statussiguiente.php' method='get'>";
              if($statusreal!=5){
              echo "<button class='btn btn-primary btn-xl js-scroll-trigger' name=numeroorden value=$orden type='submit'>Actualizar estado</button>";  
            }  
               
                echo "</form>";
                ?>

                  
                  </div>
              </div>


              <div class="col-12 justify-content-center">
                  ---------------------------------  
               
              </div>


              
              
              <div class="col-12 justify-content-center">
                  <a href="administracion.html">-   Menu Administrativo</a>  
              </div>

             
            </div>
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