<?php
declare (strict_types=1);

//Skapa en php-fil som skickar ditt namn och födelsetid som ett JSON-dokument

$personinfo=new stdClass();
$personinfo-> mig=new stdClass();

$info1=new stdClass();
$info1-> namn="Tilde";
$info1-> mellannamn="Maria Cecilia";
$info1-> efternamn="Fagerstrom";
$info1-> fodelsedag="17-02-2004";

$personinfo-> mig-> info=$info1;


header("Content-type:application/json; charset=UTF-8");
echo json_encode($personinfo, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

