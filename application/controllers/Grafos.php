<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafos extends MY_Controller {
	public function __construct(){
        parent::__construct();
        }
	public function index(){
		redirect('grafos/view','refresh');
	}
	public function view(){
		$this->load->model('Files_model');
		$this->data['files'] = array();
		$this->data['files'] = $this->Files_model->getWhere(array('UNIT' => 5));

		$this->load->view('grafos/index',$this->data);
	}
	public function componentes(){
		$this->load->view('grafos/componentes',$this->data);
	}
	public function tipos(){
		$this->load->view('grafos/tipos',$this->data);
	}
	public function representacion(){
		$this->load->view('grafos/representacion',$this->data);
	}
	public function herramienta(){
		$this->load->view('grafos/herramienta',$this->data);
	}
}
