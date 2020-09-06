

                    
                    <?php
                   //http://courrier/consulta?destino=___&formato=__
                   


              //     http://localhost/rest/consulta.php?destino=17002&formato=algo
                    $courrier="or";
                    $codigopostal="or";
                    $cobertura="or";
                    $costoorden="or";

                    //$echo "<table>";
                    $xml = simplexml_load_file("http://localhost/rest/status.php?orden=1002&tienda=MUS&formato=XML");
                    print_r($xml);XML

                    echo $xml->courrier;
                    echo "\n";
                    echo $xml->orden;
                    echo "\n";
                    echo $xml->status;
                    echo "\n";




                    ?>
