<?php
// traitement_login.php (VULNÉRABLE - TEST LOCAL UNIQUEMENT)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    
    echo "<h2>Connexion réussie</h2>";
    // AFFICHAGE SANS ÉCHAPPMENT = XSS possible si username contient HTML
    echo "Bienvenue, " . $username . " (email: " . $email . ")";
    
} else {
    echo "Aucune donnée reçue.";
}
