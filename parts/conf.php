<?php 
$link = mysqli_connect('localhost', 'root', '', 'web_bd');
mysqli_set_charset($link, 'utf8');

function d($ar){
    echo "<pre>";
    print_r($ar);
    echo "</pre>";
}
?>