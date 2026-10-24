<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>TP 02 PHP</title></head>
<body>
    <h1>Parti 0</h1>
    <?php

echo 'Hello PHP';

// Ceci est un commentaire sur une seule ligne

# Ceci est aussi un commentaire sur une seule ligne

/*
   Ceci est un commentaire
   sur plusieurs lignes
*/

?>
    <h1>exercice 1.1</h1>
    <?php

// Variables valides
$x = 10;          // Valide : commence par une lettre après $
$_x = 20;         // Valide : commence par un underscore (_)
$Prix_HT = 30;    // Valide : lettres, chiffres et underscore autorisés
$état = "Actif";  // Valide : commence par une lettre

// Variables invalides : ne pas déclarer

// $2x = 40;
// Invalide : une variable ne peut pas commencer par un chiffre

// $x-y = 50;
// Invalide : le caractère - est interprété comme un opérateur de soustraction

// $prix ht = 60;
// Invalide : les espaces ne sont pas autorisés dans un nom de variable

echo "<h2>Variables valides</h2>";

echo "\$x = $x <br>";
echo "\$_x = $_x <br>";
echo "\$Prix_HT = $Prix_HT <br>";
echo "\$état = $état <br>";

echo "<h2>Variables distinctes</h2>";

$a = "minuscule";
$A = "majuscule";

echo "\$a = $a <br>";
echo "\$A = $A <br>";

/*
Conclusion :
PHP est sensible à la casse (case-sensitive).
Ainsi, $a et $A sont deux variables différentes.
*/

?>
    <h1>exercice 1.2</h1>
<?php

require 'config.php';

echo "<h2>Affichage des constantes</h2>";
echo "Etablissement : " . ETABLISSEMENT . "<br>";
echo "Note minimale : " . NOTE_MIN . "<br>";
echo "Note maximale : " . NOTE_MAX . "<br>";
echo "Seuil : " . SEUIL . "<br><br>";

echo "<h2>Test avec defined()</h2>";

echo "SEUIL : ";
echo defined('SEUIL') ? "définie" : "non définie";
echo "<br>";

echo "INCONNUE : ";
echo defined('INCONNUE') ? "définie" : "non définie";
echo "<br>";

/*
Réponse 1 :
Si on affiche une constante non définie, PHP génère une erreur
("Undefined constant") car la constante n'existe pas.
 
Réponse 2 :
const :
- Utilisé pour définir une constante dans le code.
- La valeur doit être connue à l'écriture du programme.
- Ne peut pas être placé dans une condition ou une boucle.
 
define() :
- Fonction PHP permettant de créer une constante à l'exécution.
- Peut être utilisé dans une condition, une boucle ou une fonction.
- Le nom de la constante est passé sous forme de chaîne de caractères.
*/

?>
<h1>exercice 1.3</h1>
<?php

$prix_ht = 60;
$tva = 20;

// Calcul du montant de la TVA
$montant_tva = $prix_ht * $tva / 100;

// Calcul du prix TTC
$prix_ttc = $prix_ht + $montant_tva;

// Affichage
echo "Le prix TTC du produit est de " . $prix_ttc . " €.";

?>
<h1>exercice 1.4</h1>
<?php

echo "<h2>1. Conversion en chaîne (string)</h2>";

$test = 42;
$test = (string) $test;

var_dump($test);

echo "<hr>";

echo "<h2>2. Conversion en booléen</h2>";

// Prédictions :
// 0      -> false
// 0.0    -> false
// "0"    -> false
// ""     -> false
// "abc"  -> true
// []     -> false
// null   -> false

var_dump((bool) 0);
var_dump((bool) 0.0);
var_dump((bool) "0");
var_dump((bool) "");
var_dump((bool) "abc");
var_dump((bool) []);
var_dump((bool) null);

echo "<hr>";

echo "<h2>3. Conversions numériques</h2>";

// Prédictions :
// (int) 3.9      -> 3
// (int) "12abc" -> 12
// (float) "1.5e3" -> 1500
// (int) true    -> 1

var_dump((int) 3.9);
var_dump((int) "12abc");
var_dump((float) "1.5e3");
var_dump((int) true);

echo "<hr>";

echo "<h2>4. Représentations du nombre 255</h2>";

$decimal = 255;
$hexadecimal = 0xFF;
$octal = 0377;
$binaire = 0b11111111;

echo "Décimal : $decimal <br>";
echo "Hexadécimal : $hexadecimal <br>";
echo "Octal : $octal <br>";
echo "Binaire : $binaire <br>";

?>
<h1>exercice 1.5</h1>
<?php

$traitees = "égales à";
$ici = 2;

// 1
echo "Ahmed a dit : \"J'ai réussi\"";
echo "<br>";

// 2
echo "Voulez-vous supprimer C:\\*.*?";
echo "<br>";

// 3
echo 'Ceci n\'affichera pas \n de nouvelle ligne (le \n doit apparaître tel quel)';
echo "<br>";

// 4
echo 'Les variables ne seront pas $traitees $ici (variables non interprétées)';
echo "<br>";

// 5
echo "Les variables seront $traitees $ici (variables interprétées)";
echo "<hr>";

// Retirer les * avec trim()
$texte = "*Bonjour les développeurs*";
$texte_sans_etoiles = trim($texte, "*");

echo "Chaîne après trim() : " . $texte_sans_etoiles;
echo "<hr>";

// Afficher chaque caractère sur une ligne différente
echo "<h3>Affichage caractère par caractère :</h3>";

for ($i = 0; $i < strlen($texte_sans_etoiles); $i++) {
    echo $texte_sans_etoiles[$i] . "<br>";
}

?>
</body>