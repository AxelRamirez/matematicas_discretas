<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logica extends MY_Controller {
	public function __construct(){
        parent::__construct();
        }
	public function index(){
		redirect('logica/view','refresh');
	}
	public function view(){
		$this->load->view('logica/index',$this->data);
	}
	public function tablas(){
		$this->load->view('logica/tablas',$this->data);
	}
	public function equivalencia(){
		$this->load->view('logica/equivalencia',$this->data);
	}
	public function inferencia(){
		$this->load->view('logica/inferencia',$this->data);
	}
	public function predicados(){
		$this->load->view('logica/predicados',$this->data);
	}
}