<?php
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
    <title>Les dates : Calendrier</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
<style>
    body{
        text-align: center;
        width: 100%;
    }
    h3,h2{
        margin: 2px 0 5px;
        padding: 1px 0 1px;
    }
    p{
        margin: 0;
        padding: 0;
    }
    table{
        display: inline-block;
    }
    table,tbody{
        border-collapse: collapse;
        background-color: #333;
        color: #eee;
    }
    tr,td{
        text-align: center;
        border-bottom: 1px solid #555;
    }
    form{
        margin: 0 auto;
        margin-bottom: 20px;
    }
</style>
<h2>Série 9 : Un calendrier</h2>
<?php
//TP
    echo '<form action="#" method="post">
            <select name="Mois">
               <option value="1">janvier</option>
               <option value="2">février</option>
               <option value="3">mars</option>
               <option value="4">avril</option>
               <option value="5">mai</option>
               <option value="6">juin</option>
               <option value="7">juillet</option>
               <option value="8">août</option>
               <option value="9">septembre</option>
               <option value="10">octobre</option>
               <option value="11">novembre</option>
               <option value="12">décembre</option>
            </select>
            <select name="annee">';
            for ($annee = 1990; $annee <= 2090; $annee++){
               if ($annee == 2019){
                    echo '<option value="'.$annee.'" selected>'.$annee.'</option>';
               } else
               echo '<option value="'.$annee.'">'.$annee.'</option>';
            }
      echo '</select>
            <input type="submit" value="Valider">
        </form>';
        if (isset($month)){
            $nbjour = cal_days_in_month(CAL_GREGORIAN, $month, $year);
            $jour1 = date("N",mktime(0, 0, 0, $month, 1, $year));
            echo "<table>
                    <tr>
                        <td colspan='7'>".$Mois." ".$year."</td>
                    </tr>
                    <tr>
                        <th>Lundi</th> <th>Mardi</th> <th>Mercredi</th> <th>Jeudi</th> <th>Vendredi</th> <th>Samedi</th> <th>Dimanche</th>
                    </tr>
                    <tr>";
              $j = 1;
              $d = 1;
              for ($i = 1; $i <= $nbjour + $jour1 -1 ; $i++){
                if ((($i-1) % 7 == 0)&&($i-1 != 0)){
                    echo "</tr><tr>";
                }
                if ($i < $jour1){
                    echo "<td></td>";
                    $d++;
                } else {
                    echo "<td>".$j++."</td>";
                }
              }
              //for ($i = $j ; $i < (44-$d) ; $i++){
              //  echo "<td></td>";
              //}
              echo "</tr>
                  </table>";
        }
?>
</body>
</html>
