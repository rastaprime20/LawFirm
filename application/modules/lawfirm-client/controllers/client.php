<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Client extends CI_Controller
    {

    function __construct()
        {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("client_model");
        $this->load->database();
        $this->load->library('form_validation');
        $this->is_logged_in();

        }

    function index($data = "")
        {
        $queryClientRecord = $this->client_model->getClientRecord();

        if ($queryClientRecord)
            {
            $data['client_list'] = $queryClientRecord;
            }
        else
            {
            $data['no_client_list'] = "Sorry, no existing record for plaintiffs.";
            }

        $data['main_content'] = 'client_view';
        $this->load->view('includes/template', $data);

        }

    function is_logged_in()
        {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if (!isset($is_logged_in) || $is_logged_in != true)
            {
            redirect(base_url() . "login");
            }

        }

    }
