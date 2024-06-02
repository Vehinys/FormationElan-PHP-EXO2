<h1>Exo 5</h1>

<H2>Le résultat</H2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];


function afficherInput($nomsInput) {

    foreach ($nomsInput as $nom) {

        echo '<label>' . $nom . ' :</label><br>';
        echo '<input type="text"><br><br>';

    }
}

echo afficherInput($nomsInput);






