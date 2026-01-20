<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Site PHP</title>
</head>
<body>
    <h1>Bienvenue sur mon application</h1>

<footer>
        <p>&copy; <?php echo date("Y"); ?> Mon Site Web</p>
    </footer>
</body>
</html>

<?php
include 'header.php';
$message = "Bienvenue sur notre site sécurisé !";
echo "<p>$message</p>";
echo "<p>Date et heure : " . date('d/m/Y H:i:s') . "</p>";
include 'footer.php';
?>

<?php
$nombre1 = 45;
$nombre2 = 60;

echo "Addition : " . ($nombre1 + $nombre2) . "<br>";
echo "Soustraction : " . ($nombre1 - $nombre2) . "<br>";
echo "Multiplication : " . ($nombre1 * $nombre2) . "<br>";
echo "Division : " . ($nombre1 / $nombre2) . "<br>";

$somme = $nombre1 + $nombre2;

if ($somme > 100) {
    echo "Grand nombre !";
} else {
    echo "Petit nombre.";
}
?>