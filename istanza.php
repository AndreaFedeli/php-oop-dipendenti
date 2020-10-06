<?php

require_once 'dipendente.php';
require_once 'amministrativo.php';

$dipendente= new Dipendente('Andrea','Fedeli','qwertyf562mnvhg');
$dipendente2=new Dipendente('Luca','Petrocchi','qwertyf562dshfy');



$dipendente3= new Amministrativo('John','Wheeljack','qwertyf634dshfy','operaio');
var_dump($dipendente,$dipendente2,$dipendente3);

$dipendente->setSpecificheContratto('contratto determinato');
echo $dipendente->getSpecificheContratto();
