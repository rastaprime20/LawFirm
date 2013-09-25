<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutorial extends MX_Controller
{

	 public function __construct()
        {
            parent::__construct();
            $this->load->model("home_model");
            $this->load->database();
            $this->load->helper('url');
           
        }
	
	
	function index() 
	{	
		$this->hello_world();
	}


	function hello_world()
	{       
                $query = $this->home_model->getClientRecord();
                $this->load->library('cezpdf');
		$this->cezpdf->ezText('Clients', 12, array('justification' => 'center'));
		$this->cezpdf->ezSetDy(-10);
                
                $userid = $query[0]['client_Lastname'];
                $firstname = $query[0]['client_Firstname'];
                $lastname = $query[0]['client_Middlename'];
                
                foreach ($query as $key => $client) {
                
                $content = $client['client_Lastname'] . " , " . $client['client_Firstname'] . " " . $client['client_Middlename'];
                           
                $this->cezpdf->ezText($content, 10);
                }
                $this->cezpdf->ezStream();

	}
	
	
	function tables()
	{
		$this->load->library('cezpdf');

		$db_data[] = array('name' => 'Jon Doe', 'phone' => '111-222-3333', 'email' => 'jdoe@someplace.com');
		$db_data[] = array('name' => 'Jane Doe', 'phone' => '222-333-4444', 'email' => 'jane.doe@something.com');
		$db_data[] = array('name' => 'Jon Smith', 'phone' => '333-444-5555', 'email' => 'jsmith@someplacepsecial.com');
		
		$col_names = array(
			'name' => 'Name',
			'phone' => 'Phone Number',
			'email' => 'E-mail Address'
		);
		
		$this->cezpdf->ezTable($table_data, $col_names, 'Contact List', array('width'=>550));
		$this->cezpdf->ezStream();
	}

	
	function headers()
	{
		$this->load->library('cezpdf');
		$this->load->helper('pdf');
		
		prep_pdf(); // creates the footer for the document we are creating.

		$db_data[] = array('name' => 'Jon Doe', 'phone' => '111-222-3333', 'email' => 'jdoe@someplace.com');
		$db_data[] = array('name' => 'Jane Doe', 'phone' => '222-333-4444', 'email' => 'jane.doe@something.com');
		$db_data[] = array('name' => 'Jon Smith', 'phone' => '333-444-5555', 'email' => 'jsmith@someplacepsecial.com');
		
		$col_names = array(
			'name' => 'Name',
			'phone' => 'Phone Number',
			'email' => 'E-mail Address'
		);
		
		$this->cezpdf->ezTable($db_data, $col_names, 'Contact List', array('width'=>550));
		$this->cezpdf->ezStream();
	}

}

?>