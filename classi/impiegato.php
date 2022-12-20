<?php
//Includo il file reparto contentente Il trait reparti.
include_once __DIR__ . '/../traits/reparto.php';

class Impiegato{
    public $nome;
    public $eta;
    public $vendite;

    use Reparti;

    public function __construct(
        String $nome,
        Int $eta,
        Int $vendite
    ) {
        $this->nome = $nome;
        $this->eta = $eta;
        $this->vendite = $vendite;
    }
}

?>