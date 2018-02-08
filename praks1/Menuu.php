praed = array(
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