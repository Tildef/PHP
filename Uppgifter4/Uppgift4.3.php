<!DOCTYPE html>
	<html lang="sv">
		<head>
			<meta charset="utf-8">
			<title>Uppgift 4.3</title>
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
$hitta = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    $svara = array("4","b","c","d","3","f","g","h","1","j","k","1","m","n","0","p","9","r","5","7","u","v","w","x","y","2");
   
echo "<br>";
echo str_replace($hitta, $svara, $text);


?>


			</pre>
		</body>
	</html>