<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Document_model extends CI_Model 
{

    function getPlaintiffRecord()
    {
        $this->db->select(" cl.`client_id` , 
                            cl.`userAccount_id` , 
                            cl.`client_Lastname` , 
                            cl.`client_Firstname` , 
                            cl.`client_Middlename` , 
                            cl.`client_History_id` , 
                            clh.`client_history_datecreated` , 
                            clh.`client_history_datemodified` ,
                            ua.`userAccount_lastname`,
                            ua.`userAccount_firstname`,
                            ua.`userAccount_middlename`");
        
        $this->db->where("cl.`client_History_id` = clh.`client_history_id`");
        $this->db->where('cl.userAccount_id', $this->session->userdata('userid'));
        $this->db->where("ua.`userAccount_id` = cl.`userAccount_id`");
        $this->db->where("ua.`userAccount_id` = clh.`client_history_createdbyuseraccountid`");
        
        $query = $this->db->get(" `tbl_client` AS cl,  
                                  `tbl_client_history` AS clh,
                                  `tbl_useraccount` AS ua" );
        
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
    
    function searchPlaintiffRecord($keyword)
    {
        $this->db->or_like("cl.`client_Lastname`", $keyword);
        $this->db->or_like("cl.`client_Firstname`", $keyword);
        $this->db->or_like("cl.`client_Middlename`", $keyword);
        $this->db->or_like("clh.`client_history_datecreated`", $keyword);
        $this->db->or_like("clh.`client_history_datemodified`", $keyword);
        $this->db->or_like("ua.`userAccount_lastname`", $keyword);
        $this->db->or_like("ua.`userAccount_firstname`", $keyword);
        $query = $this->db->get(" `tbl_client` AS cl,  
                                  `tbl_client_history` AS clh,
                                  `tbl_useraccount` AS ua" );
        
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