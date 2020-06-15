<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arboles extends MY_Controller {
	public function __construct(){
        parent::__construct();
        }
	public function index(){
		redirect('arboles/view','refresh');
	}
	public function view(){
		$this->load->view('arboles/index',$this->data);
	}
	public function componentes(){
		$this->load->view('arboles/componentes',$this->data);
	}
	public function propiedades(){
		$this->load->view('arboles/propiedades',$this->data);
	}
	public function clasificacion(){
		$this->load->view('arboles/clasificacion',$this->data);
	}
	public function peso(){
		$this->load->view('arboles/peso',$this->data);
	}
	public function recorrido(){
		$this->load->view('arboles/recorrido',$this->data);
	}
	public function algoritmos(){
		$this->load->view('arboles/algoritmos',$this->data);
	}
}
