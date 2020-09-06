



                    
                    <?php
 
//http://courrier/envio?orden=___&destinatario=___&destino=___&direccion=___&tienda=___

                    $numeroorden=$_GET["orden"];	   
                    $destinatario=$_GET["destinatario"];
                    $direccion=$_GET["direccion"];	
                    $remitente="";
                    $costoorden=0;
                    $numerostatus=1;
                    $codigopostalorigen=null;
                    $codigopostaldestino=$_GET["destino"];
                    $codigotienda=$_GET["tienda"];
	

                    
                    $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                    if (!$conn){
                        die("PostgreSQL connection failed");
                    }


                    $query = "select * from ciudad where codigopostal=$codigopostaldestino";
                    $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());
                    while ($row = pg_fetch_row($result)) {
                        $costoorden= $row[2];
                    }

                    $query2 = "select * from tienda where codigotienda='$codigotienda'";
                    $result2 = pg_query($conn, $query2) or die('ERROR : ' . pg_last_error());
                    while ($row = pg_fetch_row($result2)) {
                        $remitente= $row[1];
                    }



                    $query = "INSERT INTO orden VALUES ('$numeroorden','$destinatario','$direccion','$remitente',$costoorden,$numerostatus,NULL,$codigopostaldestino,'$codigotienda');";
                    $result = pg_query($conn, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
                    $tuplasaafectadas = pg_affected_rows($result);
                    echo $tuplasaafectadas . " datos registrados correctamente.\n"; 



                    
                   /* echo "\t<elemento>\n";
                    echo "\t\t<numeroorden>$numeroorden</numeroorden>\n";
                    echo "\t\t<destinatario>$destinatario</destinatario>\n";
                    echo "\t\t<direccion>$direccion</direccion>\n";
                    echo "\t\t<remitente>$remitente</remitente>\n";
                    echo "\t\t<costoorden>$costoorden</costoorden>\n";
                    echo "\t\t<numerostatus>$numerostatus</numerostatus>\n";
                    echo "\t\t<codigopostalorigen>$codigopostalorigen</codigopostalorigen>\n";
                    echo "\t\t<codigopostaldestino>$codigopostaldestino</codigopostaldestino>\n";
                    echo "\t\t<codigotienda>$codigotienda</codigotienda>\n";
                    echo "\t</elemento>\n";*/

                    pg_free_result($result);
                    pg_close($conn);
 

                    ?>
    