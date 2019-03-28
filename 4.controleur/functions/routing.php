<?php
    if($request == 'Home' OR $request =='') require './visualisation/home.php';
    else if($request == 'Lions') require './visualisation/lion.php';
    else if($request == 'Limpada') require './visualisation/limpada.php';
    else if($request == 'Crocodile') require './visualisation/crocodile.php';
    else if($request == 'Elephant') require './visualisation/elephant.php';
    else if($request == 'Tigre') require './visualisation/tigre.php';
    else require './visualisation/error.php';
