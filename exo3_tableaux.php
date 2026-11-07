
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>TP 02 PHP</title></head>
<body>
    <h1> Exercice 3.1</h1>
    <?php
/**
 * Auteur : Étudiant
 * Objectif : Manipulation des tableaux et statistiques
 * Date : 2026-10-24
 */

require 'config.php';
require_once 'exo2_flux.php'; // Pour la fonction mention()
?>
<h1> Exercice 3.2</h1>
<?php
$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];

$modules = ["PHP", "JavaScript", "Base de données"];
echo "Affichage avec foreach :<br>";
foreach ($modules as $mod) {
    echo "- $mod<br>";
}
echo "Accès direct : " . $modules[0] . ", " . $modules[1] . "<br>";
?>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Note</th>
        <th>Mention</th>
    </tr>
    <?php foreach ($notes as $nom => $note): ?>
        <?php $style = ($note < SEUIL) ? 'style="color: red;"' : ''; ?>
        <tr <?= $style ?>>
            <td><?= htmlspecialchars($nom) ?></td>
            <td><?= $note ?></td>
            <td><?= mention($note) ?></td>
        </tr>
    <?php endforeach; ?>
</table>


<h1> Exercice 3.2</h1>
<?php
$somme = 0;
$compteur = count($notes);
$max_note = -INF;
$min_note = INF;
$meilleur_etudiant = "";
$pire_etudiant = "";

foreach ($notes as $nom => $note) {
    $somme += $note;
    if ($note > $max_note) {
        $max_note = $note;
        $meilleur_etudiant = $nom;
    }
    if ($note < $min_note) {
        $min_note = $note;
        $pire_etudiant = $nom;
    }
}
$moyenne = $compteur > 0 ? $somme / $compteur : 0;

echo "Somme : $somme, Moyenne : $moyenne, Max : $max_note, Min : $min_note<br>";

// Vérification avec fonctions natives
echo "Vérif - Somme : " . array_sum($notes) . ", Max : " . max($notes) . ", Min : " . min($notes) . "<br>";

// Tableau des effectifs par mention
$effectifs = [];
foreach ($notes as $note) {
    $m = mention($note);
    if (!isset($effectifs[$m])) {
        $effectifs[$m] = 0;
    }
    $effectifs[$m]++;
}
echo "Effectifs : ";
print_r($effectifs);
echo "<br>";

// -------------------------------------------------------------------------
// Exercice 3.4 : Tri
// -------------------------------------------------------------------------
function afficher($tab) {
    foreach ($tab as $k => $v) {
        echo "$k => $v<br>";
    }
    echo "<hr>";
}

echo "<h3>1. Tri par noms croissants (ksort)</h3>";
$t1 = $notes; ksort($t1); afficher($t1);

echo "<h3>2. Tri par notes décroissantes (arsort)</h3>";
$t2 = $notes; arsort($t2); afficher($t2);

echo "<h3>3. Tri par noms décroissants (krsort)</h3>";
$t3 = $notes; krsort($t3); afficher($t3);

echo "<h3>4. Tri par notes croissantes (asort)</h3>";
$t4 = $notes; asort($t4); afficher($t4);

// Question : Sur un tableau indexé comme $modules, on utilise sort() ou rsort().

<?php
$sa = ["x" => 1, "y" => 2];
$sb = ["y" => 2, "x" => 1];
echo
var_dump($a==$b)
// $sa + $sb : Union (conserve les clés de $sa, ajoute les clés non présentes de $sb) -> ["x" => 1, "y" => 2]
// $sa == $sb : true (mêmes paires clé/valeur, l'ordre importe peu)
// $sa === $sb : false (l'ordre des clés ou le type diffère/l'ordre exact compte pour l'égalité stricte en PHP).
?>
///
<?php
require 'config.php';
require_once 'exo2_flux.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 02 PHP</title>
</head>
<body>

<?php include 'includes/entete_inc.php'; ?>
<?php include 'includes/menu_inc.php'; ?>

<!-- Tout ton code actuel de l'exercice 3 reste ici -->

<h1>Exercice 3.1</h1>

<?php
$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    // ...
];
?>

<!-- le reste de ton fichier inchangé -->

<?php include 'includes/pied_inc.php'; ?>

</body>
</html>