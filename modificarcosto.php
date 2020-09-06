<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Modificar costos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php
    $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
    if (!$conn){
        die("PostgreSQL connection failed");
    }
    $codigopostal  = $_GET['codigopostal'];
    $nombre  = $_GET['nombre'];
    $costo = $_GET['costo'];

    $query = "UPDATE ciudad SET costo=$costo WHERE codigopostal=$codigopostal";
    $result = pg_query($conn, $query) or die('ERROR AL MODIFICAR DATOS: ' . pg_last_error());
    $tuplasaafectadas = pg_affected_rows($result);
    echo $tuplasaafectadas . " datos actualizados correctamente.\n"; 
    pg_free_result($result);
    pg_close($conn);
    ?>
    <center> <h1> <a href="administracion.html">-   Menu Administrativo</a>   </h1> </center>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>