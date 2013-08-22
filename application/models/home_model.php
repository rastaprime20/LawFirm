<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model 
{

    function getClientRecord()
    {
        $this->db->select("cl.`client_id`, 
                           cl.`client_Lastname`, 
                           cl.`client_Firstname`, 
                           cl.`client_Middlename`, 
                           cl.`userAccount_id`, 
                           ua.`userAccount_id` ");
        $this->db->where("cl.`userAccount_id`", $this->session->userdata('userid'));
        $this->db->where("ua.`userAccount_id`", $this->session->userdata('userid'));
        $query = $this->db->get("`tbl_client` AS cl, `tbl_useraccount` AS ua");
        
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
    
    function searchClientRecord($keyword)
    {
        $this->db->select("cl.`client_id`, 
                           cl.`client_Lastname`, 
                           cl.`client_Firstname`, 
                           cl.`client_Middlename`, 
                           cl.`userAccount_id`, 
                           ua.`userAccount_id` ");
        $this->db->or_like("cl.`client_Lastname`", $keyword);
        $this->db->or_like("cl.`client_Firstname`", $keyword);
        $this->db->or_like("cl.`client_Middlename`", $keyword);
        $this->db->where("cl.`userAccount_id`", $this->session->userdata('userid'));
        $this->db->where("ua.`userAccount_id`", $this->session->userdata('userid'));
        $query = $this->db->get("`tbl_client` AS cl, `tbl_useraccount` AS ua");
        
        
        if($query->num_rows > 0)
        {   
            foreach ($query->result_array() as $row)
                {
                $result[] = $row;
                }
            return $result;
        }
        
        else
        {
            return FALSE;
        }
    }
    
}