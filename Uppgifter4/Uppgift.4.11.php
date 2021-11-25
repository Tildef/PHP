<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
	<html lang="sv">
		<head>
			<meta charset="utf-8">
			<title>Uppgift 4.11</title>
		</head>

		<body>
			<form method="POST">

			Ange ett nummer:<input type="number" name="nummer"><br><br>
			<input type="submit" name="skicka" value="Skicka">
		
		</form>


		<?php

		$nummer=($_POST['nummer']);

		if ($nummer%5 == 0) {
		  echo "$nummer är jämt delbart med fem";
		}else{
			echo "$nummer är inte jämt delbart med fem";
		}

		?>

		</body>
	</html>
