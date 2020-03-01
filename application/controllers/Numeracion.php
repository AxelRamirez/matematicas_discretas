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
		$this->load->view('numeracion/index');
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
