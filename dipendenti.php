<?php
require_once 'persona.php';


class Dipendenti extends Persona{
  public $codiceFiscale;

  public function Nome(){
    return $this->nome;
  }

  public function Cognome(){
    return $this->cognome;
  }
  use DatiContratto;
}


 ?>
