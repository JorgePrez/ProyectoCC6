

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Listado Ordenes</title>
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

                    echo "Listado de ordenes del courrier";

                    ?>
                    </h2>
                  <hr class="divider my-4" />
              </div>
              <!--------------------------------------------------------------------->
              <div id="main-container"> 
                <h3>
                  <table border=1>
                    <thead class="thead-dark">
                      <tr>
                        <th><b>No. Orden</b></th>
                        <th><b>Destinatario</b></th>
                        <th><b>Dirección</b></th>
                        <th><b>Remitente</b></th>
                        <th><b>Dirección</b></th>
                        <th><b>Costo</b></th>
                        <th><b>Origen</b></th>
                        <th><b>Destino</b></th>
                        <th><b>Status</b></th>


                      </tr>
                    </thead>
                    <?php
                    $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                    if (!$conn){
                        die("PostgreSQL connection failed");
                    }
                    $query = "select * from orden order by numeroorden";
                    $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());
                    $numeroorden = 0;
                    $destinatario = 0;
                    $remitente=0;
                    $direccion = 0;
                    $precio = 0.0;
                    $costo=0.0;
                    $destino=0;


                    while ($row = pg_fetch_row($result)) {
                      $numeroorden= $row[0];
                      $destinatario= $row[1];
                      $direccion=$row[2];
                      $remitente=$row[3];
                      $precio=$row[4];
                      $status=$row[5];
                      $origen=$row[6];
                      if($origen==null){
                           $origen='N/A';
                       }
                      $destino=$row[7];



                      echo "\t<tr>\n";
                      echo "\t\t<td>$numeroorden</td>\n";
                      echo "\t\t<td>$destinatario</td>\n";
                      echo "\t\t<td>$direccion</td>\n";
                      echo "\t\t<td>$remitente</td>\n";
                      echo "\t\t<td>En tienda</td>\n";
                      echo "\t\t<td>$precio</td>\n";
                      echo "\t\t<td>En tienda</td>\n";
                      echo "\t\t<td>$destino</td>\n";
                     



                  
                      if($status == 0){
                        echo "\t\t<td>Cancelada</a></td>\n";

                      }
                      else if($status==5) {
                          echo "\t\t<td>Entregada</a></td>\n";
                      }
                      else{
                        echo "\t\t<td><a href=status.php?numeroorden=$numeroorden>Ver Status/Modificar</a></td>\n";
                      }

                      if($status == 5){
                        echo "\t\t<td><a href=eliminarorden.php?codigo=$numeroorden>Eliminar</a></td>\n";
                    }
                    else {
                        echo "\t\t<td>Eliminar</a></td>\n";
                    }
                      echo "\t</tr>\n";
                    }
                    pg_free_result($result);



                       
                    $query2 = "select * from ordenes order by numeroorden";
                    $result2 = pg_query($conn, $query2) or die('ERROR : ' . pg_last_error());
                    $numeroorden = 0;
                    $destinatario = 0;
                    $direcciondestinatario=0;
                    $remitente=0;
                    $direccionremitente = 0;
                    $costo = 0.0;
                    $origen=0.0;
                    $destino=0;
                    $status=0;
                    
                    while ($row = pg_fetch_row($result2)) {
                      $numeroorden= $row[0];
                      $destinatario= $row[1];
                      $direcciondestinatario=$row[2];
                      $remitente=$row[3];
                      $direccionremitente=$row[4];
                      $precio=$row[5];
                      $status=$row[6];
                      $origen=$row[7];
                      $destino=$row[8];



                      echo "\t<tr>\n";
                      echo "\t\t<td>$numeroorden</td>\n";
                      echo "\t\t<td>$destinatario</td>\n";
                      echo "\t\t<td>$direcciondestinatario</td>\n";
                      echo "\t\t<td>$remitente</td>\n";
                      echo "\t\t<td>$direccionremitente</td>\n";
                      echo "\t\t<td>$precio</td>\n";
                      echo "\t\t<td>$origen</td>\n";
                      echo "\t\t<td>$destino</td>\n";
                     



                  
                      if($status == 0){
                        echo "\t\t<td>Cancelada</a></td>\n";

                      }
                      else if($status==5) {
                          echo "\t\t<td>Entregada</a></td>\n";
                      }
                      else{
                        echo "\t\t<td><a href=status.php?numeroorden=$numeroorden>Ver Status/Modificar</a></td>\n";
                      }

                      if($status == 5){
                        echo "\t\t<td><a href=eliminarorden.php?codigo=$numeroorden>Eliminar</a></td>\n";
                    }
                    else {
                        echo "\t\t<td>Eliminar</a></td>\n";
                    }
                      echo "\t</tr>\n";
                    }

                    pg_free_result($result2);





                    pg_close($conn);
                    ?>

                  </table>
                </h3>
              </div> 
              <!--------------------------------------------------------------------->
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