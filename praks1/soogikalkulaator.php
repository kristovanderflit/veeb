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
// vaatame $kasutaja masiivi l'bi
// for (tjm defineerimine; tjm kehtivuse kontroll; tjm suurendamine/v'hendamine)
for($i = 0; $i < count($kasutajad); $i++){
    $soogiHind = soogiHind(2.65, $kasutajad[$i][0], $kasutajad[$i][1]);
    echo 'Prae hind  = '.round($soogiHind, 2).'<br />';
}
