<?php
require_once("connexion.php");
?>




<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
@keyframes slide {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}
h1{
  text-align: center;
  white-space: nowrap; /* Évite le retour à la ligne */
  overflow: hidden; /* Masque le texte qui dépasse */
  animation: slide 5s linear infinite; /* 5s de durée, défilement linéaire, répétition infinie */
  
}
body {
    margin: 0; /* Supprime la marge par défaut du corps */
    padding: 0; /* Supprime le remplissage par défaut du corps */
    height: 100vh; /* Définit la hauteur du corps sur 100% de la hauteur de la vue (viewport) */
    /*background: linear-gradient(to right, #ff8a00, #e52e71); /* Dégradé de couleur de gauche à droite */
    background-color: #333;
    font-family: Arial, sans-serif; /* Police de caractères par défaut (modifiable selon vos préférences) */
    color: #fff; /* Couleur du texte */
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<ul>
  <li><a href="formulaire.html">inscription nouveau etudiant</a></li>
  <li><a href="list.php">supprimer un etudiant</a></li>
  <li><a href="list.php">modifier un etudiant</a></li>
  <li><a href="list.php">liste des etudiants</a></li>
</ul>
<h1> bienvenu sur  la page d'inscrption de l'etudiant  </h1>



</body>
</html>

