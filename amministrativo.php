<?php

class Amministrativo extends Dipendente{
    protected $ruolo;

    public function __construct($_nome,$_cognome,$_cf,$_ruolo){
        parent::__construct($_nome,$_cognome,$_cf);

        if(!is_string($_ruolo)){
            die('errore');
        }

        $this->ruolo=$_ruolo;
    }
}
