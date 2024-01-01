<?php


$sql = "SELECT * FROM etudiant";
$resultat = mysqli_query($conn , $sql);


if (!$resultat) {
    die('Erreur dans la requête SQL : ' . mysqli_error($conn));
}



// Boucle pour afficher les données dans le tableau
while ($ligne = mysqli_fetch_assoc($resultat)) {
    echo "<tr>";
    echo "<td>" . $ligne['matricule'] . "</td>";
    echo "<td>" . $ligne['nom'] . "</td>";
    echo "<td>" . $ligne['prenom'] . "</td>";
    echo "<td>" . $ligne['formation'] . "</td>";
    // Ajoutez d'autres cellules pour d'autres colonnes si nécessaire
}

// Fermeture de la connexion



if ($resultat && mysqli_num_rows($resultat) > 0) {
    // Le résultat contient des valeurs
    while ($row = mysqli_fetch_assoc($resultat)) {
        // Traitez les données ici
    }
} else {
    // Le résultat est vide (aucune valeur n'a été trouvée)
    echo "Aucune valeur trouvée.";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">

<tr>

<td>Nom</td>
<td><?php echo($nom)?></td>
</tr>

<tr>

<td>prenom</td>
<td><?php echo($prenom)?></td>
</tr>


<tr>

<td>formation</td>
<td><?php echo($formation)?></td>
</tr>
</table>
</body>
</html>