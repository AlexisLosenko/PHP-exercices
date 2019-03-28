<?php
$nbr1 = $_POST['nbr1'];
$nbr2 = $_POST['nbr2'];
$operation = $_POST['operation'];
$print = $_POST['print'];
function add($x,$y){return $x + $y;}
function sous($x,$y){return $x - $y;}
function div($x,$y){return $x / $y;}
function mult($x,$y){return $x * $y;}
function calcul($op,$nbr1,$nbr2){

    if($op == "1") $result = add($nbr1,$nbr2);

    else if($op == "2")  $result = mult($nbr1,$nbr2);

    else if($op == "3")  $result = div($nbr1,$nbr2);

    else $result = sous($nbr1,$nbr2);
    return $result;
}
if(isset($nbr1) AND isset($nbr2) AND $print == "1") {

      if($operation =="1")$result = add($nbr1,$nbr2);

      else if($operation =="2") $result = mult($nbr1,$nbr2);

      else if($opration == "3") $result = div($nbr1,$nbr2);

      else $result = sous($nbr1,$nbr2);
      echo "<script>alert(\"$result\")</script>";

}
else if(isset($nbr1) AND isset($nbr2) AND $print == "2") {

    switch($operation){
        case "1": $result2 = add($nbr1,$nbr2);
        break;
        case "2": $result2 = mult($nbr1,$nbr2);
        break;
        case "3" : $result2 = div($nbr1,$nbr2);
        break;
        default: sous($nbr1,$nbr2);
    }

}
else if(isset($nbr1) AND isset($nbr2) AND $print == "3") $result3 = calcul($operation,$nbr1,$nbr2);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Calculatrice</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form method="POST" action="index.php">
                    <div class="form-group">
                        <label for="nbr1">Nombre 1 :</label>
                        <input type="number" class="form-control" id="nbr1" name="nbr1" required>
                    </div>

                    <div class="form-group">
                        <label for="nbr2">Nombre 2 :</label>
                        <input type="number" class="form-control" id="nbr2" name="nbr2" required>
                    </div>

                    <div class="form-group">
                        <label for="operation">Opération : </label>
                        <select class="form-control" id="operation" name="operation" required>
                            <option value="1">Addition</option>
                            <option value="2">Multiplication</option>
                            <option value="3">Division</option>
                            <option value="4">Soustraction</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="print">Affichage</label>
                        <select class="form-control" id="print" name="print" required>
                            <option value="1">Modal</option>
                            <option value="2">Sur la page</option>
                            <option value="3">Dans un input</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Calculer</button>


                </form>

                <button class="btn btn-danger" id="C">C</button>
                <h1><?php echo 'Le resultat est de : ' + $result2; ?></h1>
                <input value=<?php echo $result3; ?>>
            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>
