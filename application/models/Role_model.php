<?php
Class Role_model extends MY_Model{

    function __construct(){
        parent::__construct();
        $this->tabla = 'roles';
        $this->vista = '';
        $this->campo_id = 'ROL_ID';
    } 
}
?>