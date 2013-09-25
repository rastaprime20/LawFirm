<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("home_model");
        $this->load->database();
        $this->load->library('pagination');
        $this->load->library('table');
        $this->load->library('form_validation');
        $this->is_logged_in();
    }
    
    function index($data="") 
    {
        $queryClientRecord = $this->home_model->getClientRecord();
        $queryDefendantRecord = $this->home_model->getDefendantRecord();
        $queryCaseRecord = $this->home_model->getCaseRecord();
        
        if($queryClientRecord)
        {
                $data['client_list'] = $queryClientRecord;
        }
        else
        {
                $data['no_client_list'] = "Sorry, no existing record for plaintiffs.";
        }
        
        if($queryDefendantRecord)
        {
                $data['defendant_list'] = $queryDefendantRecord;
        }
        else
        {
                $data['no_defendant_list'] = "Sorry, no existing record for defendants.";
        }
        
        if($queryCaseRecord)
        {
                $data['case_list'] = $queryCaseRecord;
        }
        else
        {
                $data['no_case_list'] = "Sorry, no existing record for cases.";
        }
        
                $data['main_content'] = 'home_view';
                $this->load->view('includes/template', $data);   
    }
    
    function insertClientRecord()
    {
        $btnSaveClientRecord = $this->input->post('SaveClientRecord');
        
        if (isset($btnSaveClientRecord)) 
        {
            $selected_criteria = $this->input->post('documentCriteria');
            
            if ($selected_criteria == 'In-foreclosure') 
            {
                $data = $this->validateInputData();
                $this->form_validation->set_rules('txtrecordeddocumentsPageNumberDeclarationAgent', 'Page Number of Declaration Agent', 'required', "This field is required");
                
                if ($this->form_validation->run() == FALSE)
		{
                    $data['checkInforeclosure'] = $selected_criteria;
                    $this->index($data);
		}
                else 
                {
                    $data = $this->getInputData();

                    $data['inforclosure_recorded_documents'] = array
                    (
                        'inforeclosure_recordeddocuments_deedoftrusteesigningdate' => $this->input->post('txtrecordeddocumentsDeedofTrustSigningDate'),
                        'inforeclosure_recordeddocuments_deedoftrusteerecdate' => $this->input->post('txtrecordeddocumentsDeedofTrustRecDate'),
                        'inforeclosure_recordeddocuments_deedoftrusteedocnumber' => $this->input->post('txtrecordeddocumentsDeedofTrustDocNumber'),
                        'inforeclosure_recordeddocuments_nodrecdate' => $this->input->post('txtrecordeddocumentsNODRecDate'),
                        'inforeclosure_recordeddocuments_noddocnumber' => $this->input->post('txtrecordeddocumentsNODDocNumber'),
                        'inforeclosure_recordeddocuments_pagedeclaration' => $this->input->post('txtrecordeddocumentsPageNumberDeclarationAgent'),
                        'inforeclosure_recordeddocuments_ntsrecdate' => $this->input->post('txtrecordeddocumentsNTSRecDate'),
                        'inforeclosure_recordeddocuments_ntsdocnumber' => $this->input->post('txtrecordeddocumentsNTSDocNumber')
                    );

                    $data['inforeclosure_recorded_documents_history_information'] = array(
                        'inforeclosure_recordeddocuments_history_datecreated' => date("Y-m-d H:i:s"),
                        'inforeclosure_recordeddocuments_history_createdbyuseraccountid' => $this->session->userdata('userid')
                    );
                    
                    $data['casecriteria_inforeclosure_history_information'] = array(
                        'casecriteria_inforeclosure_history_datecreated' => date("Y-m-d H:i:s"),
                        'casecriteria_inforeclosure_history_createdbyuseraccountid' => $this->session->userdata('userid')
                    );

                    $this->home_model->insertInforeclosureInformation
                    ($data['plaintiff_name'], $data['plaintiff_mailing_address'], $data['plaintiff_subject_property_address'], $data['plaintiff_history_information'], 
                     $data['courthouse_name'], $data['courthouse_address'], $data['courthouse_history_information'], $data['case_name'], $data['case_history_information'], 
                     $data['defendant_name'], $data['defendant_history_information'], $data['inforclosure_recorded_documents'], $data['inforeclosure_recorded_documents_history_information'], 
                     $data['original_deed_trust_lender_name'], $data['original_deed_trust_lender_name_history'], $data['present_beneficiary'], $data['present_beneficiary_address'], 
                     $data['foreclosure_trustee'], $data['foreclosure_trustee_address'], $data['grantee_tdus_name'], $data['grantee_tdus_name_address'], $data['bonafide_buyer'], $data['bonafide_buyer_address'],
                     $data['casecriteria_inforeclosure_history_information']);
                    
                     $data['successNotification'] = "Record successfully saved";
                     $this->index($data);
                }        
            }
            else if ($selected_criteria == 'Foreclosed')
            {
                
                $data = $this->validateInputData();
                $this->form_validation->set_rules('txtrecordeddocumentsTDUSRecDate', 'TDUS Rec Date', 'required', "This field is required");
                $this->form_validation->set_rules('txtrecordeddocumentsTDUSDocNumber', 'TDUS Doc Number', 'required', "This field is required");
                $this->form_validation->set_rules('txtrecordeddocumentsTDUSPropertySoldDate', 'TDUS Property Sold Date', 'required', "This field is required");
                
                if ($this->form_validation->run() == FALSE)
		{
                    $data['checkForeclosed'] = $selected_criteria;
                    $this->index($data);
		}
                else
                {
                    $data = $this->getInputData();
                    
                    $data['foreclosed_recorded_documents'] = array
                    (
                        'foreclosed_recordeddocuments_deedoftrusteesigningdate' => $this->input->post('txtrecordeddocumentsDeedofTrustSigningDate'),
                        'foreclosed_recordeddocuments_deedoftrusteerecdate' => $this->input->post('txtrecordeddocumentsDeedofTrustRecDate'),
                        'foreclosed_recordeddocuments_deedoftrusteedocnumber' => $this->input->post('txtrecordeddocumentsDeedofTrustDocNumber'),
                        'foreclosed_recordeddocuments_nodrecdate' => $this->input->post('txtrecordeddocumentsNODRecDate'),
                        'foreclosed_recordeddocuments_noddocnumber' => $this->input->post('txtrecordeddocumentsNODDocNumber'),
                        'foreclosed_recordeddocuments_ntsrecdate' => $this->input->post('txtrecordeddocumentsNTSRecDate'),
                        'foreclosed_recordeddocuments_ntsdocnumber' => $this->input->post('txtrecordeddocumentsNTSDocNumber'),
                        'foreclosed_recordeddocuments_tdusrecdate' => $this->input->post('txtrecordeddocumentsTDUSRecDate'),
                        'foreclosed_recordeddocuments_tdusdocnumber' => $this->input->post('txtrecordeddocumentsTDUSDocNumber'),
                        'foreclosed_recordeddocuments_tduspropertysolddate' => $this->input->post('txtrecordeddocumentsTDUSPropertySoldDate')
                    );
                    
                    $data['foreclosed_recorded_documents_history_information'] = array(
                        'foreclosed_recordeddocuments_history_datecreated' => date("Y-m-d H:i:s"),
                        'foreclosed_recordeddocuments_history_createdbyuseraccountid' => $this->session->userdata('userid')
                    );
                    
                    $data['casecriteria_foreclosed_history_information'] = array(
                        'casecriteria_foreclosed_history_datecreated' => date("Y-m-d H:i:s"),
                        'casecriteria_foreclosed_history_createdbyuseraccountid' => $this->session->userdata('userid')
                    );

                    $this->home_model->insertForeclosedInformation
                    ($data['plaintiff_name'], $data['plaintiff_mailing_address'], $data['plaintiff_subject_property_address'], $data['plaintiff_history_information'], 
                     $data['courthouse_name'], $data['courthouse_address'], $data['courthouse_history_information'], $data['case_name'], $data['case_history_information'], 
                     $data['defendant_name'], $data['defendant_history_information'], $data['foreclosed_recorded_documents'], $data['foreclosed_recorded_documents_history_information'], 
                     $data['original_deed_trust_lender_name'], $data['original_deed_trust_lender_name_history'], $data['present_beneficiary'], $data['present_beneficiary_address'], 
                     $data['foreclosure_trustee'], $data['foreclosure_trustee_address'], $data['grantee_tdus_name'], $data['grantee_tdus_name_address'], $data['bonafide_buyer'], $data['bonafide_buyer_address'],
                     $data['casecriteria_foreclosed_history_information']);
                     
                     $data['successNotification'] = "Record successfully saved";
                     $this->index($data);
                }
            }
            else if ($selected_criteria == 'Notice of Default')
            {
                $data = $this->validateInputData();
                $this->form_validation->set_rules('txtrecordeddocumentsNORRecDate', 'NOR Rec Date', 'required', "This field is required");
                $this->form_validation->set_rules('txtrecordeddocumentsNORDocNumber', 'NOR Doc Number', 'required', "This field is required");
                $this->form_validation->set_rules('txtrecordeddocumentsPageNumberDeclarationAgent', 'Page Number of Declaration Agent', 'required', "This field is required");
                
                if ($this->form_validation->run() == FALSE)
		{
                    $data['checkNoticeOfDefault'] = $selected_criteria;
                    $this->index($data);
		}
                else 
                {
                    $data = $this->getInputData();
                    
                    $data['nod_recorded_documents'] = array
                    (
                        'noticeofdefault_recordeddocuments_deedoftrusteesigningdate' => $this->input->post('txtrecordeddocumentsDeedofTrustSigningDate'),
                        'noticeofdefault_recordeddocuments_deedoftrusteerecdate' => $this->input->post('txtrecordeddocumentsDeedofTrustRecDate'),
                        'noticeofdefault_recordeddocuments_deedoftrusteedocnumber' => $this->input->post('txtrecordeddocumentsDeedofTrustDocNumber'),
                        'noticeofdefault_recordeddocuments_nodrecdate' => $this->input->post('txtrecordeddocumentsNODRecDate'),
                        'noticeofdefault_recordeddocuments_noddocnumber' => $this->input->post('txtrecordeddocumentsNODDocNumber'),
                        'noticeofdefault_recordeddocuments_pagedeclaration' => $this->input->post('txtrecordeddocumentsPageNumberDeclarationAgent'),
                        'noticeofdefault_recordeddocuments_ntsrecdate' => $this->input->post('txtrecordeddocumentsNTSRecDate'),
                        'noticeofdefault_recordeddocuments_ntsdocnumber' => $this->input->post('txtrecordeddocumentsNTSDocNumber'),
                        'noticeofdefault_recordeddocuments_norrecdate' => $this->input->post('txtrecordeddocumentsNORRecDate'),
                        'noticeofdefault_recordeddocuments_nordocnumber' => $this->input->post('txtrecordeddocumentsNORDocNumber')
                    );
                    
                    $data['nod_recorded_documents_history_information'] = array(
                        'noticeofdefault_recordeddocuments_history_datecreated' => date("Y-m-d H:i:s"),
                        'noticeofdefault_recordeddocuments_history_createdbyuseraccountid' => $this->session->userdata('userid')
                    );
                    
                    $data['casecriteria_nod_history_information'] = array(
                        'casecriteria_nodrescinded_history_datecreated' => date("Y-m-d H:i:s"),
                        'casecriteria_nodrescinded_history_createdbyuseraccountid' => $this->session->userdata('userid')
                    );
                    
                    $data['casecriteria_amendment_history_information'] = array(
                        'casecriteria_amendment_history_datecreated' => date("Y-m-d H:i:s"),
                        'casecriteria_amendment_history_createdbyuseraccountid' => $this->session->userdata('userid')
                    );
                    
                    $this->home_model->insertNODInformation
                    ($data['plaintiff_name'], $data['plaintiff_mailing_address'], $data['plaintiff_subject_property_address'], $data['plaintiff_history_information'], 
                     $data['courthouse_name'], $data['courthouse_address'], $data['courthouse_history_information'], $data['case_name'], $data['case_history_information'], 
                     $data['defendant_name'], $data['defendant_history_information'], $data['nod_recorded_documents'], $data['nod_recorded_documents_history_information'], 
                     $data['original_deed_trust_lender_name'], $data['original_deed_trust_lender_name_history'], $data['present_beneficiary'], $data['present_beneficiary_address'], 
                     $data['foreclosure_trustee'], $data['foreclosure_trustee_address'], $data['grantee_tdus_name'], $data['grantee_tdus_name_address'], $data['bonafide_buyer'], 
                     $data['bonafide_buyer_address'], $data['casecriteria_nod_history_information'], $data['casecriteria_amendment_history_information']);
                     
                     $data['successNotification'] = "Record successfully saved";
                     $this->index($data);
                }
            }
        }  
    }
    
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
                
        if(!isset($is_logged_in) || $is_logged_in != true)
        {   
            redirect(base_url()."login");
        }
    }
    
   function validateInputData()
   {
       $error_message = " This field is required";
       
       $data['validate_input'] = array
                (
                    $this->form_validation->set_rules('txtplaintiffLastName', 'Plaintiff Last Name','required', $error_message),
                    $this->form_validation->set_rules('txtplaintiffFirstName', 'Plaintiff First Name', 'required', $error_message),
                    $this->form_validation->set_rules('txtplaintiffMiddleName', 'Plaintiff Middle Name', 'required',$error_message),

                    $this->form_validation->set_rules('txtplaintiffStreetMailingAddress', 'Street', 'required', $error_message),
                    $this->form_validation->set_rules('txtplaintiffCityMailingAddress', 'City', 'required', $error_message),
                    $this->form_validation->set_rules('txtplaintiffStateZipCodeMailingAddress', 'State Zip Code', 'required', $error_message),
                    $this->form_validation->set_rules('txtplaintiffCityOnlyMailingAddress', 'City only', 'required', $error_message),
                    $this->form_validation->set_rules('txtplaintiffPhoneNumberMailingAddress', 'Phone Number', 'required', $error_message),

                    $this->form_validation->set_rules('txtplaintiffStreetSubjectPropertyAddress', 'Street', 'required', $error_message),
                    $this->form_validation->set_rules('txtplaintiffCitySubjectPropertyAddress', 'City', 'required', $error_message),
                    $this->form_validation->set_rules('txtplaintiffStateZipCodeSubjectPropertyAddress', 'State Zip Code', 'required', $error_message),
                    $this->form_validation->set_rules('txtplaintiffAPNNumberSubjectPropertyAddress', 'APN Number', 'required', $error_message),
                    
                    $this->form_validation->set_rules('txtcourthouseState', 'Courthouse State', 'required', $error_message),
                    $this->form_validation->set_rules('txtcourthouseName', 'Courthouse Name', 'required', $error_message),
                    $this->form_validation->set_rules('txtcourthouseCity', 'Courthouse City', 'required', $error_message),                   
                    $this->form_validation->set_rules('txtcourthouseStreetAddress', 'Courthouse Street', 'required', $error_message),
                    $this->form_validation->set_rules('txtcourthouseStateZipCodeAddress', 'Courthouse State Zip Code', 'required', $error_message),
                    
                    $this->form_validation->set_rules('txtcaseName', 'Case Name', 'required', $error_message),
                    $this->form_validation->set_rules('txtdefendantShortName', 'Defendant Short Name', 'required', $error_message),
                    $this->form_validation->set_rules('txtoriginaldeedtrustlenderNameofLender', 'Name of Lender', 'required', $error_message),
                    $this->form_validation->set_rules('txtoriginaldeedtrustlenderShortNameofLender', 'Short Name of Lender', 'required', $error_message),
                    
                    $this->form_validation->set_rules('txtrecordeddocumentsDeedofTrustSigningDate', 'Deed of Trust Signing Date', 'required', $error_message),
                    $this->form_validation->set_rules('txtrecordeddocumentsDeedofTrustRecDate', 'Deed of Trust Rec Date', 'required', $error_message),
                    $this->form_validation->set_rules('txtrecordeddocumentsDeedofTrustDocNumber', 'Deed of Trust Doc Number', 'required', $error_message),
                    
                    $this->form_validation->set_rules('txtrecordeddocumentsNODRecDate', 'NOD Rec Date', 'required',$error_message),
                    $this->form_validation->set_rules('txtrecordeddocumentsNODDocNumber', 'NOD Doc Number', 'required', $error_message),
                    $this->form_validation->set_rules('txtrecordeddocumentsNTSRecDate', 'NTS Rec Date', 'required', $error_message),
                    $this->form_validation->set_rules('txtrecordeddocumentsNTSDocNumber', 'NTS Doc Number', 'required', $error_message),
                    
                    $this->form_validation->set_rules('txtnamedefendantsPresentBeneficiary', 'Present Beneficiary Name', 'required',$error_message),
                    $this->form_validation->set_rules('txtnamedefendantsShortNamePresentBeneficiary', 'Present Beneficiary Short Name', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsPresentBeneficiaryStreetAddress', 'Present Beneficiary Street', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsPresentBeneficiaryCityAddress', 'Present Beneficiary City', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsPresentBeneficiaryStateZipCodeAddress', 'Present Beneficiary State Zip Code', 'required', $error_message),
                    
                    $this->form_validation->set_rules('txtnamedefendantsForeclosureTrustee', 'Foreclosure Trustee Name', 'required',$error_message),
                    $this->form_validation->set_rules('txtnamedefendantsShortNameForeclosureTrustee', 'Foreclosure Trustee Short Name', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsForeclosureTrusteeStreetAddress', 'Foreclosure Trustee Street', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsForeclosureTrusteeCityAddress', 'Foreclosure Trustee City', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsForeclosureTrusteeStateZipCodeAddress', ' Foreclosure Trustee State Zip Code', 'required', $error_message),
                    
                    $this->form_validation->set_rules('txtnamedefendantsNamedGranteeTDUS', 'Grantee Name', 'required',$error_message),
                    $this->form_validation->set_rules('txtnamedefendantsShortNameNamedGranteeTDUS', 'Grantee Trustee Short Name', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsNamedGranteeTDUSStreetAddress', 'Grantee Trustee Street', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsNamedGranteeTDUSCityAddress', 'Grantee Trustee City', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsNamedGranteeTDUSStateZipCodeAddress', 'Grantee Trustee State Zip Code', 'required', $error_message),
                    
                    $this->form_validation->set_rules('txtnamedefendantsAnotherBonafideBuyer', 'Another Bonafide Buyer Name', 'required',$error_message),
                    $this->form_validation->set_rules('txtnamedefendantsShortNameAnotherBonafideBuyer', 'Another Bonafide Buyer Trustee Short Name', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsAnotherBonafideBuyerStreetAddress', 'Another Bonafide Buyer Trustee Street', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsAnotherBonafideBuyerCityAddress', 'Another Bonafide Buyer Trustee City', 'required', $error_message),
                    $this->form_validation->set_rules('txtnamedefendantsAnotherBonafideBuyerStateZipCodeAddress', 'Another Bonafide Buyer Trustee State Zip Code', 'required', $error_message),
                );
                
                return $data;
   }
    
   function getInputData()
   {
                $data['plaintiff_name'] = array(
                    'client_Lastname' => $this->input->post('txtplaintiffLastName'),
                    'client_Firstname' => $this->input->post('txtplaintiffFirstName'),
                    'client_Middlename' => $this->input->post('txtplaintiffMiddleName')
                );
               
                $data['plaintiff_mailing_address'] = array(
                    'client_Mailingaddress_street' => $this->input->post('txtplaintiffStreetMailingAddress'),
                    'client_Mailingaddress_city' => $this->input->post('txtplaintiffCityMailingAddress'),
                    'client_Mailingaddress_zipcode' => $this->input->post('txtplaintiffStateZipCodeMailingAddress'),
                    'client_Mailingaddress_cityonly' => $this->input->post('txtplaintiffCityOnlyMailingAddress'),
                    'client_Mailingaddress_telephonenumber' => $this->input->post('txtplaintiffPhoneNumberMailingAddress')
                );
                 
                $data['plaintiff_subject_property_address'] = array(
                    'client_Subjectpropertyaddress_street' => $this->input->post('txtplaintiffStreetSubjectPropertyAddress'),
                    'client_Subjectpropertyaddress_city' => $this->input->post('txtplaintiffCitySubjectPropertyAddress'),
                    'client_Subjectpropertyaddress_zipcode' => $this->input->post('txtplaintiffStateZipCodeSubjectPropertyAddress'),
                    'client_Subjectpropertyaddress_apnnumber' => $this->input->post('txtplaintiffAPNNumberSubjectPropertyAddress')
                );
                
                $data['plaintiff_history_information'] = array(
                    'client_history_datecreated' => date("Y-m-d H:i:s"),
                    'client_history_createdbyuseraccountid' => $this->session->userdata('userid')
                );
                
                $data['courthouse_name'] = array(
                    'courthouse_name' => $this->input->post('txtcourthouseName')   
                );
                
                $data['courthouse_address'] = array(
                    'courthouse_cityaddress' => $this->input->post('txtcourthouseCity'),
                    'courthouse_streetaddress' => $this->input->post('txtcourthouseStreetAddress'),
                    'courthouse_zipcodeaddress' => $this->input->post('txtcourthouseStateZipCodeAddress'),
                );
                
                $data['courthouse_history_information'] = array(
                    'courthouse_history_datecreated' => date("Y-m-d H:i:s"),
                    'courthouse_history_createdbyuseraccountid' => $this->session->userdata('userid')
                );
                
                $data['case_name'] = array(
                    'case_name' =>  $this->input->post('txtcaseName')
                );
                
                $data['case_history_information'] = array(
                    'case_history_datecreated' => date("Y-m-d H:i:s"),
                    'case_history_createdbyuseraccountid' => $this->session->userdata('userid')
                );
                
                $data['defendant_name'] = array(
                    'defendant_name' => $this->input->post('txtdefendantShortName')
                );
                
                $data['defendant_history_information'] = array(
                    'defendant_history_datecreated' => date("Y-m-d H:i:s"),
                    'defendant_history_createdbyuseraccountid' => $this->session->userdata('userid')
                );
                
                $data['original_deed_trust_lender_name'] = array(
                    'originaldeedoftrustlender_name' => $this->input->post('txtoriginaldeedtrustlenderNameofLender'),
                    'originaldeedoftrustlender_shortname' => $this->input->post('txtoriginaldeedtrustlenderShortNameofLender')
                );
                
                $data['original_deed_trust_lender_name_history'] = array(
                    'originaldeedoftrustlender_history_datecreated' => date("Y-m-d H:i:s"),
                    'originaldeedoftrustlender_history_createdbyuseraccountid' => $this->session->userdata('userid')
                );
                
                $data['present_beneficiary'] = array(
                    'defendant_Beneficiary_name' => $this->input->post('txtnamedefendantsPresentBeneficiary'),
                    'defendant_Beneficiary_shortname' => $this->input->post('txtnamedefendantsShortNamePresentBeneficiary')
                );
                
                $data['present_beneficiary_address'] = array(
                    'defendant_BeneficiaryAddress_street' => $this->input->post('txtnamedefendantsPresentBeneficiaryStreetAddress'),
                    'defendant_BeneficiaryAddress_city' => $this->input->post('txtnamedefendantsPresentBeneficiaryCityAddress'),
                    'defendant_BeneficiaryAddress_zipcode' => $this->input->post('txtnamedefendantsPresentBeneficiaryStateZipCodeAddress')
                );
                
                $data['foreclosure_trustee'] = array(
                    'defendant_foreclosuretrustee_name' => $this->input->post('txtnamedefendantsForeclosureTrustee'),
                    'defendant_foreclosuretrustee_shortname' => $this->input->post('txtnamedefendantsShortNameForeclosureTrustee')
                );
                
                $data['foreclosure_trustee_address'] = array(
                    'defendant_floreclosuretrusteeaddress_street' => $this->input->post('txtnamedefendantsForeclosureTrusteeStreetAddress'),
                    'defendant_floreclosuretrusteeaddress_city' => $this->input->post('txtnamedefendantsForeclosureTrusteeCityAddress'),
                    'defendant_floreclosuretrusteeaddress_zipcode' => $this->input->post('txtnamedefendantsForeclosureTrusteeStateZipCodeAddress')
                );
                
                $data['grantee_tdus_name'] = array(
                    'defendant_Grantee_name' => $this->input->post('txtnamedefendantsNamedGranteeTDUS'),
                    'defendant_Grantee_shortname' => $this->input->post('txtnamedefendantsShortNameNamedGranteeTDUS')
                );
                
                $data['grantee_tdus_name_address'] = array(
                    'defendant_Granteeaddress_street' => $this->input->post('txtnamedefendantsNamedGranteeTDUSStreetAddress'),
                    'defendant_Granteeaddress_city' => $this->input->post('txtnamedefendantsNamedGranteeTDUSCityAddress'),
                    'defendant_Granteeaddress_zipcode' => $this->input->post('txtnamedefendantsNamedGranteeTDUSStateZipCodeAddress')
                );
                
                $data['bonafide_buyer'] = array(
                    'defendant_anotherbonafidebuyer_name' => $this->input->post('txtnamedefendantsAnotherBonafideBuyer'),
                    'defendant_anotherbonafidebuyer_shortname' => $this->input->post('txtnamedefendantsShortNameAnotherBonafideBuyer')
                );
                
                $data['bonafide_buyer_address'] = array(
                    'defendant_anotherbonafidebuyeraddress_street' => $this->input->post('txtnamedefendantsAnotherBonafideBuyerStreetAddress'),
                    'defendant_anotherbonafidebuyeraddress_city' => $this->input->post('txtnamedefendantsAnotherBonafideBuyerCityAddress'),
                    'defendant_anotherbonafidebuyeraddress_zipcode' => $this->input->post('txtnamedefendantsAnotherBonafideBuyerStateZipCodeAddress')
                );
                
                return $data;
   }
}
