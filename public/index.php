<?php
$loc = filter_input(INPUT_GET, 'loc');
if (!$loc) {
    $loc = 'home';
}
include_once '../controler/Autoloader.php';
Autoloader::register();
switch($loc){
    case "livres":
    include_once "../controler/controler-livres.php";
    break;

    default :
    break;
}

include_once "../vue/template.php"; 