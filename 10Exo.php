<h1>Exo 10</h1>

<H2>Le résultat</H2>

<?php

$nomsInput = ["Nom", "Prénom","Email","Ville","Sexe"];


function afficherInput($nomsInput) {

    foreach ($nomsInput as $nom) {

        echo '<label>' . $nom . ' :</label><br>';
        echo '<input type="text"><br>';

    }
    echo "<br>";
}

echo afficherInput($nomsInput);


$elements = ["Développeur logiciel", "Designer Web", "Integrateur Web", "Chef de projet"];


function alimenterListeDeroulante($elements) {

    echo '<select>';

    foreach ($elements as $civil) {
        echo '<option>' . $civil . '</option>';
    }
    
    echo '</select>';
}

echo alimenterListeDeroulante($elements);

echo "<br><br>";

echo '<input type="submit">';