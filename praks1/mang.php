<?php
/**
 * Created by PhpStorm.
 * User: kristo.vanderflit
 * Date: 14.02.2018
 * Time: 12:37
 */

echo '
    <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        Sisesta arv vahemikus 1-50: 
        <input type="number" name="kasutajaArv"><br />
        <input type="submit" value="Kontrolli">
    </form>
';
// kontrollime, kas arv on edastatud
if(!empty($_POST['kasutajaArv'])){
    // määrame arvu
    $serveriArv = 10;
    $kasutajaArv = $_POST['kasutajaArv'];
    if($kasutajaArv > $serveriArv){
        echo 'Pakutud väärtus on suurem<br />';
    }
    if ($kasutajaArv < $serveriArv) {
        echo 'Pakutud väärtus on väiksem<br />';
    }
    if (abs($kasutajaArv-$serveriArv)<=5){
        if($kasutajaArv == $serveriArv){
            echo 'Arvasid ära!<br />';
            echo 'Arv on '.$serveriArv.'<br />';
            exit;
        }
        echo 'Oled juba hästi lähedal<br />';
    }
} else {
    echo 'Arv peab olema sisestatud!';
}