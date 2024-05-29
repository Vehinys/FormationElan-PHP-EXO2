<h1>Exo 1</h1>

<p>
Créer une fonction personnalisée convertirMajRouge() permettant de transformer 
une chaîne de caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<H2>Le résultat</H2>

<style>
    .red {
      color : red;
      }
</style>

<?PHP

$texte = "Mon texte en paramètre";

function convertirMajRouge($texte) {
      $result = mb_strtoupper($texte); 
      $result = "<p class = 'red'>".$result."</p>";
      return $result;
}

echo convertirMajRouge($texte);

?>
