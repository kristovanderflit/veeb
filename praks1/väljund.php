<?php
/**
 * Created by PhpStorm.
 * User: kristo.vanderflit
 * Date: 30.01.2018
 * Time: 10:24
 */
// ühe realine kommentaar

/*
 * mitme
 * realine
 * kommentaar
 */

// väljastada teksti
echo 'Aine - veebiprogrammeerimine'.'<br />'; // käsu lõpp - ;
print 'valikaine<br / >';
// muutajate defineerimine
$eesNimi = 'Kristo'; // eesnimi , string
$pereNimi = 'Vanderflit'; // perenimi, string
$bussiNumber = 4; // bussi number, see on täisarv, integer
$soiduKestvus = 0.5; // sõidu kestvus, 0.5 tundi
// konstandite defineerimine
define('NUMBER_PI', 3.14);
// Kasutades eel defineeritud muutujad ja konstandid
// v'ljasta ilusa teksti

echo 'Olen '.$eesNimi.' '.$pereNimi.'<br />';
echo 'Soidan koolist kesklinna bussiga numberiga '.$bussiNumber.'<br />';
echo 'Jouan kesklinna '.$soiduKestvus. ' tunniga<br />';
echo 'Midagi konstantset? PI = '.NUMBER_PI.'<br />';