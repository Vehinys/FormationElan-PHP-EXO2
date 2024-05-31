<h1>Exo 1</h1>

<H2>Le résultat</H2>

<style>                                                /* Style CSS - COULEUR ROUGE */
    .red {
      color : red;
      }
</style>

<?php

$texte = "Mon texte en paramètre";                    /* Texte predifini */

function convertirMajRouge($texte) {                  /* Texte predifini */
      $result = mb_strtoupper($texte);                /* Texte predifini */
      $result = "<p class = 'red'>".$result."</p>";   /* §result = au paragraphe on rajoute la couleur rouge qui se concaténate sur $result */
      return $result;                                 /* Retourner le resultat de $Result */
}

echo convertirMajRouge($texte);

?>
