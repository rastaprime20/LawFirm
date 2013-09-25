<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Document extends MX_Controller {
    
    function __construct() 
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("document_model");
        $this->load->database();
        $this->load->library('pagination');
        $this->load->library('table');
        $this->is_logged_in();
        
    }

    function index() 
    {
        $data['main_content'] = 'document_view';
        $this->load->view('includes/template', $data);
    }
    function documentedit(){
        $data['main_content'] = 'document_edit';
        $this->load->view('includes/template', $data);
    }
    function documentpercaseview(){
        $data['main_content'] = 'document_percaseview';
        $this->load->view('includes/template', $data);
    }
    function documentlistdocumentview(){
        $data['main_content'] = 'document_listdocumentview';
        $this->load->view('includes/template', $data);
    }
    
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            redirect(base_url()."login");
        }
    }
}
?>