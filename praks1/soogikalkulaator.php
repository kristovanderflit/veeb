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
$opilane = array(true, true); // olemas soodus  - $opilane[0] ja oled opilane - $opilane[1]
$opetaja = array(true, false); // olemas soodus aga opilane ei ole
$kulaline = array(false, false); // pole soodustust ja pole opilane

// kutsume finktsiooni toole
// kui oled opilane
$soogiHind = soogiHind(2.65, $opilane[0], $opilane[1]);
echo 'Prae hind opilasele = '.round($soogiHind, 2).'<br />';
//Kui olemas kliendi kaart, aga pole opilane
$soogiHind = soogiHind(2.65,$opetaja[0], $opetaja[1]);
echo 'Prae hind sooduskaardi omanikule = '.round($soogiHind, 2).'<br />';
// Kui ei ole kliendi kaart
$soogiHind = soogiHind(2.65, $kulaline[0], $kulaline[1]);
echo 'Prae hind  = '.round($soogiHind, 2).'<br />';


/*
$soogiHind = 2.55; // hind, EUR

if($soogiHind > 0 and $soodustusProtsent > 0 and $toetus > 0){
    $soodusHind = $soogiHind * ((100 - $soodustusProtsent ) / 100);
    $hindOpilasele = $soodusHind - $toetus;
    echo 'Soogi hind opilasele = '.$hindOpilasele.'<br />';
} else {
    echo 'Andmed ei ole taielikult<br />';
}
*/