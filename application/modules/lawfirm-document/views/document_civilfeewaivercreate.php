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
                </li>
            </ul>
        </div>
    </div>
    <!--End of page bread crumb-->


    <!--Start of Notice for Request to Waive Court Fees-->
    <div id ="divCivilCaseCoverSheetInstructions" style="display: block; visibility: visible;">
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header well" data-original-title>
                    <h2><i class="icon-info-sign"></i> Notice for Request to Waive Court Fees</h2>
                    <div class="box-icon">
                        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content" style="padding-left: 20px; padding-right: 20px;">
                    <h4 style="text-align: center;"><b>Notice for Request to Waive Court Fees</b></h4><br>
                    
                    <p>
                        If you are getting public benefits, are a low-income person, or do not have
                        enough income to pay for household’s basic needs and your court fees. you may
                        use this form to ask the court to waive all or part of your court fees. The court
                        may order you to answer questions about your finances. If the court waives the
                        fees. you may still have to pay later if:
                    </p>
                    <ul>
                        <li>
                            <p>
                                You cannot give the court proof of your eligibility. 
                            </p>
                        </li>
                        <li>
                            <p>
                                Your financial situation improves during this case. or
                            </p>
                        </li>
                        <li>
                            <p>
                                You settle your civil case for <b>S10,000</b> or more. The trial court that waives
                                your fees will have a lien on any such settlement in the amount of the waived
                                fees and costs. The court may also charge you any collection costs.

                            </p>
                        </li>
                    </ul>
                    <hr class="hr_att">
                </div>
            </div><!--/span-->
        </div><!--/row-->
    </div>
    <!--End of Notice for Request to Waive Court Fees-->

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
                                <h4 style="color: #4F5155">Create Document - Create Request Civil Fee Waiver</h4>
                            </legend>
                            <div style="padding-left: 20px; padding-right: 20px;">
                                <ol>
                                    <li><h4 style="color:#4F5155">Your Additional information,</h4>
                                        <ul style="list-style:none">
                                            <li>
                                                <label>State:&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                    </li>  
                                                    </ul>
                                                    </li>
                                                    <li>                           
                                                        <h4 style="display:inline;color:#4F5155">Your Job</h4>
                                                        <ul style="list-style:none">
                                                            <li>
                                                                <p>If you have one<i>(job title):</i>&nbsp;
                                                                    <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>Name of employer:&nbsp;
                                                                    <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>Employer’s address: &nbsp;
                                                                    <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><h4 style="display:inline;color:#4F5155">Your lawyer</h4>
                                                        <p>
                                                            if you have one (name,firm or affiliation, address, phone number and State Bar number).
                                                            <textarea  style="width:400px; resize: none"></textarea>
                                                        </p>
                                                        <ol>
                                                            <li>
                                                                <p>
                                                                    The lawyer has agreed to advance all or a portion of your fees or costs<i> (check one):</i> 
                                                                    &nbsp;Yes<input type="checkbox" id="inlineCheckbox1" value="option1" > &nbsp;
                                                                    No&nbsp; <input type="checkbox" id="inlineCheckbox1" value="option1" >
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <i>(If yes, your lawyer must sign here)</i> Lawyer’s signature:&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;
                                                                    <i>If your lawyer is not providing legal—aid type services based on your low income, you may have to go to a
                                                                        hearing to explain why You are asking the court to waive the fees.</i>

                                                                </p>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <h4 style="display:inline;color:#4F5155">
                                                            What court’s fees or costs are you asking to be waived?
                                                        </h4>
                                                        <ol style="list-style:none">
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" id="inlineCheckbox1" value="option1" >Superior Court (See Information Sheet on Waiver of Superior Court Fees and Costs (form FW-001-INFO).)
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" id="inlineCheckbox1" value="option1" >Supreme Court. Court of Appeal. or Appellate Division of Superior Court 
                                                                    (See Sheet on Waiver of Appellate Court Fees and (Costs (form APP-015/F W-015-INFO).)
                                                                </p>
                                                            </li>

                                                        </ol>
                                                    </li>
                                                    <li><h4 style="display:inline;color:#4F5155">
                                                            Why are you asking the court to waive your court fees?
                                                        </h4>
                                                        <ol style="list-style:lower-alpha">
                                                            <li>
                                                                <p>
                                                                    I receive (check all that apply):
                                                                </p>
                                                                <ol style="list-style:none">
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" > Medi-Cal 
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" > SSI
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" > SSP 
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" > County Relief/General Assistance
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" > IHSS (In-Home Supportive Services)
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" > CalWORKS or Tribal TANF (Tribal Temporary
                                                                            Assistance for Needy Families) 
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" > CAPI (Cash Assistance Program for Aged. Blind and Disabled)
                                                                        </p>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" id="inlineCheckbox1" value="option1" > My gross monthly household income (before deductions for taxes) is less than the amount listed below.
                                                                    <i>(if you check 5b you must fill out 7, 8 and 9 on page 2 of this form.)</i>
                                                                </p>
                                                                <table border="1">
                                                                    <tr style="text-align: center">
                                                                        <th width="100px">Family Size</th>
                                                                        <th width="100px">Family Income</th>
                                                                        <th width="100px">Family Size</th>
                                                                        <th width="100px">Family Income</th>
                                                                        <th width="100px">Family Size</th>
                                                                        <th width="100px">Family Income</th>
                                                                        <td rowspan="3">If more than 6 people at home, add $412.50 for each extra person.</td>
                                                                    </tr>

                                                                    <tr style="width:100px;height:50px ;text-align: center">
                                                                        <td>1</td>
                                                                        <td>$1,163.55</td>
                                                                        <td>3</td>
                                                                        <td>$1,988.55</td>
                                                                        <td>5</td>
                                                                        <td>$2,813.55</td>

                                                                    </tr>
                                                                    <tr style="width:100px;text-align: center">
                                                                        <td>2</td>
                                                                        <td>$l ,576.05</td>
                                                                        <td>4</td>
                                                                        <td>$2,401.05</td>
                                                                        <td>6</td>
                                                                        <td>$3,226.05</td>
                                                                    </tr>
                                                                </table>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" id="inlineCheckbox1" value="option1" > I do not have enough income to pay for my household’s basic needs and the court fees. I ask the court to
                                                                    <i>(check one):</i>  </p>
                                                                <ol style="list-style:none">
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" > waive all court fees 
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" >waive some of the court fees 
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" >let me make payments over time <i>(Explain)</i>&nbsp;
                                                                            <textarea  style="width:400px; resize: none"></textarea>&nbsp;<br>
                                                                            <i>(If you check 5c, you must fill out page 5.)</i>
                                                                        </p>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" >Check here if you asked the court to waive your court fees for this case in the last six months.
                                                            <br><i>(If your previous request is reasonably available, please attach it to this form and check here:&nbsp;<input type="checkbox" id="inlineCheckbox1" value="option1" >&nbsp;)</i>
                                                        </p>
                                                        <p style="font-weight: bold">
                                                            I declare under penalty of perjury under the laws of the State of California that the information I have provided
                                                            on this form and all attachments is true and collect.</p>
                                                        <p style="font-style: italic">
                                                            If you checked 5a on page 1, do not fill out below. If you checked 5b, fill out questions 7, 8, and 9 only. If you checked 5c,
                                                            you must fill out this entire page. If you need more space, attach form MC-025 or attach a sheet of paper and write
                                                            Financial Information and your name and case number at the top.
                                                        </p>    
                                                    </li>
                                                    <li>
                                                        <p>
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1" >Check here if your income changes a lot from month to month. Your Money and Property
                                                            Fill out below based on your average income for the past 12 months. 
                                                        </p>
                                                    </li>
                                                    <li><h4 style="display:inline;color:#4F5155">
                                                            Your monthly Income
                                                        </h4>
                                                        <ol style="list-style:lower-alpha">
                                                            <li>
                                                                <p>
                                                                    Gross monthly income <i>(before deductions):</i>&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;
                                                                    <br>List each payroll deduction and amount below:
                                                                </p>
                                                                <ol style="list-style:decimal">
                                                                    <li>
                                                                        <p>
                                                                            <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                        </p>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    Total deductions <i>(add 8a (1)-(4) above):</i> &nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    Total monthly take-home pay <i>(8a minus 8b):</i> &nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    List the source and amount of <i>any</i> other income you get each
                                                                    month, including: spousal/child support, retirement, social
                                                                    security, disability, unemployment, military basic allowance for
                                                                    quarters (BAQ), veterans payments, dividends, interest, trust
                                                                    income, annuities, net business or rental income.
                                                                    reimbursement for job-related expenses, gambling or lottery
                                                                    winnings, etc.
                                                                <p>
                                                                <ol style="list-style:decimal">
                                                                    <li>
                                                                        <p>
                                                                            <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                        </p>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <b>
                                                                        Your total monthly income is <i>(8c plus 8d):</i>&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                    </b>
                                                                </p>
                                                            </li>   
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <h4 style="display:inline;color:#4F5155">
                                                            Household Income
                                                        </h4>
                                                        <ol style="list-style:lower-alpha">
                                                            <li>
                                                                <p>
                                                                    List all other persons living in your home and their income;
                                                                    include only your spouse and all individuals who depend in
                                                                    whole or in part on you for support, or on whom you depend in
                                                                    whole or in part for support

                                                                </p>
                                                                <table>
                                                                    <tr style="text-align: center">
                                                                        <td></td>
                                                                        <td>Name</td>
                                                                        <td>Age</td>
                                                                        <td>Relationship</td>
                                                                        <td></td>
                                                                        <td>Gross Monthly Income</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>(1)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td><input style="width:50px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(2)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td><input style="width:50px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(3)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td><input style="width:50px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(4)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td><input style="width:50px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                </table>
                                                            </li>
                                                            <li>
                                                                <p><b>Total Monthly Income of persons above</b> &nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></p>
                                                            </li>

                                                        </ol>
                                                        <h4 style="display:inline;color:#4F5155">
                                                            <b>
                                                                Total Monthly Income <i>and</i> household income(8e plus 9b) &nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                            </b>
                                                        </h4>
                                                    </li>
                                                    <li>
                                                        <h4 style="display:inline;color:#4F5155">
                                                            <b>
                                                                Your Money and Property
                                                            </b>
                                                        </h4>
                                                        <ol style="list-style:lower-alpha">
                                                            <li>
                                                                <p>
                                                                    Cash _________________________________&nbsp;$&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    All financial accounts<i>(List Bank name and amount):</i>
                                                                </p>
                                                                <table>
                                                                    <tr>
                                                                        <td>(1)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(2)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(3)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(4)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                </table>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    Cars, boats, and other vehicle
                                                                </p>
                                                                <table>
                                                                    <tr style="text-align: center">
                                                                        <td></td>
                                                                        <td>Make/Year</td>
                                                                        <td></td>
                                                                        <td>Fair Market Value</td>
                                                                        <td></td>
                                                                        <td>How Much You Still Owe</td>


                                                                    </tr>
                                                                    <tr>
                                                                        <td>(1)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(2)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(3)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(4)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                </table>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    Real estate 
                                                                </p>
                                                                <table>
                                                                    <tr style="text-align: center">
                                                                        <td></td>
                                                                        <td>Address</td>
                                                                        <td></td>
                                                                        <td>Fair Market Value</td>
                                                                        <td></td>
                                                                        <td>How Much You Still Owe</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(1)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(2)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(3)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                </table>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    Other personal property (jewelry, furniture, furs, stocks, bonds, etc.):
                                                                </p>
                                                                <table>
                                                                    <tr style="text-align: center">
                                                                        <td></td>
                                                                        <td>Describe</td>
                                                                        <td></td>
                                                                        <td>Fair Market Value</td>
                                                                        <td></td>
                                                                        <td>How Much You Still Owe</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(1)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(2)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>(3)</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                        <td>$</td>
                                                                        <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                                    </tr>
                                                                </table>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li>
                                                        <h4 style="display:inline;color:#4F5155"><b>
                                                                Your Monthly Expenses</b></h4>
                                                        <p style="font-style: italic">
                                                            (Do not include payroll deductions you already listed in 8b.)
                                                        </p>
                                                        <table>
                                                            <tr>
                                                                <td>a.&nbsp;</td>
                                                                <td>Rent or house payment and maintenance&nbsp; </td>
                                                                <td>$</td>
                                                                <td ><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>b.&nbsp;</td>
                                                                <td>Food and household supplies &nbsp; </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>c.&nbsp;</td>
                                                                <td>Utilities and telephone &nbsp; </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>d.&nbsp;</td>
                                                                <td>Clothing &nbsp; </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>e.&nbsp;</td>
                                                                <td>Laundry and cleaning &nbsp; </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>f.&nbsp;</td>
                                                                <td>Medical and dental expenses &nbsp; </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr >
                                                                <td>g.&nbsp;</td>
                                                                <td>Insurance (life, health, accident, etc.) &nbsp;</td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>h.&nbsp;</td>
                                                                <td>Child, spousal support (another marriage)&nbsp;</td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>i.&nbsp;</td>
                                                                <td>School, child care &nbsp;</td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>j.&nbsp;</td>
                                                                <td>Transportation, gas, auto repair and insurance &nbsp;</td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>k.&nbsp;</td>
                                                                <td>Installment, payments (list each below): &nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>
                                                                    Paid to:
                                                                </td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>(1)&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>(2)&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>(3)&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                            </tr>
                                                            <tr>
                                                                <td>l. &nbsp;</td>
                                                                <td>Wages/earnings withheld by court order</td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value=""></td>
                                                            </tr>
                                                            <tr>
                                                                <td>m.&nbsp;</td>
                                                                <td>Any other monthly expenses <i>(list each below):</i> &nbsp;</td>
                                                            </tr>
                                                            <tr style="text-align: center">
                                                                <td></td>
                                                                <td>
                                                                    Paid to:
                                                                </td>
                                                                <td>&nbsp;</td>
                                                                <td>How Much?</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>(1)&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>(2)&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>(3)&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                                <td>$</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                            </tr>

                                                        </table>
                                                        <table>
                                                            <tr>
                                                                <td></td>
                                                                <td style="font-weight: bold">Total monthly expenses <i>(add 11a - 11m above):</i></td>
                                                                <td>&nbsp;$&nbsp;</td>
                                                                <td><input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">  </td>
                                                            </tr>
                                                        </table>
                                                        <table>
                                                            <tr>
                                                                To list any other facts you want the court to know. such as unusual medical expenses, family emergencies. etc., attach
                                                                form MC-025. Or attach a sheet of paper. and write Financial Information and your name and case number at
                                                                the top. Check here if you attach another page. <input type="checkbox" id="inlineCheckbox1" value="option1" >
                                                            <br>
                                                            <br>
                                                            <b><i>Important! If your financial situation or ability to pay court fees improves, you must notify the court within
                                                                five days on form FW-O1O.</b></i>
                                                            </tr>
                                                        </table>
                                                    </li>
                                                    </ol>
                                                    
                                                    </div>
                                                    </fieldset>
                    </form>
                    
                    
                </div>
                <!--End of box content-->
                <!--Start of footer for create Civil Case Cover Sheet records-->
                <div class="modal-footer">
                    <a class="btn btn-primary" href="home/createDocument/createCivilFeeWaiverOrder">Save & Next</a>
                    <a class="btn" href="<?php echo base_url(); ?>home/createDocument/viewAdditionalSummons200">Back</a>
                </div>
                <!--Start of footer for create Civil Case Cover Sheet records-->
            </div>
        </div>
    </div>
    <!--End of whole box-->



