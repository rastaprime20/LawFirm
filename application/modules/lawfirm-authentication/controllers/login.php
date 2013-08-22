<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {    
      
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('cookie');
    }
    
   
    function index() 
    {
        $data['main_content'] = 'login_view';
        $this->load->view('includes/logintemplate', $data);
    }
    
    function validate_credentials()
    {
        session_start();
        
        $query = $this->login_model->validate();
               
        $userid = $query[0]['userAccount_id'];
        $firstname = $query[0]['userAccount_firstname'];
        $lastname = $query[0]['userAccount_lastname'];
        
        if($query)
        {
           $this->remember_user();
           $this->remember_password();
           
           $data = array(
              'userid' => $userid,
              'username' => $this->input->post('username'),
              'firstname' => ($firstname),
              'lastname' => ($lastname),
              'is_logged_in' => true,
             
           );
            $this->session->set_userdata($data);

            redirect(base_url()."home", $data);
        }
        else
        {        
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                if (empty($username) || empty($password))
                {
                     $_SESSION['loginerror'] = "Please type your login details";
                     redirect(base_url().'login/validate', 'refresh');
                }
                else if (!empty ($username) || !empty($password))
                {
                     $_SESSION['loginerror'] = "Incorrect login details";
                     redirect(base_url().'login/validate', 'refresh');
                }  
                $this->index();
        }
        session_destroy();
    }
    
    public function validate() 
    {
        session_start();
        
        if (isset($_SESSION['loginerror'])) {
            $data['loginerror'] = $_SESSION['loginerror'];
        }
        
        $data['main_content'] = 'login_view';
        $this->load->view('includes/logintemplate', $data);
        
        session_destroy();
    }
    
    function remember_user()
    {
        $year = time() + 31536000;
        setcookie('remember_user', $_POST['username'], $year);
        setcookie('remember_password', $_POST['password'], $year);
        
        $rememberMe = isset($_POST['rememberMe']);
                
        if ($rememberMe) 
        {
                setcookie('remember_user', $_POST['username'], $year);
        }
        elseif (!$rememberMe)
        {
            if (!isset($_COOKIE['remember_user'])) 
            {
                $past = time() - 100;
                setcookie('remember_user','gone', $past);
            }
        }
    }
    
    function remember_password()
    {
        $year = time() + 31536000;
        setcookie('remember_password', $_POST['password'], $year);
        
        $rememberMe = isset($_POST['rememberMe']);
                
        if ($rememberMe) 
        {
                setcookie('remember_password', $_POST['password'], $year);
        }
        elseif (!$rememberMe)
        {
            if (!isset($_COOKIE['remember_password'])) 
            {
                $past = time() - 100;
                setcookie('remember_password','gone', $past);
            }
        }
    }
    
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            redirect(base_url()."login");
        }
    }
    
    function resetpassword() 
    {
        $data['main_content'] = 'resetpassword_view';
        $this->load->view('includes/logintemplate', $data['main_content']);
    }
    
}


