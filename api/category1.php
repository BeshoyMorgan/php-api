<?php

use Dcblogdev\PdoWrapper\Database;

class category1{
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
       $data= $this->db->rows("SELECT * FROM category1");
        return $data;
    }
    public function add($data){
        $data=$this->db->insert('category1',$data);
        return $data;

    }
    public function update($data,$id){
        $data=$this->db->update('category1',$data,$id);
        return $data;
    }
    public function delete($id){
        $data=$this->db->delete('category1',$id);
return $data;

    }
}

?>