<!DOCTYPE html>
    <html lang="sv">
        <head>
            <meta charset="utf-8">
            <title>filUppladdning</title>
        </head>


        <body>
            
           <form enctype="multipart/form-data" method="POST">
			<!--Ett gömt inputfält med namnet MAX_FILE_SIZE före file-input gör att max-storleken på filer kotrolleras på servern!-->
			Fil att skicka: <input type="file" name="userfile" accept="image/*">
			<br>

			<input type="submit" value="Skicka"/>
			</form>

			<?php

				if ($_FILES) {
				$mapp = 'c:\\temp\\';
				$uppladdadFil = $mapp . basename($_FILES['userfile']['name']);
				echo '<pre>';
				
				if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uppladdadFil)) {
					echo "Filen laddades upp och finns lagrad på:$uppladdadFil.<br>";
				}else {
					echo "Något gick fel vid uppladdning!<br>";
				}
				echo 'Här finns lite mer info om uppladdningen:<br>';
				print_r($_FILES);
				print "</pre>";
			}
			        
			?>		


    </body>
</html>

