<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_search_model extends CI_Model
    {
   function download()
        {
        $user =$_GET['client_id'];
        // Retrieve data from database
        $sql = "SELECT * FROM tbl_useraccount WHERE userAccount_id = '$user' LIMIT 1";
//        $sql =  "SELECT 
//                    a.client_id,
//                    a.client_Firstname,
//                    a.client_Middlename,
//                    a.client_Lastname,
//                    a.client_Faxno,
//                    b.client_Mailingaddress_street,
//                    b.client_Mailingaddress_city,
//                    b.client_Mailingaddress_zipcode,
//                    b.client_Mailingaddress_telephonenumber,
//                    c.userAccount_firstname,
//                    c.userAccount_middlename,
//                    c.userAccount_lastname,
//                    d.case_Name,
//                    d.case_Number,
//                    f.defendant_name,
//                    g.courthouse_name,
//                    h.courthouse_state,
//                    h.courthouse_cityaddress,
//                    h.courthouse_streetaddress,
//                    h.courthouse_zipcodeaddress
//
//                 FROM 
//                    tbl_client  as a,
//                    tbl_clientmailingaddress as b,
//                    tbl_useraccount as c,
//                    tbl_case as d,
//                    tbl_client_defendant as e,
//                    tbl_defendant as f,
//                    tbl_courthouse as g,
//                    tbl_courthouseaddress as h
//
//                 WHERE 
//                    a.client_id = '$user' 
//                    AND 
//                    b.client_id = '$user'
//                    AND 
//                    c.client_id = '$user'
//                    AND 
//                    d.client_id = '$user'
//                    AND 
//                    e.client_id = '$user'
//                    AND
//                    e.defendant_id = f.defendant_id
//                    AND
//                    e.defendant_id = g.defendant_id
//                    AND
//                    g.client_id = '$user'
//                LIMIT 1";

        $result = mysql_query($sql);
        
        
        if (!$result)
            {
            die('Could not query: ' . mysql_error());
            }

        if (mysql_num_rows($result) == 1)
            {
             $data = mysql_fetch_array($result);
             return $data;
            }
        }
    function getallUser()
        {
        //$this->db->order_by('userAccount_datetimecreated', 'desc');
        $q = $this->db->get('tbl_client');
        if ($q->num_rows() > 0)
            {
            foreach ($q->result_array() as $row)
                {
                $data1[] = $row;
                }
            return $data1;
            }
        else
            {
            return FALSE;
            }
        }

    function getparticularUser()
        {
        $keyword = $_POST['keyword'];
        //$this->db->select('stateBarno, userAccount_lastname,userAccount_firstname,userAccount_middlename, userAccount_createdby,userAccount_datetimecreated,userAccount_datetimecreated');
        $this->db->or_like('userAccount_lastname', $keyword);
        $this->db->or_like('userAccount_firstname', $keyword);
        $this->db->or_like('userAccount_middlename', $keyword);
        //$this->db->join('userAccount_accountstatus', 'userAccountstatus_id = userAccountstatus_id');
        $q = $this->db->get('tbl_useraccount');
        if ($q->num_rows() > 0)
            {
            foreach ($q->result_array() as $row)
                {
                $data[] = $row;
                }
            return $data;
            }
        else
            {
            return FALSE;
            }
        }

    }
