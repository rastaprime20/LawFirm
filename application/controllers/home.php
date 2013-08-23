<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("home_model");
        $this->load->database();
        $this->load->library('pagination');
        $this->load->library('table');
        $this->is_logged_in();
    }
    
    function index() 
    {
        $query = $this->home_model->getClientRecord();
        
        if($query)
        {
           if(!empty($_POST['searchClientRecord']))
           {    
                $keyword = $this->input->post('searchClientRecord');
                $data['client_list'] = $this->home_model->searchClientRecord($keyword);
                
                if ($data['client_list'])
                {
                    $data['client_list'] = $this->home_model->searchClientRecord($keyword);
                }
                else
                {
                    $data['search_notification'] = "Sorry, no record found. Please, revise your keyword.";
                }
           }
           else
           {
                $data['client_list'] = $query;
           }
        }
        else
        {
                $data['search_notification'] = "Sorry, no record found.";
        }
        
        $data['main_content'] = 'home_view';
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
