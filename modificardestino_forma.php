<?php
  $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
  if (!$conn){
      die("PostgreSQL connection failed");
  }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Modificar Destino</title>
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
                        <h2 class="text-uppercase text-white font-weight-bold">Modificar Destino</h2>
                        <hr class="divider my-4" />
                    </div>
                    <!--------------------------------------------------------------------->
                    <div class="col-12  d-flex justify-content-center">
                        <form id="form2" id=cuadro1 action="modificarcosto.php" method="get" class="needs-validation" novalidate>
                            <div class="row" >
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="numero">Codigo Postal:</label> </h2>   
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">                                       
                                    <?php                                        
                                    $codigopostal=$_GET["numero"];	   
                                    echo "<h3>$codigopostal</h3>\n";
                                    echo "<input type=hidden class=form-control name=codigopostal value=$codigopostal required>\n";
                                    $query2 = "select * from ciudad where codigopostal=$codigopostal";
                                    $result2 = pg_query($conn, $query2) or die('ERROR : ' . pg_last_error());
                                    
                                    $nombre=0;
                                    $costo=0;
                                    while ($row = pg_fetch_row($result2)) {                                                
                                        $nombre= $row[1];
                                        $costo= $row[2];
                                    }                                                
                                    ?>
                                    <div class="valid-feedback">!Es válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>    
                                </div>

                            

                            </div> 


                            <div class="row" >
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="nombre">Nombre:</label> </h2>   
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">                                       
                                    <?php                                        
                                    echo "<h3>$nombre</h3>\n";
                                    echo "<input type=hidden class=form-control name=nombre value=$nombre required>\n";
                                                                      
                                    ?>
                                    <div class="valid-feedback">!Es válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>    
                                </div>

                            

                            </div> 

                            <div class="row" >
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="costo">Costo :</label> </h2>  
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">
                                    <?php                                               
                                    echo "<input type=text name=costo  class=form-control id=nombre value=$costo length=20><br>\n";                                                
                                    ?>
                                    <div class="valid-feedback">!Es válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>    
                                </div>
                            </div>

                            


                            <div class="row" >
                                <div class="col-12  d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit">Modificar Costo</button>    
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--------------------------------------------------------------------->
                    <div class="col-12 justify-content-center">
                        <a href="administracion.html">-   Menu Administrativo</a>  
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