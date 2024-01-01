-- Créer l'utilisateur myuser
GRANT ALL PRIVILEGES ON mydatabase.* TO 'myuser'@'%';

-- Utiliser la base de données
USE mydatabase;

-- Créer la table ma_table


CREATE TABLE etudiant (
    matricule INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(200),
    prenom VARCHAR(50),
    formation VARCHAR(100)
);


