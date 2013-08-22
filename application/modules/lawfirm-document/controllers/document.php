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
    function plaintiffview(){
        
        $query = $this->document_model->getPlaintiffRecord();

        if($query)
        {
            if(!empty($_POST['searchPlaintiffRecord']))
            {
                $keyword = $this->input->post('searchPlaintiffRecord');
                $data['plaintiff_list'] = $this->document_model->searchPlaintiffRecord($keyword);
                
                if ($data['plaintiff_list'])
                {
                   $data['plaintiff_list'] = $this->document_model->searchPlaintiffRecord($keyword);
                }
                else 
                {
                   $data['plaintiff_list'] = $query;
                   
                   $_SESSION['search_notification'] = "Sorry, no record found.";
                    
                    if (isset($_SESSION['search_notification'])) 
                    {
                        $data['search_notification'] = $_SESSION['search_notification'];
                    }
                }
            }
            else
            {
                $data['plaintiff_list'] = $query;
            }
                
        }
        else
        {
                
        }
        $data['main_content'] = 'document_plaintiffview';
        $this->load->view('includes/template', $data);
    }
    function plaintiffcreate(){
        $data['main_content'] = 'document_plaintiffcreate';
        $this->load->view('includes/template', $data);
    }
    function plaintiffedit(){
        $data['main_content'] = 'document_plaintiffedit';
        $this->load->view('includes/template', $data);
    }
    function defendantview(){
        $data['main_content'] = 'document_defendantview';
        $this->load->view('includes/template', $data);
    }
    function defendantcreate(){
        $data['main_content'] = 'document_defendantcreate';
        $this->load->view('includes/template', $data);
    }
    function defendantedit(){
        $data['main_content'] = 'document_defendantedit';
        $this->load->view('includes/template', $data);
    }
    function civilcasecoversheetcreate(){
        $data['main_content'] = 'document_civilcasecoversheetcreate';
        $this->load->view('includes/template', $data);
    }
    function summons100create(){
        $data['main_content'] = 'document_summons100create';
        $this->load->view('includes/template', $data);
    }
    function additionalsummonsview(){
        $data['main_content'] = 'document_additionalsummons200view';
        $this->load->view('includes/template', $data);
    }
    function civilfeewaivercreate(){
        $data['main_content'] = 'document_civilfeewaivercreate';
        $this->load->view('includes/template', $data);
    }
    function civilfeewaiverordercreate(){
        $data['main_content'] = 'document_civilfeewaiverordercreate';
        $this->load->view('includes/template', $data);
    }
    function proofsummonscreate(){
        $data['main_content'] = 'document_proofsummonscreate';
        $this->load->view('includes/template', $data);
    }
    function additionalpartieslispendenscreate(){
        $data['main_content'] = 'document_additionalpartieslispendenscreate';
        $this->load->view('includes/template', $data);
    }
    function sdcourtformcreate(){
        $data['main_content'] = 'document_sdcourtformcreate';
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