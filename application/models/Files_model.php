<?php
Class Files_model extends MY_Model{

    function __construct(){
        parent::__construct();
        $this->tabla = 'Files';
        $this->vista = '';
        $this->campo_id = 'ID';
    } 
}
?>