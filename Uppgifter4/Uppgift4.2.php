<!DOCTYPE html>
	<html lang="sv">
		<head>
			<meta charset="utf-8">
			<title>Uppgift 4.2</title>
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
echo "ucwords:\n" . ucwords($text);
echo "\nlcfirst:\n" . lcfirst($text);
echo "\nstr_replace:\n" . str_replace(" ", "", $text);

echo "<br>";
echo str_replace(" ", "",lcfirst(ucwords($text)));

?>


			</pre>
		</body>
	</html>