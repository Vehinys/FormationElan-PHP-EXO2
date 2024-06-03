<h1>Exo 11</h1>

<H2>Le résultat</H2>

<?php

$date = "2018-02-23";

echo formaterDateFr($date);

function formaterDateFr($date) {

    
    $dateObj = new DateTime($date);

    $mod = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    $mod->setPattern("EEEE d MMMM yyyy");

    $formattedDate = $mod->format($dateObj);


    return $formattedDate;
};