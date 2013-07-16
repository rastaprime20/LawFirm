<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

	function index()
    {
        $this->load->view('login_view'); 
    }
}


