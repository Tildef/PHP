<?php
require_once 'namnlista.php';
if ($_SERVER['REQUEST_METHOD']!="POST"){
	header("HTTP/1.1 405 Method Not Allowed; Content-type:application/json;charset=UTF-8");
	echo json_encode(["Fel" => "Felaktig metodanrop, använd POST"]);
	exit;
}

$test=mb_strtolower(filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING));
$resultat =[];
foreach ($namn as $value) {
	if ($test!=""&& mb_substr(mb_strtolower($value),0,mb_strlen($test)) === $test){
		$resultat[]=$value;
	}
}

header("Content-type:application/json;charset=UTF-8");
echo json_encode($resultat);