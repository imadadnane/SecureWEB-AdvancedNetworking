<?php
$allowed_pages = ['home.php', 'about.php', 'contact.php'];
$page = $_GET['page'] ?? 'home.php';

if (in_array($page, $allowed_pages)) {
    include($page);
} else {
    echo "<h1>Page non trouvée ou accès non autorisé.</h1>";
    error_log("Tentative d'inclusion de fichier non autorisé : " . $page . " par " . $_SERVER['REMOTE_ADDR']);
}
?>