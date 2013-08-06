<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->database();
    }
   
    
    function index() 
    {
        $data['main_content'] = 'login_view';
        $this->load->view('includes/logintemplate', $data);
    }
    
    function validate_credentials()
    {
        $this->load->model('login_model');
        $query = $this->login_model->validate();  
        
        if($query)
        {
           $data = array(
              'username' => $this->input->post('username'),
              'is_logged_in' => true
           );
           $this->session->set_userdata($data);
           redirect(base_url().'home');
        }
        else
        {
            $this->index();
        }
    }
    
    function resetpassword() 
    {
        $data['main_content'] = 'resetpassword_view';
        $this->load->view('includes/logintemplate', $data);
    }
    
}


