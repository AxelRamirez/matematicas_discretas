<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conjuntos extends MY_Controller {
	public function __construct(){
        parent::__construct();
        }
	public function index(){
		redirect('conjuntos/view','refresh');
	}
	public function view(){
		$this->load->model('Files_model');
		$this->data['files'] = array();
		$this->data['files'] = $this->Files_model->getWhere(array('UNIT' => 2));

		$this->load->view('conjuntos/index',$this->data);
	}
	public function subconjuntos(){
		$this->load->view('conjuntos/subconjuntos',$this->data);
	}
	public function operaciones(){
		$this->load->view('conjuntos/operaciones',$this->data);
	}
	public function diagramas(){
		$this->load->view('conjuntos/diagramas',$this->data);
	}
	public function simulador(){
		$this->load->view('conjuntos/simulador',$this->data);
	}
}
