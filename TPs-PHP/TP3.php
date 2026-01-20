<?php
$films = ["Inception", "Matrix", "Interstellar", "Avatar", "Gladiator"];
echo $films[2] . "<br><br>";

foreach ($films as $film) {
    echo $film . "<br>";
}
echo "<br>";

$livre = [
    "titre" => "Le Petit Prince",
    "auteur" => "Antoine de Saint-Exupéry",
    "annee_publication" => 1943,
    "genre" => "Conte"
];
echo $livre["titre"] . " - " . $livre["auteur"] . "<br><br>";

foreach ($livre as $cle => $valeur) {
    echo "$cle : $valeur <br>";
}
echo "<br>";

$etudiants = [
    ["nom" => "Dupont", "prenom" => "Jean", "notes" => [12, 15, 14]],
    ["nom" => "Martin", "prenom" => "Sophie", "notes" => [18, 16, 19]],
    ["nom" => "Durand", "prenom" => "Paul", "notes" => [10, 05, 12]]
];

echo $etudiants[1]["prenom"] . " " . $etudiants[1]["nom"] . "<br>";
echo $etudiants[0]["notes"][0] . "<br><br>";

foreach ($etudiants as $etudiant) {
    $moyenne = array_sum($etudiant["notes"]) / count($etudiant["notes"]);
    echo $etudiant["prenom"] . " " . $etudiant["nom"] . " - Moyenne : " . number_format($moyenne, 2) . "<br>";
}
?>