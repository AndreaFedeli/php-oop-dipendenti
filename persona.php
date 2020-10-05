<?php

class Persona{
public $nome;
public $cognome;
public $matricola;
private $indirizzo;

public function __construct($_nome,$_cognome,$_matricola){
  $this->nome= $_nome;
  $this->cognome= $_cognome;
  $this->matricola = $_matricola;

}
public function setIndirizzo($_indirizzo){
    $this->indirizzo = $_indirizzo;
    }

  public function getIndirizzo(){
    return $this->indirizzo;
  }

trait DatiContratto{
  public $inquadramento;
  public $ruolo;
  public function Lavoratore(){
    return $funzione;

  }
 }
}

 ?>
