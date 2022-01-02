<!DOCTYPE html>
<html>
	<head>
		<title>Uppgift 7.9</title>
		<meta charset="UTF-8">
		<script type="text/javascript"></script>
	</head>

	<body>
			<h1>Uppgift 7.9</h1>
		<div>
			<p>
				Skriv in valfri årstid <input id="nameSearch" onkeyup="loadNames()">
			</p>

			<div id="divNames" class="names"></div>
		</div>

	</body>
</html>

<?php 

//Skapa ett php-script som tar emot en årstid som en GET-parameter och returnerar samma information som i föregående uppgift om de månaderna som räknas till den årstiden (vinter: dec, jan, feb vår:mar, apr, maj sommar:juni, juli , aug höst: sept, okt, nov) och ett fel om man anger något annat. Välj själv om svaret ska vara JSON eller XML

