<?php
/**
 * Created by PhpStorm.
 * User: kristo.vanderflit
 * Date: 30.01.2018
 * Time: 11:28
 */
$soogiHind = 2.55; // hind, EUR
$soodustus = 15; // %
$toetus = 1.80; // EUR

if($soogiHind > 0 and $soodustus > 0 and $toetus > 0){
    $soodusHind = $soogiHind * ((100 - $soodustus ) / 100);
    $hindOpilasele = $soodusHind - $toetus;
    echo 'Soogi hind opilasele = '.$hindOpilasele.'<br />';
} else {
    echo 'Andmed ei ole taielikult<br />';
}
