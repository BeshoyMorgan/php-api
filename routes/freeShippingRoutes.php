<?php
require_once "./controller/freeShippingController.php";

function freeShippingRoutes(){
    $url = explode("/",$_SERVER['QUERY_STRING']);

    $freeShippingController=new freeShippingController();
    if($url[3]=='all'){
       

       echo json_encode($freeShippingController->all());
    }
    elseif($url[3]=='add'){
        header('Access-Control-Allow-Methods:POST');


        $data=file_get_contents("php://input");
      
        $res =json_encode($freeShippingController->add($data));
        print_r($res);


    }
    elseif($url[3]=='update'){
        header('Access-Control-Allow-Methods:PUT');

        $data=file_get_contents("php://input");
      
        $res =json_encode($freeShippingController->update($data));
        print_r($res);




    }
    elseif($url[3]=='delete'){
       
        header('Access-Control-Allow-Methods:DELETE');

        $data=file_get_contents("php://input");
      
        $res =json_encode($freeShippingController->delete($data));
        print_r($res);



    }

}

?>
