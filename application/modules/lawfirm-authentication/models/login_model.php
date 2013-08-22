<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    function validate()
    {
        $password = sha1($this->input->post('password'));
        $this->db->select('userAccount_id');
        $this->db->select('userAccount_firstname');
        $this->db->select('userAccount_lastname');
        $this->db->where('userAccount_username', $this->input->post('username'));
        $this->db->where('userAccount_defaultpassword', $password );
        $query = $this->db->get('tbl_useraccount');
        
        if($query->num_rows > 0)
        {   
            $result = $query->result_array();
            return $result;
        }
        
        else
        {
            return FALSE;
        }
    }

}

