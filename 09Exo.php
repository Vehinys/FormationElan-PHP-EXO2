<h1>Exo 9</h1>

<H2>Le résultat</H2>


<?php

$nomsRadio = [
    "Monsieur" => false,
    "Madame" => false,
    "Mademoiselle" => false
];

function afficherRadio($nomsRadio) {

    $result = '';

    foreach ($nomsRadio as $genre => $button) {

        $button ? 'button' : '';
        echo '<br><label> '.$genre.' </label>';
        echo '<input type="radio" name="genre" '.$button.'></input>';
    }

    return $result;
}

afficherRadio($nomsRadio);