<?php
//Exercice 01
    $userAgent=$_SERVER['HTTP_USER_AGENT'];
    $userIp=$_SERVER['REMOTE_ADDR'];
    $serverName=$_SERVER['HTTP_HOST'];
//Exercice 02
    session_start();
    $_SESSION["nom"]="Iflette";
    $_SESSION["prenom"]="Tart";
    $_SESSION["age"]=21;
//Exercice 03
    //$_SESSION["login"]="niack";
    //setcookie("user", "", time() - 3601);
    function cookie(){
        if(isset($_POST['login'])){
            setcookie("user", $_POST['login'], false);
            return $_COOKIE["user"];
        }
    }
    cookie();
    //echo $_COOKIE["user"];
//Exercice 04

//Exercice 05

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les Variables superglobales, sessions et cookies</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 8 : Les Variables superglobales, sessions et cookies</h2>
<?php
//Exercice 01
    echo "<h3>Exercice 01</h3>";
    echo "<p>".$userAgent."</p>";
    echo "<p>".$userIp."</p>";
    echo "<p>".$serverName."</p>";
//Exercice 02
    echo "<h3>Exercice 02</h3>";
    echo "<a href='user.php'>user.php</a>";
//Exercice 03
    echo "<h3>Exercice 03</h3>";
    echo "<form action='#' method='post'>
            <p>Login
                <input type='text' name='login' placeholder='login'>
            </p>
            <p>Mot de passe
                <input type='password' name='mot-de-passe' placeholder='mot de passe'>
            </p>
            <input type='submit' value='Valider'>
        </form>";
//Exercice 04
    echo "<h3>Exercice 04</h3>";
//Exercice 05
    echo "<h3>Exercice 05</h3>";
?>
</body>
</html>
