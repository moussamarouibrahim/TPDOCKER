<?php
require_once("connexion.php");
$sql = "SELECT * FROM etudiant";
$resultat = mysqli_query($conn , $sql);
if (!$resultat) {
    die('Erreur dans la requête SQL : ' . mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste de utilisateurs </title>



    <style>


body {
    margin: 0; /* Supprime la marge par défaut du corps */
    padding: 0; /* Supprime le remplissage par défaut du corps */
    height: 100vh; /* Définit la hauteur du corps sur 100% de la hauteur de la vue (viewport) */
    background-color: #333;
    /*background: linear-gradient(to right, #ff8a00, #e52e71); /* Dégradé de couleur de gauche à droite */
    font-family: Arial, sans-serif; /* Police de caractères par défaut (modifiable selon vos préférences) */
    color: #fff; /* Couleur du texte */
}
    </style>
</head>
<body>

<table border="1" width="100%">

<tr> 

<th> matricule</th> <th>nom</th> <th> prenom</th><th>formation</th><th> supprimer</th> <th>modifier </th>
</tr>
<?php while ($ligne = mysqli_fetch_assoc($resultat)){?>
    <tr>
     <td><?php echo($ligne['matricule'])?></td>
     <td><?php echo($ligne['nom']) ?> </td>
     <td><?php echo($ligne['prenom'] )?> </td>
     
     <td><?php echo($ligne['formation'] )?> </td>
     <td><a href="sup.php?matricule=<?php echo($ligne['matricule'])?>">supprimer</a></td>
     <td><a href="modi.php?matricule=<?php echo($ligne['matricule'])?>">modifier </a></td>
    </tr>
<?php } ?>  
</table>
</body>
</html>