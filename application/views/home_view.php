<?php
$username = $this->session->userdata('firstname');
//print_r($this->session->all_userdata());
?>

<?php if (isset($successNotification)): ?>
    <div class="noty_bar noty_theme_default noty_layout_top noty_success"   id="noty_information_1380008786172" style="cursor: pointer; display: block;"><div class="noty_message"><span class="noty_text">Document successfully created.</span></div></div>
    <script>
        $( "#noty_information_1380008786172" ).fadeOut( 10000 );
    </script>
<?php endif; ?>

<div id=content class=span10>
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-list-alt"></i> File a Document</h2>
            </div>
            <div class="box-content" style="display: block;">
                <form method="post" name="CreateDocument" action="<?php base_url(); ?>saveClientRecord">
                    <fieldset>

                        <div class="alert alert-error" id="CriteriaErrorID" style="display: none;"></div>
                        <div class="alert alert-info" id="CriteriaInfoID" style="display: none;"></div>

                        <legend>
                            <h3 style="color: #4F5155">Step 1: Select on the following:</h3>
                        </legend>

                        <div class="row-fluid">

                            <div style ="padding-left: 20px">
                                
                                <?php if (isset($checkInforeclosure)):   ?>
                                        <script>
                                            var ef = document.getElementById("EnterInfoID");
                                            $(document).ready(function() 
                                            {
                                                $( "#InForeClosureID" ).change
                                                    (function() 
                                                        {
                                                            $("#InForeClosureID").prop("checked", true);
                                                            if ($('#InForeClosureID').prop('checked')==true)
                                                                {
                                                                    document.getElementById("divrecordeddocumentsPageNumberDeclarationAgentID").style.display = "block";
                                                                    document.getElementById("CriteriaInfoID").style.display = "none";
                                                                    document.getElementById("CriteriaErrorID").style.display = "none";
                                                                    document.getElementById("TDUSCatNameID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsTDUSRecDateID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsTDUSDocNumberID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsTDUSPropertySoldDateID").style.display = "none";
                                                                    document.getElementById("NORCatNameID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsNORRecDateID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsNORDocNumberID").style.display = "none";
                                                                    $("#txtrecordeddocumentsTDUSRecDateID").prop("disabled", false);
                                                                    $("#txtrecordeddocumentsTDUSDocNumberID").prop("disabled", false);
                                                                    $("#txtrecordeddocumentsTDUSPropertySoldDateID").prop("disabled", false);
                                                                    $("#txtrecordeddocumentsNORRecDateID").prop("disabled", true);
                                                                    $("#txtrecordeddocumentsNORDocNumberID").prop("disabled", true);
                                                                    $("#txtrecordeddocumentsPageNumberDeclarationAgentID").prop("disabled", false);
//                                                                    ef.innerHTML = "Step 2: Enter the needed information for <?php echo $checkInforeclosure?>";
//                                                                    e.preventDefault();
                                                                }
                                                        }
                                                        ).change();
                                            });
                                         </script>
                                <?php endif; ?>
                                <div class="span2">
                                    <div class="controls">
                                        <label class="radio">
                                            <div class="radio" id="uniform-InForeClosureID">
                                                <span>
                                                    <input type="radio" name="documentCriteria" id="InForeClosureID" checked="checked" value="In-foreclosure"  onload="validateCriteria()" onclick="validateCriteria()" style="opacity: 0;">
                                                </span>
                                            </div>
                                            In-Foreclosure
                                        </label>
                                    </div>
                                </div>
                                
                                <?php if (isset($checkForeclosed)):   ?>
                                        <script>
                                            var ef = document.getElementById("EnterInfoID");
                                            $(document).ready(function() 
                                            {
                                                $( "#ForeclosedID" ).change
                                                    (function() 
                                                        {
                                                            $("#ForeclosedID").prop("checked", true);
                                                            if ($('#ForeclosedID').prop('checked')==true)
                                                                {
                                                                    document.getElementById("divrecordeddocumentsPageNumberDeclarationAgentID").style.display = "none";
                                                                    document.getElementById("CriteriaInfoID").style.display = "none";
                                                                    document.getElementById("CriteriaErrorID").style.display = "none";
                                                                    document.getElementById("TDUSCatNameID").style.display = "block";
                                                                    document.getElementById("divrecordeddocumentsTDUSRecDateID").style.display = "block";
                                                                    document.getElementById("divrecordeddocumentsTDUSDocNumberID").style.display = "block";
                                                                    document.getElementById("divrecordeddocumentsTDUSPropertySoldDateID").style.display = "block";
                                                                    document.getElementById("NORCatNameID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsNORRecDateID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsNORDocNumberID").style.display = "none";
                                                                    $("#txtrecordeddocumentsTDUSRecDateID").prop("disabled", false);
                                                                    $("#txtrecordeddocumentsTDUSDocNumberID").prop("disabled", false);
                                                                    $("#txtrecordeddocumentsTDUSPropertySoldDateID").prop("disabled", false);
                                                                    $("#txtrecordeddocumentsNORRecDateID").prop("disabled", true);
                                                                    $("#txtrecordeddocumentsNORDocNumberID").prop("disabled", true);
                                                                    $("#txtrecordeddocumentsPageNumberDeclarationAgentID").prop("disabled", true);
//                                                                    ef.innerHTML = "Step 2: Enter the needed information for <?php echo $checkForeclosed?>";
//                                                                    e.preventDefault();
                                                                }
                                                        }
                                                        ).change();
                                            });
                                         </script>
                                <?php endif; ?>
                                <div class="span2">
                                    <div class="controls">
                                        <label class="radio">
                                            <div class="radio" id="uniform-ForeclosedID">
                                                <span class="">
                                                    <input type="radio" name="documentCriteria" id="ForeclosedID" value="Foreclosed" onclick="validateCriteria()" style="opacity: 0;">
                                                </span>
                                            </div>
                                            Foreclosed
                                        </label>
                                    </div>
                                </div>

                                <?php if (isset($checkNoticeOfDefault)):?>
                                        <script>
                                            $(document).ready(function() 
                                            {
                                                $( "#NoticeOfDefaultID" ).change
                                                    (function() 
                                                        {
                                                            $("#NoticeOfDefaultID").prop("checked", true);
                                                            $("#AmendmentID").prop("checked", true);
                                                            if ($('#NoticeOfDefaultID').prop('checked')==true)
                                                                {
                                                                    document.getElementById("divrecordeddocumentsPageNumberDeclarationAgentID").style.display = "block";
                                                                    document.getElementById("CriteriaInfoID").style.display = "none";
                                                                    document.getElementById("CriteriaErrorID").style.display = "none";
                                                                    document.getElementById("TDUSCatNameID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsTDUSRecDateID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsTDUSDocNumberID").style.display = "none";
                                                                    document.getElementById("divrecordeddocumentsTDUSPropertySoldDateID").style.display = "none";
                                                                    document.getElementById("NORCatNameID").style.display = "block";
                                                                    document.getElementById("divrecordeddocumentsNORRecDateID").style.display = "block";
                                                                    document.getElementById("divrecordeddocumentsNORDocNumberID").style.display = "block";
                                                                    $("#txtrecordeddocumentsTDUSRecDateID").prop("disabled", true);
                                                                    $("#txtrecordeddocumentsTDUSDocNumberID").prop("disabled", true);
                                                                    $("#txtrecordeddocumentsTDUSPropertySoldDateID").prop("disabled", true);
                                                                    $("#txtrecordeddocumentsNORRecDateID").prop("disabled", false);
                                                                    $("#txtrecordeddocumentsNORDocNumberID").prop("disabled", false);
                                                                    $("#txtrecordeddocumentsPageNumberDeclarationAgentID").prop("disabled", false);
                                                                }
                                                        }
                                                    ).change();
                                            });
                                         </script>
                                <?php endif; ?>
                                <div class="span2">
                                    <div class="controls">
                                        <label class="radio">
                                            <div class="radio" id="uniform-NoticeOfDefaultID">
                                                <span>
                                                    <input type="radio" name="documentCriteria" id="NoticeOfDefaultID" value="Notice of Default" onclick="validateCriteria()" style="opacity: 0;">
                                                </span>
                                            </div>
                                            NOD Rescinded
                                        </label>
                                    </div>
                                </div>

                                <div class="span4">
                                    <div class="controls">
                                        <label class="checkbox inline">
                                            <div class="checker" id="uniform-inlineAmendmentID">
                                                <span id="checkAmendmentID">
                                                    <input type="checkbox" id="AmendmentID" name="Amendment" value="AmendmentOption" onclick="validateCriteria()" style="opacity: 100;">
                                                </span>
                                            </div> Effective Jan 01, 2013 – 2924 Amendment
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <legend></legend>
                        <a href="#" id="toggleExistingRecordsID">Click here to select from existing plaintiff, defendant or case...</a>
                        <br>
                        
                        <div id="ExistingRecordsID" style="display:none;">
                            <legend></legend>
                                
                            <div class="row-fluid">
                                
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class=""><a href="#Plaintiffs">Plaintiffs</a></li>
                                    <li class=""><a href="#Defendants">Defendants</a></li>
                                    <li class=""><a href="#Cases">Cases</a></li>
                                </ul>
                                    
                                <div id="myTabContent" class="tab-content">
                                    
                                    <!-- Start of Plaintiff tab -->
                                    <div class="tab-pane" id="Plaintiffs">
                                        <div class="row-fluid sortable">
                                            <div class="box span12">
                                                <div class="box-content">
                                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                                                        <div class="row-fluid">
                                                            <table class="table table-condensed table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th><input class="input-prepend" title="Select all plaintiff" data-rel="tooltip" type="checkbox" name="checkbox2" id="checkbox2" /></th>
                                                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Client Name: activate to sort column descending">Client Name</th>
                                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending">Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                                                <?php if (isset($no_client_list)): ?>
                                                                    <div class="alert alert-info" style="display: block;">
                                                                        There's no information available on this table, please create a document to be able to view something on this table.
                                                                    </div>
                                                                <?php else: ?>
                                                                    <?php foreach ($client_list as $key => $client) { ?>
                                                                        <tr class="odd">
                                                                            <td><input class="input-prepend" title="Select plaintiff" data-rel="tooltip" type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                                            <td class="  sorting_1"><?php echo $client['client_Lastname'] . " , " . $client['client_Firstname'] . " " . $client['client_Middlename']; ?></td>
                                                                            <td class="center ">
                                                                                <a class="btn btn-group input-prepend tickerActionVerb" title="View cases" data-rel="tooltip" href=<?php echo base_url(); ?>case/viewCase> <i class="icon-eye-open icon-black"></i></a>
                                                                                <a class="btn btn-group input-prepend" title="Append plaintiff" data-rel="tooltip" href="#"> <i class='icon-pencil icon-black'></i> </a>
                                                                                <a class="btn btn-group input-prepend" title="Edit plaintiff" data-rel="tooltip" href="#"> <i class='icon-edit icon-black'></i> </a>
                                                                                <a class="btn btn-group input-prepend" title="View history" data-rel="tooltip" href="#"> <i class='icon-time icon-black'></i> </a>
                                                                                <a class="btn btn-group input-prepend" title="Download all documents" data-rel="tooltip" href="<?php echo base_url(); ?>tutorial"> <i class='icon-download-alt icon-black'></i> </a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                <?php endif; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Plaintiff tab -->
                                    
                                    <!-- Start of Defendant tab -->
                                    <div class="tab-pane" id="Defendants">
                                        <div class="row-fluid sortable">
                                            <div class="box span12">
                                                <div class="box-content">
                                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                                                        <div class="row-fluid">
                                                            <table class="table table-condensed table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th><input class="input-prepend" title="Select all plaintiff" data-rel="tooltip" type="checkbox" name="checkbox2" id="checkbox2" /></th>
                                                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Client Name: activate to sort column descending">Defendant Name</th>
                                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending">Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                                                    <?php if (isset($no_defendant_list)): ?>
                                                                    <div class="alert alert-info" style="display: block;">
                                                                        There's no information available on this table, please create a document to be able to view something on this table.
                                                                    </div>
                                                                <?php else: ?>
                                                                    <?php foreach ($defendant_list as $key => $defendant) { ?>
                                                                        <tr class="odd">
                                                                            <td><input class="input-prepend" title="Select plaintiff" data-rel="tooltip" type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                                            <td class="  sorting_1"><?php echo $defendant['defendant_name']; ?></td>
                                                                            <td class="center ">
                                                                                <a class="btn btn-group input-prepend tickerActionVerb" title="View cases" data-rel="tooltip" href=<?php echo base_url(); ?>case/viewCase> <i class="icon-eye-open icon-black"></i></a>
                                                                                <a class="btn btn-group input-prepend" title="Append defendant" data-rel="tooltip" href="#"> <i class='icon-pencil icon-black'></i> </a>
                                                                                <a class="btn btn-group input-prepend" title="Edit defendant" data-rel="tooltip" href="#"> <i class='icon-edit icon-black'></i> </a>
                                                                                <a class="btn btn-group input-prepend" title="View history" data-rel="tooltip" href="#"> <i class='icon-time icon-black'></i> </a>
                                                                                <a class="btn btn-group input-prepend" title="Download all documents" data-rel="tooltip" href="<?php echo base_url(); ?>tutorial"> <i class='icon-download-alt icon-black'></i> </a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                <?php endif; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Defendant tab -->
                                    
                                    <!-- Start of Case tab -->
                                    <div class="tab-pane" id="Cases">
                                        <div class="row-fluid sortable">
                                            <div class="box span12">
                                                <div class="box-content">
                                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                                                        <div class="row-fluid">
                                                            <table class="table table-condensed table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th><input class="input-prepend" title="Select all cases" data-rel="tooltip" type="checkbox" name="checkbox2" id="checkbox2" /></th>
                                                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Defendant Name: activate to sort column descending">Case Name</th>
                                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending">Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                                                    <?php if (isset($no_case_list)): ?>
                                                                    <div class="alert alert-info" style="display: block;">
                                                                        There's no information available on this table, please create a document to be able to view something on this table.
                                                                    </div>
                                                                <?php else: ?>
                                                                    <?php foreach ($case_list as $key => $case) { ?>
                                                                        <tr class="odd">
                                                                            <td><input class="input-prepend" title="Select plaintiff" data-rel="tooltip" type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                                            <td class="  sorting_1"><?php echo $case['case_name']; ?></td>
                                                                            <td class="center ">
                                                                                <a class="btn btn-group input-prepend tickerActionVerb" title="View cases" data-rel="tooltip" href=<?php echo base_url(); ?>case/viewCase> <i class="icon-eye-open icon-black"></i></a>
                                                                                <a class="btn btn-group input-prepend" title="Append case" data-rel="tooltip" href="#"> <i class='icon-pencil icon-black'></i> </a>
                                                                                <a class="btn btn-group input-prepend" title="Edit case" data-rel="tooltip" href="#"> <i class='icon-edit icon-black'></i> </a>
                                                                                <a class="btn btn-group input-prepend" title="View history" data-rel="tooltip" href="#"> <i class='icon-time icon-black'></i> </a>
                                                                                <a class="btn btn-group input-prepend" title="Download all documents" data-rel="tooltip" href="<?php echo base_url(); ?>tutorial"> <i class='icon-download-alt icon-black'></i> </a>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                <?php endif; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Case tab -->
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        <legend></legend>
                        <br>
                        
                        <legend id="EnterInfoLegend">
                                <h3 id="EnterInfoID" style="color: #4F5155;">Step 2: Enter the needed information</h3>
                        </legend>

                        <div class="row-fluid sortable">
                            <div class="box span12" style="padding-left: 10px; padding-top: 10px; padding-right: 10px; padding-bottom: 10px;">
                                <div class="span6">
                                    <h4>Plaintiff Information</h4>
                                        <br>
                                            <h4>Name</h4>
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffLastNameID"><span class="add-on" style="width:100px;"><div align="right">Last Name:</div></span><input class="input-large" title="Plaintiff's Last Name" data-content="Example: Smith" name="txtplaintiffLastName" id="txtplaintiffLastNameID" value="<?php echo set_value('txtplaintiffLastName'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtplaintiffLastName', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                    </label>
                                                </div>
                                            
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffFirstNameID"><span class="add-on" style="width:100px;"><div align="right">First Name:</div></span><input class="input-large" title="Plaintiff's First Name" data-content="Example: John" name="txtplaintiffFirstName" id="txtplaintiffFirstNameID" value="<?php echo set_value('txtplaintiffFirstName'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffFirstName', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                                                           
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffMiddleNameID"><span class="add-on" style="width:100px;"><div align="right">Middle Name:</div></span><input class="input-large" title="Plaintiff's Middle Name" data-content="Example: Doe" name="txtplaintiffMiddleName" id="txtplaintiffMiddleNameID" value="<?php echo set_value('txtplaintiffMiddleName'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffMiddleName', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                        <br>
                                            <h4>Subject Property Address</h4>
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffStreetSubjectPropertyAddressID"><span class="add-on" style="width:100px;"><div align="right">Street:</div></span><input class="input-large" title="Street Subject Property Address" data-content="Example: 1120 N Street" name="txtplaintiffStreetSubjectPropertyAddress" id="txtplaintiffStreetSubjectPropertyAddressID" value="<?php echo set_value('txtplaintiffStreetSubjectPropertyAddress'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffStreetSubjectPropertyAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffCitySubjectPropertyAddressID"><span class="add-on" style="width:100px;"><div align="right">City:</div></span><input class="input-large" title="City Subject Property Address" data-content="Example: Roseville" name="txtplaintiffCitySubjectPropertyAddress" id="txtplaintiffCitySubjectPropertyAddressID" value="<?php echo set_value('txtplaintiffCitySubjectPropertyAddress'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffCitySubjectPropertyAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffStateZipCodeSubjectPropertyAddressID"><span class="add-on" style="width:100px;"><div align="right">State Zip Code:</div></span><input class="input-large" title="State Zip Code Subject Property Address" data-content="Example: CA" name="txtplaintiffStateZipCodeSubjectPropertyAddress" id="txtplaintiffStateZipCodeSubjectPropertyAddressID" value="<?php echo set_value('txtplaintiffStateZipCodeSubjectPropertyAddress'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffStateZipCodeSubjectPropertyAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffPhoneNumberSubjectPropertyAddressID"><span class="add-on" style="width:100px;"><div align="right">APN Number:</div></span><input class="input-large" title="APN Number" data-content="Example: 010 223 789" name="txtplaintiffAPNNumberSubjectPropertyAddress" id="txtplaintiffPhoneNumberSubjectPropertyAddressID" value="<?php echo set_value('txtplaintiffAPNNumberSubjectPropertyAddress'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffAPNNumberSubjectPropertyAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>			
                                </div>
                                
                                <br>
                                
                                <div class="span6">
                                        <br>
                                            <h4>Mailing Address</h4>		
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffStreetMailingAddressID"><span class="add-on" style="width:100px;"><div align="right">Street:</div></span><input class="input-large" title="Street Mailing Address" data-content="Example: 1120 N Street" name="txtplaintiffStreetMailingAddress" id="txtplaintiffStreetMailingAddressID" value="<?php echo set_value('txtplaintiffStreetMailingAddress'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffStreetMailingAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffCityMailingAddressID"><span class="add-on" style="width:100px;"><div align="right">City:</div></span><input class="input-large" title="City Mailing Address" data-content="Example: Roseville" name="txtplaintiffCityMailingAddress" id="txtplaintiffCityMailingAddressID" value="<?php echo set_value('txtplaintiffCityMailingAddress'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffCityMailingAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffStateZipCodeMailingAddressID"><span class="add-on" style="width:100px;"><div align="right">State Zip Code:</div></span><input class="input-large" title="State Zip Code Mailing Address" data-content="Example: CA" name="txtplaintiffStateZipCodeMailingAddress" id="txtplaintiffStateZipCodeMailingAddressID" value="<?php echo set_value('txtplaintiffStateZipCodeMailingAddress'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffStateZipCodeMailingAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffCityOnlyMailingAddressID"><span class="add-on" style="width:100px;"><div align="right">City only:</div></span><input class="input-large" title="City only Mailing Address" data-content="Example: Roseville" name="txtplaintiffCityOnlyMailingAddress" id="txtplaintiffCityOnlyMailingAddressID" value="<?php echo set_value('txtplaintiffCityOnlyMailingAddress'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffCityOnlyMailingAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="input-prepend">
                                                    <label for="txtplaintiffPhoneNumberMailingAddressID"><span class="add-on" style="width:100px;"><div align="right">Phone Number:</div></span><input class="input-large" title="Phone Number" data-content="Example: (831) 204-XXX-XXX" name="txtplaintiffPhoneNumberMailingAddress" id="txtplaintiffPhoneNumberMailingAddressID" value="<?php echo set_value('txtplaintiffPhoneNumberMailingAddress'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtplaintiffPhoneNumberMailingAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid sortable">
                            <div class="box span12" style="padding-left: 10px; padding-top: 10px; padding-right: 10px; padding-bottom: 10px;">
                                <div class="span6">
                                            <h4>Courthouse Information</h4>
                                                <br>
                                                    <h4>Details</h4>
                                                        <div class="input-prepend">
                                                            <label for="txtcourthouseNameID"><span class="add-on" style="width:155px;"><div align="right">Courthouse Name:</div></span><input style="width:195px;" title="Courthouse Name" data-content="Example: Hall of Justice" name="txtcourthouseName" id="txtcourthouseNameID" value="<?php echo set_value('txtcourthouseName'); ?>" type="text"/>
                                                                <div class="clearfix" style="padding-top: 1px;">
                                                                    <?php echo form_error('txtcourthouseName', '<div style="margin-left:165px; width: 155px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="input-prepend">
                                                            <label for="txtcaseNameID"><span class="add-on" style="width:155px;"><div align="right">Case Name:</div></span><input style="width:195px;" title="Case Name" data-content="Example: DOE v. WELLS FARGO" name="txtcaseName" id="txtcaseNameID" value="<?php echo set_value('txtcaseName'); ?>" type="text"/>
                                                                <div class="clearfix" style="padding-top: 1px;">
                                                                    <?php echo form_error('txtcaseName', '<div style="margin-left:165px; width: 155px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="input-prepend">
                                                            <label for="txtsdefendantShortNameID"><span class="add-on" style="width:155px;"><div align="right">Defendant's Short Name:</div></span><input style="width:195px;" title="Defendant's Short Name" data-content="Example: WELLS FARGO" name="txtdefendantShortName" id="txtsdefendantShortNameID" value="<?php echo set_value('txtdefendantShortName'); ?>" type="text"/>
                                                                <div class="clearfix" style="padding-top: 1px;">
                                                                    <?php echo form_error('txtdefendantShortName', '<div style="margin-left:165px; width: 155px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                </div>
                                                            </label>
                                                        </div>
                                </div>
                                <div class="span6">
                                            <br><br>
                                                <h4>Address</h4>
                                                        <div class="input-prepend">
                                                            <label for="txtcourthouseStateID"><span class="add-on" style="width:100px;"><div align="right">State:</div></span><input class="input-large" title="Courthouse State" data-content="Example: California" name="txtcourthouseState" id="txtcourthouseStateID" value="<?php echo set_value('txtcourthouseState'); ?>" type="text"/>
                                                                <div class="clearfix" style="padding-top: 1px;">
                                                                    <?php echo form_error('txtcourthouseState', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="input-prepend">
                                                            <label for="txtcourthouseStreetAddressID"><span class="add-on" style="width:100px;"><div align="right">Street:</div></span><input class="input-large" title="Courthouse Street Address" data-content="Example: 1120 N Street" name="txtcourthouseStreetAddress" id="txtcourthouseStreetAddressID" value="<?php echo set_value('txtcourthouseStreetAddress'); ?>" type="text">
                                                                <div class="clearfix" style="padding-top: 1px;">
                                                                    <?php echo form_error('txtcourthouseStreetAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="input-prepend">
                                                            <label for="txtcourthouseCityID"><span class="add-on" style="width:100px;"><div align="right">City:</div></span><input class="input-large" title="Courthouse City" data-content="Example: San Diego" name="txtcourthouseCity" id="txtcourthouseCityID" value="<?php echo set_value('txtcourthouseCity'); ?>" type="text"/>
                                                                <div class="clearfix" style="padding-top: 1px;">
                                                                    <?php echo form_error('txtcourthouseCity', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="input-prepend">
                                                            <label for="txtcourthouseStateZipCodeAddressID"><span class="add-on" style="width:100px;"><div align="right">State Zip Code:</div></span><input class="input-large" title="Courthouse State Zip Code Address" data-content="Example: CA" name="txtcourthouseStateZipCodeAddress" id="txtcourthouseStateZipCodeAddressID" value="<?php echo set_value('txtcourthouseStateZipCodeAddress'); ?>" type="text"/>
                                                                <div class="clearfix" style="padding-top: 1px;">
                                                                    <?php echo form_error('txtcourthouseStateZipCodeAddress', '<div style="margin-left:110px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                </div>
                                                            </label>
                                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid sortable">
                            <div class="box span12" style="padding-left: 10px; padding-top: 10px; padding-right: 10px; padding-bottom: 10px;">
                                <div class="span6">
                                                <h4>Recorded Documents</h4>
                                                    <br>
                                                        <h4>Deed of Trust</h4>
                                                            <div class="input-prepend">
                                                                <label for="txtrecordeddocumentsDeedofTrustSigningDateID"><span class="add-on" style="width:170px;"><div align="right">Signing Date:</div></span><input class="input datepicker hasDatepicker" style="width:180px;" name="txtrecordeddocumentsDeedofTrustSigningDate" id="txtrecordeddocumentsDeedofTrustSigningDateID" value="<?php echo set_value('txtcourthouseStateZipCodeAddress'); ?>" type="date">
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsDeedofTrustSigningDate', '<div style="margin-left:180px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="input-prepend">
                                                                <label for="txtrecordeddocumentsDeedofTrustRecDateID"><span class="add-on" style="width:170px;"><div align="right">Rec Date:</div></span><input class="input datepicker hasDatepicker" style="width:180px;" name="txtrecordeddocumentsDeedofTrustRecDate" id="txtrecordeddocumentsDeedofTrustRecDateID" value="<?php echo set_value('txtcourthouseStateZipCodeAddress'); ?>" type="date">
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsDeedofTrustRecDate', '<div style="margin-left:180px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="input-prepend">
                                                                <label for="txtrecordeddocumentsDeedofTrustDocNumberID"><span class="add-on" style="width:170px;"><div align="right">Doc Number:</div></span><input style="width:180px;" title="Deed of Trust Doc Number" data-content="Example: 12345XXX" name="txtrecordeddocumentsDeedofTrustDocNumber" id="txtrecordeddocumentsDeedofTrustDocNumberID" value="<?php echo set_value('txtrecordeddocumentsDeedofTrustDocNumber'); ?>" type="text"/>
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsDeedofTrustDocNumber', '<div style="margin-left:180px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                    <br>
                                                        <h4>NOD</h4>
                                                            <div class="input-prepend">
                                                                <label for="txtrecordeddocumentsNODRecDateID"><span class="add-on" style="width:170px;"><div align="right">Rec Date:</div></span><input class="input datepicker hasDatepicker" style="width:180px;" name="txtrecordeddocumentsNODRecDate" id="txtrecordeddocumentsNODRecDateID" value="<?php echo set_value('txtrecordeddocumentsNODRecDate'); ?>" type="date">
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsNODRecDate', '<div style="margin-left:180px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="input-prepend">
                                                                <label for="txtrecordeddocumentsNODDocNumberID"><span class="add-on" style="width:170px;"><div align="right">Doc Number:</div></span><input style="width:180px;" title="NOD Doc Number" data-content="Example: 12345XXX" name="txtrecordeddocumentsNODDocNumber" id="txtrecordeddocumentsNODDocNumberID" value="<?php echo set_value('txtrecordeddocumentsNODDocNumber'); ?>" type="text"/>
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsNODDocNumber', '<div style="margin-left:180px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="input-prepend" id="divrecordeddocumentsPageNumberDeclarationAgentID" style="display:block">
                                                                <label for="txtrecordeddocumentsPageNumberDeclarationAgentID"><span class="add-on" style="width:170px;"><div align="right">Declaration Agent page no.:</div></span><input style="width:180px;" title="Page number of Declaration of Agent" data-content="Example: 20" name="txtrecordeddocumentsPageNumberDeclarationAgent" id="txtrecordeddocumentsPageNumberDeclarationAgentID" value="<?php echo set_value('txtrecordeddocumentsPageNumberDeclarationAgent'); ?>" type="text"/>
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsPageNumberDeclarationAgent', '<div style="margin-left:180px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                    
                                </div>
                                  <br><br>
                                <div class="span6">
                                                <h4>NTS</h4>
                                                <div class="input-prepend">
                                                    <label for="txtrecordeddocumentsNTSRecDateID"><span class="add-on" style="width:130px;"><div align="right">Rec Date:</div></span><input class="input datepicker hasDatepicker" style="width:180px;" name="txtrecordeddocumentsNTSRecDate" id="txtrecordeddocumentsNTSRecDateID" value="<?php echo set_value('txtrecordeddocumentsNTSRecDate'); ?>" type="date">
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtrecordeddocumentsNTSRecDate', '<div style="margin-left:140px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="input-prepend">
                                                    <label for="txtrecordeddocumentsNTSDocNumberID"><span class="add-on" style="width:130px;"><div align="right">Doc Number:</div></span><input style="width:180px;" title="NTS Doc Number" data-content="Example: 12345XXX" name="txtrecordeddocumentsNTSDocNumber" id="txtrecordeddocumentsNTSDocNumberID" value="<?php echo set_value('txtrecordeddocumentsNTSDocNumber'); ?>" type="text"/>
                                                        <div class="clearfix" style="padding-top: 1px;">
                                                            <?php echo form_error('txtrecordeddocumentsNTSDocNumber', '<div style="margin-left:140px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                        </div>
                                                    </label>
                                                </div>
                                                <br>
                                                <h4 id="TDUSCatNameID" style="display:none">TDUS</h4>
                                                            <div class="input-prepend" id="divrecordeddocumentsTDUSRecDateID" style="display:none">
                                                                    <label for="txtrecordeddocumentsTDUSRecDateID"><span class="add-on" style="width:130px;"><div align="right">Rec Date:</div></span><input class="input datepicker hasDatepicker" style="width:180px;" name="txtrecordeddocumentsTDUSRecDate" id="txtrecordeddocumentsTDUSRecDateID" value="<?php echo set_value('txtrecordeddocumentsTDUSRecDate'); ?>" type="date" disabled>
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsTDUSRecDate', '<div style="margin-left:140px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="input-prepend" id="divrecordeddocumentsTDUSDocNumberID" style="display:none">
                                                                <label for="txtrecordeddocumentsTDUSDocNumberID"><span class="add-on" style="width:130px;"><div align="right">Doc Number:</div></span><input style="width:180px;" title="TDUS Doc Number" data-content="Example: 12345XXX" name="txtrecordeddocumentsTDUSDocNumber" id="txtrecordeddocumentsTDUSDocNumberID" value="<?php echo set_value('txtrecordeddocumentsTDUSDocNumber'); ?>" type="text" disabled/>
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsTDUSDocNumber', '<div style="margin-left:140px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="input-prepend" id="divrecordeddocumentsTDUSPropertySoldDateID" style="display:none">
                                                                <label for="txtrecordeddocumentsTDUSPropertySoldDateID"><span class="add-on" style="width:130px;"><div align="right">Property Sold Date:</div></span><input class="input datepicker hasDatepicker" style="width:180px;" name="txtrecordeddocumentsTDUSPropertySoldDate" id="txtrecordeddocumentsTDUSPropertySoldDateID" value="<?php echo set_value('txtrecordeddocumentsTDUSPropertySoldDate'); ?>" type="date" disabled>
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsTDUSPropertySoldDate', '<div style="margin-left:140px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                <br>
                                                <h4 id="NORCatNameID" style="display:none">NOR</h4>
                                                            <div class="input-prepend" id="divrecordeddocumentsNORRecDateID" style="display:none">
                                                                <label for="txtrecordeddocumentsNORRecDateID"><span class="add-on" style="width:130px;"><div align="right">Rec Date:</div></span><input class="input datepicker hasDatepicker" style="width:180px;" name="txtrecordeddocumentsNORRecDate" id="txtrecordeddocumentsNORRecDateID" value="<?php echo set_value('txtrecordeddocumentsNORRecDate'); ?>" type="date" disabled>
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsNORRecDate', '<div style="margin-left:140px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="input-prepend" id="divrecordeddocumentsNORDocNumberID" style="display:none">
                                                                <label for="txtrecordeddocumentsNORDocNumberID"><span class="add-on" style="width:130px;"><div align="right">Doc Number:</div></span><input style="width:180px;" title="NOR Doc Number" data-content="Example: 12345XXX" name="txtrecordeddocumentsNORDocNumber" id="txtrecordeddocumentsNORDocNumberID" value="<?php echo set_value('txtrecordeddocumentsNORDocNumber'); ?>" type="text" disabled />
                                                                    <div class="clearfix" style="padding-top: 1px;">
                                                                        <?php echo form_error('txtrecordeddocumentsNORDocNumber', '<div style="margin-left:140px; width: 140px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                 </div>
                        </div>
                                    </div>
                                    <div class="row-fluid sortable">
                                        <div class="box span12" style="padding-left: 10px; padding-top: 10px; padding-right: 10px; padding-bottom: 10px;">
                                            <h4>Name of Original Deed of Trust Lender</h4>
                                            <div class="input-prepend">
                                                <label for="txtoriginaldeedtrustlenderNameofLenderID"><span class="add-on" style="width:140px;"><div align="right">Name of Lender:</div></span><input class="input-large" title="Name of Lender" data-content="Example: COUNTRY WIDE HOME LOANS" name="txtoriginaldeedtrustlenderNameofLender" id="txtoriginaldeedtrustlenderNameofLenderID" value="<?php echo set_value('txtoriginaldeedtrustlenderNameofLender'); ?>" type="text"/>
                                                    <div class="clearfix" style="padding-top: 1px;">
                                                        <?php echo form_error('txtoriginaldeedtrustlenderNameofLender', '<div style="margin-left:150px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="input-prepend">
                                                <label for="txtoriginaldeedtrustlenderShortNameofLenderID"><span class="add-on" style="width:140px;"><div align="right">Short Name of Lender:</div></span><input class="input-large" title="Short Name of Lender" data-content="Example: COUNTRY WIDE" name="txtoriginaldeedtrustlenderShortNameofLender" id="txtoriginaldeedtrustlenderShortNameofLenderID" value="<?php echo set_value('txtoriginaldeedtrustlenderShortNameofLender'); ?>"  type="text"/>
                                                    <div class="clearfix" style="padding-top: 1px;">
                                                        <?php echo form_error('txtoriginaldeedtrustlenderShortNameofLender', '<div style="margin-left:150px; width: 170px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid sortable">
                                        <div class="box span12" style="padding-left: 10px; padding-top: 10px; padding-right: 10px; padding-bottom: 10px;">
                                            <h4>Defendants' Information</h4>
                                            <br>
                                            <div class="span12">
                                                <legend></legend>
                                                <div class="span6">
                                                    <h4>Present Beneficiary:</h4>
                                                    <br>
                                                    <h4>Name</h4>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsPresentBeneficiaryID"><span class="add-on" style="width:75px;"><div align="right">Name:</div></span><input class="input-xlarge" title="Present Beneficiary" data-content="Example: RESIDENTIAL RFMSI4000-UNSOLD" name="txtnamedefendantsPresentBeneficiary" id="txtnamedefendantsPresentBeneficiaryID" value="<?php echo set_value('txtnamedefendantsPresentBeneficiary'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsPresentBeneficiary', '<div style="margin-left:85px; width: 230px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsShortNamePresentBeneficiaryID"><span class="add-on" style="width:75px;"><div align="right">Short Name:</div></span><input class="input-xlarge" title="Short Name of Present Beneficiary" data-content="Example: RESIDENTIAL TRUST" name="txtnamedefendantsShortNamePresentBeneficiary" id="txtnamedefendantsShortNamePresentBeneficiaryID" value="<?php echo set_value('txtnamedefendantsShortNamePresentBeneficiary'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsShortNamePresentBeneficiary', '<div style="margin-left:85px; width: 230px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="span5">
                                                    <h4>Address</h4>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsPresentBeneficiaryStreetAddressID"><span class="add-on" style="width:95px;"><div align="right">Street:</div></span><input style="width:190px;" title="Street Present Beneficiary Address" data-content="Example: 1120 N Street" name="txtnamedefendantsPresentBeneficiaryStreetAddress" id="txtnamedefendantsPresentBeneficiaryStreetAddressID" value="<?php echo set_value('txtnamedefendantsPresentBeneficiaryStreetAddress'); ?>"  type="text">
                                                             <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsPresentBeneficiaryStreetAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsPresentBeneficiaryCityAddressID"><span class="add-on" style="width:95px;"><div align="right">City:</div></span><input style="width:190px;" title="City Present Beneficiary Address" data-content="Example: Roseville" name="txtnamedefendantsPresentBeneficiaryCityAddress" id="txtnamedefendantsPresentBeneficiaryCityAddressID" value="<?php echo set_value('txtnamedefendantsPresentBeneficiaryCityAddress'); ?>" type="text">
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsPresentBeneficiaryCityAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsPresentBeneficiaryStateZipCodeAddressID"><span class="add-on" style="width:95px;"><div align="right">State Zip Code:</div></span><input style="width:190px;" title="State Zip Code Present Beneficiary Address" data-content="Example: CA" name="txtnamedefendantsPresentBeneficiaryStateZipCodeAddress" id="txtnamedefendantsPresentBeneficiaryStateZipCodeAddressID" value="<?php echo set_value('txtnamedefendantsPresentBeneficiaryStateZipCodeAddress'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsPresentBeneficiaryStateZipCodeAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="span12">
                                                <legend></legend>
                                                <div class="span6">
                                                    <h4>Foreclosure Trustee:</h4>
                                                    <br>
                                                    <h4>Name</h4>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsForeclosureTrusteeID"><span class="add-on" style="width:75px;"><div align="right">Name:</div></span><input class="input-xlarge" title="Foreclosure Trustee" data-content="Example: CAL-WESTERN RECONVEYANCE" name="txtnamedefendantsForeclosureTrustee" id="txtnamedefendantsForeclosureTrusteeID" value="<?php echo set_value('txtnamedefendantsForeclosureTrustee'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsForeclosureTrustee', '<div style="margin-left:85px; width: 230px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsShortNameForeclosureTrusteeID"><span class="add-on" style="width:75px;"><div align="right">Short Name:</div></span><input class="input-xlarge" title="Short Name of Foreclosure Trustee" data-content="Example: CAL-WESTERN" name="txtnamedefendantsShortNameForeclosureTrustee" id="txtnamedefendantsShortNameForeclosureTrusteeID" value="<?php echo set_value('txtnamedefendantsShortNameForeclosureTrustee'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsShortNameForeclosureTrustee', '<div style="margin-left:85px; width: 230px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="span5">
                                                    <h4>Address</h4>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsForeclosureTrusteeStreetAddressID"><span class="add-on" style="width:95px;"><div align="right">Street:</div></span><input style="width:190px;" title="Street Foreclosure Trustee Address" data-content="Example: 1120 N Street" name="txtnamedefendantsForeclosureTrusteeStreetAddress" id="txtnamedefendantsForeclosureTrusteeStreetAddressID" value="<?php echo set_value('txtnamedefendantsForeclosureTrusteeStreetAddress'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsForeclosureTrusteeStreetAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsForeclosureTrusteeCityAddressID"><span class="add-on" style="width:95px;"><div align="right">City:</div></span><input style="width:190px;" title="City Foreclosure Trustee Address" data-content="Example: Roseville" name="txtnamedefendantsForeclosureTrusteeCityAddress" id="txtnamedefendantsForeclosureTrusteeCityAddressID" value="<?php echo set_value('txtnamedefendantsForeclosureTrusteeCityAddress'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsForeclosureTrusteeCityAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsForeclosureTrusteeStateZipCodeAddressID"><span class="add-on" style="width:95px;"><div align="right">State Zip Code:</div></span><input style="width:190px;" title="State Zip Code Foreclosure Trustee Address" data-content="Example: CA" name="txtnamedefendantsForeclosureTrusteeStateZipCodeAddress" id="txtnamedefendantsForeclosureTrusteeStateZipCodeAddressID" value="<?php echo set_value('txtnamedefendantsForeclosureTrusteeStateZipCodeAddress'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsForeclosureTrusteeStateZipCodeAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span12">
                                                <legend></legend>
                                                <div class="span6">
                                                    <h4>Named Grantee on TDUS</h4>
                                                    <br>
                                                    <h4>Name</h4>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsNamedGranteeTDUSID"><span class="add-on" style="width:75px;"><div align="right">Name:</div></span><input class="input-xlarge" title="Named Grantee on TDUS" data-content="Example: ASSET SENTRY UTA8 TRUST" name="txtnamedefendantsNamedGranteeTDUS" id="txtnamedefendantsNamedGranteeTDUSID" value="<?php echo set_value('txtnamedefendantsNamedGranteeTDUS'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsNamedGranteeTDUS', '<div style="margin-left:85px; width: 230px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsShortNameNamedGranteeTDUSID"><span class="add-on" style="width:75px;"><div align="right">Short Name:</div></span><input class="input-xlarge" title="Short Name of Named Grantee on TDUS" data-content="Example: ASSET SENTRY" name="txtnamedefendantsShortNameNamedGranteeTDUS" id="txtnamedefendantsShortNameNamedGranteeTDUSID" value="<?php echo set_value('txtnamedefendantsShortNameNamedGranteeTDUS'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsShortNameNamedGranteeTDUS', '<div style="margin-left:85px; width: 230px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="span5">
                                                    <h4>Address</h4>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsNamedGranteeTDUSStreetAddressID"><span class="add-on" style="width:95px;"><div align="right">Street:</div></span><input style="width:190px;" title="Street Named Grantee on TDUS Address" data-content="Example: 1120 N Street" name="txtnamedefendantsNamedGranteeTDUSStreetAddress" id="txtnamedefendantsNamedGranteeTDUSStreetAddressID" value="<?php echo set_value('txtnamedefendantsNamedGranteeTDUSStreetAddress'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsNamedGranteeTDUSStreetAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsNamedGranteeTDUSCityAddressID"><span class="add-on" style="width:95px;"><div align="right">City:</div></span><input style="width:190px;" title="City Named Grantee on TDUS Address" data-content="Example: Roseville" name="txtnamedefendantsNamedGranteeTDUSCityAddress" id="txtnamedefendantsNamedGranteeTDUSCityAddressID" value="<?php echo set_value('txtnamedefendantsNamedGranteeTDUSCityAddress'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsNamedGranteeTDUSCityAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsNamedGranteeTDUSStateZipCodeAddressID"><span class="add-on" style="width:95px;"><div align="right">State Zip Code:</div></span><input style="width:190px;" title="State Zip Code Named Grantee on TDUS Address" data-content="Example: CA" name="txtnamedefendantsNamedGranteeTDUSStateZipCodeAddress" id="txtnamedefendantsNamedGranteeTDUSStateZipCodeAddressID" value="<?php echo set_value('txtnamedefendantsNamedGranteeTDUSStateZipCodeAddress'); ?>" type="text">
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsNamedGranteeTDUSStateZipCodeAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span12">
                                                <legend></legend>
                                                <div class="span6">
                                                    <h4>Another Bonafide Buyer</h4>
                                                    <br>
                                                    <h4>Name</h4>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsAnotherBonafideBuyerID"><span class="add-on" style="width:75px;"><div align="right">Name:</div></span><input class="input-xlarge" title="Another Bonafide Buyer" data-content="Example: JOHN SMITH" name="txtnamedefendantsAnotherBonafideBuyer" id="txtnamedefendantsAnotherBonafideBuyerID" value="<?php echo set_value('txtnamedefendantsAnotherBonafideBuyer'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsAnotherBonafideBuyer', '<div style="margin-left:85px; width: 230px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsShortNameAnotherBonafideBuyerID"><span class="add-on" style="width:75px;"><div align="right">Short Name:</div></span><input class="input-xlarge" title="Short Name of Another Bonafide Buyer" data-content="Example: SMITH" name="txtnamedefendantsShortNameAnotherBonafideBuyer" id="txtnamedefendantsShortNameAnotherBonafideBuyerID" value="<?php echo set_value('txtnamedefendantsShortNameAnotherBonafideBuyer'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsShortNameAnotherBonafideBuyer', '<div style="margin-left:85px; width: 230px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="span5">
                                                    <h4>Address</h4>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsAnotherBonafideBuyerStreetAddressID"><span class="add-on" style="width:95px;"><div align="right">Street:</div></span><input style="width:190px;" title="Street Another Bonafide Buyer Address" data-content="Example: 1120 N Street" name="txtnamedefendantsAnotherBonafideBuyerStreetAddress" id="txtnamedefendantsAnotherBonafideBuyerStreetAddressID" value="<?php echo set_value('txtnamedefendantsAnotherBonafideBuyerStreetAddress'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsAnotherBonafideBuyerStreetAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsAnotherBonafideBuyerCityAddressID"><span class="add-on" style="width:95px;"><div align="right">City:</div></span><input style="width:190px;" title="City Another Bonafide Buyer Address" data-content="Example: Roseville" name="txtnamedefendantsAnotherBonafideBuyerCityAddress" id="txtnamedefendantsAnotherBonafideBuyerCityAddressID" value="<?php echo set_value('txtnamedefendantsAnotherBonafideBuyerCityAddress'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsAnotherBonafideBuyerCityAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="input-prepend">
                                                        <label for="txtnamedefendantsAnotherBonafideBuyerStateZipCodeAddressID"><span class="add-on" style="width:95px;"><div align="right">State Zip Code:</div></span><input style="width:190px;" title="State Zip Code Another Bonafide Buyer Address" data-content="Example: CA" name="txtnamedefendantsAnotherBonafideBuyerStateZipCodeAddress" id="txtnamedefendantsAnotherBonafideBuyerStateZipCodeAddressID" value="<?php echo set_value('txtnamedefendantsAnotherBonafideBuyerStateZipCodeAddress'); ?>" type="text"/>
                                                            <div class="clearfix" style="padding-top: 1px;">
                                                                <?php echo form_error('txtnamedefendantsAnotherBonafideBuyerStateZipCodeAddress', '<div style="margin-left:105px; width: 150px;" class="alert alert-error"><i class="icon-warning-sign icon-black"></i>', '</div>'); ?>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="SaveClientRecord" class="btn btn-primary">Save</button>
                            <a href="#" class="btn" data-dismiss="modal">Cancel</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>  
    
    <script>
        $(document).ready(function() {
            $(function ()  
            {
                $("#txtplaintiffLastNameID").popover({trigger: 'focus'});  
                $("#txtplaintiffFirstNameID").popover({trigger: 'focus'});  
                $("#txtplaintiffMiddleNameID").popover({trigger: 'focus'});
                $("#txtplaintiffStreetMailingAddressID").popover({trigger: 'focus'});  
                $("#txtplaintiffCityMailingAddressID").popover({trigger: 'focus'});  
                $("#txtplaintiffStateZipCodeMailingAddressID").popover({trigger: 'focus'});  
                $("#txtplaintiffCityOnlyMailingAddressID").popover({trigger: 'focus'});  
                $("#txtplaintiffPhoneNumberMailingAddressID").popover({trigger: 'focus'});
                $("#txtplaintiffStreetSubjectPropertyAddressID").popover({trigger: 'focus'});  
                $("#txtplaintiffCitySubjectPropertyAddressID").popover({trigger: 'focus'});  
                $("#txtplaintiffStateZipCodeSubjectPropertyAddressID").popover({trigger: 'focus'});  
                $("#txtplaintiffPhoneNumberSubjectPropertyAddressID").popover({trigger: 'focus'});
                $("#txtcourthouseStateID").popover({trigger: 'focus'});  
                $("#txtcourthouseCityID").popover({trigger: 'focus'});
                $("#txtcourthouseStreetAddressID").popover({trigger: 'focus'});  
                $("#txtcourthouseCityAddressID").popover({trigger: 'focus'});  
                $("#txtcourthouseStateZipCodeAddressID").popover({trigger: 'focus'});  
                $("#txtplaintiffPhoneNumberSubjectPropertyAddressID").popover({trigger: 'focus'});
                $("#txtcourthouseNameID").popover({trigger: 'focus'});  
                $("#txtcaseNameID").popover({trigger: 'focus'});  
                $("#txtsdefendantShortNameID").popover({trigger: 'focus'});
                $("#txtrecordeddocumentsDeedofTrustDocNumberID").popover({trigger: 'focus'});
                $("#txtrecordeddocumentsNODDocNumberID").popover({trigger: 'focus'});
                $("#txtrecordeddocumentsPageNumberDeclarationAgentID").popover({trigger: 'focus'});
                $("#txtoriginaldeedtrustlenderNameofLenderID").popover({trigger: 'focus'});
                $("#txtoriginaldeedtrustlenderShortNameofLenderID").popover({trigger: 'focus'});
                $("#txtnamedefendantsPresentBeneficiaryID").popover({trigger: 'focus'});
                $("#txtnamedefendantsShortNamePresentBeneficiaryID").popover({trigger: 'focus'});
                $("#txtnamedefendantsPresentBeneficiaryStreetAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsPresentBeneficiaryCityAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsPresentBeneficiaryStateZipCodeAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsPresentBeneficiaryID").popover({trigger: 'focus'});
                $("#txtnamedefendantsShortNamePresentBeneficiaryID").popover({trigger: 'focus'});
                $("#txtnamedefendantsPresentBeneficiaryStreetAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsPresentBeneficiaryCityAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsPresentBeneficiaryStateZipCodeAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsForeclosureTrusteeID").popover({trigger: 'focus'});
                $("#txtnamedefendantsShortNameForeclosureTrusteeID").popover({trigger: 'focus'});
                $("#txtnamedefendantsForeclosureTrusteeStreetAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsForeclosureTrusteeCityAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsForeclosureTrusteeStateZipCodeAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsNamedGranteeTDUSID").popover({trigger: 'focus'});
                $("#txtnamedefendantsShortNameNamedGranteeTDUSID").popover({trigger: 'focus'});
                $("#txtnamedefendantsNamedGranteeTDUSStreetAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsNamedGranteeTDUSCityAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsNamedGranteeTDUSStateZipCodeAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsAnotherBonafideBuyerID").popover({trigger: 'focus'});
                $("#txtnamedefendantsShortNameAnotherBonafideBuyerID").popover({trigger: 'focus'});
                $("#txtnamedefendantsAnotherBonafideBuyerStreetAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsAnotherBonafideBuyerCityAddressID").popover({trigger: 'focus'});
                $("#txtnamedefendantsAnotherBonafideBuyerStateZipCodeAddressID").popover({trigger: 'focus'});
                $("#txtrecordeddocumentsNTSDocNumberID").popover({trigger: 'focus'});
                $("#txtrecordeddocumentsTDUSDocNumberID").popover({trigger: 'focus'});
                $("#txtrecordeddocumentsNORDocNumberID").popover({trigger: 'focus'});
                                
                $('#toggleExistingRecordsID').click(function(e){                    
                    var el = document.getElementById("toggleExistingRecordsID");
                    
                    if(el.innerHTML == 'Click here to select from existing plaintiff, defendant or case...')
                    {
                        $('#ExistingRecordsID').show()
                        el.innerHTML = 'Hide the selection of existing plaintiff, defendant and case...';
                        e.preventDefault();
                    }
                    else if (el.innerHTML == 'Hide the selection of existing plaintiff, defendant and case...')
                    {
                        $('#ExistingRecordsID').hide();
                        el.innerHTML = 'Click here to select from existing plaintiff, defendant or case...';
                        e.preventDefault();
                    }
                });
            });
        });
        
        
        function validateCriteria() 
        {
           
            var ef = document.getElementById("EnterInfoID");
            if ($('#InForeClosureID').prop('checked')==true)
            {
                document.getElementById("divrecordeddocumentsPageNumberDeclarationAgentID").style.display = "block";
                document.getElementById("CriteriaInfoID").style.display = "none";
                document.getElementById("CriteriaErrorID").style.display = "none";
                document.getElementById("TDUSCatNameID").style.display = "none";
                document.getElementById("divrecordeddocumentsTDUSRecDateID").style.display = "none";
                document.getElementById("divrecordeddocumentsTDUSDocNumberID").style.display = "none";
                document.getElementById("divrecordeddocumentsTDUSPropertySoldDateID").style.display = "none";
                document.getElementById("NORCatNameID").style.display = "none";
                document.getElementById("divrecordeddocumentsNORRecDateID").style.display = "none";
                document.getElementById("divrecordeddocumentsNORDocNumberID").style.display = "none";
                $("#txtrecordeddocumentsTDUSRecDateID").prop("disabled", true);
                $("#txtrecordeddocumentsTDUSDocNumberID").prop("disabled", true);
                $("#txtrecordeddocumentsNORRecDateID").prop("disabled", true);
                $("#txtrecordeddocumentsNORDocNumberID").prop("disabled", true);
                $("#txtrecordeddocumentsTDUSPropertySoldDateID").prop("disabled", true);
                $("#txtrecordeddocumentsNORRecDateID").prop("disabled", true);
                $("#txtrecordeddocumentsNORDocNumberID").prop("disabled", true);
                $("#txtrecordeddocumentsPageNumberDeclarationAgentID").prop("disabled", false);
//                ef.innerHTML = "Step 2: Enter the needed information for In-foreclosure";
//                e.preventDefault();
            }
            else if ($('#ForeclosedID').prop('checked')==true)
            {
                document.getElementById("divrecordeddocumentsPageNumberDeclarationAgentID").style.display = "none";
                document.getElementById("CriteriaInfoID").style.display = "none";
                document.getElementById("CriteriaErrorID").style.display = "none";
                document.getElementById("TDUSCatNameID").style.display = "block";
                document.getElementById("divrecordeddocumentsTDUSRecDateID").style.display = "block";
                document.getElementById("divrecordeddocumentsTDUSDocNumberID").style.display = "block";
                document.getElementById("divrecordeddocumentsTDUSPropertySoldDateID").style.display = "block";
                document.getElementById("NORCatNameID").style.display = "none";
                document.getElementById("divrecordeddocumentsNORRecDateID").style.display = "none";
                document.getElementById("divrecordeddocumentsNORDocNumberID").style.display = "none";
                $("#txtrecordeddocumentsTDUSRecDateID").prop("disabled", false);
                $("#txtrecordeddocumentsTDUSDocNumberID").prop("disabled", false);
                $("#txtrecordeddocumentsTDUSPropertySoldDateID").prop("disabled", false);
                $("#txtrecordeddocumentsNORRecDateID").prop("disabled", true);
                $("#txtrecordeddocumentsNORDocNumberID").prop("disabled", true);
                $("#txtrecordeddocumentsPageNumberDeclarationAgentID").prop("disabled", true);
                //document.getElementById("#AmendmentID").removeAttribute('checked', true);
//                ef.innerHTML = "Step 2: Enter the needed information for Foreclosed";
//                e.preventDefault();
            }
            else if ($('#NoticeOfDefaultID').prop('checked')==true)
            {
                document.getElementById("divrecordeddocumentsPageNumberDeclarationAgentID").style.display = "none";
                document.getElementById("CriteriaInfoID").style.display = "none";
                document.getElementById("CriteriaErrorID").style.display = "none";
                document.getElementById("TDUSCatNameID").style.display = "none";
                document.getElementById("divrecordeddocumentsTDUSRecDateID").style.display = "none";
                document.getElementById("divrecordeddocumentsTDUSDocNumberID").style.display = "none";
                document.getElementById("divrecordeddocumentsTDUSPropertySoldDateID").style.display = "none";
                document.getElementById("NORCatNameID").style.display = "block";
                document.getElementById("divrecordeddocumentsNORRecDateID").style.display = "block";
                document.getElementById("divrecordeddocumentsNORDocNumberID").style.display = "block";
                $("#txtrecordeddocumentsPageNumberDeclarationAgentID").prop("disabled", true);
                $("#txtrecordeddocumentsTDUSRecDateID").prop("disabled", true);
                $("#txtrecordeddocumentsTDUSDocNumberID").prop("disabled", true);
                $("#txtrecordeddocumentsTDUSPropertySoldDateID").prop("disabled", true);
                $("#txtrecordeddocumentsNORRecDateID").prop("disabled", false);
                $("#txtrecordeddocumentsNORDocNumberID").prop("disabled", false);
                
                                                    
//                document.getElementById("#AmendmentID").checked = true;
                                            
//                ef.innerHTML = "Step 2: Enter the needed information for NOD Rescinded";
//                e.preventDefault();
            }
            else if (($('#InForeClosureID').prop('checked')==true) && (($('#AmendmentID').prop('checked')==true)))
            {
                ef.innerHTML = "Step 2: Enter the needed information for In-foreclosure and Amendment";
                e.preventDefault();
            }
            else if (($('#ForeclosedID').prop('checked')==true) && (($('#AmendmentID').prop('checked')==true)))
            {
                ef.innerHTML = "Step 2: Enter the needed information for Foreclosed and Amendment";
                e.preventDefault();
            }
            else if (($('#NoticeOfDefaultID').prop('checked')==true) && (($('#AmendmentID').prop('checked')==true)))
            {
                ef.innerHTML = "Step 2: Enter the needed information for NOD Rescinded and Amendment";
                e.preventDefault();
            }
        }
    </script>
        