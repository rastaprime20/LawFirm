
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uuser extends CI_Controller
    {

    function __construct()
        {
        parent::__construct();
        $this->load->model('user_search_model');
        }

    function index()
        {
          
        $q = $this->user_search_model->getallUser();

        if ($q)
            {
            $data['results'] = $q;
            $data['main_content'] = 'user_view';
            $this->load->view('includes/template', $data);
            }
        else
            {
            $data['results'] = $q;
            $data['error'] = 'No record found';
            $data['main_content'] = 'user_view';
            $this->load->view('includes/template', $data);
            }
        }

    function searchall()
        {
        $q = $this->user_search_model->getallUser();

        if ($q)
            {
            $data['results'] = $q;
            $data['main_content'] = 'user_view';
            $this->load->view('includes/template', $data);
            }
        else
            {
            $data['results'] = $q;
            $data['error'] = 'No record found';
            $data['main_content'] = 'user_view';
            $this->load->view('includes/template', $data);
            }
        }

    function searchparticularuser()
        {
            $q = $this->user_search_model->getparticularUser();

        if ($q)
            {
            $data['results'] = $q;
            $data['main_content'] = 'user_view';
            $this->load->view('includes/template', $data);
            }
        else
            {
            $data['results'] = $q;
            $data['error'] = 'No record found';
            $data['main_content'] = 'user_view';
            $this->load->view('includes/template', $data);
            } 
        }

    function create()
        {

        $data['main_content'] = 'user_create';
        $this->load->view('includes/template', $data);
        }

    function edit()
        {
        $data['main_content'] = 'user_edit';
        $this->load->view('includes/template', $data);
        }

    function history()
        {
        $data['main_content'] = 'user_history';
        $this->load->view('includes/template', $data);
        }

    function transfer()
        {
        $data['main_content'] = 'user_transfer';
        $this->load->view('includes/template', $data);
        }

    function transferTo()
        {
        $data['main_content'] = 'user_transferTo';
        $this->load->view('includes/template', $data);
        }

    function transferToAtty()
        {
        $data['main_content'] = 'user_cases';
        $this->load->view('includes/template', $data);
        }

    }

