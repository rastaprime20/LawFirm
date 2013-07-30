<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller {

    function index() {
        $data['main_content'] = 'template_view';
        $this->load->view('includes/template', $data);
    }
        
    public function create() {
        $data['main_content'] = 'template_create';
        $this->load->view('includes/template', $data);
    }
}
