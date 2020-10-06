<?php
    require_once 'trait.php';
class Dipendente{
    use SpecificheDipendente;
    protected $nome,$cognome,$codiceFiscale;


    public function __construct($_nome,$_cognome,$_cf){


        if(!is_string($_nome)){
             throw new Exception("Nome non Valido");
        }

        if(!is_string($_cognome)){
             throw new Exception("cognome non Valido"
        }



        if(strlen($_cf)<>16 || !is_string($_cf)){
            throw new Exception("codice fiscale inserito non valido");
        }

        $this->nome=$_nome;
        $this->cognome=$_cognome;
        $this->codiceFiscale=$_cf;
    }

    public function setNome($_nome){
        if(!is_string($_nome)){
            die('errore');
        }
        $this->nome=$_nome;
    }

    public function setCognome($_cognome){
        if(!is_string($_cognome)){
            die('errore');
        }
        $this->cognome=$_cognome;
    }



    public function setCf($_cf){
        if(strlen($_cf)<>16 || !is_string($_cf)){
            die('Il codice fiscale non è corretto');
        }
        $this->codiceFiscale=$_cf;
    }


    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }

    public function getCf(){
        return $this->codiceFiscale;
    }


}
