<?php
declare(strict_types=1);

$datum=($_POST['datum']);

 //Få datumet som man klickar på till en veckodag


?>


<!DOCTYPE html>
<html lang="sv">

    <head>

        <title>Uppgift 4.6</title>
        <meta charset="UTF-8">

    </head>

    <body>

        <form method="POST">

        	Ange ett datum:<input type="date" name="datum"><br><br>

            <input type="submit" name="submit" value="Skicka!">
        
        </form><br>

<?php
$veckodag=date('w', strtotime($datum));


if ($veckodag==1) {
	echo "Ditt angivna datum är en Måndag";
}

elseif ($veckodag==2) {
	echo "Ditt angivna datum är en Tisdag";
}

elseif ($veckodag==3) {
	echo "Ditt angivna datum är en Onsdag";
}

elseif ($veckodag==4) {
	echo "Ditt angivna datum är en Torsdag";
}

elseif ($veckodag==5) {
	echo "Ditt angivna datum är en Fredag";
}

elseif ($veckodag==6) {
	echo "Ditt angivna datum är en Lördag";
}

elseif ($veckodag==0) {
	echo "Ditt angivna datum är en Söndag";
}



?>




      </body>
  </html>