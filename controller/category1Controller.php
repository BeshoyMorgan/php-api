<?php
    require_once "./api/category1.php";

class category1Controller{ 
    public function all(){
        $category1=new category1();
        $data= $category1->all();
        $res=[
         'status'=>200,
         'data'=>$data
        ];
        return $res;
    }
    public function add($data){
        $category1=new category1();
        $data=json_decode($data,true);
        $res=$category1->add($data);
        if($res){
            $res=[
                'status'=>201,
                "message"=>"added successfully"
            ];
        }
        else{
            $res=[
                'status'=>201,
                "message"=>"error"
            ];
        }
return $res;

    }

    public function update($data){
        $category1=new category1();
        $data_decoded=json_decode($data,true);
        $id=['id'=>$data_decoded['id']];
        $data=$data_decoded['category'];
        $res=$category1->update($data,$id);
        if($res){
            $res=[
                'status'=>201,
                "message"=>"updated successfully"
            ];
        }
        else{
            $res=[
                'status'=>201,
                "message"=>"error"
            ];
        }
        return $res;
    }
    public function delete($data){
        $category1=new category1();
        $data_decoded=json_decode($data,true);
        $id=['id'=>$data_decoded['id']];
        $res=$category1->delete($id);
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