CREATE VIEW VueCommandesDetails AS
SELECT 
    c.id AS commande_id,
    c.date_commande,
    c.montant_total,
    u.nom AS nom_client,
    u.email AS email_client
FROM Commandes c
JOIN Utilisateurs u ON c.utilisateur_id = u.id;

SELECT * FROM VueCommandesDetails;

START TRANSACTION;
UPDATE Produits SET stock = stock - 1 WHERE id = 5;
INSERT INTO Commandes (utilisateur_id, date_commande, montant_total) VALUES (1, NOW(), 49.99);
COMMIT;