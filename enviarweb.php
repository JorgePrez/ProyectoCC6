<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enviar Web</title>
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

        <h2 class="text-uppercase font-weight-bold">Estimado Cliente</h2>
        <h2 class="text-uppercase font-weight-bold">Ingrese sus datos para cotizar su orden</h2>
 
          <?php
                $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                if (!$conn){
                    die("PostgreSQL connection failed");
                }
               
                ?>
              <hr class="divider my-4" />

              <div class="row align-items-center justify-content-center text-center">


             
              
              <form id="form1" id=cuadro1 action="confirmarenviarweb.php".php method="get" class="needs-validation" novalidate>







<div class="row" >
    <div class="col-8  d-flex justify-content-center align-items-center">
        <h3> <label for="destino">Ciudad de Origen:</label> </h3>  
    </div>
    <div class="col-4  d-flex justify-content-center align-items-center">
    <select name="origen" type="number" class="form-control" id="origen">                                    
        <?php                                
        $query = "select * from ciudad order by nombre";
        $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());
        $codigopostal= "";
        while ($row = pg_fetch_row($result)) {
            $codigopostal= $row[0];
            $nombreciudad= $row[1];
        echo '<option value="'.$codigopostal.'">'."$nombreciudad".'</option>';
        }
        ?>
        </select>                                            
    </div>
</div> 

<div class="row" >
    <div class="col-8  d-flex justify-content-center align-items-center">
        <h3> <label for="destino">Ciudad de Destino:</label> </h3>  
    </div>
    <div class="col-4  d-flex justify-content-center align-items-center">
    <select name="destino" type="number" class="form-control" id="destino">                                    
        <?php                                
        $query = "select * from ciudad order by codigopostal";
        $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());
        $codigopostal= "";
        while ($row = pg_fetch_row($result)) {
            $codigopostal= $row[0];
            $nombreciudad= $row[1];
        echo '<option value="'.$codigopostal.'">'."$nombreciudad".'</option>';
        }
        ?>
        </select>                                            
    </div>
</div> 


<div class="row" >
  <div class="col-8  d-flex justify-content-center align-items-center">
      <h3> <label for="Pago">Pago:</label> </h3>  
  </div>
  <div class="col-4  d-flex justify-content-center align-items-center">

    <div class="form-check">
      <input class="form-check-input" type="radio" name="pago" id="pago" value="1" checked>
      <label class="form-check-label" for="exampleRadios1">
        Origen
      </label>
    </div>

    <div class="form-check">
    <label class="form-check-label">
        
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="pago" id="pago" value="2">
      <label class="form-check-label" for="exampleRadios2">
        Destino(+Q5.00)
      </label>
    </div>
    
                                            
  </div>



  
</div> 


<div class="row" >
  <div class="col-8  d-flex justify-content-center align-items-center">
      <h3> <label for="remitente">Remitente:</label> </h3>  
  </div>
  <div class="col-4  d-flex justify-content-center align-items-center">
  <input name="remitente" type="text" class="form-control" id="destino">                                    
                                                  
  </div>
</div> 


<div class="row" >
  <div class="col-8  d-flex justify-content-center align-items-center">
      <h3> <label for="remitente">Dirección Remitente:</label> </h3>  
  </div>
  <div class="col-4  d-flex justify-content-center align-items-center">
  <input name="remitentedir" type="text" class="form-control" id="remitentedir">                                    
                                                  
  </div>
</div> 

<div class="row" >
  <div class="col-8  d-flex justify-content-center align-items-center">
      <h3> <label for="remitente">Destinatario:</label> </h3>  
  </div>
  <div class="col-4  d-flex justify-content-center align-items-center">
  <input name="destinatario" type="text" class="form-control" id="destinatario">                                    
                                                  
  </div>
</div> 

<div class="row" >
  <div class="col-8  d-flex justify-content-center align-items-center">
      <h3> <label for="remitente">Dirección Destinatario:</label> </h3>  
  </div>
  <div class="col-4  d-flex justify-content-center align-items-center">
  <input name="destinatariodir" type="text" class="form-control" id="destinatariodir">                                    
                                                  
  </div>
</div> 




<div class="row" >
  <div class="col-12  d-flex justify-content-center align-items-center">
  <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit">Realizar Envio</button>                                                                                                       
  </div>         


                                        
</div>
</form>



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