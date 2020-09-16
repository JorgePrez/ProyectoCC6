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
        <title>Validar Admin</title>
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
                        <h2 class="text-uppercase text-white font-weight-bold">Confirmar Credenciales</h2>
                        <hr class="divider my-4" />
                    </div>
                    <!--------------------------------------------------------------------->
                    <div class="col-12  d-flex justify-content-center">
                        <form id="form1" id=cuadro1 action="administracion.html" onsubmit='return validar()'>

                            <div class="row" >
                                <div class="col-12 d-flex justify-content-center">
                                    <h1><br/></h1>
                                </div>
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="usuario">Nombre de Administrador :</label> </h2>
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">
                                    <input name="usuario" type="text" class="form-control" id="usuario" placeholder="" value="" required>
                                    <div class="valid-feedback">!Es válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>    
                                </div>
                            </div> 

                            <div class="row" >
                                <div class="col-12 d-flex justify-content-center">
                                    <h1><br/></h1>
                                </div>
                                <div class="col-8  d-flex justify-content-center align-items-center">
                                    <h2> <label for="contrasenia">Contraseña:</label> </h2>
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">
                                    <input name="contrasenia" type="password" class="form-control" id="contrasenia" placeholder="" value="" required>
                                    <div class="valid-feedback">!Es válido!</div>
                                    <div class="invalid-feedback">Complete el campo.</div>    
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-12 d-flex justify-content-center">
                                    <h1><br/></h1>
                                </div>
                                <div class="col-12  d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit">Menu Administrativo</button>  
                                </div>
                                <div class="col-4  d-flex justify-content-center align-items-center">                                    
                                    <?php
                                    $query = "select * from administrador";
                                    $result = pg_query($conn, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                                    $nombre=0;
                                    $contrasenia=0;

                                    while ($row = pg_fetch_row($result)) {
                                        $nombre= $row[0];
                                        $contrasenia= $row[1];
                                    }
                                    echo "<input type=hidden class=form-control name=usuariotrue id=usuariotrue value='$nombre' required>\n";
                                    echo "<input type=hidden class=form-control name=contraseniatrue id=contraseniatrue value='$contrasenia' required>\n";
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--------------------------------------------------------------------->
                    <div class="moverT1">
                        <a href="index.html">Regresar a Menu Principal</a>                                               
                    </div>
                </div>
            </div>

        </header>
        <!-- Optional JavaScript -->
        <script src="js/validacionadministracion.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>