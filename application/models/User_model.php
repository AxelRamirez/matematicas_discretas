<?php
Class User_model extends MY_Model{


    function __construct(){
        parent::__construct();
        $this->tabla = 'user';
        $this->vista = 'user_view';
        $this->campo_id = 'id';
    } 

    function login($login, $password){
        $sql = "SELECT * FROM ".$this->tabla." WHERE password= md5(?) AND username= ? LIMIT 1";
        $result = $this->db->query($sql,array($password,$login))->row();
        if(count($result) == 1) {
            return $result;
        }else{
            return false;
        }
    }
}

?>