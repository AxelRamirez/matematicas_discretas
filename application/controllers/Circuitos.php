<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Circuitos extends MY_Controller {
	public function __construct(){
        parent::__construct();
        }
	public function index(){
		redirect('circuitos/view','refresh');
	}
	public function view(){
		$this->load->view('circuitos/index',$this->data);
	}
	public function boole(){
		$this->load->view('circuitos/boole',$this->data);
	}
	public function operaciones(){
		$this->load->view('circuitos/operaciones',$this->data);
	}
	public function componentes(){
		$this->load->view('circuitos/componentes',$this->data);
	}
	public function teoremas(){
		$this->load->view('circuitos/teoremas',$this->data);
	}
	public function tablas(){
		$this->load->view('circuitos/tablas',$this->data);
	}
	public function herramienta(){
		$this->load->view('circuitos/herramienta',$this->data);
	}
}
