<?php
//                                       http://courrier/status?orden=___&tienda=___&formato=__

                    $orden=$_GET["orden"];
                    $tienda=$_GET["tienda"];
                    $formato=$_GET["formato"];



                    $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                    if (!$conn){
                        die("PostgreSQL connection failed");
                    }


                      
                    $query="select numeroorden,numerostatus from orden where orden.numeroorden='$orden'";
                    $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());

                    $status=0;
                    $courrier="ExpressExces";

                    while ($row = pg_fetch_row($result)) {
                        $status= $row[1];
                    }

                    $status=strval($status); 


                 
                    $infoJson = new stdClass;
                    $infoJson->courrier = $courrier;
                    $infoJson->orden = $orden;
                    $infoJson->status = $status;

            


                    $resultJSON = json_encode(['orden' => $infoJson]);



                   

                   
                    if (strcmp($formato, "JSON") == 0) {
                        echo $resultJSON;
                    }
                    else if (strcmp($formato, "XML") == 0)  {
                        echo "<orden><courrier>$courrier</courrier><orden>$orden</orden><status>$status</status></orden>";
                    }



                    
                    pg_free_result($result);
                    pg_close($conn);

 

                    ?>
