<!DOCTYPE html>
<html lang="sve">
	<head>
		<meta charset="utf-8">
		<title>Jämför inmatade värden</title>
	</head>

	<h1>Jämför värden</h1>
	<form method="POST">
		Värde 1:<input type="text" name="varde1"><br>
		Värde 2:<input type="number" name="varde2"><br>
		<input type="submit" value="Skicka">

	</form>

<?php
	if(isset($_POST['varde1'])) {
		$varde1=$_POST['varde1'];
		$varde2=$_POST['varde2'];
		echo "$varde1<br>$varde2";
	
?>
		<table>
			<tr>
				<th>Operator</th>
				<th>Beräkning</th>
				<th>Resultat</th>
				<th>Förklaring</th>
			</tr>
			<tr>
				<td>==</td>
				<td><?=$varde1; ?>==<?= $varde2; ?></td>
				<td><?php $varde1==$varde2 ? print "true" : print "false"; ?></td>
				<td><?php 
					if($varde1==$varde2) {
						$text= "$varde1==$varde2 är sant";
				} else {
					$text= "$varde1==$varde2 är inte sant";
				}
				echo $text; 
				?>
				</td>

			</tr>

			<tr>
				<tr>
				<td>!=</td>
				<td><?=$varde1; ?>!=<?= $varde2; ?></td>
				<td><?php $varde1!=$varde2 ? print "true" : print "false"; ?></td>
				<td><?php 
					if($varde1!=$varde2) {
						$text= "$varde1!=$varde2 är sant";
				} else {
					$text= "$varde1!=$varde2 är inte sant";
				}
				echo $text; 
				?>
				</td>

			</tr>

			<tr>
				<tr>
				<td>></td>
				<td><?=$varde1; ?>><?= $varde2; ?></td>
				<td><?php $varde1>$varde2 ? print "true" : print "false"; ?></td>
				<td><?php 
					if($varde1>$varde2) {
						$text= "$varde1>$varde2 är sant";
				} else {
					$text= "$varde1>$varde2 är inte sant";
				}
				echo $text; 
				?>
				</td>

			</tr>

			<tr>
				<tr>
				<td><</td>
				<td><?=$varde1; ?><<?= $varde2; ?></td>
				<td><?php $varde1<$varde2 ? print "true" : print "false"; ?></td>
				<td><?php 
					if($varde1<$varde2) {
						$text= "$varde1<$varde2 är sant";
				} else {
					$text= "$varde1<$varde2 är inte sant";
				}
				echo $text; 
				?>
				</td>

			</tr>

			<tr>
				<tr>
				<td><></td>
				<td><?=$varde1; ?><><?= $varde2; ?></td>
				<td><?php $varde1<>$varde2 ? print "true" : print "false"; ?></td>
				<td><?php 
					if($varde1<>$varde2) {
						$text= "$varde1<>$varde2 är sant";
				} else {
					$text= "$varde1<>$varde2 är inte sant";
				}
				echo $text; 
				?>
				</td>

			</tr>

			<tr>
				<tr>
				<td>===</td>
				<td><?=$varde1; ?>===<?= $varde2; ?></td>
				<td><?php $varde1===$varde2 ? print "true" : print "false"; ?></td>
				<td><?php 
					if($varde1===$varde2) {
						$text= "$varde1===$varde2 är sant";
				} else {
					$text= "$varde1===$varde2 är inte sant";
				}
				echo $text; 
				?>
				</td>

			</tr>

			<tr>
				<tr>
				<td>!==</td>
				<td><?=$varde1; ?>!==<?= $varde2; ?></td>
				<td><?php $varde1!==$varde2 ? print "true" : print "false"; ?></td>
				<td><?php 
					if($varde1!==$varde2) {
						$text= "$varde1!==$varde2 är sant";
				} else {
					$text= "$varde1!==$varde2 är inte sant";
				}
				echo $text; 
				?>
				</td>

			</tr>

			<tr>
				<tr>
				<td><=></td>
				<td><?=$varde1; ?><=><?= $varde2; ?></td>
				<td><?php $varde1<=>$varde2 ? print "true" : print "false"; ?></td>
				<td><?php 
					if($varde1<=>$varde2) {
						$text= "$varde1<=>$varde2 är sant";
				} else {
					$text= "$varde1<=>$varde2 är inte sant";
				}
				echo $text; 
				?>
				</td>

			</tr>

		</table>

<?php
	}
?>
</html>