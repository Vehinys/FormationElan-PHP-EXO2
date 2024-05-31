<h1>Exo 2</h1>

<H2>Le résultat</H2>

<?php

$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"];

function afficherTableHTML($capitales) {

}

$capitales = implode("<br>",$capitales);
echo $capitales;

