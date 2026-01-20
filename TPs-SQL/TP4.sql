PREPARE stmt_secure_tp1 FROM 'SELECT c.* FROM Commandes c JOIN Utilisateurs u ON c.utilisateur_id = u.id WHERE u.email LIKE ?';
SET @safe_input = '%example.com%';
EXECUTE stmt_secure_tp1 USING @safe_input;
DEALLOCATE PREPARE stmt_secure_tp1;

REVOKE ALL PRIVILEGES ON ma_bdd_ecommerce.* FROM 'app_ecommerce'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON ma_bdd_ecommerce.* TO 'app_ecommerce'@'localhost';
FLUSH PRIVILEGES;