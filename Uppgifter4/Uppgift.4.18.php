<?php
declare(strict_types=1);


?>

<!DOCTYPE html>
    <html lang="sv">
        <head>
            <meta charset="utf-8">
            <title>Uppgift 4.18</title>
        </head>


        <body>
            
           <form method="POST">
			
			Hur många slumpmässiga kort vill du se? <input type="number" name="kort"><br>
			<input type="submit" name="Skicka" value="Skicka">

		</form>

		<?php
		$kort=($_POST['kort']);

		$symboler = array("Klöver", "Ruter", "Hjärter", "Spader");
		$valorer = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "kneckt", "dam", "kung", "A");
		foreach ($symboler as $color) {
			foreach ($valorer as $value) {
				$kortlek[]= $color . " " . $value; 
			}
		}

		shuffle($kortlek);

			for ($i=0; $i <$kort ; $i++) { 
				echo array_shift($kortlek);
				echo "<br>";
			}


		?>


	</body>
</html>