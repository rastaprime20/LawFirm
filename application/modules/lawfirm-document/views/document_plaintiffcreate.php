<div id=content class=span10>

    <!--Start of page bread crumb-->
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Create Document</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Plaintiff</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/createPlaintiff>Create Plaintiff</a> <span class=divider>/</span>
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
                                <h4 style="color: #4F5155">Create Document - Create Plaintiff Information</h4>
                            </legend> 

                            <!--Start of Plaintiff type-->
                            <div class="controls-group">
                                <label class="radio">
                                    <h4 style="text-align:left;color:#4F5155">Plaintiff Type</h4><br>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    &nbsp;Individual
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    &nbsp;Party
                                </label>
                            </div>
                            <hr class="hr_att">
                            <!--End of Plaintiff type-->

                            <div class="span5">

                                <!--Start of Plaintiff personal information-->
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
                                <!--End of Plaintiff personal information-->
                                <br>
                                <!--Start of Plaintiff mailing address information-->
                                <h4 style="text-align:center;color:#4F5155">Plaintiff Mailing Address</h4><br>

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

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">Telephone Number:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <!--End of Plaintiff mailing address information-->

                            <div class="span5">
                                <!--Start of Plaintiff subject property address information-->
                                <h4 style="text-align:center;color:#4F5155">Plaintiff Subject Property Address</h4><br>

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

                                <div class="control-group">
                                    <label class="control-label" for="focusedInput">APN Number:</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <!--End of Plaintiff subject property address information-->
                        </fieldset>
                    </form>
                    
                    <!--Start of footer for Plaintiff records-->
                    <div class="modal-footer">
                        <input type="checkbox" name="checkbox2" id="checkbox2" /> Stay on this page after saving &nbsp;&nbsp; <a class="btn btn-primary" href="home/createDocument/defendant">Save & Next</a>
                        <a class="btn" href="<?php echo base_url(); ?>home/createDocument/plaintiff">Back</a>
                    </div>
                    <!--End of footer for Plaintiff records-->
                </div>
            </div>
            <!--End of box content-->
        </div>
    </div>
</div>
<!--End of whole box-->

