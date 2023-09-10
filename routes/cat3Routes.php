<?php
require_once "./controller/category3Controller.php";

function category3Routes(){
    $url = explode("/",$_SERVER['QUERY_STRING']);

    $category3Controller=new category3Controller();
    if($url[3]=='all'){
       

       echo json_encode($category3Controller->all());
    }
    elseif($url[3]=='add'){
        header('Access-Control-Allow-Methods:POST');


        $data=file_get_contents("php://input");
      
        $res =json_encode($category3Controller->add($data));
        print_r($res);


    }
    elseif($url[3]=='update'){
        header('Access-Control-Allow-Methods:PUT');

        $data=file_get_contents("php://input");
      
        $res =json_encode($category3Controller->update($data));
        print_r($res);




    }
    elseif($url[3]=='delete'){
       
 
        header('Access-Control-Allow-Methods:DELETE');

        $data=file_get_contents("php://input");
      
        $res =json_encode($category3Controller->delete($data));
        print_r($res);


    }

}

?>