<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loginforgotpassword extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('forgotpassword_model');
        $this->load->library('form_validation');
    }

    function index() {
        $data['main_content'] = 'resetpassword_view';
        $this->load->view('includes/logintemplate', $data);
    }

    public function forget() {
        if (isset($_POST['email']) || !empty($_POST['email'])) {
            //$this->load->libray('form_validation');
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[6]|max_length[30]|valid_email|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                $data['error'] = 'Please supply a valid email address';
                $data['main_content'] = 'resetpassword_view';
                $this->load->view('includes/logintemplate', $data);
            } else {
                $email = trim($this->input->post('email'));
                $result = $this->forgotpassword_model->email_exist($email);

                if ($result) {
                    //var_dump($result);
                    $this->send_reset_password_email($email, $result);
                    $data['error'] = $email;
                    $data['main_content'] = 'resetpassword_sent_view';
                    $this->load->view('includes/logintemplate', $data);
                } else {
                    $data['error'] = 'Email address not registered with LawFirm';
                    $data['main_content'] = 'resetpassword_view';
                    $this->load->view('includes/logintemplate', $data);
                }
            }
        } else {
             
           
            $data['main_content'] = 'resetpassword_view';
            $this->load->view('includes/logintemplate', $data);
        }
    }

    public function send_reset_password_email($email, $firstname) {
        $config = Array('protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'ojt.amats2013@gmail.com',
            'smtp_pass' => 'admin123!',
            'charset' => 'utf-8',
            'wordwrap' => TRUE,
            'crlf' => "\r\n",
            'newline' => "\r\n"
        );

        $this->load->library('email', $config);
        //$this->email->set_newline("\r\n");

        $this->load->helper('string');
        $salt = random_string('alnum', 32);

        $email_code = md5($salt . $firstname);
        
        $this->email->set_mailtype('html');
        $this->email->to($email);
        $this->email->from('webmaster@noreply.com', 'webmaster@noreply.com');
        $this->email->subject('Please reset your password at Law Firm');

        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
                    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html>
                    <meta http-equiv="Content-Type" content-text/html; charset=utf-8*/>
                    </head><body>';
        $message .='<p>Dear ' . $firstname . ',</p>';

        $message .='<p>We want to help you to reset your password! Please 
            <strong><a href="' .base_url().'loginforgotpassword/reset_password_form/'. $email . '/' . $email_code . '">click here</a></strong> to reset your password.</p>';
        $message .='<p>Thank you!</p>';
        $message .='<p>Law Firm Management</p>';
        $message .='</body></html>';

        $this->email->message($message);
        
        $this->email->send();
        //$this->reset_password_form($email, $email_code);
        
       
    }

    function reset_password_form($email,$email_code) {
     
        if (!empty($email) && !empty($email_code)) {
            
            $email = trim($email);
           
            $email_hash = sha1($email.$email_code);
            
          $verified = $this->forgotpassword_model->verify_reset_password_code($email,$email_code);
    
            if ($verified) {
                $data['email_hash'] = $email_hash;
                $data['email_code']= $email_code;
                $data['email'] = $email ;
                $data['main_content'] = 'update_password_view';
                $this->load->view('includes/logintemplate', $data);
         
            } else {
                $data['error'] = 'There was a problem with your link. Please click it 
                            again or request to reset your password again';
                $data['email'] = $email;
                $data['main_content'] = 'login_view';
                $this->load->view('includes/logintemplate', $data);
            }
       }
       else{ $data['main_content'] = 'login_view';
             $this->load->view('includes/logintemplate', $data);}
    }

    public function update() {
       
          if (!isset($_POST['email'], $_POST['email_hash']) || $_POST['email_hash'] != (sha1($_POST['email'] . $_POST['email_code']))) {
           die('Error updating your password');
           
        }
        $this->load->library('form_validation');
      
        $this->form_validation->set_rules('email_hash', 'Email Hash', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[50]|matches[password_conf]|xss_clean');
        $this->form_validation->set_rules('password_conf', 'Confirmed Password', 'trim|required|min_length[6]|max_length[50]|xss_clean');
        
        $q=$this->form_validation->run();
        if ($q === FALSE) {
            
            $data['error'] = 'There was a problem with your link. 
                Please click it again or request to reset your password again';
            $data['main_content'] = 'update_password_view';
            $this->load->view('includes/logintemplate', $data);
        } else {
            $result = $this->forgotpassword_model->update_password();

            if ($result) {
                $data['main_content'] = 'update_password_success_view';
                $this->load->view('includes/logintemplate', $data);
            } else {
             
                $data['error'] ='Problem updating your password. Please contact';
                $data['admin_email']='ojt.amats2013@gmail.com';
                $data['main_content'] = 'update_password_view';
                $this->load->view('includes/logintemplate', $data);
            }
        }
    }
//    function reset_password_form() {
//         $data['main_content'] = 'update_password_view';
//         $this->load->view('includes/logintemplate', $data);
//    }

//    function tryko(){
//         
//                //$data['add'] = array('email_hash' => $email_hash, 'email_code' => $email_code, 'email' => $email);
//                $data['main_content'] = 'update_password_view';
//                $this->load->view('includes/logintemplate', $data);
//        
//    }
}