<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Files_model');
		$this->path = '/opt/lampp/htdocs/matematicas_discretas/assets/files/';
	}
	
	public function save(){
		if($this->input->post()) {
			// toma los datos del post en un arreglo
			$input = $this->input->post(NULL, TRUE);
			//se prepara el "query" para insertar datos
 			$insert = array('UNIT' => $input['Unit'],'ORIGINAL_NAME' => $input['Name'],'FILE_TYPE' => $input['Type'],'PATH' => $this->path);
			$f_id = $this->Files_model->save($insert);

			$name = $this->generateFile($input['Base'],'FILE_'.$f_id,$input['Name'],$this->path);

 			if($this->Files_model->save(array('FILE_NAME' => $name),$f_id)){	
				$code = 200;
 			}else{
				$code = 403;
 			}
		}else{
			$code = 404;
		}
		//regresa la cadena json con la informacion necesaria
		echo json_encode(array('code' => $code));
	}
	public function delete(){
		if($this->input->post()){
			$input = $this->input->post(NULL, TRUE);
			if($this->Files_model->delete($input['Id'])){
				$code = 200;
			}else{
				$code = 403;
			}
		}else{
			$code = 404;
		}
		echo json_encode(array('code' => $code));
	}
	public function documentView(){
		$this->data['path'] = $this->path;
		$this->data['file'] = $this->uri->segment(3);
		//carga la vista del listado
		$this->load->view('documentView',$this->data);
	}
}
