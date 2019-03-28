<?php
//Exercice 01
    $age=27;
//Exercice 02
    $isEasy=true;
//Exercice 03
    $genre="Homme";
//Exercice 04
    $magnitude=3;
//Exercice 05

//Exercice 06

//Exercice 07

//Exercice 08

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les conditions</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 2 : Les conditions</h2>
<?php
//Exercice 01
    echo "<h3>Exercice 01</h3>";
    if ($age < 18){
        echo "<p>Vous êtes mineur !</p>";
    } else {
        echo "<p>Vous êtes majeur !</p>";
    }
//Exercice 02
    echo "<h3>Exercice 02</h3>";
    if ($isEasy == 1){
        echo "<p>C'est facile !  ";
    } else {
        echo "<p>C'est dur !  ";
    }
    if ($isEasy == true){
        echo "<==>  C'est facile !</p>";
    } else {
        echo "&  C'est dur !</p>";
    }
//Exercice 03
    echo "<h3>Exercice 03</h3>";
    if (($age < 18)&&($genre == "Homme")){
        echo "<p>Vous êtes un homme et vous êtes mineur !</p>";
    } else if (($age > 18)&&($genre == "Homme")){
        echo "<p>Vous êtes un homme et vous êtes majeur !</p>";
    } else if (($age < 18)&&($genre == "Femme")){
        echo "<p>Vous êtes une femme et vous êtes mineure !</p>";
    } else if (($age > 18)&&($genre == "Femme")){
        echo "<p>Vous êtes une femme et vous êtes majeure !</p>";
    }
//Exercice 04
    echo "<h3>Exercice 04</h3>";
    switch($magnitude){
        case 1: echo "<p>Micro-séisme impossible à ressentir.</p>"; break;
        case 2: echo "<p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>"; break;
        case 3: echo "<p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>"; break;
        case 4: echo "<p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>"; break;
        case 5: echo "<p>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments
        présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>"; break;
        case 6: echo "<p>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km)
        autour de l'épicentre.</p>"; break;
        case 7: echo "<p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de
        la distance.</p>"; break;
        case 8: echo "<p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de
        kilomètres.</p>"; break;
        case 9: echo "<p>Séisme capable de tout détruire sur une très vaste zone.</p>"; break;
    }
//Exercice 05
    echo "<h3>Exercice 05</h3>";
    echo "<p>if (\$maVariable != 'Homme'){ echo 'C'est une développeuse !!!';} else { echo 'C'est un développeur !!!';}</p>";
//Exercice 06
    echo "<h3>Exercice 06</h3>";
    echo "<p>if (\$monAge >= 18){ echo 'Tu es majeur';} else { echo 'Tu n'es pas majeur';}</p>";
//Exercice 07
    echo "<h3>Exercice 07</h3>";
    echo "<p>if (\$monAge == false){ echo 'c'est pas bon !!!';} else { echo 'c'est ok';}</p>";
//Exercice 08
    echo "<h3>Exercice 08</h3>";
    echo "<p>if (\$maVariable){ echo 'c'est ok !!';} else { echo 'c'est pas bon !!!';}</p>";
?>
</body>
</html>
