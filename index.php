<?php

//Includo Estenzioni della classe prodotto.
include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/cd.php';
include_once __DIR__ . '/classi/dvd.php';

//inlcudo classe impiegato
include_once __DIR__ . '/classi/impiegato.php';

$generi = [
    'giallo'=> new Generi('Giallo', '<i class="fa-solid fa-book"></i>'),
    'horror'=> new Generi('Horror', '<i class="fa-solid fa-book"></i>'),
    'fantasy'=> new Generi('Fantasy', '<i class="fa-solid fa-book"></i>'),
    'autobiografia'=> new Generi('Autobiografia', '<i class="fa-solid fa-book"></i>'),
    'azioneCd'=> new Generi('Azione', '<i class="fa-solid fa-compact-disc"></i>'),
    'comicoCd'=> new Generi('Comico', '<i class="fa-solid fa-compact-disc"></i>'),
    'fantasyCd'=> new Generi('Fantasy', '<i class="fa-solid fa-compact-disc"></i>'),
];

var_dump($generi);

$prodotti = [
    new Libro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://media.takealot.com/covers_images/a0184f11e1314c4b903404bf6dae580f/s-pdpxl.file', 250, 'flessibile'),
    new Audiolibro("Elogio dell'imperfezione", 'Rita-Levi Montalicni', 9.90, $generi['autobiografia'], true, 'https://m.media-amazon.com/images/I/51-iE15pUzL.jpg', 615, 'audible', 'https://www.amazon.it/dp/B07ZG2SWJF/ref=s9_acsd_al_bw_c2_x_1_i?pf_rd_m=A11IL2PNWYJU7H&pf_rd_s=merchandised-search-9&pf_rd_r=GDXQN3JXH5ARCZG035GC&pf_rd_t=101&pf_rd_p=b8cd7bd3-616a-4065-b334-2406cf8cc193&pf_rd_i=22490400031#audibleproductdetails_feature_div'),
    new Cd('Il cavaliere oscuro', 'Christofer Nolan', 12, $generi['azioneCd'], true, 'https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg', 160, 'https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg'),
    new Dvd('Il cavaliere oscuro', 'Christofer Nolan', 12, $generi['azioneCd'], true, 'https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg', 160, 'https://pad.mymovies.it/filmclub/2007/02/131/locandina.jpg')
];

var_dump($prodotti);

$impiegati = [
    $impiegato1 = new Impiegato('Paolo Rossi', 24),
    $impiegato2 = new Impiegato('Marco Rossi', 28),
    $impiegato3 = new Impiegato('Stefano Piccolo', 34),
    $impiegato4 = new Impiegato('Melania Esposito', 20)
];

$impiegato1->reparto = 'Cd';
$impiegato2->reparto = 'Dvd';
$impiegato3->reparto = 'Libro';
$impiegato4->reparto = 'Audiolibro';
$impiegato1->vendite = 43;
$impiegato2->vendite = 30;
$impiegato3->vendite = 25;
$impiegato4->vendite = 101;

var_dump($impiegati);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>



    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</body>

</html>

