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
    
    function getDefendantRecord()
    {
        $this->db->select("df.`defendant_id`, 
                           df.`defendant_name`, 
                           df.`userAccount_id`, 
                           ua.`userAccount_id` ");
        $this->db->where("df.`userAccount_id`", $this->session->userdata('userid'));
        $this->db->where("ua.`userAccount_id`", $this->session->userdata('userid'));
        $query = $this->db->get("`tbl_defendant` AS df, `tbl_useraccount` AS ua");
        
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
    
    function getCaseRecord()
    {
        $this->db->select("cs.`case_id`, 
                           cs.`case_name`, 
                           cs.`userAccount_id`, 
                           ua.`userAccount_id` ");
        $this->db->where("cs.`userAccount_id`", $this->session->userdata('userid'));
        $this->db->where("ua.`userAccount_id`", $this->session->userdata('userid'));
        $query = $this->db->get("`tbl_case` AS cs, `tbl_useraccount` AS ua");
        
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
    
    function insertInforeclosureInformation($plaintiff_name, $plaintiff_mailing_address, $plaintiff_subject_property_address, $plaintiff_history_information,
                                        $courthouse_name, $courthouse_address, $courthouse_history_information, $case_name, $case_history_information,
                                        $defendant_name, $defendant_history_information, $inforclosure_recorded_documents, $inforeclosure_recorded_documents_history_information,
                                        $original_deed_trust_lender_name, $original_deed_trust_lender_name_history, $present_beneficiary, $present_beneficiary_address,
                                        $foreclosure_trustee, $foreclosure_trustee_address, $grantee_tdus_name, $grantee_tdus_name_address, $bonafide_buyer, $bonafide_buyer_address,
                                        $casecriteria_inforeclosure_history_information)
    {
        $this->db->trans_start();
        
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_client',$plaintiff_name);
        $client_id = $this->db->insert_id();
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_clientmailingaddress',$plaintiff_mailing_address);
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_clientsubjectpropertyaddress',$plaintiff_subject_property_address);
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_client_history',$plaintiff_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_courthouse',$courthouse_name);
        $courthouse_id = $this->db->insert_id();
        
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->insert('tbl_courthouseaddress',$courthouse_address);
        
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->insert('tbl_courthouse_history',$courthouse_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_case',$case_name);
        $case_id = $this->db->insert_id();
        
        $this->db->set('case_id', $case_id);
        $this->db->insert('tbl_case_history',$case_history_information);
        
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_defendant',$defendant_name);
        $defendant_id = $this->db->insert_id();
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_history',$defendant_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('case_id', $case_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_client_defendant');
        
        $this->db->where('courthouse_id', $courthouse_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->update('tbl_courthouse');
        
        $this->db->where('case_id', $case_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->update('tbl_case');
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('case_id', $case_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_inforeclosure_recordeddocuments',$inforclosure_recorded_documents);
        $inforeclosure_recordeddocuments_id = $this->db->insert_id();
        
        $this->db->set('inforeclosure_recordeddocuments_id', $inforeclosure_recordeddocuments_id);
        $this->db->insert('tbl_inforeclosure_recordeddocuments_history',$inforeclosure_recorded_documents_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_originaldeedoftrustlender',$original_deed_trust_lender_name);
        $originaldeedoftrustlender_id = $this->db->insert_id();
        
        $this->db->set('originaldeedoftrustlender_id', $originaldeedoftrustlender_id);
        $this->db->insert('tbl_originaldeedoftrustlender_history',$original_deed_trust_lender_name_history);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_beneficiary',$present_beneficiary);
        $defendant_Beneficiary_id = $this->db->insert_id();
        
        $this->db->set('defendant_Beneficiary_id', $defendant_Beneficiary_id);
        $this->db->insert('tbl_defendant_beneficiaryaddress',$present_beneficiary_address);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_foreclosuretrustee',$foreclosure_trustee);
        $defendant_foreclosuretrustee_id = $this->db->insert_id();
        
        $this->db->set('defendant_foreclosuretrustee_id', $defendant_foreclosuretrustee_id);
        $this->db->insert('tbl_defendant_foreclosuretrusteeaddress',$foreclosure_trustee_address);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_grantee',$grantee_tdus_name);
        $defendant_Grantee_id = $this->db->insert_id();
        
        $this->db->set('defendant_Grantee_id', $defendant_Grantee_id);
        $this->db->insert('tbl_defendant_granteeaddress',$grantee_tdus_name_address);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_anotherbonafidebuyer',$bonafide_buyer);
        $defendant_anotherbonafidebuyer_id = $this->db->insert_id();
        
        $this->db->set('defendant_anotherbonafidebuyer_id', $defendant_anotherbonafidebuyer_id);
        $this->db->insert('tbl_defendant_anotherbonafidebuyeraddress',$bonafide_buyer_address);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('inforeclosure_recordeddocuments_id', $inforeclosure_recordeddocuments_id);
        $this->db->set('originaldeedoftrustlender_id', $originaldeedoftrustlender_id);
        $this->db->set('useraccount_id', $this->session->userdata('userid'));
        $this->db->set('case_id', $case_id);
        $this->db->insert('tbl_casecriteria_inforeclosure');
        $casecriteria_inforeclosure_id = $this->db->insert_id();
        
        $this->db->set('casecriteria_inforeclosure_id', $casecriteria_inforeclosure_id);
        $this->db->insert('tbl_casecriteria_inforeclosure_history',$casecriteria_inforeclosure_history_information);

        $this->db->trans_complete(); 
    }
    
    function insertForeclosedInformation($plaintiff_name, $plaintiff_mailing_address, $plaintiff_subject_property_address, $plaintiff_history_information,
                                        $courthouse_name, $courthouse_address, $courthouse_history_information, $case_name, $case_history_information,
                                        $defendant_name, $defendant_history_information, $foreclosed_recorded_documents, $foreclosed_recorded_documents_history_information,
                                        $original_deed_trust_lender_name, $original_deed_trust_lender_name_history, $present_beneficiary, $present_beneficiary_address,
                                        $foreclosure_trustee, $foreclosure_trustee_address, $grantee_tdus_name, $grantee_tdus_name_address, $bonafide_buyer, $bonafide_buyer_address,
                                        $casecriteria_foreclosed_history_information)
    {
        $this->db->trans_start();
        
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_client',$plaintiff_name);
        $client_id = $this->db->insert_id();
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_clientmailingaddress',$plaintiff_mailing_address);
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_clientsubjectpropertyaddress',$plaintiff_subject_property_address);
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_client_history',$plaintiff_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_courthouse',$courthouse_name);
        $courthouse_id = $this->db->insert_id();
        
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->insert('tbl_courthouseaddress',$courthouse_address);
        
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->insert('tbl_courthouse_history',$courthouse_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_case',$case_name);
        $case_id = $this->db->insert_id();
        
        $this->db->set('case_id', $case_id);
        $this->db->insert('tbl_case_history',$case_history_information);
        
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_defendant',$defendant_name);
        $defendant_id = $this->db->insert_id();
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_history',$defendant_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('case_id', $case_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_client_defendant');
        
        $this->db->where('courthouse_id', $courthouse_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->update('tbl_courthouse');
        
        $this->db->where('case_id', $case_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->update('tbl_case');
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('case_id', $case_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_foreclosed_recordeddocuments',$foreclosed_recorded_documents);
        $foreclosed_recordeddocuments_id = $this->db->insert_id();
        
        $this->db->set('foreclosed_recordeddocuments_id', $foreclosed_recordeddocuments_id);
        $this->db->insert('tbl_foreclosed_recordeddocuments_history',$foreclosed_recorded_documents_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_originaldeedoftrustlender',$original_deed_trust_lender_name);
        $originaldeedoftrustlender_id = $this->db->insert_id();
        
        $this->db->set('originaldeedoftrustlender_id', $originaldeedoftrustlender_id);
        $this->db->insert('tbl_originaldeedoftrustlender_history',$original_deed_trust_lender_name_history);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_beneficiary',$present_beneficiary);
        $defendant_Beneficiary_id = $this->db->insert_id();
        
        $this->db->set('defendant_Beneficiary_id', $defendant_Beneficiary_id);
        $this->db->insert('tbl_defendant_beneficiaryaddress',$present_beneficiary_address);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_foreclosuretrustee',$foreclosure_trustee);
        $defendant_foreclosuretrustee_id = $this->db->insert_id();
        
        $this->db->set('defendant_foreclosuretrustee_id', $defendant_foreclosuretrustee_id);
        $this->db->insert('tbl_defendant_foreclosuretrusteeaddress',$foreclosure_trustee_address);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_grantee',$grantee_tdus_name);
        $defendant_Grantee_id = $this->db->insert_id();
        
        $this->db->set('defendant_Grantee_id', $defendant_Grantee_id);
        $this->db->insert('tbl_defendant_granteeaddress',$grantee_tdus_name_address);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_anotherbonafidebuyer',$bonafide_buyer);
        $defendant_anotherbonafidebuyer_id = $this->db->insert_id();
        
        $this->db->set('defendant_anotherbonafidebuyer_id', $defendant_anotherbonafidebuyer_id);
        $this->db->insert('tbl_defendant_anotherbonafidebuyeraddress',$bonafide_buyer_address);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('foreclosed_recordeddocuments_id', $foreclosed_recordeddocuments_id);
        $this->db->set('originaldeedoftrustlender_id', $originaldeedoftrustlender_id);
        $this->db->set('useraccount_id', $this->session->userdata('userid'));
        $this->db->set('case_id', $case_id);
        $this->db->insert('tbl_casecriteria_foreclosed');
        $casecriteria_foreclosed_id = $this->db->insert_id();
        
        $this->db->set('casecriteria_foreclosed_id', $casecriteria_foreclosed_id);
        $this->db->insert('tbl_casecriteria_foreclosed_history',$casecriteria_foreclosed_history_information);
        
        $this->db->trans_complete(); 
    }
    
    function insertNODInformation($plaintiff_name, $plaintiff_mailing_address, $plaintiff_subject_property_address, $plaintiff_history_information,
                                  $courthouse_name, $courthouse_address, $courthouse_history_information, $case_name, $case_history_information,
                                  $defendant_name, $defendant_history_information, $nod_recorded_documents, $nod_recorded_documents_history_information, 
                                  $original_deed_trust_lender_name, $original_deed_trust_lender_name_history, $present_beneficiary, $present_beneficiary_address,
                                  $foreclosure_trustee, $foreclosure_trustee_address, $grantee_tdus_name, $grantee_tdus_name_address, $bonafide_buyer, 
                                  $bonafide_buyer_address, $casecriteria_nod_history_information, $casecriteria_amendment_history_information)
    {
        $this->db->trans_start();
        
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_client',$plaintiff_name);
        $client_id = $this->db->insert_id();
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_clientmailingaddress',$plaintiff_mailing_address);
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_clientsubjectpropertyaddress',$plaintiff_subject_property_address);
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_client_history',$plaintiff_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->insert('tbl_courthouse',$courthouse_name);
        $courthouse_id = $this->db->insert_id();
        
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->insert('tbl_courthouseaddress',$courthouse_address);
        
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->insert('tbl_courthouse_history',$courthouse_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_case',$case_name);
        $case_id = $this->db->insert_id();
        
        $this->db->set('case_id', $case_id);
        $this->db->insert('tbl_case_history',$case_history_information);
        
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_defendant',$defendant_name);
        $defendant_id = $this->db->insert_id();
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_history',$defendant_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('case_id', $case_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_client_defendant');
        
        $this->db->where('courthouse_id', $courthouse_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->update('tbl_courthouse');
        
        $this->db->where('case_id', $case_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->update('tbl_case');
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('case_id', $case_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('userAccount_id', $this->session->userdata('userid'));
        $this->db->insert('tbl_noticeofdefault_recordeddocuments',$nod_recorded_documents);
        $noticeofdefault_recordeddocuments_id = $this->db->insert_id();
        
        $this->db->set('noticeofdefault_recordeddocuments_id', $noticeofdefault_recordeddocuments_id);
        $this->db->insert('tbl_noticeofdefault_recordeddocuments_history',$nod_recorded_documents_history_information);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_originaldeedoftrustlender',$original_deed_trust_lender_name);
        $originaldeedoftrustlender_id = $this->db->insert_id();
        
        $this->db->set('originaldeedoftrustlender_id', $originaldeedoftrustlender_id);
        $this->db->insert('tbl_originaldeedoftrustlender_history',$original_deed_trust_lender_name_history);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_beneficiary',$present_beneficiary);
        $defendant_Beneficiary_id = $this->db->insert_id();
        
        $this->db->set('defendant_Beneficiary_id', $defendant_Beneficiary_id);
        $this->db->insert('tbl_defendant_beneficiaryaddress',$present_beneficiary_address);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_foreclosuretrustee',$foreclosure_trustee);
        $defendant_foreclosuretrustee_id = $this->db->insert_id();
        
        $this->db->set('defendant_foreclosuretrustee_id', $defendant_foreclosuretrustee_id);
        $this->db->insert('tbl_defendant_foreclosuretrusteeaddress',$foreclosure_trustee_address);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_grantee',$grantee_tdus_name);
        $defendant_Grantee_id = $this->db->insert_id();
        
        $this->db->set('defendant_Grantee_id', $defendant_Grantee_id);
        $this->db->insert('tbl_defendant_granteeaddress',$grantee_tdus_name_address);
        
        $this->db->set('defendant_id', $defendant_id);
        $this->db->insert('tbl_defendant_anotherbonafidebuyer',$bonafide_buyer);
        $defendant_anotherbonafidebuyer_id = $this->db->insert_id();
        
        $this->db->set('defendant_anotherbonafidebuyer_id', $defendant_anotherbonafidebuyer_id);
        $this->db->insert('tbl_defendant_anotherbonafidebuyeraddress',$bonafide_buyer_address);
        
        $this->db->set('client_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('noticeofdefault_documents_id', $noticeofdefault_recordeddocuments_id);
        $this->db->set('originaldeedoftrustlender_id', $originaldeedoftrustlender_id);
        $this->db->set('useraccount_id', $this->session->userdata('userid'));
        $this->db->set('case_id', $case_id);
        $this->db->insert('tbl_casecriteria_nodrescinded');
        $casecriteria_nodrescinded_id = $this->db->insert_id();
        
        $this->db->set('casecriteria_nodrescinded_id', $casecriteria_nodrescinded_id);
        $this->db->insert('tbl_casecriteria_nodrescinded_history',$casecriteria_nod_history_information);
        
        $this->db->set('plaintiff_id', $client_id);
        $this->db->set('defendant_id', $defendant_id);
        $this->db->set('courthouse_id', $courthouse_id);
        $this->db->set('defendant_id', $noticeofdefault_recordeddocuments_id);
        $this->db->set('amendment_date', date("Y-m-d H:i:s"));
        $this->db->set('originaldeedoftrustlender_id', $originaldeedoftrustlender_id);
        $this->db->set('useraccount_id', $this->session->userdata('userid'));
        $this->db->set('case_id', $case_id);
        $this->db->insert('tbl_casecriteria_amendment');
        $amendment_id = $this->db->insert_id();
        
        $this->db->set('casecriteria_amendment_id', $amendment_id);
        $this->db->insert('tbl_casecriteria_amendment_history',$casecriteria_amendment_history_information);
        
        $this->db->trans_complete();
    }
}