PREPARE stmt_login FROM 'SELECT * FROM Utilisateurs WHERE email = ? AND mot_de_passe_hache = ?';
SET @email_input = 'user@example.com'; 
SET @mdp_input = 'hash1234';
EXECUTE stmt_login USING @email_input, @mdp_input;
DEALLOCATE PREPARE stmt_login;

PREPARE stmt_search FROM 'SELECT * FROM Produits WHERE nom_produit LIKE ?';
SET @search_input = CONCAT('%', 'terme_recherche', '%');
EXECUTE stmt_search USING @search_input;
DEALLOCATE PREPARE stmt_search;

PREPARE stmt_delete FROM 'DELETE FROM Utilisateurs WHERE id_utilisateur = ?';
SET @id_input = 1;
EXECUTE stmt_delete USING @id_input;
DEALLOCATE PREPARE stmt_delete;