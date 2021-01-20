<?php

ob_start();

if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = "home";
}


if($url == 'home'){
    require "algo/home.php";
}elseif ($url == 'multiplie3'){
    require "algo/multiplie3.php";
}elseif ($url == 'tables'){
    require "algo/tables.php";
}elseif ($url == 'checkbox'){
    require "algo/checkbox.php";
}elseif ($url == 'random'){
    require "algo/random.php";
}

$content = ob_get_clean();

require "algo/template.php";