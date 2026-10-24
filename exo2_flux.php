<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>TP 02 PHP</title></head>
<body>
    <h1>Exercice 2.1</h1>
<?php
require 'config.php';

/*
Fonction qui retourne la mention
selon la note obtenue.
*/

function mention($note)
{
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}

// Tests
$notes = [18, 15, 13, 10, 8];

foreach ($notes as $note) {
    echo "Note : " . $note . " → Mention : " . mention($note) . "<br>";
}

?>
    <h1>Exercice 2.2 </h1>
    <?php

$mois = date("m");

switch ($mois) {
    case "01":
        echo "Janvier";
        break;
    case "02":
        echo "Février";
        break;
    case "03":
        echo "Mars";
        break;
    case "04":
        echo "Avril";
        break;
    case "05":
        echo "Mai";
        break;
    case "06":
        echo "Juin";
        break;
    case "07":
        echo "Juillet";
        break;
    case "08":
        echo "Août";
        break;
    case "09":
        echo "Septembre";
        break;
    case "10":
        echo "Octobre";
        break;
    case "11":
        echo "Novembre";
        break;
    case "12":
        echo "Décembre";
        break;
    default:
        echo "Mois inconnu";
}
?>
<h1>Exercice 2.3 </h1>
<?php

echo "<h2>1. Triangle d'étoiles</h2>";

for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<h2>2. While</h2>";

$i = 0;

while ($i <= 20) {

    if ($i == 10) {
        echo "<b>$i</b><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;
}
echo "<h2>3. Continue</h2>";

for ($i = 0; $i <= 10; $i++) {

    if ($i % 2 != 0) {
        continue;
    }

    echo "$i ";
}
echo "<h2>4. Break 2</h2>";

$i = 1;

while (true) {

    switch ($i) {

        case 5:
            echo "At 5<br>";
            break;

        case 10:
            echo "At 10; quitting<br>";
            break 2;
    }

    $i++;
}
echo "<h2>5. Do...while</h2>";

$i = 0;

do {

    if ($i == 10) {
        echo "<b>$i</b><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;

} while ($i <= 20);
/*
while :
- La condition est vérifiée avant l'exécution du bloc.
- Le bloc peut ne jamais être exécuté.

do...while :
- Le bloc est exécuté une première fois,
  puis la condition est testée.
- Le bloc s'exécute donc toujours au moins une fois.
*/
?>


