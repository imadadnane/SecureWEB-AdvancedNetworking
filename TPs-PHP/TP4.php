<?php
try {
    $host = 'localhost';
    $dbname = 'ecommerce_securise_db';
    $username = 'app_ecommerce';
    $password = 'votre_mot_de_passe'; 

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Produits";
    $stmt = $pdo->query($sql);

    echo '<div class="container">';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="produit-card">';
        echo '<h2>' . htmlspecialchars($row['nom']) . '</h2>';
        echo '<p>' . htmlspecialchars($row['description']) . '</p>';
        echo '<span class="prix">' . htmlspecialchars($row['prix']) . ' €</span>';
        echo '</div>';
    }
    echo '</div>';

} catch (PDOException $e) {
    echo "Erreur de connexion..."; 
}
?>