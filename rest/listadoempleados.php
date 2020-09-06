
                    <?php
                    $conn = pg_connect("host=localhost port=5432 user=postgres password=1234 dbname=Courrier");
                    if (!$conn){
                        die("PostgreSQL connection failed");
                    }
                    $query = "Select * from ciudad";
                    $result = pg_query($conn, $query) or die('ERROR : ' . pg_last_error());
                
                    echo "<listado>\n";
                    while ($row = pg_fetch_row($result)) {
                      $numerostatus= $row[0];
                      $nombrestatus= $row[1];
                      $nombrestatus2=$row[2];
                      echo "\t<elemento>\n";
                      echo "\t\t<number>$numerostatus</number>\n";
                      echo "\t\t<nombre>$nombrestatus</nombre>\n";
                      echo "\t\t<nombre2>$nombrestatus2</nombre2>\n";


                      echo "\t</elemento>\n";

                  
                    }

                    echo "</listado>\n";

                    pg_free_result($result);
                    pg_close($conn);
                    ?>
    