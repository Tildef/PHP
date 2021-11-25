<?php
declare(strict_types=1);
//ange standard värde
$artal=date("Y");

//Kontrollera om vi fått någon indata
if(isset($_GET['artal'])) {

	//Ta hand om indata omdet är ett heltal
	$artal=filter_input(INPUT_GET, 'artal', FILTER_VALIDATE_INT);

	//Sätter en gräns att det inte händer något om man fyller i äldre än 1922
	if ($artal<1922) {
		$artal=date("Y");
	}
	
}

?>

<!DOCTYPE html>
	<html lang="sv">
		<head>
			<title>Vasaloppet (4.9)</title>
			<meta charset="utf-8">
		</head>


		<body>
			
			<form method="GET">

			Ange år:<input type="number" value="<?= $artal; ?>" name="artal">
			<input type="submit" name="submit" value="Skicka">

			</form>
			<p>Vasaloppet sker fem år framöver under dessa datum:<br><br>

			<?php
				//Skriver fram de kommande 5 åren och vilka datum vasaloppet kommer att vara då
				for ($i=0; $i<5; $i++) {
					echo $artal+$i . " den " . vasaloppet($artal+$i) . "<br>";
				}

			?>
			</p>
		</body>

	</html>

<?php

//Sträng med datum returneras
function vasaloppet (int $ar) :string {
	//Hitta datum för vanliga Vasaloppet
	$datum=strtotime("First Sunday of March $ar");

	//Returnera det funna datumet
	return date("Y-m-d", $datum);
}
				
