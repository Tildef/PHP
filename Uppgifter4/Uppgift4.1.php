<!DOCTYPE html>
	<html lang="sv">
		<head>
			<meta charset="utf-8">
			<title>Uppgift 4.1</title>
		</head>


		<body>
			
			<form method="POST">

				Värde 1: <input type="text" name="text" size="¨50"><br>

				<input type="submit" name="skicka" value="Skicka">

			</form>
			<pre>

<?php
$text=filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);

$text=$_POST['text'];
echo "strtolower:\n" . strtolower($text);
echo "\nstrrev:\n" . strrev($text);
echo "\nstr_replace:\n" . str_replace(" ", "", $text);

?>


			</pre>
		</body>
	</html>
