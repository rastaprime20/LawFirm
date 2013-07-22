<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Document extends MX_Controller {

    function index() {
        $this->load->view('document_view');
    }

}
?>