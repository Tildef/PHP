<?php
declare (strict_types=1);
//Skapa en php-fil som returnerar vem som sitter var i klassen som ett XML-dokument.
$klassrum=new DOMDocument('1.0', 'UTF-8');
$klassrum-> formatOutput=true;
$platser=$klassrum-> createElement('Sitt_platser');
$klassrum-> appendChild($platser);

$första=$klassrum-> createElement('Första_raden_från_höger');
$första-> appendChild($klassrum-> createElement('Höger_bord', "Lucas, Tilde och Dan"));
$första-> appendChild($klassrum-> createElement('Vänster_bord', "Elias och Linus D"));
$platser-> appendChild($första);

$andra=$klassrum-> createElement('Andra_raden_från_höger');
$andra-> appendChild($klassrum-> createElement('Höger_bord', "Daniel, Tua och Alfred"));
$andra-> appendChild($klassrum-> createElement('Vänster_bord', "Rinn, Linus J, Eduard och Rasmus"));
$platser-> appendChild($andra);


header("Content-type:application/xml; charset=UTF-8");
echo $klassrum-> saveXML();
