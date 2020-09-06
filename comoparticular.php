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
        <title>Ingresar Orden</title>
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
                        <h2 class="text-uppercase text-white font-weight-bold">Ingresar Orden</h2>
                        <hr class="divider my-4" />
                    </div>
                    <!--------------------------------------------------------------------->
                    <div class="col-12  d-flex justify-content-center">
                        <form id="form1" id=cuadro1 action="enviarcomoparticular.php" method="post" class="needs-validation" novalidate>

                            <div class="row" >
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="numeroorden">Numero de Orden:</label> </h2>  
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">
                                    <input name="numeroorden" type="number" class="form-control" id="numeroorden"></input> 
                                </div>
                            </div> 


                            <div class="row" >
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="destinatario">Destinatario:</label> </h2>  
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">
                                    <input name="destinatario" type="text" class="form-control" id="destinatario"></input> 
                                </div>
                            </div> 


                            <div class="row" >
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="direccion">Dirección Destinatario:</label> </h2>  
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">
                                    <input name="direcciondestinatario" type="text" class="form-control" id="direccion"></input> 
                                </div>
                            </div> 

                            <div class="row" >
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="remitente">Remitente:</label> </h2>  
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">
                                    <input name="remitente" type="text" class="form-control" id="remitente"></input> 
                                </div>
                            </div> 


                            <div class="row" >
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="direccion">Dirección Remitente:</label> </h2>  
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">
                                    <input name="direccionremitente" type="text" class="form-control" id="direccion"></input> 
                                </div>
                            </div> 

                            
                            <div class="row" >
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="destino">Ciudad de Origen:</label> </h2>  
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
                                    <h2> <label for="destino">Ciudad de Destino:</label> </h2>  
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
                                <div class="col-12  d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit">Ingresar</button>                                                                                                       
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