<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Eliminar Orden</Table></title>
      <link rel="stylesheet" href="css/estilos.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
   </head>
   <body>
      <?php

      $numeroorden=$_GET["codigo"];
      $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
      if (!$conn){
         die("PostgreSQL connection failed");
      }
      $query = "delete FROM orden WHERE numeroorden='$numeroorden';";
      $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());

      echo 'el registro fue eliminado exitosamente<br>';
      pg_free_result($result);
      pg_close($conn);
      ?>
      <center> <h1>                    <a href="administracion.html">-   Menu Administrativo</a>   </h1> </center>   
      <!-- Optional JavaScript -->
      
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>

</html>
