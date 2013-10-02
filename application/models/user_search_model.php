<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_search_model extends CI_Model
    {
   function download()
        {
        $user =$_GET['client_id'];
        // Retrieve data from database
        //$sql = "SELECT * FROM tbl_client WHERE client_id = '$user' LIMIT 1";
        
                $sql =  "SELECT
                     a.client_Firstname,
                    a.client_Middlename,
                    a.client_Lastname,
                    a.client_faxno,
                    b.client_Mailingaddress_street,
                    b.client_Mailingaddress_city,
                    b.client_Mailingaddress_zipcode,
                    b.client_Mailingaddress_telephonenumber,
                    c.userAccount_firstname,
                    c.userAccount_middlename,
                    c.userAccount_lastname,
                    d.case_Name,
                    d.case_Number
                 FROM 
                    `tbl_client` a,
                    `tbl_clientmailingaddress` b,
                    `tbl_useraccount` c,
                    `tbl_case` d
                 WHERE 
                 a.client_id = '$user' AND b.client_id = '$user' AND d.client_id = '$user' 
                LIMIT 1";

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
        
        //        $user = $_GET['userAccount_id'];
//         $user =$_GET['client_id'];
//        // Retrieve data from database
//        //$sql = "SELECT * FROM tbl_useraccount WHERE userAccount_id = '$user' LIMIT 1";
//        $sql =  "SELECT 
//                    a.client_Firstname,
//                    a.client_Middlename,
//                    a.client_Lastname,
//                    a.client_faxno,
//                    b.client_Mailingaddress_street,
//                    b.client_Mailingaddress_city,
//                    b.client_Mailingaddress_zipcode,
//                    b.client_Mailingaddress_telephonenumber,
//                    c.userAccount_firstname,
//                    c.userAccount_middlename,
//                    c.userAccount_lastname,
//                    d.case_Name,
//                    d.case_Number,
//                    e.defendant_Firstname,
//                    e.defendant_Middlename,
//                    e.defendant_Lastname
//                 FROM 
//                    tbl_client a,
//                    tbl_clientmailingaddress b,
//                    tbl_useraccount c,
//                    tbl_case d,
//                    tbl_defendant e
//                 WHERE 
//                    a.client_id 
//                    AND 
//                    b.client_id 
//                    AND 
//                    c.client_id
//                    AND 
//                    d.client_id
//                    AND 
//                    e.client_id='$user'
//                LIMIT 1";
//        $result = mysql_query($sql);
//
//        if (!$result)
//            {
//            die('Could not query: ' . mysql_error());
//            }
//
//        if (mysql_num_rows($result) == 1)
//            {
            // Include pdftk-php class
            //require('../pdftk-php.php');
            //$this->load->library('pdftk');
            // Initiate the class
            //$pdfmaker = new pdftk_php;
            // Define variables for all the data fields in the PDF form. You need to assign a column in the database to each field that you'll be using in the PDF. 
            // Example:
            // $pdf_column = $data['column'];
            // You can also format the MySQL data how you want here. 
            // One common example is formatting a date saved in the database. For example:
            // $pdf_date = date("l, F j, Y, g:i a", strtotime($data['date']));
            
           //end model here
//            $data = mysql_fetch_array($result);
        
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
