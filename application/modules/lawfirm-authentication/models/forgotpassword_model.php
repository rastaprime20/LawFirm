<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Forgotpassword_model extends CI_Model {

    public function email_exist($email) {
        $sql = "SELECT userAccount_firstname, userAccount_emailaddress FROM tbl_useraccount WHERE userAccount_emailaddress = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        return ($result->num_rows() === 1 && $row->userAccount_emailaddress) ? $row->userAccount_firstname : FALSE;
    }

    public function verify_reset_password_code($email, $code) {
        $sql = "SELECT userAccount_firstname, userAccount_emailaddress FROM tbl_useraccount WHERE userAccount_emailaddress = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
        
        $this->load->helper('string');
        $salt = random_string('alnum', 32);


        if ($result->num_rows() === 1) {
           return ($code = md5($salt . $row->userAccount_firstname)) ? TRUE : FALSE;
            
        } else {
            return FALSE;
        }
  }

    public function update_password() {
        $email = $this->input->post('email');
        
        
        $password = sha1($this->input->post('password'));
      
        $this->db->where('userAccount_emailaddress', $email);
        $this->db->set('userAccount_defaultpassword',$password);
        $q = $this->db->update('tbl_useraccount'); 
        //$sql = "UPDATE tbl_useraccount SET userAccount_defaultpassword ='$password' WHERE userAccount_emailaddress ='$email' LIMIT 1";
        
       // $q=$this->db->query($sql);
        
        if ($q) {
            return TRUE;
        } else {
            return FALSE;
      }
    }
}