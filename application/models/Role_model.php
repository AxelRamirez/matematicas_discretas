<?php
Class Role_model extends MY_Model{

    function __construct(){
        parent::__construct();
        $this->tabla = 'rol';
        $this->vista = '';
        $this->campo_id = 'id';
    } 
}
?>