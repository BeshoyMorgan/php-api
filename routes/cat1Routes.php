<?php
require_once "./controller/category1Controller.php";

function category1Routes(){
    $url = explode("/",$_SERVER['QUERY_STRING']);

    $category1Controller=new category1Controller();
    if($url[3]=='all'){
       

       echo json_encode($category1Controller->all());
    }
    elseif($url[3]=='add'){
        header('Access-Control-Allow-Methods:POST');


        $data=file_get_contents("php://input");
      
        $res =json_encode($category1Controller->add($data));
        print_r($res);


    }
    elseif($url[3]=='update'){
        header('Access-Control-Allow-Methods:PUT');

        $data=file_get_contents("php://input");
      
        $res =json_encode($category1Controller->update($data));
        print_r($res);




    }
    elseif($url[3]=='delete'){
       

 
        header('Access-Control-Allow-Methods:DELETE');

        $data=file_get_contents("php://input");
      
        $res =json_encode($category1Controller->delete($data));
        print_r($res);

    }

}

?>