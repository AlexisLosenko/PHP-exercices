<?php
//Exercice 01
   $nom=$_GET['nom'];
   $prenom=$_GET['prenom'];
//Exercice 02
   $age=$_GET['age'];
//Exercice 03
   $dateDebut=$_GET['dateDebut'];
   $dateFin=$_GET['dateFin'];
//Exercice 04
   $langage=$_GET['langage'];
   $serveur=$_GET['serveur'];
//Exercice 05
   $semaine=$_GET['semaine'];
//Exercice 06
   $batiment=$_GET['batiment'];
   $salle=$_GET['salle'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les paramètres</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 6 : Les paramètres</h2>
<?php
//Exercice 01
   echo "<h3>Exercice 01</h3>";
   if (isset($nom)){
     echo "<p>la variable nom contient: '".$nom."' ";
   }
   if (isset($prenom)){
     echo "& la variable prenom contient: '".$prenom."'</p>";
   }
//Exercice 02
   echo "<h3>Exercice 02</h3>";
   if (isset($age)){
     echo "<p>la variable age contient: '".$age."'</p>";
   } else {
     echo "<p>la variable age ne contient aucune valeur !</p>";
   }
//Exercice 03
   echo "<h3>Exercice 03</h3>";
   if (isset($dateDebut)){
     echo "<p>la variable dateDebut contient: '".$dateDebut."' ";
   }
   if (isset($dateFin)){
     echo "& la variable dateFin contient: '".$dateFin."'</p>";
   }
//Exercice 04
   echo "<h3>Exercice 04</h3>";
   if (isset($langage)){
     echo "<p>la variable langage contient: '".$langage."' ";
   }
   if (isset($serveur)){
     echo "& la variable serveur contient: '".$serveur."'</p>";
   }
//Exercice 05
   echo "<h3>Exercice 05</h3>";
   if (isset($semaine)){
     echo "<p>la variable semaine contient: '".$semaine."'</p>";
   }
//Exercice 06
   echo "<h3>Exercice 06</h3>";
   if (isset($batiment)){
     echo "<p>la variable batiment contient: '".$batiment."' ";
   }
   if (isset($salle)){
     echo "<p>la variable salle contient: '".$salle."' ";
   }
?>
</body>
</html>
