
                   
                    <?php
                    
                  //  $echo "<html>";
                    //$echo "<body>";

                    $numerostatus=0;
                    $nombrestatus="";

                    //$echo "<table>";
                    $xml = simplexml_load_file("http://localhost/rest/listadoempleados.php");

                    foreach($xml->children() as $everyone)
                    {
                      $numerostatus=$everyone->number;
                      $nombrestatus=$everyone->nombre;
                      echo "\t<elemento>\n";
                      echo "\t\t<number>$numerostatus</number>\n";
                      echo "\t\t<nombre>$nombrestatus</nombre>\n";

                      echo "\t</elemento>\n";

                    }

                   // $echo "</table>";
                    


                
                    ?>

                    
    