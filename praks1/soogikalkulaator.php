<?php
/**
 * Created by PhpStorm.
 * User: kristo.vanderflit
 * Date: 30.01.2018
 * Time: 11:28
 *
 */
//
/**
 * @param $taisHind
 * @param $soodusKaart
 * @param $kasOledOpilane
 */
function soogiHind($taisHind, $soodusKaart = false, $kasOledOpilane = false){
    // funktsiooni sisu
    $soodustusProtsent = 15; // %
    $toetus = 1.80; // EUR
    $soodusHind = $taisHind;
    if($soodusKaart == true) {// if($soodusKaart) тоже самое
        $soodusHind = $taisHind * ((100 - $soodustusProtsent) / 100);
    }
    if($kasOledOpilane){
        $soodusHind = $soodusHind - $toetus;
    }
    return $soodusHind;
}// funktsiooni lõpp


// testimiseks paneme erinevad vaartused paika
// kasutame selleks massiivid (soodusKaart, kasOledOpilane)
// kasutajad on tabel (massiiv), kus
//1. real on opilase andmed
//2. real on opetaja andmed
//3. real on kulaline andmed
$kasutajad = array(
    array(
        'roll' => 'opilane',
        'soodus' => true,
        'opilaskaart' => true
    ),
    array(
    'roll' => 'opetaja',
        'soodus' => true,
        'opilaskaart' => false
    ),
    array(
        'roll' => 'kulaline',
        'soodus' => false,
        'opilaskaart' => false
    )
);

// erinevad soogid
$praed = array(
    array(
        'nimetus' => 'Šnitsel',
        'kirjeldus' => 'šnitsel sealihast, lisand, kaste, salat, leib',
        'hind' => 2.68
    ),
    array(
        'nimetus' => 'Seapraad',
        'kirjeldus' => 'seapraad, lisand, kaste, salat, leib',
        'hind' => 2.65
    ),
    array(
        'nimetus' => 'Seapraad',
        'kirjeldus' => 'seapraad, lisand, kaste, salat, leib',
        'hind' => 2.65
    ),
    array(
        'nimetus' => 'Hakklihapallid tomatikastmes',
        'kirjeldus' => 'hakklihapall 2 tk, lisand, kaste, salat, leib',
        'hind' => 2.30
    ),
    array(
        'nimetus' => 'Hakklihapallid tomatikastmes 1/2',
        'kirjeldus' => 'hakklihapall, lisand, kaste, salat, leib',
        'hind' => 1.30
    )
);
foreach ($praed as $praad){
    echo '<h1>'.$praad['nimetus'].'</h1>';
    echo '<code>'.$praad['kirjeldus'].'</code><br />';
    echo '<ul>';
    foreach ($kasutajad as $kasutaja){
        $soogiHind = soogiHind($praad['hind'], $kasutaja['soodus'], $kasutaja['opilaskaart']);
        echo '<dd>Prae hind '.$kasutaja['roll'].' = '.round($soogiHind, 2).' €</dd><br />';
    }
    echo '</ul>';
}