<?php
declare(strict_types=1);
//Man jämför det datumet man fyller i med dagens datum
if(isset($_POST['fodelsedag'])) {
$datetime1 = new DateTimeImmutable($_POST['fodelsedag']);
$antaldagar=$datetime1->diff(new DateTime());

$dagar=($_POST['dagar']);

//Jag gör en variabel som lägger till 7000 dagar till det datumet som man har valt
$nydag=$datetime1->modify('+7000 day');

//Jag gör en variabel som lägger till valfria dagar till det datumet man har valt i början
$nydag2=$datetime1->modify("+$dagar days");
$dagar=filter_input(INPUT_GET, 'dagar', FILTER_VALIDATE_INT);



}

?>


<!DOCTYPE html>
<html lang="sv">

    <head>

        <title>Uppgift 4.7</title>
        <meta charset="UTF-8">

    </head>

    <body>

        <form method="POST">

            Ange din födelsedag:<input type="date" name="fodelsedag"><br><br>
            Ange antal dagar:<input type="number" placeholder="Ange enbart heltal" name="dagar" required><br><br>

            <input type="submit" name="submit" value="Skicka!">
        
        </form><br>
    
 <?php
        if(isset($_POST['fodelsedag'])) {

            //Skriver ut hur många dagar gammal man är när man har fyllt i det första datumfältet
            echo "Du är " . $antaldagar->format("<b>%a</b>") . " dagar gammal<br><br>";

            //Skriver ut vilket datum man fyller 7000 dagar gammal efter man har fyllt i det första datum fältet
            echo "Du är <b>7000</b> dagar gammal den: ";
            echo date_format($nydag, 'Y-m-d ');

            //Skriver ut vilket datum det är när man har fyllt i valfria dagar fältet
            echo "<br><br>Angivet antal dagar $dagar är: ";
            echo date_format($nydag2, 'Y-m-d');
            
        }
?>

    </body>
</html>


