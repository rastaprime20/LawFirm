<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class archive extends MX_Controller {

	function index()
    {
        $data['main_content']='archive';
        $this->load->view('includes/template',$data); 
    }
}


