

                    
                    <?php
                   //http://courrier/consulta?destino=___&formato=__
                   


              //     http://localhost/rest/consulta.php?destino=17002&formato=algo
                    $courrier="or";
                    $codigopostal="or";
                    $cobertura="or";
                    $costoorden="or";

                    //$echo "<table>";
                    $xml = simplexml_load_file("http://localhost/rest/consulta.php?destino=1200&formato=XML");
                    print_r($xml);

                    echo $xml->courrier;
                    echo "\n";
                    echo $xml->destino;
                    echo "\n";
                    echo $xml->cobertura;
                    echo "\n";
                    echo $xml->costo;


                    //
                   // var_dump(json_decode($jsonobj));







                    /*
                   $courrier= $xml->children()->courrier;
                   $codigopostal=$xml->children()->codigopostal;
                   $cobertura=$xml->children()->cobertura;
                   $costoorden=$xml->children()->costo;

                   $peliculas->pelicula[0]->argumento;




                    foreach($xml->children() as $everyone){                      
                      $courrier=$everyone->courrier;
                      $codigopostal=$everyone->codigopostal;
                      $cobertura=$everyone->cobertura;
                      $costoorden=$everyone->costo;

                
                    }



                    echo "\t<elemento>\n";
                    echo "\t\t<n1>$courrier</n1>\n";
                    echo "\t\t<n2>$codigopostal</n2>\n";
                    echo "\t\t<n3>$cobertura</n3>\n";
                    echo "\t\t<n4>$costoorden</n4>\n";
                    echo "\t</elemento>\n";*/



                   // $echo "</table>";
                    


                    ?>
