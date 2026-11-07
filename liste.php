<?php

require 'config.php';
require_once 'exo2_flux.php';

if (!file_exists("data/notes.csv")) {
    die("Le fichier notes.csv n'existe pas.");
}

$fichier = fopen("data/notes.csv", "r");

if (!$fichier) {
    echo "Erreur d'ouverture du fichier.";
    exit;
}

$sommeClasse = 0;
$nbEtudiants = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des notes</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Info</th>
        <th>Math</th>
        <th>Moyenne</th>
        <th>Mention</th>
    </tr>

<?php

while (($ligne = fgetcsv($fichier, 1000, ";")) !== false) {

    $nom = $ligne[0];
    $info = $ligne[1];
    $math = $ligne[2];

    $moyenne = ($info + $math) / 2;

    $sommeClasse += $moyenne;
    $nbEtudiants++;

    echo "<tr>";
    echo "<td>" . htmlspecialchars($nom) . "</td>";
    echo "<td>$info</td>";
    echo "<td>$math</td>";
    echo "<td>$moyenne</td>";
    echo "<td>" . mention($moyenne) . "</td>";
    echo "</tr>";
}

fclose($fichier);

?>

</table>

<?php

$moyenneClasse = ($nbEtudiants > 0)
    ? $sommeClasse / $nbEtudiants
    : 0;

echo "<h3>Moyenne générale de la classe : "
     . round($moyenneClasse, 2)
     . "</h3>";

?>

</body>
</html>

