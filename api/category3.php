<?php

use Dcblogdev\PdoWrapper\Database;

class category3{
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
       $data= $this->db->rows("SELECT * FROM category3");
        return $data;
    }
    public function add($data){
        $data=$this->db->insert('category3',$data);
        return $data;

    }
    public function update($data,$id){
        $data=$this->db->update('category3',$data,$id);
        return $data;
    }
    public function delete($id){
        $data=$this->db->delete('category3',$id);
return $data;

    }
}

?>