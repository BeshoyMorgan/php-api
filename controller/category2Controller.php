<?php
    require_once "./api/category2.php";

class category2Controller{ 
    public function all(){
        $category2=new category2();
        $data= $category2->all();
        $res=[
         'status'=>200,
         'data'=>$data
        ];
        return $res;
    }
    public function add($data){
        $category2=new category2();
        $data=json_decode($data,true);
        $res=$category2->add($data);
        if($res){
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
        $category2=new category2();
        $data_decoded=json_decode($data,true);
        $id=['id'=>$data_decoded['id']];
        $data=$data_decoded['category'];
        $res=$category2->update($data,$id);
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
        $category2=new category2();
        $data_decoded=json_decode($data,true);
        $id=['id'=>$data_decoded['id']];
        $res=$category2->delete($id);
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