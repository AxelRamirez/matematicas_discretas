<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	//constructor de la clase
	public function __construct(){
        parent::__construct();
        // se carga el modelo para poderse usar en todo el controlador no solo en una funcion
        $this->load->model('User_model');
    }
	public function index(){
		//redirecciona el index al listado
		redirect('user/list','refresh');
	}
	public function list(){
		//carga la vista del listado
		$this->load->view('admin/user/list');
	}
	public function new(){
		//cargar modelo
		$this->load->model('Role_model');
		//cargar datos
		$this->data['roles'] = $this->Role_model->get();
		//carga la vista del listado
		$this->load->view('admin/user/new',$this->data);
	}
	public function edit(){
		//se toma el id el url para cargar los datosik
		$id = $this->uri->segment(3);
		//cargar los datos por id
		$this->data['user'] = $this->User_model->get(array('id' => $id));
		//cargar modelo
		$this->load->model('Role_model');
		//cargar datos
		$this->data['roles'] = $this->Role_model->get();
		//carga la vista para editar
		$this->load->view('admin/user/edit',$this->data);
	}
	public function add(){
		// comprueba si hay y es un post
		if ($this->input->post()) {
			// toma los datos del post en un arreglo
 			$input = $this->input->post(NULL, TRUE);
 			//se prepara el "query" para insertar datos
 			if(isset($input['Password']) && strlen($input['Password']) > 3){
 			 	$insert = array('USR_LOGIN' => $input['Login'],'USR_PASSWORD' => md5($input['Password']),'USR_ROL_ID' => $input['Role'],'USR_FIRST_NAME' => $input['NameF'],'USR_LAST_NAME' => $input['NameL']);
 			 }else{
 			 	$insert = array('USR_LOGIN' => $input['Login'],'USR_ROL_ID' => $input['Role'],'USR_FIRST_NAME' => $input['NameF'],'USR_LAST_NAME' => $input['NameL']);
 			 }
 			//inserta y verifica que se haya realizado el insert
 			if($this->User_model->save($insert) != 0){	
 			 	$error = 1;
 			}else{
 			 	$error = 2;
 			}
		}else{
			$error = 0;
		}
		//redirecciona al listado
		redirect('user/list','refresh');
	}
	public function update(){
		// comprueba si hay y es un post
		if ($this->input->post()) {
			// toma los datos del post en un arreglo
 			$input = $this->input->post(NULL, TRUE);
 			//se prepara el "query" para insertar datos
 			$id = $this->uri->segment(3);
 			if (isset($input['Password']) && strlen($input['Password']) > 3) {
 				$insert = array('USR_LOGIN' => $input['Login'],'USR_PASSWORD' => md5($input['Password']),'USR_ROL_ID' => $input['Role'],'USR_FIRST_NAME' => $input['NameF'],'USR_LAST_NAME' => $input['NameL']);
 			}else{
 				$insert = array('USR_LOGIN' => $input['Login'],'USR_ROL_ID' => $input['Role'],'USR_FIRST_NAME' => $input['NameF'],'USR_LAST_NAME' => $input['NameL']);
 			}
 			//inserta y verifica que se haya realizado el insert
 			if($this->User_model->save($insert,$id) != 0){	
 				if($this->session->userdata('logged_in')['id'] == $id){
 					$this->session->set_userdata('logged_in',  array(
 								'id' => $this->session->userdata('logged_in')['id'],
 								'role' => $this->session->userdata('logged_in')['role'],
                                'name' => $input['NameF'],
                                'last_name' =>$input['NameL']));
 				}
 			 	$error = 1;
 			}else{
 			 	$error = 2;
 			}
		}else{
			$error = 0;
		}
		//redirecciona al listado
		redirect('user/list','refresh');
	}
	public function loadRecords($rowNo = 0,$rowsPerPage = 10){
		if($this->input->get('Filter')) {
			$get = $this->input->get('Filter');
			$or = array('first like' => '%'.$get.'%','last like' => '%'.$get.'%');
		}else{
			$or = null;
		}
		//cuenta el total de registros de la tabla
		$totalRecords = $this->User_model->getRecordCount(null,$or);
		//valida si quiere todos los registros
		if($rowsPerPage < 1){
			$rowsPerPage = $totalRecords;
		}
		//registros que se mostraran en la tabla
		$records = $this->User_model->getPaginationFilter($rowNo,$rowsPerPage,null,$or);
		// metodo que genera la tabla y la paginacion
		// $pagination = $this->getPagination($rowNo,$rowsPerPage,$totalRecords,$records);

		$dataPagination['pagination'] = $this->getPagination($rowNo,$rowsPerPage,$totalRecords,$records);
		$dataPagination['totalRecords'] = $totalRecords;
		// regresar la tabla y la paginacion
		echo json_encode($dataPagination);
	}
}
