<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public function __construct(){
        parent::__construct();
        }
	public function index(){
		redirect('dashboard/view','refresh');
	}
	public function view(){
		$this->load->view('dashboard',$this->data);
	}
}
