<h1>Exo 5</h1>

<H2>Le résultat</H2>







<?php

   $nomsInput = array("Nom","Prénom","Ville");

   function information($nomsInput) {
    foreach($nomsInput as $input) {

        echo  "<label>'.$input.'</label>";
        echo  "<input type='text'>";
    }
}
 ?>