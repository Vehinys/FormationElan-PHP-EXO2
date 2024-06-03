<h1>Exo 14
</h1>

<H2>Le résultat</H2>

<?php

  $email = "elan@elan.fr";

  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse <b>$email</b> est une adresse e-mail valide";
  }else{
    echo "L'adresse <b>$email</b> est une adresse e-mail invalide";
  }
  
?>


