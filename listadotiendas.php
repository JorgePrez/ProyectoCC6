<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Listado tiendas</title>
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
                  <h2 class="text-uppercase font-weight-bold">Listado de Tiendas</h2>
                  <hr class="divider my-4" />
              </div>
              <!--------------------------------------------------------------------->
              <div id="main-container"> 
                <h3>
                  <table border=1>
                    <thead class="thead-dark">
                      <tr>
                        <th><b>Codigo</b></th>
                        <th><b>Nombre</b></th>
                      </tr>
                    </thead>
                    <?php
                    $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                    if (!$conn){
                        die("PostgreSQL connection failed");
                    }
                    $query = "select * from tienda order by codigotienda";
                    $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());
                    $codigo = 0;
                    $nombre = 0;
                    while ($row = pg_fetch_row($result)) {
                      $codigo= $row[0];
                      $nombre= $row[1];

                      echo "\t<tr>\n";
                      echo "\t\t<td>$codigo</td>\n";
                      echo "\t\t<td>$nombre</td>\n";

                      $query2 = "select * from orden where orden.codigotienda='$codigo'";
                      $result2 = pg_query($conn, $query2) or die('ERROR : ' . pg_last_error());
                      $cmdtuples = pg_affected_rows($result2);
                      echo "\t\t<td><a href=ordenesportienda.php?codigo=$codigo>Ver Ordenes</a></td>\n";
                      //echo "\t\t<td><a href=modificardepartamento_forma.php?codigo=$codigo&nombre=$nombre>Modificar</a></td>\n";
                      if($cmdtuples == 0){
                          echo "\t\t<td><a href=eliminartienda.php?codigo=$codigo>Eliminar</a></td>\n";
                      }
                      else {
                          echo "\t\t<td>Eliminar</a></td>\n";
                      }
                      echo "\t</tr>\n";
                    }
                    pg_free_result($result);
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
    </header>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>