<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Document extends MX_Controller {

    function index() {
        $data['main_content'] = 'document_view';
        $this->load->view('includes/template', $data);
    }
    function plaintiffview(){
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
}
?>