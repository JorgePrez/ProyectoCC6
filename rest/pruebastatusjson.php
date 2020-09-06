

                    
                    <?php
                   //http://courrier/consulta?destino=___&formato=__
                   


              //     http://localhost/rest/consulta.php?destino=17002&formato=algo
      

                    //$echo "<table>";
                   
                    $json = file_get_contents("http://localhost/rest/status.php?orden=1002&tienda=MUS&formato=JSON");
                    echo "json\n";
                    print_r($json);
                    $truejson=json_decode($json);
                    echo "\njsondecode\n";
                    print_r($truejson);
                    
                    echo "\n"; //donut
                    echo $truejson->orden->courrier; //donut
                    echo "\n"; //donut
                    echo $truejson->orden->orden; //donut
                    echo "\n"; //donut
                    echo $truejson->orden->status; //donut
                    echo "\n"; //donut

                  


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
