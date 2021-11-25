
<!DOCTYPE html>
	<html>
		<head>
			<title>Uppgift 4.12</title>
		</head>

		<body>
			<form method="POST">

				Välj en mapp: <input type="text" name="mappval">
				<input type="submit" name="SKicka">
		
			</form>

			<?php

			//Här ger jag variabeln $mappval värdet av det man skriver in i rutan.
			$mappval=($_POST['mappval']);

			//Jag öppnar upp den mappen som man skriver in i fältet.
			$handle = opendir("$mappval");


			//Om det inte finns en fil så öppnar den inte men om det finns en mapp som heter det man skriver in i rutan så öppnas den mappen
			while (false !== ($entry = readdir($handle))){
				if(!is_dir("$mappval/$entry")) {
				
				    //Den ska skriva ut alla filer inom den valda mappen och skriva ut hurdana storlekar det är på filerna
					echo "[fil]";
					echo $entry . ': ' . filesize("$mappval/$entry") . ' bytes<br>';
				}
		
			}
				//Sen stägs mappen
				closedir($handle);
			
			?>


		</body>
	</html>

