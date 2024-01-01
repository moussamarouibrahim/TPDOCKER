<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
#$user = 'MYSQL_USER';
#myuser
$user = 'myuser';
//database user password
$pass = 'mypassword';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

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
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> bienvenu sur page d'inscrption de l'etudiant  </h1>





<div class="container">
<form action="nouveau.php" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="fname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lname" placeholder="Your last name..">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="formation">Formation </label>
    </div>
    <div class="col-75">
      <textarea id="formation" name="formation" placeholder="donner le nom de la formation.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>


<?php
$base_de_donnees = "mydatabase"; // Remplacez par le nom de votre base de données
mysqli_select_db($conn, $base_de_donnees) or die('Erreur lors de la sélection de la base de données : ' . mysqli_error($conn));

$nom=$_POST['fname'];
$prenom=$_POST['lname'];
$formation= $_POST['formation'];
$req = "INSERT INTO etudiant(nom, prenom, formation) VALUES ('$nom', '$prenom', '$formation')";
mysqli_query($conn, $req) or die(mysqli_error($conn));



$sql = "SELECT * FROM etudiant";
        $resultat = mysqli_query($conn , $sql);


        if (!$resultat) {
            die('Erreur dans la requête SQL : ' . mysqli_error($conn));
        }
        


        // Boucle pour afficher les données dans le tableau
        while ($ligne = mysqli_fetch_assoc($resultat)) {
            echo "<tr>";
            echo "<td>" . $ligne['id'] . "</td>";
            echo "<td>" . $ligne['nom'] . "</td>";
            echo "<td>" . $ligne['prenom'] . "</td>";
            echo "<td>" . $ligne['a'] . "</td>";
            echo "<td>" . $ligne['City'] . "</td>";
            // Ajoutez d'autres cellules pour d'autres colonnes si nécessaire
            echo "</tr>";
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