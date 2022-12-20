<?php
//Includo il file reparto contentente Il trait reparti.
include_once __DIR__ . '/../traits/reparto.php';

class Impiegato{
    public $nome;
    public $eta;

    use Reparti;

    public function __construct(
        String $nome,
        Int $eta
    ) {
        $this->nome = $nome;
        $this->eta = $eta;
    }
}

?>