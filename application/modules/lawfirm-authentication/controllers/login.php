<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

	function index() {
        $data['main_content'] = 'login_view';
        $this->load->view('includes/logintemplate', $data);
    }
    
    function resetpassword() {
        $data['main_content'] = 'resetpassword_view';
        $this->load->view('includes/logintemplate', $data);
    }
}


