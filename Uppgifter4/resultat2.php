<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>kryptering</title>
    </head>


    <body>

		<?php

		$dekryptera = $_POST['toDecrypt'];

		$dekrypterabokstaver = array(
		"B" => "A", "C" => "B","D" => "C", "E" => "D","F" => "E","G" => "F",
		"H" => "G", "I" => "H", "J" => "I", "K" => "J","L" => "K",
		"M" => "L","N" => "M", "O" => "N", "P" => "O", 
		"Q" => "P","R" => "Q", "S" => "R","T" => "S","U" => "T", 
		"V" => "U", "W" => "V", "X" => "W",  "Y" => "X",
		"Z" => "Y", "Å" => "Z", "Ä" => "Å", "Ö" => "Ä", "A" => "Ö",
		"1" => "0", "2" => "1", "3" => "2", "4" => "3", "5" => "4",
		"6" => "5", "7" => "6", "8" => "7", "9" => "8", "0" => "9", " " => " ");

	$length=strlen($dekryptera);
		$newstr='';
		$dekryptera=mb_strtoupper ($dekryptera);
		for ($i = 0; $i < $length; $i++) {
		
		if (in_array($dekryptera[$i], $dekrypterabokstaver)) {
			
		 	$newstr .= $dekrypterabokstaver[$dekryptera[$i]];
		}else{
			$newstr .= $dekryptera[$i];
		}
	}

		echo $newstr;

		?>
	</body>
</html>
