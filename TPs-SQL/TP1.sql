SELECT u.nom, u.email 
FROM Utilisateurs u 
LEFT JOIN Commandes c ON u.id = c.utilisateur_id 
WHERE c.id IS NULL;

SELECT p.nom, SUM(lc.quantite) as total_vendu 
FROM Produits p 
JOIN LigneCommandes lc ON p.id = lc.produit_id 
GROUP BY p.id, p.nom 
ORDER BY total_vendu DESC 
LIMIT 3;

SELECT u.nom, u.prenom, COALESCE(SUM(c.montant_total), 0) as total_depense 
FROM Utilisateurs u 
LEFT JOIN Commandes c ON u.id = c.utilisateur_id 
GROUP BY u.id, u.nom, u.prenom;

SELECT c.* FROM Commandes c 
JOIN Utilisateurs u ON c.utilisateur_id = u.id 
WHERE u.email LIKE '%example.com%' 
AND c.date_commande >= DATE_SUB(NOW(), INTERVAL 30 DAY);

SELECT c.nom 
FROM Categories c 
JOIN Produits p ON c.id = p.categorie_id 
GROUP BY c.id, c.nom 
HAVING COUNT(p.id) > 10;