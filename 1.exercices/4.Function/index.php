<?php
//Exercice 01
   function vrai(){
        return "true";
    }
//Exercice 02
    function chaineDeCaracteres($chaine){
        return $chaine;
    }
//Exercice 03
    function concat($prenom,$nom){
        return $prenom.$nom;
    }
//Exercice 04
    function compare($nb1,$nb2){
        if ($nb1 > $nb2){
            return "le premier nombre est plus grand !";
        } else if ($nb1 < $nb2){
            return "le premier nombre est plus petit !";
        } else {
            return "les deux nombres sont identiques !";
        }
    }
//Exercice 05
    function concat2($nb3,$chaine1){
        return $nb3.$chaine1;
    }
//Exercice 06
    function bonjour($prenom1,$nom1,$age){
        return "Bonjour ".$nom1." ".$prenom1.", tu as ".$age."ans.";
    }
//Exercice 07
    function ageSex($age1,$genre){
        if (($age1 < 18)&&($genre == "Homme")){
            return "<p>Vous êtes un homme et vous êtes mineur !</p>";
        } else if (($age1 > 18)&&($genre == "Homme")){
            return "<p>Vous êtes un homme et vous êtes majeur !</p>";
        } else if (($age1 < 18)&&($genre == "Femme")){
            return "<p>Vous êtes une femme et vous êtes mineure !</p>";
        } else if (($age1 > 18)&&($genre == "Femme")){
            return "<p>Vous êtes une femme et vous êtes majeure !</p>";
        } else {
            return "erreur";
        }
    }
//Exercice 08
    function somme($x1,$x2,$x3){
        $x1=10;
        $x2=20;
        $x3=30;
        return $x1+$x2+$x3;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les fonctions</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 4 : Les fonctions</h2>
<?php
//Exercice 01
    echo "<h3>Exercice 01</h3><p>";
    echo vrai()."</p>";
//Exercice 02
    echo "<h3>Exercice 02</h3><p>";
    echo chaineDeCaracteres("bonjour à tous !")."</p>";
//Exercice 03
    echo "<h3>Exercice 03</h3><p>";
    echo concat("Amory","Aubert")."</p>";
//Exercice 04
    echo "<h3>Exercice 04</h3><p>";
    echo compare(7,5)."</p>";
//Exercice 05
    echo "<h3>Exercice 05</h3><p>";
    echo concat2(5,"coucou")."</p>";
//Exercice 06
    echo "<h3>Exercice 06</h3><p>";
    echo bonjour("Amory","Aubert",27)."</p>";
//Exercice 07
    echo "<h3>Exercice 07</h3><p>";
    echo ageSex(27,"Homme")."</p>";
//Exercice 08
    echo "<h3>Exercice 08</h3><p>";
    echo somme(1,2,3)."</p>";
?>
</body>
</html>
