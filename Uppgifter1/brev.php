<?php
$namn=$_POST['namn'];
$epost=$_POST['epost'];
?>

<!DOCTYPE html>
	<html lang="sv">
		<head>
			<meta charset="utf-8">
			<title>Söderhavsresor</title>
		</head>

		<body>
			<h1>Söderhavsresor intresse</h1>
			
			<?php

			echo "Hej <b>$namn</b><br><br>";
			echo "Kul att du är intresserad av att få veta mer om Söderhavsresor, vi kommer att skicka mail till dig på följande adress:<b>$epost</b><br><br>";
			echo "På återhörande<br>";
			echo "/Söderhavsresor";

			?>
		</body>
	</html>
	