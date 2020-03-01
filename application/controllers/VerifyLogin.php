<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){  
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->form_validation->set_message('required', 'El campo  %s es requerido');
        $this->form_validation->set_rules('User', 'User', 'trim|required|xss_clean');
        $this->form_validation->set_rules('Password', 'Password', 'trim|required|xss_clean|callback_check_database');
        if($this->form_validation->run() == FALSE){
            //Fallo la validacion, redireccionamos al login

            $alerta['errors'] = validation_errors();//'Hubo un error';
            $this->session->set_flashdata('alerts',$alerta);
            redirect('login', 'refresh'); 
        }else{
            redirect('Dashboard', 'refresh');
        }
    }

    function check_database($password){        
        //Paso la validacion. Validar ahora en la Base de Datos
        $login = $this->input->post('User');
        $this->load->model('User_model','',TRUE);
        //query the database
        if($result = $this->User_model->login($login, $password)){
            //se crea el arreglo para guardar los datos de la sesion
            $sess_array = array('id' => $result->id,
                                'role' => $result->rol_id,
                                'name' => $result->first_name,
                                'last_name' => $result->last_name);
            $this->session->set_userdata('logged_in', $sess_array);
            return TRUE;
        }else{
            $this->form_validation->set_message('check_database','<strong>Wrong Login or password.</strong>');
            return FALSE;
        }
    }

}
?>