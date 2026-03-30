<!DOCTYPE html>
<html>
<head>
    <title>Administration des inscrits</title>
</head>
<body>

<h1>Liste des inscrits</h1>

<?php
if (file_exists("inscrits.txt") == false || filesize("inscrits.txt") == 0) {

    echo "<p>Aucun inscrit pour l'instant.</p>";

} else {

    $fichier = fopen("inscrits.txt", "r");
    $contenu = fread($fichier, filesize("inscrits.txt"));
    fclose($fichier);

    $nombre = substr_count($contenu, "\n");
    echo "<p>Nombre total d'inscrits : " . $nombre . "</p>";
?>

    <form method="post" action="admin_inscrits.php">
        <label>Rechercher un inscrit (prénom ou email) : </label>
        <input type="text" name="recherche" size="30" />
        <input type="submit" name="chercher" value="Rechercher" />
    </form>

<?php
    $lignes = file("inscrits.txt");
    $resultats = 0;

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>Email</th>";
    echo "<th>Niveau</th>";
    echo "<th>Date d'inscription</th>";
    echo "</tr>";

    for ($i = 0; $i < count($lignes); $i++) {

        $ligne = $lignes[$i];

        if (trim($ligne) != "") {

            $afficher = true;

            if ($recherche_active == true) {
                if (stristr($ligne, $recherche) == false) {
                    $afficher = false;
                }
            }

            if ($afficher == true) {

                $champs = explode("|", $ligne);

                $prenom = trim($champs[0]);
                $email  = trim($champs[1]);
                $niveau = trim($champs[2]);
                $date   = trim($champs[3]);

                echo "<tr>";
                echo "<td>" . $prenom . "</td>";
                echo "<td>" . $email . "</td>";
                echo "<td>" . $niveau . "</td>";
                echo "<td>" . $date . "</td>";
                echo "</tr>";

                $resultats = $resultats + 1;
            }
        }
    }

    echo "</table>";

    if ($recherche_active == true && $resultats == 0) {
        echo "<p>Aucun inscrit ne correspond à votre recherche.</p>";
    }
}
?>

<br />
<a href="inscription.php">Retour au formulaire d'inscription</a>

</body>
</html>

<?php
$recherche = "";
$recherche_active = false;

if (isset($_POST["chercher"])) {
    if (!empty($_POST["recherche"])) {
        $recherche = $_POST["recherche"];
        $recherche_active = true;
    }
}
?>