<h1>Exo 1</h1>

<H2>Le résultat</H2>

<style>                                               /* Style CSS - COULEUR ROUGE */
    .red {
      color : red;
      }
</style>

<?php

$texte = "Mon texte en paramètre";                    /* Texte predifini */

function convertirMajRouge($texte) {                  /* function au nom de convertirMajRouge qui reprend $texte */
      $result = mb_strtoupper($texte);                /* $result = text en majuscule et qui prend aussi en compte les Accents qui reprend $texte */
      $result = "<p class = 'red'>".$result."</p>";   /* §result = au paragraphe on rajoute la couleur rouge qui se concaténate sur $result */
      return $result;                                 /* Retourner le resultat de $Result */
}

echo convertirMajRouge($texte);                       /* Afficher la function convertirMajRouge($texte)*/