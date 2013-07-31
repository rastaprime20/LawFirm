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
                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant>Edit Defendant</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
    <!--End of page bread crumb-->

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
                    <form class ="form-horizontal">
                        <fieldset>
                            <legend>
                                <h4 style="color: #4F5155">Create Document - Edit Defendant Information</h4>
                            </legend> 

                            <!--Start of Defendant type-->
                            <div class="controls-group">
                                <label class="radio">
                                    <h4 style="text-align:left;color:#4F5155">Defendant Type</h4><br>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    &nbsp;Individual
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    &nbsp;Party
                                </label>
                            </div>
                            <hr class="hr_att">
                            <!--End of Defendant type-->

                            <div class="span5">

                                <!--Start of Defendant personal information-->
                                <h4 style="text-align:center;color:#4F5155">Personal Information</h4><br>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Last Name:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">First Name:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Middle Name:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                <!--End of Defendant personal information-->
                                <br>
                                <!--Start of Defendant beneficiary information-->
                                <h4 style="text-align:center;color:#4F5155">Defendant Beneficiary</h4><br>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Present Beneficiary:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Short Name:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Street:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">City:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Zip Code:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                 <!--End of Defendant beneficiary information-->
                                 <br>    
                                <!--Start of Defendant subject trustee information-->
                                <h4 style="text-align:center;color:#4F5155">Defendant Subject Trustee</h4><br>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Foreclosure Trustee:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Short Name:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Street:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">City:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">ZipCode:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                <!--End of Defendant subject trustee information-->
                            </div>
                           

                            <div class="span5">
                                <!--Start of Defendant grantee on TDUS information-->
                                <h4 style="text-align:center;color:#4F5155">Defendant Grantee on TDUS</h4><br>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Grantee:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Short Name:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Street:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">City:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">ZipCode:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                <!--End of Defendant grantee on TDUS information-->
                                <br>
                                <!--Start of Another Bonafide Buyer information-->
                                <h4 style="text-align:center;color:#4F5155">Another Bonafide Buyer</h4><br>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Bonafide Buyer:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Short Name:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Street:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">City:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">ZipCode:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                <!--End of Another Bonafide Buyer information-->
                                <br>
                                <!--Start of Another Defendant information-->
                                <h4 style="text-align:center;color:#4F5155">Another Defendant</h4><br>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Defendant:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Short Name:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Street:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">City:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">ZipCode:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                                <!--End of Another Defendant information-->
                            </div>
                            
                        </fieldset>
                    </form>
                    
                    <!--Start of footer for create Defendant records-->
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>home/createDocument/defendant">Update</a>
                        <a class="btn" href="<?php echo base_url(); ?>home/createDocument/defendant">Back</a>
                    </div>
                    <!--End of footer for create Defendant records-->
                </div>
            </div>
            <!--End of box content-->
        </div>
    </div>
</div>
<!--End of whole box-->

