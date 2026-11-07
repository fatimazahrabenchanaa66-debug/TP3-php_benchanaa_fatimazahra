<?php

define("NOTE_MIN", 0);
define("NOTE_MAX", 20);

if (
    isset($_POST["nom"]) &&
    isset($_POST["note_info"]) &&
    isset($_POST["note_math"])
) {

    if (
        !empty($_POST["nom"]) &&
        $_POST["note_info"] !== "" &&
        $_POST["note_math"] !== ""
    ) {

        $nom = htmlspecialchars($_POST["nom"]);
        $noteInfo = $_POST["note_info"];
        $noteMath = $_POST["note_math"];

        if (
            $noteInfo >= NOTE_MIN &&
            $noteInfo <= NOTE_MAX &&
            $noteMath >= NOTE_MIN &&
            $noteMath <= NOTE_MAX
        ) {

            echo "<h2>Récapitulatif</h2>";

            echo "Nom : $nom <br>";
            echo "Note Informatique : $noteInfo <br>";
            echo "Note Mathématiques : $noteMath <br>";

        } else {

            echo "Erreur : les notes doivent être comprises entre "
                . NOTE_MIN . " et " . NOTE_MAX;

        }

    } else {

        echo "Erreur : tous les champs sont obligatoires.";

    }

} else {

    echo "Erreur : formulaire incomplet.";

}
?>


<h1> exercice 4.3</h1>

<?php

define("NOTE_MIN", 0);
define("NOTE_MAX", 20);

if (
    isset($_POST['nom']) &&
    isset($_POST['note_info']) &&
    isset($_POST['note_math']) &&
    !empty($_POST['nom'])
) {

    $nom = htmlspecialchars($_POST['nom']);
    $noteInfo = $_POST['note_info'];
    $noteMath = $_POST['note_math'];

    if (
        $noteInfo >= NOTE_MIN &&
        $noteInfo <= NOTE_MAX &&
        $noteMath >= NOTE_MIN &&
        $noteMath <= NOTE_MAX
    ) {

        echo "<h2>Récapitulatif</h2>";

        echo "Nom : $nom <br>";
        echo "Note Info : $noteInfo <br>";
        echo "Note Math : $noteMath <br>";

        $moyenne = ($noteInfo + $noteMath) / 2;
        echo "Moyenne : $moyenne";

    } else {

        echo "Erreur : les notes doivent être comprises entre "
             . NOTE_MIN . " et " . NOTE_MAX;

    }

} else {

    echo "Erreur : formulaire incomplet.";

}

?>

/*
Pourquoi préférer POST à GET pour un mot de passe ?

Parce que :

les données POST ne sont pas affichées dans l'URL ;
elles ne sont pas visibles directement dans l'historique ;
elles permettent d'envoyer des données plus volumineuses ;
elles sont plus adaptées aux données sensibles (mot de passe, informations personnelles).
Que contient $_REQUEST ?

$_REQUEST est un tableau associatif qui regroupe les données provenant de :
    $_GET
$_POST
$_COOKIE
*/


//exercice 5.1

$fichier = fopen("data/notes.csv", "a");

fputcsv(
    $fichier,
    [$nom, $noteInfo, $noteMath],
    ";"
);

fclose($fichier);
//exercice 5.2
if (
    $noteInfo >= NOTE_MIN && $noteInfo <= NOTE_MAX &&
    $noteMath >= NOTE_MIN && $noteMath <= NOTE_MAX
) {

    $fichier = fopen("data/notes.csv", "a");

    fputcsv(
        $fichier,
        [$nom, $noteInfo, $noteMath],
        ";"
    );

    fclose($fichier);

    $moyenne = ($noteInfo + $noteMath) / 2;

    echo "Nom : $nom <br>";
    echo "Info : $noteInfo <br>";
    echo "Math : $noteMath <br>";
    echo "Moyenne : $moyenne";
}