<?php
/*$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

	if ($_FILES) {
				$mapp = 'C:\\Wamp\\www\\Kapitel_1_övningar\\bilder';
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

*/


if(isset($_POST['Submit1']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 













?>