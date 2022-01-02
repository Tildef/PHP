<?php
declare (strict_types=1);
//Skapa en php-fil som skickar det du tänker/har/vill äta under en dag som ett JSON-dokument

$meny=new stdClass();
$meny-> mat_meny=new stdClass();

$frukost=new stdClass();
$frukost-> frukost="American pancakes med bär och maple sirup";

$lunch=new stdClass();
$lunch-> lunch="Toast skagen";

$middag=new stdClass();
$middag-> middag="Schnitzel med beasås och klyftpotatis";

$kvällsmål=new stdClass(); 
$kvällsmål-> kvällsmål="Yoghurt och frukt";

$måltid=[$frukost, $lunch, $middag, $kvällsmål];
$meny-> mat_meny-> måltid=$måltid;

header("Content-type:application/json; charset=UTF-8");
echo json_encode($meny, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

