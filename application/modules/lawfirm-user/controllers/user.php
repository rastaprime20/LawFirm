
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {

    function index() {
        $data['main_content'] = 'user_view';
        $this->load->view('includes/template', $data);
    }

    function create() {
         $data['main_content'] = 'user_create';
        $this->load->view('includes/template', $data);
    }
}


