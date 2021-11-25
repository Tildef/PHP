<!DOCTYPE html>
    <html lang="sv">
        <head>
            <meta charset="utf-8">
            <title>Uppgift 4.17</title>
        </head>


        <body>
            
           <form method="POST">

			Hur många rader vill du se? <input type="number" name="rader"><br>
			<input type="submit" name="Skicka" value="Skicka">

			</form>	

		<?php
		
		//lagar en variabel från det som användaren väljer hur många rader
		$rader=($_POST['rader']);
		echo "<br><br>";

		
		for($i=0; $i<$rader; $i++){
			echo implode(" ", rad());
			echo "<br>";
		}

		//lagar en funktion och en array
		function rad():array{
			$ret=array();

			//lagar en for loop som loopar fram 7 siffror mellan 1-40 och om det redan finns en siffra så pushas samma siffra in i en annan array så det inte blir dubletter.
			for ($i=0; $i<7; $i++){
				$random=rand(1,40);
				if (in_array($random, $ret)) {
					$i--;
				}else{
					array_push($ret, $random);
				}
			} 
			//sorterar alla siffror så dem hamnar i sifferordning 
			sort($ret, SORT_NUMERIC);
			return $ret;
		}

		?>

	</body>
</html>