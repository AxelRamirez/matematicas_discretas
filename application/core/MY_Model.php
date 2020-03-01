<?php

Class MY_Model extends CI_Model{

    public $tabla; //nombre de la tabla se utiliza para caragar vistas, pdfs, inserts, updates y deletes
    public $vista; //nombre de la vista se usa con las peticiones json para no mostrar el nombre real de los campos
    public $campo_id; // id de la tabla 

    public function __construct(){
        parent::__construct();
    }
    
    /**
     * [Regresa los registros o registro de una tabla]
     * @param  Array | $config | null [id=un solo registro especifico, orden=para afectar el orden regresado(ASC o DESC), orden_campo=campo al que se aplica el orden]
     * @return [Array Se regresa una fila o una lista]
     */
    public function get(Array $config=null){
        $sql = 'SELECT * FROM '.$this->tabla;
        //Si existe un id, se regresa un registro, si no toda la tabla
        if(isset($config['id'])):
            $sql.=' WHERE '.$this->campo_id.' = '.$config['id'];
        endif;
        //Si existe el campo a ordenar
        if (isset($config['orden_campo'])) :
            $sql .= ' ORDER BY '.$config['orden_campo'];
        endif;

        //Si existe el orden y el campo a ordenar
        if (isset($config['orden']) && isset($config['orden_campo'])) :
            if ($config['orden']=='desc') {
                $sql .= ' DESC';
            }
            if ($config['orden']=='ASC') {
                $sql .= ' ASC';
            }
        endif;
        //Si existe un id, solo se regresara una fila, de lo contrario varias
        if(isset($config['id'])){
            return $this->db->query($sql)->row();            
        }else{
            return $this->db->query($sql)->result();            
        }
    }
    /**
     * [Hace un select * from a una tabla con wheres y ors]
     * @param  Array | $where [El arreglo con los campos y valores de la base de datos que van con where ('Nombre en Base de datos' => 'valor correspondiente')]
     * @param  Array | $or [El arreglo con los campos y valores de la base de datos que van con or ('Nombre en Base de datos' => 'valor correspondiente')]
     */
    public function getWhere(Array $where = null,Array $or = null,Array $fields = null){
        if(isset($fields)){
            $this->db->select($fields); 
        }else{
           $this->db->select('*'); 
        }
        $this->db->from($this->tabla);
        if(isset($where)) {
            $this->db->where($where);
        } 
        if(isset($or)) {
            $this->db->or_where($or);
        } 
        $query = $this->db->get();
        return $query->result();
    } 
    public function getWhere_v(Array $where = null,Array $or = null,Array $fields =null){
        if(isset($fields)){
            $this->db->select($fields); 
        }else{
           $this->db->select('*'); 
        }
        $this->db->from($this->vista);
        if(isset($where)) {
            $this->db->where($where);
        } 
        if(isset($or)) {
            $this->db->or_where($or);
        } 
        $query = $this->db->get();
        return $query->result();
    } 
    /**
     * [Hace un select * from a una tabla con wheres y ors]
     * @param  Array | $join [El arreglo con la tabla, los campos y valores de la base de datos que van en el join('tabla de la BD' => Nombre en Base de datos', 'campo1 de la BD' => 'valor correspondiente', 'campo2 de la BD' => 'valor correspondiente')]
     * @param  Array | $where [El arreglo con los campos y valores de la base de datos que van con where ('Nombre en Base de datos' => 'valor correspondiente')]
     * @param  Array | $or [El arreglo con los campos y valores de la base de datos que van con or ('Nombre en Base de datos' => 'valor correspondiente')]
     */
    public function getJoin(Array $join = null,Array $where = null,Array $or = null,Array $fields = null, Array $config = null){
        if(isset($fields)){
            $this->db->select($fields); 
        }else{
           $this->db->select('*'); 
        }
        $this->db->from($this->tabla);
        if(isset($join)) {
            foreach ($join as $key => $j) {
                $this->db->join($j['tabla'], $j['campo1']." = ".$j['campo2'] );
            }
        } 
        if(isset($where)) {
            $this->db->where($where);
        } 
        if(isset($or)) {
            $this->db->or_where($or);
        }
        // NOMBRE EL CAMPO
        if(isset($config['group_by'])) {
            $this->db->group_by($config['group_by']);
        }
        $query = $this->db->get();
        return $query->result();  
    }  
    public function getJoin_v(Array $join = null,Array $where = null,Array $or = null,Array $fields = null){
        if(isset($fields)){
            $this->db->select($fields); 
        }else{
           $this->db->select('*'); 
        }
        $this->db->from($this->vista);
        if(isset($join)) {
            foreach ($join as $key => $j) {
                $this->db->join($j['tabla'], $j['campo1']." = ".$j['campo2'] );
            }
        } 
        if(isset($where)) {
            $this->db->where($where);
        } 
        if(isset($or)) {
            $this->db->or_where($or);
        }
        $query = $this->db->get();
        return $query->result();  
    }  
    /**
     * [Inserta un registro a la tabla, o actualiza un registro si se proporciona el id]
     * @param  Array | $input [El arreglo con los campos y valores de la base de datos ('Nombre en Base de datos' => valor correspondiente)]
     * @param  Int | $id | null [El id del registro a actualizar]
     * @return Int  [El id generado]
     */
    public function save(Array $input,$id=null){
        if($id==null){
            if($this->db->insert($this->tabla,$input)){
                return $this->db->insert_id();
            }else{
                return 0;
            }
        }else{
            $this->db->where($this->campo_id, $id);
            if ($this->db->update($this->tabla, $input)){
                return 1;
            }else{
                return 0;
            }
        }
    }

    /**
    *[Regresa el total de registros segun los filtros dados]
    * @param Array | $where | null [El arreglo con los campos y valores que se van a filtrar de la base de datos ej. -> ('Nombre en Base de datos' => valor correspondiente)]
    * @return  int [el total de registros en la cunsulta]
    */
    public function getRecordCount(Array $where = null,Array $or = null){
        $this->db->select('count(*) as count');
        if(isset($this->vista)){
            $this->db->from($this->vista);
        }else{
            $this->db->from($this->tabla);
        }
        if (isset($where)) {
            $this->db->where($where);
        }
        if(isset($or)) {
            $this->db->or_where($or);
        }
        $query = $this->db->get();
        $result = $query->row();
        return $result->count;
    }
     /**
    *[Regresa los registros de una tabla segun los filtros datos]
    * @param int | $rowNo [numero de pagina en la que se busca]
    * @param int | $rowsPerPage [cantidad de registros por pagina]
    * @param Array | $where | null [El arreglo con los campos y valores que se van a filtrar de la vista ej. -> ('Nombre en Base de datos' => Valor correspondiente)]
    * @return  array | indexado [registros de la consulta]
    */
    public function getPaginationFilter($rowNo,$rowsPerPage,Array $where = null,Array $or = null) { 
        if($rowNo != 0){
           $rowNo = ($rowNo-1) * $rowsPerPage;
        }
        $this->db->select('*');
        if(isset($this->vista)){
            $this->db->from($this->vista);
        }else{
            $this->db->from($this->tabla);
        }
        if(isset($where)) {
            $this->db->where($where);
        }
        if(isset($or)) {
            $this->db->or_where($or);
        }
        $this->db->limit($rowsPerPage, $rowNo);  
        $query = $this->db->get();
        return $query->result();
    }
    public function delete($id){
        $this->db->delete($this->tabla, array($this->campo_id => $id)); 
        return $this->db->affected_rows(); 
    }
}
?>