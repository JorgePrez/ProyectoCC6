<?php
                   //http://courrier/consulta?destino=___&formato=__
                   

                    $codigopostaldestino=$_GET["destino"];	
                       
                    $formato=$_GET["formato"];
                    $cobertura="FALSE";
                    $costoorden=0;
                    $courrier="ExpressExces";


                    $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                    if (!$conn){
                        die("PostgreSQL connection failed");
                    }




                    $query = "select * from ciudad where codigopostal=$codigopostaldestino";
                    $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());

                    while ($row = pg_fetch_row($result)) {

                        $costoorden= $row[2];
                        $cobertura="TRUE";
                    }

                    $codigopostaldestino=strval($codigopostaldestino); 
                    $costoorden=strval($costoorden); 


                 
                    $infoJson = new stdClass;
                    $infoJson->courrier = $courrier;
                    $infoJson->destino = $codigopostaldestino;
                    $infoJson->cobertura = $cobertura;
                    $infoJson->costo = $costoorden;

            


                    $resultJSON = json_encode(['consultaprecio' => $infoJson]);



                   

                   
                    if (strcmp($formato, "JSON") == 0) {
                        echo $resultJSON;
                    }
                    else if (strcmp($formato, "XML") == 0)  {
                        echo "<consultaprecio><courrier>$courrier</courrier><destino>$codigopostaldestino</destino><cobertura>$cobertura</cobertura><costo>$costoorden</costo></consultaprecio>";
                    }



                    
                    pg_free_result($result);
                    pg_close($conn);

 

                    ?>
