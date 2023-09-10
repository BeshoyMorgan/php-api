<?php
require_once "routes/cat1Routes.php";
require_once "routes/cat2Routes.php";
require_once "routes/cat3Routes.php";
require_once "routes/freeShippingRoutes.php";

function app(){
    $url = explode("/",$_SERVER['QUERY_STRING']);
    if($url[2]== 'category1'){
       category1Routes();
            

    }
    if($url[2]== 'category2'){
        
        category2Routes();

            

    }
    if($url[2]== 'category3'){
        category3Routes();
            

    }
    if($url[2]== 'freeShipping'){
        freeShippingRoutes();
      
            

    }
}
?>