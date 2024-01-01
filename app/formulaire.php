<?php
require_once("connexion.php");
$nom=$_POST['fname'];
$prenom=$_POST['lname'];
$formation= $_POST['formation'];
$req = "INSERT INTO etudiant(nom, prenom, formation) VALUES ('$nom', '$prenom', '$formation')";
mysqli_query($conn, $req) or die(mysqli_error($conn));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

body {
    margin: 0; /* Supprime la marge par défaut du corps */
    padding: 0; /* Supprime le remplissage par défaut du corps */
    height: 100vh; /* Définit la hauteur du corps sur 100% de la hauteur de la vue (viewport) */
    /*background: linear-gradient(to right, #ff8a00, #e52e71); /* Dégradé de couleur de gauche à droite */
    background-color: #333;
    font-family: Arial, sans-serif; /* Police de caractères par défaut (modifiable selon vos préférences) */
    color: #fff; /* Couleur du texte */
}

</style>

</head>
<body>


<table border="1" width="100%">

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





    <a href="list.php"> Voir la list des utilisateur</a>
</body>
</html>
