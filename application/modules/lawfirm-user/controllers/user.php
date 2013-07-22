
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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


