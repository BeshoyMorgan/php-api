<?php
    require_once "./api/freeShipping.php";

class freeShippingController{ 
    public function all(){
        $freeShipping=new freeShipping();
        $data= $freeShipping->all();
        $res=[
         'status'=>200,
         'data'=>$data
        ];
        return $res;
    }
    public function add($data){
        $freeShipping=new freeShipping();
        $data=json_decode($data,true);
        $res=$freeShipping->add($data);
        if($res==0){
            $res=[
                'status'=>201,
                "message"=>"added successfully"
            ];
        }
        else{
            $res=[
                'status'=>400,
                "message"=>"error"
            ];
        }
return $res;

    }

    public function update($data){
        $freeShipping=new freeShipping();
        $data_decoded=json_decode($data,true);
        $id=['id'=>$data_decoded['id']];
        $data=$data_decoded['category'];
        $res=$freeShipping->update($data,$id);
        if($res){
            $res=[
                'status'=>201,
                "message"=>"updated successfully"
            ];
        }
        else{
            $res=[
                'status'=>400,
                "message"=>"error"
            ];
        }
        return $res;
    }
    public function delete($data){
        $freeShipping=new freeShipping();
        $data_decoded=json_decode($data,true);
        $id=['id'=>$data_decoded['id']];
        $res=$freeShipping->delete($id);
        if($res){
            $res=[
                'status'=>201,
                "message"=>"deleted successfully"
            ];
        }
        else{
            $res=[
                'status'=>400,
                "message"=>"error"
            ];
        }
        return $res;

    }
}
?>