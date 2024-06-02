<h1>Exo 7</h1>

<H2>Le résultat</H2>

<?php

$elements = [

    "Option 1" => false,
    "Option 2" => true,
    "Option 3" => false
    
];

function genererCheckbox($elements) {

    $result = '';

    foreach ($elements as $option => $checked) {

        $checked = $checked ? 'checked' : '';

        echo '<br><label> '. $option .' </label>';
        echo '<input type= " checkbox "  ' . $checked . ' ></input>';
    
    }

    return $result;
}

echo genererCheckbox($elements);

?>