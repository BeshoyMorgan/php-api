<?php 
require_once "DataBase/database.php";
require_once "app.php";
header('Access-Control-Allow-Origin: application/json');
header('Content-Type: application/json');

 $url = explode("/",$_SERVER['QUERY_STRING']);
 if($url){
    app();  
 }else{ echo 'invalid url' ;}


?>