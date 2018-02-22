<?php
/**
 * Created by PhpStorm.
 * User: kristo.vanderflit
 * Date: 22.02.2018
 * Time: 13:26
 */

require_once 'ab_k.php';

// [hendus ab serveriga
function yhendus(){
    $ab_yhendus = mysqli_connect(AB_HOST, AB_USER, AB_PASS, AB_NIMI);
    if($ab_yhendus == false) {
        echo 'probleemi [hendus<br />';
        echo mysqli_connect_error().'<bar />';
        exit;
    } else {
        echo 'on uhendatud<br />';
    }
    return $ab_yhendus;
}