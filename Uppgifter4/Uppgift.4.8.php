<?php
declare(strict_types=1);
//ange standard värde
$artal=date("Y");

//Kontrollera om vi fått någon indata
if(isset($_GET['artal'])) {
	
	//Ta hand om indata omdet är ett heltal
	$artal=filter_input(INPUT_GET, 'artal', FILTER_VALIDATE_INT);
	
}

?>

<!DOCTYPE html>
	<html lang="sv">
		<head>
			<title>Påskdagen (4.8)</title>
			<meta charset="utf-8">
		</head>


		<body>
			
			<form method="GET">

			Ange år:<input type="number" value="<?= $artal; ?>" name="artal">
			<input type="submit" namne="submit" value="Skicka">

			</form>
			<p>Påskdagen sker:<br><br>

			<?php
				for ($i=0; $i<1; $i++) {
					echo " den " . påskdagen($i) . "<br>";
				}

			?>
			</p>
		</body>

	</html>

<?php

//Sträng med datum returneras
function påskdagen (int $ar) :string {
	//Hitta datum för Påskdagen
	$datum=strtotime("First day april $ar");

	//Returnera det funna datumet
	return date("Y-m-d", $datum);
}
	