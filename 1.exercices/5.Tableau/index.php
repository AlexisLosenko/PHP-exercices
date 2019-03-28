<?php
//Exercice 01
   $mois= array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
//Exercice 02

//Exercice 03
   $departementAuvergneRhoneAlpes = array(1 => "Ain", 3 => "Allier", 7 => "Ardèche", 15 => "Cantal", 26 => "Drôme",
                                          38 => "Isère", 42 => "Loire", "Haute-Loire", 63 => "Puy-de-dôme",
                                          69 => "Rhône", 73 => "Savoie", "Haute-Savoie");
//Exercice 04
   $amis = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les tableaux</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 5 : Les tableaux</h2>
<?php
//Exercice 01
   echo "<h3>Exercice 01</h3>";
//Exercice 02
   echo "<h3>Exercice 02</h3>";
   echo "<p>".$mois[2]."</p>";
   echo "<p>".$mois[5]."</p>";
   foreach ($mois as $i => $value) {
        $mois[$i] = str_replace("aout", "août", $value);
   }
   echo "<p>".$mois[7]."</p>";
//Exercice 03
   echo "<h3>Exercice 03</h3>";
   echo "<p>".$departementAuvergneRhoneAlpes[69]."</p>";
   $departementAuvergneRhoneAlpes[57]="Moselle";
   ksort($departementAuvergneRhoneAlpes);
   foreach ($departementAuvergneRhoneAlpes as $i => $value) {
        echo "<p>".$i.":".$value."</p>";
   }
//Exercice 04
   echo "<h3>Exercice 04</h3>";
   foreach ($amis as $i => $value) {
        echo "<p>Salut ".$value.", devine quoi ! Je me marie dans samedi dans deux semaines !
        J'espère te compter parmi les invités ! Gros bisous :)</p>";
   }
?>
</body>
</html>
