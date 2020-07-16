<?php defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
	// variable publica para guardar datos necesarios
 	public $data;
 	
	function __construct(){
		parent::__construct();
		//tiene sesion iniciada
		// if($this->session->userdata('logged_in')){
		// 	//load something important

		// 	//si intento entrar a un link sin sesion lo redirecciona ese link
		// 	//verifica si hay un link guardado
		// 	if($this->session->has_userdata('uri')){
		// 		//guarda el link
		// 		$uri = $this->session->userdata('uri');
		// 		//quita el link de la sesiion
		// 		$this->session->unset_userdata('uri');
		// 		//redirecciona al link al que se intento entrar sin sesion
		// 		redirect($uri,'refresh');
		// 	}
		// }else{
		// 	//no tiene sesion iniciada

		// 	// si el url es diferente a la pagina base la guarda en la sesion
		// 	if(current_url() !== base_url()){
		// 		// guarda el url al que quizo ingresar sin sesion
		// 		$this->session->set_userdata(array('uri' => current_url()));
		// 	}

		// 	//redirecciona al login
		// 	redirect('login', 'refresh');
		// }
	}

	function logout(){
		$this->session->unset_userdata('logged_in');
		redirect('login', 'refresh');
	}

	/**
     * [Regresa el controlador y el metodo que se estan utilizando]
     * @return [String regresa el controlador y el metodo separados por un "/"]
     */
	protected function getActualMethod(){
		//$this->router->fetch_class() current controller
		//$this->router->fetch_method() current method
		return $this->router->fetch_class().'/'.$this->router->fetch_method();
	}

	/**
     * [Regresa el contenido para la paginacion]
     * @param  int | $rowNo | 0 [Numero de pagina]
     * @param  int | $rowsPerPage [Numero de registros por pagina]
     * @param  int | $totalRecords [Numero total de los registros]
     * @param  Array | $records [Registros de base de datos]
     * @param  string | $url [url del controlador y el metodo para paginar]
     * @return JSON [informacion para la paginacion]
     */
	protected function getPagination($rowNo,$rowsPerPage,$totalRecords,$records){
    	$this->load->library('pagination');
		// Basic configuration
		//$config['base_url'] = base_url().$url;
	    $config['use_page_numbers'] = TRUE;
	    $config['total_rows'] = $totalRecords;
	    $config['per_page'] = $rowsPerPage;
	    //uri_segment: determina que parte del url contiene el numero de pagina. por default es el ultimo
		$config['uri_segment'] = 3;
		// custom paging configuration
		$config['first_link'] = false;
		$config['last_link'] = false;

		$config['num_links'] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['reuse_query_string'] = TRUE;
		 
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['next_link'] = '>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '<';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><a class="page-link" href="#" style="pointer-events: none;">';
		$config['cur_tag_close'] = '<span id="sr-only" class="sr-only">'.$rowNo.'</span></a></li>';

		$config['attributes'] = array('class' => 'page-link');
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
	    // Initialize
	    $this->pagination->initialize($config);

	    // Initialize $data Array
	    $data['pagination'] = $this->pagination->create_links();
	    $data['result'] = $records;

	    return $data;
	}
	/**
     * [Convierte un base64 a archivo]
     * @param  string | $b64 [contiene la cadena base 64 a convertir]
     * @param  string | $name [contiene el nombre del arvhivo a guardar sin extencion]
     * @param  string | $nameType [contiene el nombre antiguo del archivo para extraer la extencion]
     * @param  string | $paty [contiene la direccion del folder en el que se va a guardar]
     * @return string [nuevo nombre con extencion]
     */
	protected function generateFile($b64,$name,$nameType,$path){
        //verifica si existe la direccion si no es asi la crea
        if(!is_dir($path)) {
      		mkdir($path, 777, TRUE);
  		}
  		//tomamos la extencion del archivo
  		$type = pathinfo($nameType, PATHINFO_EXTENSION);
  		//concatena el nombre del archivo con la extencion
        $newName = $name.'.'.$type;
        //remueve informacion inecesaria del base64
        $b64 = explode('[removed]', $b64)[1];
        //decodifica el base 64
        $file = base64_decode($b64);
        //guarda el archivo con el nombre y en la direccion correcta
        if($type == 'png' || $type == 'jpg'|| $type == 'jpeg'|| $type == 'gif'|| $type == 'doc'|| $type == 'ppt'|| $type == 'xls' || $type == 'csv' || $type == 'docx'|| $type == 'pptx'|| $type == 'xslx'|| $type == 'pdf'){	
        	file_put_contents($path.$newName, $file);
        	//retorna el nuevo nombre con extencion
        	return $newName;
        }else{
        	return 'Incorect File Type';
        }
        
    }
}