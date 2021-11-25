<!DOCTYPE html>
    <html lang="sv">
        <head>
            <meta charset="utf-8">
            <title>Uppgift 3.4</title>
        </head>

        <body>
            <?php

            for ($i=1; $i <101 ; $i++) { 
                echo "<span style='";
                if ($i%5==0) {
                    echo"font-weight: bold;";
                }

                if ($i%2==0) {
                    echo"color: blue;";
                }

                if ($i%7==0) {
                    echo"font-style: italic;";
                }
                     echo "'>";
                    echo " $i";
                    echo "</span>";

                if ($i%10===0) {
                    echo "<br>";
                }

            }

            ?>

        </body>
    </html>