<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Download extends CI_Controller
    {
     function __construct()
        {
        parent::__construct();
        $this->load->model('user_search_model');
        }
    public function index()
        {
        
        $data = $this->user_search_model->download();

        // Put the unique user id in a variable - the script know what record to pull from the database because of this variable, which comes to the script as a GET variable in this case. You could/should use a fancier, securer, less user-editable way of transmitting ids, like using a unique md5 hash for the id... again, this is just a simple example
        //load model:
        //start here
        //
        //if (mysql_num_rows($result) == 1)
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
//            $pdf_plaintiffname = $data['client_Firstname']." ".$data['client_Mailingaddress_street'];

            $pdf_plaintiffname = $data['client_Firstname']." ".$data['client_Middlename']." ".$data['client_Lastname'];
            $pdf_staddress = $data['client_Mailingaddress_street'];
            $pdf_fullmailingadd=$data['client_Mailingaddress_city']." ".$data['client_Mailingaddress_zipcode'];
            $pdf_phoneno = $data['client_Mailingaddress_telephonenumber'];
            $pdf_faxno=$data['client_faxno'];
            $pdf_proper=$data['userAccount_firstname']." ".$data['userAccount_middlename']." ".$data['userAccount_lastname'];
//            $pdf_courthouse=$data['userAccount_firstname'];
//            $pdf_courtstaddress=$data['userAccount_firstname'];
//            $pdf_ctyzip=$data['userAccount_firstname']." ".$data['userAccount_firstname'];
//            $pdf_branchname=$data['userAccount_firstname'];
            $pdf_casename=$data['case_Name'];
//            $pdf_caseno=$data['case_Number'];
            $pdf_client_id=$data['client_id'];
//            $pdf_judge=$data['userAccount_firstname'];
//            $pdf_dept=$data['userAccount_firstname'];
            $pdf_currentdate=date("l, F j, Y, g:i a");
            // $fdf_data_strings associates the names of the PDF form fields to the PHP variables you just set above. In order to work correctly the PDF form field name has to be exact. PDFs made in Acrobat generally have simpler names - just the name you assigned to the field. PDFs made in LiveCycle Designer nest their forms in other random page elements, creating a long and hairy field name. You can use pdftk to discover the real names of your PDF form fields: run "pdftk form.pdf dump_data_fields > form-fields.txt" to generate a report.
            // Example of field names from a PDF created in LiveCycle:
            // $fdf_data_strings= array('form1[0].#subform[0].#area[0].LastName[0]' => $pdf_lastname,  'form1[0].#subform[0].#area[0].FirstName[0]' => $pdf_firstname, 'form1[0].#subform[0].#area[0].EMail[0]' => $pdf_email, );
            $fdf_data_strings = array
                                    (
                                        'Field1a'         => $pdf_plaintiffname, 
                                        'Field2'          => $pdf_staddress, 
                                        'Field3a'         => $pdf_fullmailingadd, 
                                        'Field4'          => $pdf_phoneno,
                                        'FaxNo'           => $pdf_faxno,
                                        'Proper'          => $pdf_proper,
//                                        'Field9'          => $pdf_courthouse,
//                                        'Field9a'         => $pdf_courtstaddress,
                                        'MailingAddress'  => $pdf_fullmailingadd,
//                                        'Field9b'         => $pdf_ctyzip,
//                                        'Field9c'         => $pdf_branchname,
                                        'CaseName'        => $pdf_casename,
//                                        'Case Number'     => $pdf_caseno,
//                                        'Judge'           => $pdf_judge,
//                                        'Dept'            => $pdf_dept,
                                        'Date'            => $pdf_currentdate,
                                        'client_ID'       => $pdf_client_id
                                     );
            // See the documentation of pdftk-php.php for more explanation of these other variables.
            // Used for radio buttons and check boxes
            // Example: (For check boxes options are Yes and Off)
            // $pdf_checkbox1 = "Yes";
            // $pdf_checkbox2 = "Off";
            // $pdf_checkbox3 = "Yes";
            // $fdf_data_names = array('checkbox1' => $pdf_checkbox1,'checkbox2' => $pdf_checkbox2,'checkbox3' => $pdf_checkbox3,'checkbox4' => $pdf_checkbox4); 
            $fdf_data_names = array(); // Leave empty if there are no radio buttons or check boxes

            $fields_hidden = array(
                                
                                   ); // Used to hide form fields

            $fields_readonly = array(); // Used to make fields read only - however, flattening the output with pdftk will in effect make every field read only. If you don't want a flattened pdf and still want some read only fields, use this variable and remove the flatten flag near line 70 in pdftk-php.php
            // Take each REQUEST value and clean it up for fdf creation
            foreach($_REQUEST as $key => $value)
                {
                // Translate tildes back to periods
                $fdf_data_strings[strtr($key, '~', '.')] = $value;
                }

            // Name of file to be downloaded
            $pdf_filename = "Test PDF for $pdf_plaintiffname.pdf";

            // Name/location of original, empty PDF form
            $pdf_original = "templates/CivilCaseCoverSheet.pdf";
           

            // Finally make the actual PDF file!
            $this->make_pdf($fdf_data_strings, $fdf_data_names, $fields_hidden, $fields_readonly, $pdf_original, $pdf_filename);
            
            // The end!
//            }
        }

    public function make_pdf($fdf_data_strings, $fdf_data_names, $fields_hidden, $fields_readonly, $pdf_original, $pdf_filename)
        {
        
// Create the fdf file
        $fdf = $this->forge_fdf('', $fdf_data_strings, $fdf_data_names, $fields_hidden, $fields_readonly);
        //$pdf_original = $_REQUEST["CivilCaseCoverSheet.pdf"];
        // Save the fdf file temporarily - make sure the server has write permissions in the folder you specify in tempnam()
        $fdf_fn = tempnam("./tmp", "fdf");
        $fp = fopen($fdf_fn, 'w');
        
        if ($fp)
            {
            
            fwrite($fp, $fdf);
           
            fclose($fp);
            
            // Send a force download header to the browser with a file MIME type
            //$this->output->set_content_type('application/pdf');

            header("Content-Type: application/force-download;");
            header("Content-Disposition: attachment; filename=\"$pdf_filename\"");
            
            // Actually make the PDF by running pdftk - make sure the path to pdftk is correct
            // The PDF will be output directly to the browser - apart from the original PDF file, no actual PDF wil be saved on the server.
            passthru("pdftk $pdf_original fill_form $fdf_fn output - ");
            unlink($fdf_fn);
            
            }
        else
            {
            // error
            echo 'Error: unable to write temp fdf file: ' . $fdf_fn;
            }
        }

// end of make_pdf()

    function forge_fdf($pdf_form_url, &$fdf_data_strings, &$fdf_data_names, &$fields_hidden, &$fields_readonly)
        {

        /* forge_fdf, by Sid Steward
          version 1.1
          visit: www.pdfhacks.com/forge_fdf/

          PDF can be particular about CR and LF characters, so I spelled them out in hex: CR == \x0d : LF == \x0a

         */
        $fdf = "                                                      %FDF-1.2\x0d%\xe2\xe3\xcf\xd3\x0d\x0a"; // header
        $fdf.= "1 0 obj\x0d<< "; // open the Root dictionary
        $fdf.= "\x0d/FDF << "; // open the FDF dictionary
        $fdf.= "/Fields [ "; // open the form Fields array

        $fdf_data_strings = $this->burst_dots_into_arrays($fdf_data_strings);
        $this->forge_fdf_fields_strings($fdf, $fdf_data_strings, $fields_hidden, $fields_readonly);

        $fdf_data_names = $this->burst_dots_into_arrays($fdf_data_names);
        $this->forge_fdf_fields_names($fdf, $fdf_data_names, $fields_hidden, $fields_readonly);

        $fdf.= "] \x0d"; // close the Fields array
        // the PDF form filename or URL, if given
        if ($pdf_form_url)
            {
            $fdf.= "/F (" . $this->escape_pdf_string($pdf_form_url) . ") \x0d";
            }

        $fdf.= ">> \x0d"; // close the FDF dictionary
        $fdf.= ">> \x0dendobj\x0d"; // close the Root dictionary
        // trailer; note the "1 0 R" reference to "1 0 obj" above
        $fdf.= "trailer\x0d<<\x0d/Root 1 0 R \x0d\x0d>>\x0d";
        $fdf.= "%%EOF\x0d\x0a";

        return $fdf;
        }

    public function escape_pdf_string($ss)
        {
        $backslash = chr(0x5c);
        $ss_esc = '';
        $ss_len = strlen($ss);
        for($ii = 0; $ii < $ss_len; ++$ii)
            {
            if (ord($ss{$ii}) == 0x28 || // open paren
                    ord($ss{$ii}) == 0x29 || // close paren
                    ord($ss{$ii}) == 0x5c)   // backslash
                {
                $ss_esc.= $backslash . $ss{$ii}; // escape the character w/ backslash
                }
            else if (ord($ss{$ii}) < 32 || 126 < ord($ss{$ii}))
                {
                $ss_esc.= sprintf("\\%03o", ord($ss{$ii})); // use an octal code
                }
            else
                {
                $ss_esc.= $ss{$ii};
                }
            }
        return $ss_esc;
        }

    function escape_pdf_name($ss)
        {
        $ss_esc = '';
        $ss_len = strlen($ss);
        for($ii = 0; $ii < $ss_len; ++$ii)
            {
            if (ord($ss{$ii}) < 33 || 126 < ord($ss{$ii}) ||
                    ord($ss{$ii}) == 0x23) // hash mark
                {
                $ss_esc.= sprintf("#%02x", ord($ss{$ii})); // use a hex code
                }
            else
                {
                $ss_esc.= $ss{$ii};
                }
            }
        return $ss_esc;
        }

    // In PDF, partial form field names are combined using periods to
    // yield the full form field name; we'll take these dot-delimited
    // names and then expand them into nested arrays, here; takes
    // an array that uses dot-delimited names and returns a tree of arrays;
    //
		function burst_dots_into_arrays(&$fdf_data_old)
        {
        $fdf_data_new = array();

        foreach($fdf_data_old as $key => $value)
            {
            $key_split = explode('.', (string) $key, 2);

            if (count($key_split) == 2)
                { // handle dot
                if (!array_key_exists((string) ($key_split[0]), $fdf_data_new))
                    {
                    $fdf_data_new[(string) ($key_split[0])] = array();
                    }
                if (gettype($fdf_data_new[(string) ($key_split[0])]) != 'array')
                    {
                    // this new key collides with an existing name; this shouldn't happen;
                    // associate string value with the special empty key in array, anyhow;

                    $fdf_data_new[(string) ($key_split[0])] =
                            array('' => $fdf_data_new[(string) ($key_split[0])]);
                    }

                $fdf_data_new[(string) ($key_split[0])][(string) ($key_split[1])] = $value;
                }
            else
                { // no dot
                if (array_key_exists((string) ($key_split[0]), $fdf_data_new) &&
                        gettype($fdf_data_new[(string) ($key_split[0])]) == 'array')
                    { // this key collides with an existing array; this shouldn't happen;
                    // associate string value with the special empty key in array, anyhow;
                    $fdf_data_new[(string) $key][''] = $value;
                    }
                else
                    { // simply copy
                    $fdf_data_new[(string) $key] = $value;
                    }
                }
            }

        foreach($fdf_data_new as $key => $value)
            {

            if (gettype($value) == 'array')
                {

                $fdf_data_new[(string) $key] = $this->burst_dots_into_arrays($value); // recurse
                }
            }

        return $fdf_data_new;
        }

    function forge_fdf_fields_flags(&$fdf, $field_name, &$fields_hidden, &$fields_readonly)
        {

        if (in_array($field_name, $fields_hidden))
            $fdf.= "/SetF 2 "; // set
        else
            $fdf.= "/ClrF 2 "; // clear

        if (in_array($field_name, $fields_readonly))
            $fdf.= "/SetFf 1 "; // set
        else
            $fdf.= "/ClrFf 1 "; // clear
        }

    function forge_fdf_fields(&$fdf, &$fdf_data, &$fields_hidden, &$fields_readonly, $accumulated_name, $strings_b) // true <==> $fdf_data contains string data
    //
			 // string data is used for text fields, combo boxes and list boxes;
    // name data is used for checkboxes and radio buttons, and
    // /Yes and /Off are commonly used for true and false
        {
        if (0 < strlen($accumulated_name))
            {
            $accumulated_name.= '.'; // append period seperator
            }

        foreach($fdf_data as $key => $value)
            {
            // we use string casts to prevent numeric strings from being silently converted to numbers

            $fdf.= "<< "; // open dictionary

            if (gettype($value) == 'array')
                { // parent; recurse
                $fdf.= "/T (" . $this->escape_pdf_string((string) $key) . ") "; // partial field name
                $fdf.= "/Kids [ ";                                    // open Kids array
                // recurse
                $this->forge_fdf_fields($fdf, $value, $fields_hidden, $fields_readonly, $accumulated_name . (string) $key, $strings_b);

                $fdf.= "] "; // close Kids array
                }
            else
                {

                // field name
                $fdf.= "/T (" . $this->escape_pdf_string((string) $key) . ") ";

                // field value
                if ($strings_b)
                    { // string
                    $fdf.= "/V (" . $this->escape_pdf_string((string) $value) . ") ";
                    }
                else
                    { // name
                    $fdf.= "/V /" . $this->escape_pdf_name((string) $value) . " ";
                    }

                // field flags
                $this->forge_fdf_fields_flags($fdf, $accumulated_name . (string) $key, $fields_hidden, $fields_readonly);
                }

            $fdf.= ">> \x0d"; // close dictionary
            }
        }

    function forge_fdf_fields_strings(&$fdf, &$fdf_data_strings, &$fields_hidden, &$fields_readonly)
        {
        return $this->forge_fdf_fields($fdf, $fdf_data_strings, $fields_hidden, $fields_readonly, '', true); // true => strings data
        }

    function forge_fdf_fields_names(&$fdf, &$fdf_data_names, &$fields_hidden, &$fields_readonly)
        {
        return $this->forge_fdf_fields($fdf, $fdf_data_names, $fields_hidden, $fields_readonly, '', false); // false => names data
        }

    }