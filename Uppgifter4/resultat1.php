<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>kryptering</title>
    </head>


    <body>
		<?php
		$kryptera = $_POST['toEncrypt'];

		$krypteraBokstaver = array(
		"A" => "B", "B" => "C","C" => "D", "D" => "E","E" => "F","F" => "G",
		"G" => "H", "H" => "I", "I" => "J", "J" => "K","K" => "L",
		"L" => "M","M" => "N", "N" => "O", "O" => "P", 
		"P" => "Q","Q" => "R", "R" => "S","S" => "T","T" => "U", 
		"U" => "V", "V" => "W", "W" => "X", "X" => "Y",
		"Y" => "Z", "Z" => "A",
		"0" => "1", "1" => "2", "2" => "3", "3" => "4", "4" => "5", "5" => "6", "6" => "7", "7" => "8", "8" => "9", "9" => "0", " " => " ");


		$length=strlen($kryptera);
		$newstr='';
		$kryptera=mb_strtoupper ($kryptera);
		for ($i = 0; $i < $length; $i++) {
		
		if (in_array($kryptera[$i], $krypteraBokstaver)) {
			
		 	$newstr .= $krypteraBokstaver[$kryptera[$i]];
		}else{
			$newstr .= $kryptera[$i];
		}
	}

		echo $newstr;

		?>
	</body>
</html>





