<div id=content class=span10>

    <!--Start of page bread crumb-->
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Create Document</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Plaintiff</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/defendant>Defendant</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet>Civil Case Cover Sheet</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/createSummons100>Summons 100</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/viewAdditionalSummons200>Additional Summons 200</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/createCivilFeeWaiver>Civil Fee Waiver</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/createCivilFeeWaiverOrder>Civil Fee Waiver Order</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
    <!--End of page bread crumb-->

    <!--Start of Notice for Civil Fee Waiver Order-->
    <div id ="divCivilCaseCoverSheetInstructions" style="display: block; visibility: visible;">
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header well" data-original-title>
                    <h2><i class="icon-info-sign"></i> Notice for Civil Fee Waiver Order</h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content" style="padding-left: 20px; padding-right: 20px;">
                    <h4 style="text-align: center;">Notice for Civil Fee Waiver Order</h4>
                    <hr class="hr_att">
                    <p>
                        <i><b>Read this form carefully. All checked boxes &nbsp; <input type="checkbox" id="inlineCheckbox1" value="option1" checked="" > &nbsp; are court orders. </b></i><br><br>
                        <b>Notice:</b> The court may order you to answer questions about your finances and later order you to pay back the waived fees. 
                        If this happens and you do not pay, the court can make you pay the fees and also charge you collection fees. 
                        If there is a change in your financial circumstances during this case that increases your ability to pay fees and costs, 
                        you must notify the trial court within five days. (Use form FW-O1O.) If you win your case, the trial court may order the other side to pay the fees. 
                        If you settle your civil case for <b>S 10,000</b> or more. the trial court will have a lien on the settlement in the amount of the waived fees. 
                        The trial court may not dismiss the case until the lien is paid.
                    </p>
                    <hr class="hr_att">
                </div>
            </div><!--/span-->
        </div><!--/row-->
    </div>
    <!--End of Notice for Civil Fee Waiver Order-->

    <!--Start of whole box-->
    <div class="row-fluid">
        <div class="row-fluid sortable">
            <div class="box span12">

                <!--Start of box header-->
                <div class="box-header well">
                    <h2><i class="icon-list-alt"></i> Document</h2>
                </div>
                <!--End of box header-->

                <!--Start of box content-->
                <div class="box-content" style="display: block;">
                    <form>
                        <fieldset>
                            <legend>
                                <h4 style="color: #4F5155">Create Document - Create Civil Waive Order</h4>
                            </legend>
                            <div style="margin-left: 2%;">
                                <p>
                                <ul style="list-style: none; text-align: left">
                                    <li>A request to waive court fees was filed on <i>(date):</i>&nbsp;
                                        <input style="height:15px; width:125px;"class="input-xlarge datepicker hasDatepicker" id="focusedInput" type="date" value="">
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" id="inlineCheckbox1" value="option1" > The court made a previous fee waiver order in this case on <i>(date):</i>&nbsp;
                                            <input style="height:15px; width:125px;"class="input-xlarge datepicker hasDatepicker" id="focusedInput" type="date" value="">
                                        </label>
                                    </li>
                                </ul>
                                </p>
                                <hr class ="hr_att">
                                <p>
                                <ul style="list-style: none; text-align: left">
                                    <li>After reviewing your <i>(check one):</i>&nbsp;
                                        <label class="radio">
                                            <input type="radio" name="CourtFees" id="CourtFees" value="option1" style="text-align: center;">
                                            &nbsp;<i>Request to Waive Court Fees</i>
                                        </label>
                                        &nbsp;&nbsp;
                                        <label class="radio">
                                            <input type="radio" name="CourtFees" id="AdditionalCourtFees" value="option2" style="text-align: center;">
                                            &nbsp;<i>Request to Waive Additional Court Fees</i>
                                        </label>&nbsp;
                                        <b>the court makes the following orders:</b><br><br>
                                        <hr class ="hr_att">
                                        <ul style="list-style: none; text-align: left">
                                            <li>a. 
                                                <label class="radio">
                                                    <input type="radio" name="CourtRequest" id="GrantsRequest" value="option2" style="text-align: center;">
                                                    &nbsp;The court <b>grants</b> your request, as follows:
                                                </label>
                                                <div style="margin-top: 10px;">
                                                    <ul style="list-style: none; text-align: left">
                                                        <li>(1) 
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" ><b>Fee Waiver.</b>
                                                            The court grants your request and waives your court fees and costs listed below. 
                                                            <i>(Cal. Rules of Court, rule 3.55.)</i> You do not have to pay the court fees for the following:
                                                            <br>
                                                            <div style="float: left; width: 50%">
                                                                <ul>
                                                                    <li>Filing papers in Superior Court</li>
                                                                    <li>Making copies and certifying copies</li>
                                                                    <li>Sheriff's fee to give notice</li>
                                                                    <li>Reporter's daily fee <i>(for up to 60 days following the fee waiver order at the court-approved daily rate)</i></li>
                                                                    <li>Preparing and certifying the clerk's transcript on appeal</li>
                                                                </ul>
                                                            </div>
                                                            <div style="float: right; width: 50%">
                                                                <ul>
                                                                    <li>Giving notice and certificates</li>
                                                                    <li>Sending papers to another court department</li>
                                                                    <li>Court-appointed interpreter in small claims court</li>
                                                                    <li>Court fees for phone hearings</li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div style="margin-top: 130px;;">
                                                    <ul style="list-style: none; text-align: left">
                                                        <li>(2) 
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" ><b>Additional Fee Waiver.</b>
                                                            The court grants your request and waives your additional superior fees and costs that are checked below. 
                                                            <i>(Cal. Rules of Court, rule 3.56.)</i> You do not have to pay for the checked items:
                                                            <br>
                                                            <div style="float: left; width: 50%">
                                                                <ul style="list-style: none;">
                                                                    <li><input type="checkbox" id="inlineCheckbox1" value="option1" >&nbsp; Jury fees and expenses</li>
                                                                    <li><input type="checkbox" id="inlineCheckbox1" value="option1" >&nbsp; Fees for court-appointed experts</li>
                                                                    <li><input type="checkbox" id="inlineCheckbox1" value="option1" >&nbsp; Reporter's daily fees <i>(beyond the 60 day period following the fee waiver order)</i></li>
                                                                    <li>
                                                                        Other <i>(specify):</i>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea id = "MoreInfoRequestText" style="width: 500px; height: 80px; resize: none;"></textarea>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div style="float: right; width: 50%">
                                                                <ul style="list-style:none;">
                                                                    <li><input type="checkbox" id="inlineCheckbox1" value="option1" >&nbsp; Fees for a peace officer to testify in court</li>
                                                                    <li><input type="checkbox" id="inlineCheckbox1" value="option1" >&nbsp; Court-appointed interpreter fees for a witness</li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div style="margin-top: 210px;;">                       
                                                    <ul style="list-style: none; text-align: left">
                                                        <li>(3) 
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" ><b>Fee Waiver for Appeal.</b>
                                                            The court grants your request and waives the fees and costs checked below, for your appeal
                                                            <i>(Cal. Rules of Court, rules 3.55, 3.56, 8.26, and 8.818)</i> You do not have to pay for the checked items.
                                                            <br>
                                                            <ul style="list-style:none;">
                                                                <li><input type="checkbox" id="inlineCheckbox1" value="option1" >&nbsp; Preparing and certifying clerk's transcript for appeal.</li>
                                                                <li>
                                                                    Other <i>(specify):</i>
                                                                    <br><textarea id = "MoreInfoRequestText" style="width: 500px; height: 80px; resize: none;"></textarea>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <hr class ="hr_att">
                                            <div style="margin-top: 0%;">
                                                <li>b. 
                                                    <label class="radio">
                                                        <input type="radio" name="CourtRequest" id="DeniesRequest" value="option2" style="text-align: center;">
                                                        &nbsp;The court <b>denies</b> your request, as follows:
                                                    </label>
                                                    
                                                    <div style="border: 2px solid #cccccc; margin-left: 20px; margin-right: 20px; margin-top: 20px;">
                                                        <p style ="margin-left: 5px; ">
                                                            <b>Warning!</b> 
                                                            If you miss the deadline below, the court cannot process your request for hearing or the court papers you filed with your
                                                            original request. If the papers were notice of appeal, the appeal may be dismissed.
                                                        </p>
                                                    </div>
                                                    <br>
                                                    <ul style="list-style: none; text-align: left">
                                                        <li>(1) 
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" >
                                                            The court <b>denies</b> your request because it is incomplete. You have <b>10 days</b> after the clerk gives notice of this order (see date below) to:
                                                            <ul>
                                                                <li>Pay your fees and costs, or</li>
                                                                <li>
                                                                    File a new revised request that includes the items listed below <i>(specify incomplete items):</i>
                                                                    <br><textarea id = "MoreInfoRequestText" style="width: 500px; height: 80px; resize: none;"></textarea>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <ul style="list-style: none; text-align: left">
                                                        <li>(2) 
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" >
                                                            The court <b>denies</b> your request because the information you provided on the request shows that you are not eligible for the fee waiver you requested <i>(specify reasons):</i>
                                                            <br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea id = "MoreInfoRequestText" style="width: 500px; height: 80px; resize: none;"></textarea>
                                                            <br>The court has enclosed a blank <i>Request for Hearing About Court Fee Waiver Order (Superior Court)</i>, form FW-006. You have <b>10 days</b> after the clerk gives notice of this order (see date below) to:
                                                            <ul>
                                                                <li>Pay your fees and costs, or</li>
                                                                <li>
                                                                    Ask for a hearing in order to show the court more information <i>(Use form FW-006 to request hearing.)</i>
                                                                    <br>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <hr class ="hr_att">
                                            <div style="margin-top: 20px;">
                                                <li>c. 
                                                    <label class="radio">
                                                        <input type="radio" name="CourtRequest" id="MoreInfoRequest" value="option2" style="text-align: center;">
                                                        &nbsp;The court needs more information to decide whether to grant your request. You must go to court on the date below. 
                                                    </label>
                                                    The hearing will be about <i>(specify questions regarding eligibility):</i><br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea id = "MoreInfoRequestText" style="width: 500px; height: 80px; resize: none;"></textarea>
                                                    <ul style="text-align: left;">
                                                        <input type="checkbox" id="inlineCheckbox1" value="option1" >
                                                            Bring the following proof to support request if  reasonably available:
                                                            <br>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea id = "MoreInfoRequestText" style="width: 500px; height: 80px; resize: none;"></textarea>
                                                    </ul>
                                                </li>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                                
                                <legend>
                                    <h4 style="color: #4F5155">Hearing Information</h4>
                                </legend>
                                <div style="border: 2px solid #cccccc; margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 20px; padding-top: 20px; padding-right: 5px; padding-left: 5px;">
                                    <div style="margin-left: 50%">
                                        <p>
                                            Name and address of court if different from the previous entered name and address of the court
                                        </p>
                                    </div>
                                    <table class="table table-bordered table-striped table-condensed">
                                        <tbody>
                                            <tr>
                                                <td class="center">Date: &nbsp; <input style="height:15px; width:125px;"class="input-xlarge focused" id="focusedInput" type="date" value=""></td>
                                                <td class="center">Time: &nbsp; <input style="height:15px; width:125px;"class="input-xlarge focused" id="focusedInput" type="time" value=""></td>
                                                <td class="center"><textarea id = "MoreInfoRequestText" style="width: 500px; height: 80px; resize: none;"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class="center">Dept.: &nbsp; <input type="text" aria-controls="DataTables_Table_0"> </td>
                                                <td class="center">Rm.: &nbsp; <input type="text" aria-controls="DataTables_Table_0"> </td>
                                                <td class="center"><textarea id = "MoreInfoRequestText" style="width: 500px; height: 80px; resize: none;"></textarea></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div style="border: 2px solid #cccccc; margin-left: 20px; margin-right: 20px; margin-top: 20px;">
                                    <p style ="margin-left: 5px; ">
                                        <b>Warning!</b> 
                                        If item c is checked, and you do not go to court on your hearing date, the judge will deny your request to waive court fees
                                        and you will have 10 days to pay fees. If you miss that deadline, the court cannot process the court paper
                                    </p>
                                </div>
                                </p>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!--End of box content-->
                <!--Start of footer for create Civil Fee Waive Order-->
                <div class="modal-footer">
                    <a class="btn btn-primary" href="home/createDocument/viewAdditionalSummons200">Save & Next</a>
                    <a class="btn" href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet">Back</a>
                </div>
                <!--End of footer for create Civil Fee Waive Order-->
            </div>
        </div>
    </div>
    <!--End of whole box-->


