<?php

use Dcblogdev\PdoWrapper\Database;

class category2{
   public $db;
    public function __construct()
    {
       $options=[
        'username'=>'root',
        'database'=>'simpleecommerce'
       ];
       $this->db= new Database($options);
        
    }
    public function all(){
       $data= $this->db->rows("SELECT * FROM category2");
        return $data;
    }
    public function add($data){
        $data=$this->db->insert('category2',$data);
        return $data;

    }
    public function update($data,$id){
        $data=$this->db->update('category2',$data,$id);
        return $data;
    }
    public function delete($id){
        $data=$this->db->delete('category2',$id);
return $data;

    }
}

?>