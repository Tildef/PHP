<!DOCTYPE html>
	<html lang="sv">
		<head>
			<meta charset="utf-8">
			<title>Visa inmatade tecken</title>
		</head>


		<body>
			
			<form method="POST">

				Värde 1: <input type="text" name="text" size="¨50"><br>

				<input type="submit" name="skicka" value="Skicka">

			</form>
			<pre>

<?php
 $text=$_POST["text"];
 echo "htmlentities:\n" . htmlentities($text);
 echo "\nhtmlspecialchars:\n" . htmlspecialchars($text);
 echo "\nurlencode:\n" . urlencode($text);
 echo "\naddslashes:\n" . addslashes($text);

?>

			</pre>
		</body>
	</html>
