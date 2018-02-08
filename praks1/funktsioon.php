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

// fukntsiooni vormi v'ljastamiseks
// vorm hoiame vorm.html failis
// vormi sisu loeme antud failist ja v'ljastame
function loeVormFailist($failiNimi){
    //siia salvestame sisu
    $sisu = '';
    //kontrollime vajaliku faili olemasoli
    if(file_exists($failiNimi) and is_file($failiNimi) and is_readable($failiNimi)) {
        // saab failist lugeda
        $fp = fopen($failiNimi, 'r');
        //loeme failist t'issisu
        $sisu = fread($fp, filesize($failiNimi));
        fclose($fp); //paneme uhendust kinni

    } else {
       echo 'Probleem '.$failiNimi.' failiga<br />';
       exit;
    }
    echo $sisu;
}