<?php
    session_start();
    setcookie("user", $_POST['login'], false);
    $login=$_COOKIE["user"];
    if (isset($_POST['login'])){
        $login=$_POST["login"];
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Série 8 : Les Variables superglobales, sessions et cookies</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<?php
//Exercice 02
    echo "<h3>Exercice 02</h3>";
    echo "<p>Bonjour, ".$_SESSION["prenom"]." ".$_SESSION["nom"]."</p>";
//Exercice 03
    echo "<h3>Exercice 03+04</h3>";
    echo "<p>Hello ".$login."</p>";
//Exercice 05
    echo "<h3>Exercice 05</h3>";
    echo "<p>Hello ".$login."</p>";
    echo "<form action='#' method='post'>
            <p>New Login
                <input type='text' name='login' placeholder='nouveau login'>
            </p>
            <input type='submit' value='Valider'>
        </form>";
?>
</body>
</html>
