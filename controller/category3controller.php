<?php
    require_once "./api/category3.php";

class category3Controller{ 
    public function all(){
        $category3=new category3();
        $data= $category3->all();
        $res=[
         'status'=>200,
         'data'=>$data
        ];
        return $res;
    }
    public function add($data){
        $category3=new category3();
        $data=json_decode($data,true);
        $res=$category3->add($data);
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
        $category3=new category3();
        $data_decoded=json_decode($data,true);
        $id=['id'=>$data_decoded['id']];
        $data=$data_decoded['category'];
        $res=$category3->update($data,$id);
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
        $category3=new category3();
        $data_decoded=json_decode($data,true);
        $id=['id'=>$data_decoded['id']];
        $res=$category3->delete($id);
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