<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    function validate()
    {
        $this->db->where('userAccount_username', $this->input->post('username'));
        $this->db->where('userAccount_defaultpassword', $this->input->post('password'));
        $query = $this->db->get('tbl_useraccount');
        
        if($query->num_rows == 1)
        {
            return TRUE;
        }
    }

}

