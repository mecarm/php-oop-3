<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';

$generi = [
    'giallo'=> new Generi('giallo', 'icon-font-awesome-giallo'),
    'horror'=> new Generi('horror', 'icon-font-awesome-giallo'),
];

var_dump($generi);

$prodotti = [
    new Libro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://media.takealot.com/covers_images/a0184f11e1314c4b903404bf6dae580f/s-pdpxl.file', 250, 'flessibile')

];

var_dump($prodotti);


?>