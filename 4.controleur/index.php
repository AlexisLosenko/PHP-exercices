<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$request = $_GET['page'];
switch ($request) {
    case '' :
    require './visualisation/elements/corp.php';
    break;
    case 'Home' :
    require './visualisation/elements/corp.php';
    break;
    case 'Lions' :
    require './visualisation/elements/corp.php';
    break;

    case 'Limpada' :
    require './visualisation/elements/corp.php';
    break;
    case 'Crocodile' :
    require './visualisation/elements/corp.php';
    break;
    case 'Elephant' :
    require './visualisation/elements/corp.php';
    break;
    case 'Tigre' :
    require './visualisation/elements/corp.php';
    break;
    default:
    require './visualisation/elements/corp.php';
}
