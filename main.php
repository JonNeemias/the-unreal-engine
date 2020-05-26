<?php

require_once'pet.php';
require_once'gato.php';

//Primeiro Raça depois-> Porte depois-> Especie depois ->Pelo
$ALAKAZAN = new gato ("York","Pequeno","Gato","P.Medio");
$ALAKAZAN->setPelugem("Alto");
$ALAKAZAN->getPelugem();

?>