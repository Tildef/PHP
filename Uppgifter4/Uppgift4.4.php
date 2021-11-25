
<?php

    $resultat=[];
    $text="";

    if(isset($_POST['text'])) {
        $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING); 
        $tecken=preg_replace('/[\PL]/u', '', $text);
        $tecken=mb_strtolower($tecken);

         for ($i = 0; $i < mb_strlen($tecken); $i++) {
            $textArray[] = mb_substr($tecken, $i, 1);
        }
        $resultat = array_count_values($textArray);
    } 

    
?>
<!DOCTYPE html>
    <html lang="sv">
        <head>
            <meta charset="utf-8">
            <title>Uppgift 4.4</title>
        </head>


        <body>
            
            <form method="POST">

                Ange text: <input type="text" name="text" size="¨50"><br>

                <input type="submit" name="skicka" value="Skicka">

            </form>

        <?php
        if (isset($resultat)) {
            
            foreach ($resultat as $key => $value) {
                echo "<li>$key => $value</li>";
            }
            
        }
        ?>
    </body>
</html>