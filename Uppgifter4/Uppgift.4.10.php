<?php
declare(strict_types=1);

//Ta emot uppgifter från formuläret
$namn=filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
$hidden=filter_input(INPUT_POST, "hidden", FILTER_SANITIZE_STRING);

if($hidden==''){
	//Skapa en sammanfogad sträng med värderna från formuläret
$hidden=$namn . "";
}else{
	$hidden=$hidden . " | " . $namn;
}

//Skapa en array
$namnArray=explode("|", $hidden);

//Sortera arrayen
sort($namnArray, SORT_LOCALE_STRING);
?>

<!DOCTYPE html>
	<html lang="sv">
		<head>
			<title>Uppgift 4.10</title>
			<meta charset="utf-8">
		</head>


		<body>
			<h1>Sortera namn</h1>

			<form method="POST">

				Ange ditt namn: <input type="text" name="namn"><br><br>

				<input type="submit" namne="submit" value="Spara"><br><br>

				<input type="hidden" name="hidden" size="100" value="<?= $hidden; ?>">

			</form>
			<?php
				//Skrib ut namnen på en egen rad
				foreach ($namnArray as $n) {
					echo "$n<br>";
				}
			?>
		</body>
	</html>
<!--Formulär som tar emot Förnamn och Efternamn (på engelska)

//När man har skickat på "Skicka" knappen så ska det angivna namnet dyka upp och sen en möjlighet att fylla i nya namn

//Sen när man är klar med formuläret så det skrivas ut i bokstavsordning
!-->