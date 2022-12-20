<?php
//Includo il file reparto contentente Il trait reparti.
include_once __DIR__ . '/../traits/reparto.php';

class Impiegato{
    public $nome;
    public $eta;

    use Reparti;

    public function __construct(
        String $nome
    ) {
        $this->nome = $nome;
    }

    //Funzione per filtrare le informazioni in età e ritorno delle stringhe a schermo da far visualizzare all'utente.
    //Per fare questo utilizzo una funzione e THROW EXCEPTION inserito in condizioni.
    public function setEta( $_eta ){

        if( !is_int($_eta) ){
            throw new Exception("ATTENZIONE: $_eta non è un numero!");
        }
        elseif( $_eta < 0 ){
            throw new Exception("ATTENZIONE: $_eta è minore di zero!");
        }
        else{
            $this->eta = $_eta;
        }
    }
}

?>