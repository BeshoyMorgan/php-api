<?php

use Dcblogdev\PdoWrapper\Database;

class freeShipping{
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
       $data= $this->db->rows("SELECT * FROM freeShipping");
        return $data;
    }
    public function add($data){
        $data=$this->db->insert('freeShipping',$data);
        return $data;

    }
    public function update($data,$id){
        $data=$this->db->update('freeShipping',$data,$id);
        return $data;
    }
    public function delete($id){
        $data=$this->db->delete('freeShipping',$id);
return $data;

    }
}

?>