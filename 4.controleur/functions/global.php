<?php
$items = array('Home','Lions','Limpada','Crocodile','Elephant','Tigre');
$link = 'http://localhost/controleur/index.php';
function menu($array,$link){
    foreach($array as $val){
        echo '<a class="nav-item nav-link" href='.$link.'?page='. $val .' ">'. $val .'</a>';
    }
}
