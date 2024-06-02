<h1>Exo 8</h1>

<H2>Le résultat</H2>

<?php

$url = "my.mobirise.com/data/userpic/764.jpg" ;
$nombreDeFois = 4;

function repeterImage($url, $nombreDeFois) {
    for ($i = 0; $i < $nombreDeFois; $i++) {
        echo "<img src='$url'>";
    }
}

repeterImage("http://my.mobirise.com/data/userpic/764.jpg", 4);