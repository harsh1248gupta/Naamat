<?php
    class Createdata extends CI_Model
    {
        public function addppt($data){
            $this->db->insert('ppt',$data); 
        }
    }
    
?>