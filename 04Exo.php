<h1>Exo 4</h1>

<H2>Le résultat</H2>

<?php

function afficherTableHTML($capitales) {                                 // Définition de la fonction afficherTableHTML                        
   ksort($capitales);                                                    // Trier le tableau par ordre alphabétique des noms des pays
   $tableRows ="";                                                       // Générer les lignes du tableau HTML
   foreach ($capitales as $pays => $capitale) {
       $urlSite    = "https://fr.wikipedia.org/wiki/" . urlencode($capitale);
       $tableRows .= "<tr>";
       $tableRows .= "<td>" . strtoupper($pays) . "</td>";
       $tableRows .= "<td>" . htmlspecialchars($capitale) . "</td>";
       $tableRows .= "<td>" . "<a href='$urlSite' target='_blank'> LIEN </a></td>";
       $tableRows .= "</tr>";
   }
   return $tableRows;
}

$capitales = [                                                           // Tableau des capitales       
               "France"=>"Paris",
               "Allemagne"=>"Berlin",
               "USA"=>"Washington",
               "Italie"=>"Rome",
               "Espagne"=>"Madrid"];
?>

<html>
    <head>
        <style>
       table {
           border-collapse: collapse;
           width: 50%;
           margin: 20px auto;
       }
       th, td {
           border: 1px solid black;
           padding: 8px;
           text-align: center;
       }
       </style>
    </head>
       <body>
        <table>
            <tr>
                <th>PAYS</th>
                <th>CAPITALE</th>
                <th>LIEN WIKI</th>
            </tr>
            <?php echo afficherTableHTML($capitales); ?>
        </table>
    </body>
</html>


