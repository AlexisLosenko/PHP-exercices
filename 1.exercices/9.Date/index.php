<?php
    setlocale(LC_ALL, 'fr_FR.utf8');
//Exercice 01

//Exercice 02

//Exercice 03
    switch(date(N)){
        case 1: $jour="Lundi"; break;
        case 2: $jour="Mardi"; break;
        case 3: $jour="Mercredi"; break;
        case 4: $jour="Jeudi"; break;
        case 5: $jour="Vendredi"; break;
        case 6: $jour="Samedi"; break;
        case 7: $jour="Dimanche"; break;
    }
    switch(date(n)){
        case 1: $mois="janvier"; break;
        case 2: $mois="février"; break;
        case 3: $mois="mars"; break;
        case 4: $mois="avril"; break;
        case 5: $mois="mai"; break;
        case 6: $mois="juin"; break;
        case 7: $mois="juillet"; break;
        case 8: $mois="août"; break;
        case 9: $mois="septembre"; break;
        case 10: $mois="octobre"; break;
        case 11: $mois="novembre"; break;
        case 12: $mois="Décembre"; break;
    }
//TP
    $month=$_POST['Mois'];
    $year=$_POST['annee'];
    switch($month){
        case 1: $Mois="janvier"; break;
        case 2: $Mois="février"; break;
        case 3: $Mois="mars"; break;
        case 4: $Mois="avril"; break;
        case 5: $Mois="mai"; break;
        case 6: $Mois="juin"; break;
        case 7: $Mois="juillet"; break;
        case 8: $Mois="août"; break;
        case 9: $Mois="septembre"; break;
        case 10: $Mois="octobre"; break;
        case 11: $Mois="novembre"; break;
        case 12: $Mois="Décembre"; break;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les dates</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/dates/assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/dates/assets/css/style.css">
</head>
<body>
<style>
    h3,h2{
        margin: 2px 0 5px;
        padding: 1px 0 1px;
    }
    p{
        margin: 0;
        padding: 0;
    }
</style>
<h2>Série 9 : Les dates</h2>
<?php
//Exercice 01
    echo "<h3>Exercice 01</h3>";
    echo "<p>".date("d/m/Y")."</p>";
//Exercice 02
    echo "<h3>Exercice 02</h3>";
    echo "<p>".date("d-m-y")."</p>";
//Exercice 03
    echo "<h3>Exercice 03</h3>";
    // mardi 2 août 2016
    echo "<p>".$jour.date(" j ").$mois.date(" Y ")."</p>";// j Y
    echo "<p>".strftime("%A %e %B %Y", mktime(0, 0, 0, date("n"), date("j"), date("Y")))."</p>";
//Exercice 04
    echo "<h3>Exercice 04</h3>";
    echo "<p>".mktime(15, 0, 0, 8, 2, 2016)."</p>";
    echo "<p>".strftime("%A %e %B %Y %H:%M", mktime(15, 0, 0, 8, 2, 2016))."</p>";
//Exercice 05
    echo "<h3>Exercice 05</h3>";
    echo "<p>".floor((time() - strtotime("16-May-2016"))/86400)." jours se sont écoulés</p>";
//Exercice 06
    echo "<h3>Exercice 06</h3>";
    echo "<p>".cal_days_in_month(CAL_GREGORIAN, 2, 2017)." jours</p>";
//Exercice 07
    echo "<h3>Exercice 07</h3>";
    echo "<p>".strftime("%A %e %B %Y", mktime(0, 0, 0, date("n"), date("j")+20, date("Y")))."</p>";
//Exercice 08
    echo "<h3>Exercice 08</h3>";
    echo "<p>".strftime("%A %e %B %Y", mktime(0, 0, 0, date("n"), date("j")-22, date("Y")))."</p>";
// TP
    echo "<h3>TP</h3>";
?>
<a href="Calendar.php">Calendrier</a>
</body>
</html>
