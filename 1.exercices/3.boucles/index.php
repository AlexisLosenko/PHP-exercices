<?php
//Exercice 01
    $dix=0;
//Exercice 02
    $un=0;
    $deux=45;
//Exercice 03
    $un1=100;
    $deux1=45;
//Exercice 04
    $dix1=1;
//Exercice 05

//Exercice 06

//Exercice 07

//Exercice 08

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les boucles</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 3 : Les boucles</h2>
<?php
//Exercice 01
    echo "<h3>Exercice 01</h3><p>";
    while ($dix <= 10) {
        echo $dix++;
        if ($dix <= 10){
            echo ", ";
        } else {
            echo ".</p>";
        }
    }
//Exercice 02
    echo "<h3>Exercice 02</h3><p>";
    while ($un < 20){
        echo $deux*$un;
        if ($un < 19){
            echo " (".$un++."), ";
        } else {
            echo " (".$un++.").</p>";
        }
    }
//Exercice 03
    echo "<h3>Exercice 03</h3><p>";
    while ($un1 >= 10){
        echo $deux1*$un1;
        if ($un1 > 10){
            echo " (".$un1--."), ";
        } else {
            echo " (".$un1--.").</p>";
        }
    }
//Exercice 04
    echo "<h3>Exercice 04</h3><p>";
    while ($dix1 < 10){
        echo $dix1+=$dix1/2;
        if ($dix1 < 10){
            echo ", ";
        } else {
            echo ".</p>";
        }
    }
//Exercice 05
    echo "<h3>Exercice 05</h3><p>";
    for($i = 1; $i <= 15; $i++){
        echo "On y arrive presque";
        if ($i < 15){
            echo ", ";
        } else {
            echo ".</p>";
        }
    }
//Exercice 06
    echo "<h3>Exercice 06</h3><p>";
    for($i = 20; $i >= 0; $i--){
        echo "C'est presque bon";
        if ($i > 0){
            echo ", ";
        } else {
            echo ".</p>";
        }
    }
//Exercice 07
    echo "<h3>Exercice 07</h3><p>";
    for($i = 1; $i <= 100; $i+=15){
        echo "On tient le bon bout";
        if ($i < 90){
            echo ", ";
        } else {
            echo ".</p>";
        }
    }
//Exercice 08
    echo "<h3>Exercice 08</h3><p>";
    for($i = 200; $i >= 0; $i-=12){
        echo "C'est presque bon";
        if ($i > 10){
            echo ", ";
        } else {
            echo ".</p>";
        }
    }
?>
</body>
</html>
