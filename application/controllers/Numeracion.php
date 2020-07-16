<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Numeracion extends MY_Controller {
	public function __construct(){
        parent::__construct();
        }
	public function index(){
		redirect('numeracion/view','refresh');
	}
	public function view(){
		$this->load->model('Files_model');
		$this->data['files'] = array();
		$this->data['files'] = $this->Files_model->getWhere(array('UNIT' => 1));

		$this->load->view('numeracion/index', $this->data);
	}
	public function decimal(){
		$this->load->view('numeracion/decimal');
	}
	public function binaria(){
		$this->load->view('numeracion/binaria');
	}
	public function octal(){
		$this->load->view('numeracion/octal');
	}
	public function hexadecimal(){
		$this->load->view('numeracion/hexadecimal');
	}
	public function cantidades(){
		$this->load->view('numeracion/cantidades');
	}
	public function convertidor(){
		$this->load->view('numeracion/convertidor');
	}
}
