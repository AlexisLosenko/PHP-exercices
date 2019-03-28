<?php
//Exercice 01
    $nom="Aubert";
    $prenom="Amory";
    $age=27;
//Exercice 02
    $km=1;
//Exercice 03
    $string="string";
    $int="5";
    $float="1.2345";
    $boolean=true;
//Exercice 04
    $int2;
    settype($int2, "integer");
//Exercice 05
    $v1=3+4;
    $v2=5*20;
    $v3=45/5;
//Exercice 06
    $prix=785;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les variables</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 1 : Les variables</h2>
<?php
//Exercice 01
    echo "<h3>Exercice 01</h3><p>Bonjour ".$prenom.", enfant de la famille ".$nom." ayant atteint de level ".$age." !</p>";
//Exercice 02
    echo "<h3>Exercice 02</h3><p>".$km." => ";
    $km=3;
    echo $km." => ";
    $km=125;
    echo $km."</p>";
//Exercice 03
    echo "<h3>Exercice 03</h3><p>string=".$string.",   int=".$int.",   float=".$float.",   boolean=".$boolean."</p>";
//Exercice 04
    echo "<h3>Exercice 04</h3><p>".$int2." => ";
    $int2=10;
    echo $int2."</p>";
//Exercice 05
    echo "<h3>Exercice 05</h3><p>v1=".$v1.",   v2=".$int.",   v3=".$v3."</p>";
//Exercice 06
    echo "<h3>Exercice 06</h3>";
    $ristourne=$prix*30/100;
    $newPrix=$prix-$ristourne;
    echo "<p>Prix de départ: ".$prix."€ Ristourne: ".$ristourne."€ Nouveau prix: ".$newPrix."€</p>";
?>
</body>
</html>
