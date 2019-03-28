<?php
//Exercice 05
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $genre=$_POST['genre'];
//Exercice 06
   $nom1=$_POST['nom1'];
   $prenom1=$_POST['prenom1'];
   $genre1=$_POST['genre1'];
   $fichier=$_POST['fichier'];
//Exercice 07
//Exercice 08
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les formulaires</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 7 : Les formulaires</h2>
<?php
//Exercice 01
   echo "<h3>Exercice 01</h3>";
?>
<form action="user.php" method="get">
   <p>Prénom
      <input type="text" name="prenom" placeholder="prénom">
   </p>
   <p>Nom
      <input type="text" name="nom" placeholder="nom">
   </p>
   <input type="submit" value="Valider">
</form>
<?php
//Exercice 01
   echo "<h3>Exercice 02</h3>";
?>
<form action="user.php" method="post">
   <p>Prénom
      <input type="text" name="prenom" placeholder="prénom">
   </p>
   <p>Nom
      <input type="text" name="nom" placeholder="nom">
   </p>
   <input type="submit" value="Valider">
</form>
<?php
//Exercice 05+06
   echo "<h3>Exercice 05+06</h3>";
   if ((!empty($nom))&&(!empty($prenom))){
      echo "<p>Bonjour, ".$genre." ".$prenom." ".$nom."</p>";
   } else {
      echo '<form action="#" method="post">
               <select name="genre">
                  <option value="Mr">Mr</option>
                  <option value="Mme">Mme</option>
               </select>
               <p>Prénom
                  <input type="text" name="prenom" placeholder="prénom">
               </p>
               <p>Nom
                  <input type="text" name="nom" placeholder="nom">
               </p>
               <input type="submit" value="Valider">
            </form>';
   }
//Exercice 07
    echo "<h3>Exercice 07</h3>";
    if ((!empty($nom1))&&(!empty($prenom1))&&(!empty($fichier))){
      $nomFichier = strstr($fichier,'.',true);
      $extFichier = strstr($fichier,'.');
      echo "<p>Bonjour, ".$genre1." ".$prenom1." ".$nom1.". Vous avez choisi le fichier '".$nomFichier."
      'dont l'extension est '".$extFichier."'</p>";
   } else {
      echo '<form action="#" method="post">
               <select name="genre1">
                  <option value="Mr">Mr</option>
                  <option value="Mme">Mme</option>
               </select>
               <p>Prénom
                  <input type="text" name="prenom1" placeholder="prénom">
               </p>
               <p>Nom
                  <input type="text" name="nom1" placeholder="nom">
               </p>
               <p><input type="file" name="fichier"></p>
               <input type="submit" value="Valider">
            </form>';
   }
//Exercice 08
   echo "<h3>Exercice 08</h3>";
   if (($extFichier == ".pdf")&&(!empty($extFichier))){
     echo "<p>le fichier transmis est de type PDF</p>";
   } else if (($extFichier != ".pdf")&&(!empty($extFichier))){
      echo "<p>le fichier transmis n'est pas de type PDF</p>";
   } else {
      echo "<p>Aucun fichier transmis !</p>";
   }
?>
</body>
</html>
