<<<<<<< HEAD
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
            $this->load->view('user_view');
        }
}
=======
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MX_Controller {

    function index() {
        $this->load->view('user_view');
    }

    function create() {
        $this->load->view('user_create');
    }
    function edit() {
        $this->load->view('user_edit');
    }
}

>>>>>>> 39606820d2b4b7a4750b256ef874f65fe10297b1
