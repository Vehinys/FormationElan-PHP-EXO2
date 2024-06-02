<h1>Exo 6</h1>

<H2>Le résultat</H2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];


function alimenterListeDeroulante($elements) {

    echo '<select>';

    foreach ($elements as $civil) {
        echo '<option>' . $civil . '</option>';
    }
    
    echo '</select>';
}

echo alimenterListeDeroulante($elements);

?>
