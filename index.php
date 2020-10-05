<?php
require_once 'persona.php';
require_once 'dipendenti.php';

$persona1 = new Persona();
var_dump($persona1);

$persona1->setIndirizzo('via qweqwrf');
echo $persona1->getIndirizzo();

$studente1 = new Studente();


$dipendente1->setIndirizzo('viale Giulio Cesare');
echo $dipendente1->getIndirizzo();


echo $dipendente1->Nome();
echo $dipendente1->Cognome();

 ?>
