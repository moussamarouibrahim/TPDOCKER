<?php
require_once("connexion.php");
$matricule=$_GET['matricule'];
$req = "SELECT *  FROM etudiant WHERE matricule = $matricule";
$resultat=mysqli_query($conn, $req) or die(mysqli_error($conn));
$ligne = mysqli_fetch_assoc($resultat); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier </title>



    <style>
  h1 {
  text-align: center;
}

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

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
<div class="container">
<form action="moditraitement.php" method="post">

<div class="row">
    <div class="col-25">
      <label for="matricule">matricule</label>
    </div>
    <div class="col-75">
      <input type="text" name="matricule" value="<?php echo($ligne['matricule'])?>">
    </div>
  </div>



  <div class="row">
    <div class="col-25">
      <label for="nom">nom</label>
    </div>
    <div class="col-75">
      <input type="text" name="nom" value="<?php echo($ligne['nom'])?>">
    </div>
  </div>





  <div class="row">
    <div class="col-25">
      <label for="prenom">prenom</label>
    </div>
    <div class="col-75">
      <input type="text" name="prenom" value="<?php echo($ligne['prenom'])?>">
    </div>
  </div>






 
  
  <div class="row">
    <div class="col-25">
      <label for="formation">Formation </label>
    </div>
    <div class="col-75">
      <input type="text" name="formation" value="<?php echo($ligne['formation'])?>">
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="modifier">
  </div>
  </form>
</div>
<?php
// Votre code pour exécuter des requêtes et manipuler les résultats

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>
</body>
</html>