<?php $no_visible_elements = false;
include('header.php'); ?>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-info-sign"></i> Introduction</h2>
        </div>
        <div class="box-content">
            <h1>Welcome</h1>
            <p>Just modify</p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i>Documents</h2>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span6">
                    <div id="DataTables_Table_0_length" class="dataTables_length">
                        <label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                <option value="10" selected="selected">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> records per page
                        </label>
                    </div>
                </div>
                <div class="span6">
                    <div class="dataTables_filter, dataTables_length2" id="DataTables_Table_0_filter">
                        <label>Filter By: &nbsp;
                            <select id="selectError3" size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                <option value="client name">Client Name</option>
                                <option value="template name">Template Name</option>
                                <option value="date and time created">Date/Time Created</option>
                            </select>
                            &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                        </label>
                    </div>
                </div>
                <div class="span6">
                    <div id="DataTables_Table_0_filter" class="dataTables_filter, dataTables_length2">
                        <label>
                            <a href="#myPlaintiffModal" data-toggle="modal" class="btn"><i class='icon-file icon-black'></i> </a>
                            <a class="btn btn-group"><i class="icon-trash icon-black"></i> </a>
                            <a class="btn btn-group"><i class="icon-download-alt icon-info"></i></a>
                        </label>
                    </div>
                    <br>
                </div>
            </div>
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                        <th><form id="form1" name="form1" method="post" action="">
                    <input type="checkbox" name="checkbox" id="checkbox" />
                    <label for="checkbox"></label>
                </form>
                </th>
                <th>Client Name</th>
                <th>Documents</th>
                <th>Created By</th>
                <th>Date/Time Created</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center">Channister Tatum</td>
                        <td class="center"><a href="#">3 document(s)</a></td>
                        <td class="center">Tyrone Fernandez</td>
                        <td class="center">02/10/2013 10:00AM</td>
                        <td class="center">
                            <a class="btn btn-group" href=#"> <i class="icon-edit icon-black"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                            <a href="#myModal" data-toggle="modal" class="btn"> <i class="icon icon-clock icon-black"></i> </a>
                            <a class="btn btn-group"><i class="icon-download-alt icon-info"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center">Tirong Puruntong</td>
                        <td class="center"><a href="#">1 document(s)</a></td>
                        <td class="center">Christian Buela</td>
                        <td class="center">01/10/2013 9:00PM</td>
                        <td class="center">
                            <a class="btn btn-group" href="#"> <i class="icon-edit icon-black"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                            <a href="#myModal" data-toggle="modal" class="btn"> <i class="icon icon-clock icon-black"></i> </a>
                            <a class="btn btn-groupgroup"><i class="icon-download-alt icon-info"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row-fluid">
                <div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div>
                <div class="span12 center">
                    <div class="dataTables_paginate paging_bootstrap pagination">
                        <ul>
                            <li class="prev disabled"><a href="#">← Previous</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li class="next"><a href="#">Next → </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal hide fade" id="myPlaintiffModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Plaintiff Information</h3>
        
            <ul class="breadcrumb-modal">
                <li>
                    <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                </li>
            </ul>        
    </div>
    <div class="modal-body">
        <form class="form-horizontal">
            <fieldset>
                <div style="margin-left:-15%">
                    <label class="control-label" for="focusedInput">Search:</label>
                    <div class="controls">
                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                    </div>
                    <div style="margin-left:90%">
                        <a href="#myCreatePlaintiffModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Add</a>
                    </div>
                </div>
            </fieldset>
        </form>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th>
            <form id="form1" name="form1" method="post" action="">
                <input type="checkbox" name="checkbox" id="checkbox" />
                <label for="checkbox"></label>
            </form>
            </th>
            <th>Client Name</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Tyrone Fernandez</td>
                    <td><a href="#myDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreatePlaintiffModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Christian Buela</td>
                    <td> <a href="#myDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreatePlaintiffModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Vladimer Dagdag</td>
                    <td><a href="#myDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreatePlaintiffModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a></td>
                </tr>
            </tbody>
        </table>
        
        <div class="dataTables_paginate paging_bootstrap pagination">
            <ul>
                <li class="prev disabled"><a href="#">Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul>
        </div>
        <div style="margin-left: 66.9%; margin-top: -9.6%; ">
            <a href="#myDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal" style="width">Use</a>
        </div>
    </div>
    <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<div class="modal hide fade" id="myCreatePlaintiffModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Create Plaintiff Information</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCreatePlaintiffModal >Create Plaintiff</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body">
        <form class="form-horizontal">
            <fieldset>
                <h3 class="client_input_design_h">Plaintiff</h3>
                <div class="controls" style="margin-left:5%">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                        &nbsp;Individual
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        &nbsp;Party
                    </label>
                </div>
                <br>
                <h3 class="client_input_design_h">Plaintiff Personal Information</h3>
                <br>
                <label class="control-label" for="focusedInput">Last Name:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">First Name:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Middle Initial:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
                <h3 class="client_input_design_h">Plaintiff Mailing Address</h3>
                <br>
                <label class="control-label" for="focusedInput">Street:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">City:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Zip Code:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Tel No.:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
                <h3 class="client_input_design_h">Plaintiff Subject Property Address</h3>
                <br>
                <label class="control-label" for="focusedInput">Street:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">City:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Zip Code:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">APN No.:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
            </fieldset>
        </form>
    </div>
    <div class="modal-footer">
        <input type="checkbox" name="checkbox2" id="checkbox2" /> Stay on this page after saving &nbsp;&nbsp; <a data-dismiss="modal" class="btn btn-primary" href="#myDefendantModal" data-toggle="modal">Save</a>
    </div>
</div>
<div class="modal hide fade" id="myDefendantModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Defendant Information</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myDefendantModal >Defendant</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body">
        <form class="form-horizontal">
            <fieldset>
                <div style="margin-left:-15%">
                    <label class="control-label" for="focusedInput">Search:</label>
                    <div class="controls">
                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                    </div>
                    <div style="margin-left:90%">
                        <a href="#myCreateDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Add</a>
                    </div>
                </div>
            </fieldset>
        </form>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                <tr>
                    <th><form id="form1" name="form1" method="post" action="">
                <input type="checkbox" name="checkbox" id="checkbox" />
                <label for="checkbox"></label>
            </form>
            </th>
            <th>Defendant Name</th>
            <th>Cases Imposed</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Tyrone Fernandez</td>
                    <td class="center">MIA/Mastermind</td>
                    <td> <a href="#myCaseModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreateDefendantModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Christian Buela</td>
                    <td class="center">Assassin/Hired Hitman</td>
                    <td> <a href="#myCaseModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreateDefendantModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Vladimer Dagdag</td>
                    <td class="center">Confidential/Drug Lord</td>
                    <td> <a href="#myCaseModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreateDefendantModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="dataTables_paginate paging_bootstrap pagination">
            <ul>
                <li class="prev disabled"><a href="#">Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul>
        </div>
        <div style="margin-left: 75%; margin-top: -9.6%; ">
            <a href="#myCaseModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal" style="width">Use</a>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<div class="modal hide fade" id="myCreateDefendantModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Create Defendant Information</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myDefendantModal >Defendant</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCreateDefendantModal >Create Defendant</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body">
        <form class="form-horizontal">
            <fieldset>
                <h3 class="client_input_design_h">Defendant</h3>
                <div class="controls" style="margin-left:5%">
                    <label class="radio">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                        &nbsp;Individual
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        &nbsp;Party
                    </label>
                </div>
                <br>
                <h3 class="client_input_design_h">Defendant Personal Information</h3>
                <br>
                <label class="control-label" for="focusedInput">Last Name:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">First Name:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Middle Initial:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
                <h3 class="client_input_design_h">Defendant Beneficiary</h3>
                <br>
                <label class="control-label" for="focusedInput">Present Beneficiary:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Short Name:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Address:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
                <h3 class="client_input_design_h">Defendant Subject Trustee</h3>
                <br>
                <label class="control-label" for="focusedInput">Foreclosure Trustee:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Short Name:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Address:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
                <h3 class="client_input_design_h">Defendant Grantee on TDUS</h3>
                <br>
                <label class="control-label" for="focusedInput">Grantee:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Short Name:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Address:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
                <h3 class="client_input_design_h">Another Bonafide Buyer</h3>
                <br>
                <label class="control-label" for="focusedInput">Bonafide Buyer:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Short Name:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Address:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
                <h3 class="client_input_design_h">Another Defendant</h3>
                <br>
                <label class="control-label" for="focusedInput">Defendant:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Short Name:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Address:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <hr class="hr_att">
            </fieldset>
        </form>
    </div>
    <div class="modal-footer">
        <input type="checkbox" name="checkbox2" id="checkbox2" /> Stay on this page after saving &nbsp;&nbsp; <a data-dismiss="modal" class="btn btn-primary" href="#myCaseModal" data-toggle="modal">Save</a>
    </div>
</div>
<div class="modal hide fade" id="myCaseModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Case Information</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myDefendantModal >Defendant</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCaseModal >Case</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body">
        <form class="form-horizontal">
            <fieldset>
                <div style="margin-left:-15%">
                    <label class="control-label" for="focusedInput">Search:</label>
                    <div class="controls">
                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                    </div>
                    <div style="margin-left:90%">
                        <a href="#myCreateCaseModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Add</a>
                    </div>
                </div>
            </fieldset>
        </form>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                <tr>
                    <th><form id="form1" name="form1" method="post" action="">
                <input type="checkbox" name="checkbox" id="checkbox" />
                <label for="checkbox"></label>
            </form>
            </th>
            <th>Case Title</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Rape</td>
                    <td> <a href="#myCM-010Modal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreateCaseModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Assassin</td>
                    <td> <a href="#myCM-010Modal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreateCaseModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Drugs</td>
                    <td> <a href="#myCM-010Modal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreateCaseModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="dataTables_paginate paging_bootstrap pagination">
            <ul>
                <li class="prev disabled"><a href="#">Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="next"><a href="#">Next</a></li>
            </ul>
        </div>
        <div style =" margin-left: 63.5%; margin-top: -10%">
            <a href="#myCM-010InstructionsModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal">Use</a>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<div class="modal hide fade" id="myCreateCaseModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Create Case Information</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myDefendantModal >Defendant</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCaseModal >Case</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCreateCaseModal >Create Case</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body">
        <form class="form-horizontal">
            <fieldset>
                <h3 class="client_input_design_h">Case Information</h3>
                <br>
                <label class="control-label" for="focusedInput">Case Number:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Case Title:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
                <h3 class="client_input_design_h">Judge Information</h3>
                <br>
                <label class="control-label" for="focusedInput">Judge:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br>
                <label class="control-label" for="focusedInput">Department:</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                </div>
                <br><hr class="hr_att">
            </fieldset>
        </form>
    </div>
    <div class="modal-footer">
        <input type="checkbox" name="checkbox2" id="checkbox2" /> Stay on this page after saving &nbsp;&nbsp; <a data-dismiss="modal" class="btn btn-primary" href="#myCM-010InstructionsModal" data-toggle="modal">Save</a>
    </div>
</div>
<div class="modal hide fade" id="myCM-010InstructionsModal" style="width:700px; position: absolute; left: 45%;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Instructions for Civil Case Cover Sheet</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myDefendantModal >Defendant</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCaseModal >Case</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCM-010InstructionsModal >Civil Case Cover Sheet Instruction</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body" style="padding-left:50px ;padding-right:50px;">
        <h4 style="text-align: center;"><b>INSTRUCTIONS ON HOW TO COMPLETE THE COVER SHEET</b></h4><br>
        <h4 style="text-align: center;"><i>Instructions for next 1-6 items must be completed.</i></h4>
        <hr class="hr_att">
        <p>
            <b>To Plaintiffs and Others Filing First Papers.</b> If you are filing a first paper (for example, complaint) in a civil case, you <b>must</b>
            complete and file,along with your first paper, the <i>Civil Case Cover Sheet</i> contained on page 1. The information will be used to compile
            statistics about the types and numbers of cases filed. You must complete items 1 through 6 on sheet. In item 1, you must check <b>one</b> box for
            case type that describes the case. If the case both a general and more specific type of case listed in item 1, check the more specific one. If the
            case has multiple causes of action, check the box that best indicates the <b>primary</b> cause of action.To assist you in completing the sheet, examples 
            of the cases that belong under each case type in item 1 are provided below. A cover sheet must be filed only with your initial paper. Failure to file
            a cover sheet with the first paper filed in a civil case may subject a party, its counsel, or both to sanctions under rules 2.30 and 3.220 of the 
            California Rules of Court.<br><br>
            <b>To Parties in Rule 3.740 Collections Cases.</b> A “collections case” under rule 3.740 is defined as an action for recovery of money owed in a sum 
            stated to be certain that is not more than $25,000, exclusive of interest and attorney’s fees, arising from a transaction in which property, services, 
            or money was acquired on credit. A collections case does not include an action seeking the following: (1) tort damages, (2) punitive damages, (3) recovery
            of real property, (4) recovery of personal property, or (5) a prejudgment writ of attachment. The identification of a case as a rule 3.740 collections case 
            on this form means that it will be exempt from the general time-for-service requirements and case management rules, unless a defendant files a responsive 
            pleading. A rule 3.740 collections case will be subject to the requirements for service and obtaining a judgment in rule 3.740.<br><br>
            <b>To Parties in Complex Cases.</b> In complex cases only, parties must also use the Civil Case Cover Sheet to designate whether the case is complex.
            If a plaintiff believes the case is complex under rule 3.400 of the California Rules of Court, this must be indicated by completing the appropriate 
            boxes in items 1 and 2. If a plaintiff designates a case as complex, the cover sheet must be served with the complaint on all parties to the action. 
            A defendant may file and serve no later than the time of its first appearance a joinder in the plaintiff’s designation, a counter-designation that the 
            case is not complex, or, if the plaintiff has made no designation, a designation that the case is complex. 
        </p>
        <hr class="hr_att">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th colspan="3"><h4><b>CASE TYPES AND EXAMPLES</b></h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                            <p style ="text-align: left">
                               <b>Auto Tort</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Auto (22)—Personal Injury/Property Damage/Wrongful Death</li><br>
                                    <li>Uninsured Motorist (46) <i>(if the case involves an uninsured motorist claim subject to arbitration, check this item instead of Auto)</i></li>
                                </ul>
                            </p>       
                    </td>
                    <td>
                            <p style ="text-align: left">
                               <b>Contract</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Breach of Contract/Warranty (06)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Breach of Rental/Lease
                                                <ul style="list-style:none; text-align: left">
                                                    <li>Contract <i>(not unlawful detainer or wrongful eviction)</i></li>
                                                </ul>
                                            </li>
                                            <li>Contract/Warranty Breach—Seller
                                                <ul style="list-style:none; text-align: left">
                                                    <li>Plaintiff <i>(not fraud or negligence)</i></li>
                                                </ul>
                                            </li>
                                            <li>Negligent Breach of Contract/Warranty</li>
                                            <li>Other Breach of Contract/Warranty</li>
                                        </ul>
                                    </li><br>
                                    <li>Collections (e.g., money owed, open book accounts) (09)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Collection Case—Seller Plaintiff</li>
                                            <li>Other Promissory Note/Collections Case</li>
                                            <li>Negligent Breach of Contract/Warranty</li>
                                        </ul>                                       
                                    </li><br>
                                    <li>Insurance Coverage <i>(not provisionally complex)</i> (18)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Auto Subrogation</li>
                                            <li>Other Coverage</li>
                                        </ul>
                                    </li><br>
                                    <li>Other Contract (37)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Contractual Fraud</li>
                                            <li>Other Contract Dispute</li>
                                        </ul>
                                    </li>
                                </ul>
                            </p>
                    </td>
                    <td>
                            <p style ="text-align: left">
                               <b>Provisionally Complex Civil Litigation (Cal. Rules of Court Rules 3.400—3.403)</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Antitrust/Trade Regulation (03)</li><br>
                                    <li>Product Liability (not asbestos or toxic/environmental) (24)</li><br>
                                    <li>Constwction Defect (10)</li><br>
                                    <li>Claims Involving Mass Tort (40)</li><br>
                                    <li>Securities Litigation (28)</li><br>
                                    <li>Environmental/Toxic Tort (30)</li><br>
                                    <li>Insurance Coverage Claims <i>(arising from provisionally complex case type listed above) (41)</i></li> 
                                </ul>
                            </p>
                    </td>
                </tr>
                <tr>
                    <td>
                            <p style ="text-align: left">
                               <b>Other Pl/PD1WD (Personal Injury/Property Damage/Wrongful Death) Tort</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Asbestos (04)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Asbestos Property Damage </li>
                                            <li>Asbestos Personal Injury!Wrongful Death</li>
                                        </ul>
                                    </li><br>
                                    <li>Product Liability (not asbestos or toxic/environmental) (24)</li><br>
                                    <li>Medical Malpractice (45)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Medical Malpractice—Physician s & Surgeons </li>
                                            <li>Other Professional Health Care Malpractice</li>
                                        </ul>
                                    </li><br>
                                    <li>Other PI/PD/WD (23) 
                                        <ul style="list-style:none; text-align: left">
                                            <li>Premises Liability (eg., slip and fall)</li> 
                                            <li>Intentional Bodily Injury/PDIWD (e.g, assault, vandalism)</li>
                                            <li>Intentional Infliction of Emotional Distress</li> 
                                            <li>Negligent Infliction of Emotional Distress</li> 
                                            <li>Other Pl/PDIWD</li>
                                        </ul>
                                </ul>
                            </p>
                    </td>
                    <td>
                            <p style ="text-align: left">
                               <b>Real Property</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Eminent Domain/Inverse Condemnation (14)</li><br>
                                    <li>Wrongful Eviction (33)</li><br>
                                    <li>Other Real Property (e.g., quiet title) (26)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Writ of Possession of Real Property</li>
                                            <li>Mortgage Foreclosure</li>
                                            <li>Quiet Title</li>
                                            <li>Other Real Property <i>riot eminent domain, landlord/tenant, or foreclosure)</i></li>
                                        </ul>
                                    </li>                                    
                                </ul>
                            </p>
                    </td>
                    <td>
                            <p style ="text-align: left">
                               <b>Enforcement of Judgment</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Enforcement of Judgment (20)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Abstract of Judgment (Out of County)</li>
                                            <li>Confession of Judgment <i>(non-domestic relations)</i></li>
                                            <li>Sister State Judgment</li>
                                            <li>Administrative Agency Award <i>(not unpaid taxes)</i></li>
                                            <li>Petition/Certification of Entry of Judgment on Unpaid Taxes</li>
                                            <li>Other Enforcement of Judgment Case</li>
                                        </ul>
                                    </li>                                    
                                </ul>
                            </p>
                    </td>
                </tr>
                <tr>
                    <td>
                             <p style ="text-align: left">
                               <b>Non-Pl/PDIWD (Other) Tort</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Business Tort/Unfair Business Practice (07)</li><br>
                                    <li>Civil Rights (e.g., discrimination, false arrest) <i>(not civil harassment)</i> (08)</li><br>
                                    <li>Defamation (e.g., slander, libel)(13)</li><br>
                                    <li>Fraud (16)</li><br>
                                    <li>Intellectual Property (19)</li>
                                    <li>Professional Negligence (25)
                                        <ul style="list-style:none; text-align: left;">
                                            <li>Legal Malpractice</li>
                                            <li>Other Professional Malpractice <i>(not medical or legal)</i></li>
                                        </ul>
                                    </li><br>
                                    <li>Other Non-PI/PD/WD Tort (35)</li>
                                </ul>
                            </p>    
                    </td>
                    <td>
                            <p style ="text-align: left">
                               <b>Unlawful Detainer</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Commercial (31)</li><br>
                                    <li>Residential (32)</li><br>
                                    <li>Drugs (38) <i>(if the case involves illegal drugs, check this item; otherwise, report as Commercial or Residential)</i></li>
                                </ul>
                            </p>
                    </td>
                    <td>
                            <p style ="text-align: left">
                               <b>Miscellaneous Civil Complaint</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>RICO (27)</li><br>
                                    <li>Other Complaint (not specified above) (42)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Declaratory Relief Only Injunctive Relief Only <i>(non harassment)</i></li>
                                            <li>Mechanics Lien</li>
                                            <li>Other Commercial Complaint Case <i>(on-tort/non-complex)</i></li>
                                            <li>Other Civil Complaint <i>(non-tort/non-complex)</i></li>
                                        </ul>
                                    </li>                                    
                                </ul>
                            </p>
                    </td>
                </tr>
                <tr>
                    <td>
                           <p style ="text-align: left">
                               <b>Employment</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Wrongful Termination (36)</li><br>
                                    <li>Other Employment (15)</li><br>
                                </ul>
                            </p>   
                    </td>
                    <td>
                            <p style ="text-align: left">
                               <b>Judicial Review</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Asset Forfeiture (05)</li><br>
                                    <li>Petition Re: Arbitration Award (11)</li><br>
                                    <li>Writ of Mandate (02)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Writ—Administrative Mandamus</li>
                                            <li>Writ—Mandamus on Limited Court Case Matter</li>
                                            <li>Writ—Other Limited Court Case Review</li>
                                        </ul>
                                    </li><br>
                                    <li>Other Judicial Review (39)
                                        <ul style="list-style:none; text-align: left">
                                            <li>Review of Health Officer Order</li>
                                            <li>Notice of Appeal—Labor
                                                <ul style="list-style:none; text-align: left">
                                                <li>Commissioner Appeals</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </p>
                    </td>
                    <td>
                            <p style ="text-align: left">
                               <b>Miscellaneous Civil Petition</b>
                                <ul style="list-style: none; text-align: left">
                                    <li>Partnership and Corporate Governance (21)</li><br>
                                    <li>Other Petition <i>(not specified above) (43)</i>
                                        <ul style="list-style:none; text-align: left">
                                            <li>Civil Harassment</li>
                                            <li>Workplace Violence</li>
                                            <li>Elder/Dependent Adult Abuse</li>
                                            <li>Election Contest</li>
                                            <li>Petition for Name Change</li>
                                            <li>Petition for Relief From Late Claim</li>
                                            <li>Other Civil Petition</li>
                                        </ul>
                                    </li>                                    
                                </ul>
                            </p>
                    </td>
                </tr>
            </tbody>            
        </table>
    </div>
    <div class="modal-footer">
        <input type="checkbox" name="checkbox2" id="checkbox2" /> Don't show this message again &nbsp;&nbsp; <a href="#myCM-010Modal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal">Next</a>
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<div class="modal hide fade" id="myCM-010Modal" style="width: 1000px; position: absolute; left: 450px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Civil Case Cover Sheet</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myDefendantModal >Defendant</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCaseModal >Case</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCM-010Modal >Civil Case Cover Sheet</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body" style="padding-left:50px ;padding-right:50px;">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th colspan="2"><h4>CIVIL CASE COVER SHEET</h4></th>
                    <th><h4>Complex Case Designation</h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label class="radio">
                            <input type="radio" name="CivilCaseCoverSheet" id="Unlimited" value="option1" style="text-align: center;">
                            &nbsp;Unlimited
                            <p>
                                <br>(Amount demanded exceeds $25,000)
                            </p>
                        </label>
                    </td>
                    <td>
                        <label class ="radio">
                            <input type="radio" name="CivilCaseCoverSheet" id="Limited" value="option2" style="text-align: center;">
                            &nbsp;Limited
                            <p>
                                <br>(Amount demanded is $25,000 or less)
                            </p>
                        </label>
                    </td>
                    <td>
                        <div style="margin-right: 50%;">
                            <label class="radio">
                                <input type="radio" name="ComplexCaseDesignation" id="Counter" value="option1" style="text-align: center;">
                                &nbsp;Counter 
                            </label>
                        </div>
                        <div style="margin-left: 50%; margin-top: -4.2%;">
                            <label class="radio">
                                <input type="radio" name="ComplexCaseDesignation" id="Joinder" value="option2" style="text-align: center;">
                                &nbsp;Joinder
                            </label>
                        </div>
                        <p>
                            <br>Filed with first appearance by defendant (Cal. Rules of Court, rule 3.402)
                        </p>                      
                    </td>
                </tr>
            </tbody>            
        </table>
        <hr class="hr_att">       
        <p><font size="3">1. Check <b>one</b> box below for the case type that best describes the case:</font></p>
        <br>
        <table class="table table-bordered table-striped table-condensed">
            <tbody>
                <tr>
                    <td>
                        <p style ="text-align: left">
                            <b>Auto Tort</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="AutoTort" id="AutoTort1" value="option1" style="text-align: center;">
                                    &nbsp;Auto (22)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="AutoTort" id="AutoTort2" value="option2" style="text-align: center;">
                                    &nbsp;Uninsured motorist (46)
                                </label>
                            </li>
                        </ul>
                        </p>
                    </td>
                    <td>
                        <p style ="text-align: left">
                            <b>Contract</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="Contract" id="Contract1" value="option1" style="text-align: center;">
                                    &nbsp;Breach of contract/warranty (06)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="Contract" id="Contract2" value="option2" style="text-align: center;">
                                    &nbsp;Rule 3140 collections (09)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="Contract" id="Contract3" value="option3" style="text-align: center;">
                                    &nbsp;Other collections (09)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="Contract" id="Contract4" value="option4" style="text-align: center;">
                                    &nbsp;Insurance coverage (18)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="Contract" id="Contract5" value="option5" style="text-align: center;">
                                    &nbsp;Other contract (37)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="Contract" id="Contract6" value="option6" style="text-align: center;">
                                    &nbsp;Professional negligence (25)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="Contract" id="Contract7" value="option7" style="text-align: center;">
                                    &nbsp;Other non-Pl/PDIWD tort (35)
                                </label>
                            </li>
                        </ul>
                        </p>
                    </td>
                    <td>
                         <p style ="text-align: left">
                            <b>Provisionally Complex Civil Litigation (Cal. Rules of Court, rules 3.400—3.403)</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="ProComCiLi" id="ProComCiLi" value="option1" style="text-align: center;">
                                    &nbsp;Antitrust/Trade regulation (03)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="ProComCiLi" id="ProComCiLi1" value="option2" style="text-align: center;">
                                    &nbsp;Construction defect (10)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="ProComCiLi" id="ProComCiLi2" value="option3" style="text-align: center;">
                                    &nbsp;Mass tort (40)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="ProComCiLi" id="ProComCiLi3" value="option4" style="text-align: center;">
                                    &nbsp;Securities litigation (28)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="ProComCiLi" id="ProComCiLi4" value="option5" style="text-align: center;">
                                    &nbsp;Environmental/Toxic tort (30)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="ProComCiLi" id="ProComCiLi5" value="option6" style="text-align: center;">
                                    &nbsp;Insurance coverage claims arising from the above listed provisionally complex case types (41)
                                </label>
                            </li>
                        </ul>
                        </p>                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style ="text-align: left">
                            <b>Other Pl/PDIWD (Personal Injury/Property Damage/Wrongful Death) Tort</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="OtherTort" id="OtherTort1" value="option1" style="text-align: center;">
                                    &nbsp;Asbestos (04)
                                </label>

                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="OtherTort" id="OtherTort2" value="option2" style="text-align: center;">
                                    &nbsp;Product liability (24)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="OtherTort" id="OtherTort3" value="option3" style="text-align: center;">
                                    &nbsp;Medical malpractice (45)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="OtherTort" id="AutoTort4" value="option4" style="text-align: center;">
                                    &nbsp;Other Pl/PD/WD (23)
                                </label>
                            </li>
                        </ul>
                        </p>
                    </td>
                    <td>
                        <p style ="text-align: left">
                            <b>Real Property</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="RealProperty" id="RealProperty1" value="option1" style="text-align: center;">
                                    &nbsp;Eminent domain/Inverse condemnation (14)
                                </label>

                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="RealProperty" id="RealProperty2" value="option2" style="text-align: center;">
                                    &nbsp;Wrongful eviction (33)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="RealProperty" id="RealProperty3" value="option3" style="text-align: center;">
                                    &nbsp;Other real property (26)
                                </label>
                            </li>
                        </ul>
                        </p>
                    </td>
                    <td>
                        <p style ="text-align: left">
                            <b>Enforcement of Judgment</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="EnforcementJudgment" id="EnforcementJudgment1" value="option1" style="text-align: center;">
                                    &nbsp;Enforcement of judgment (20)
                                </label>
                            </li>
                        </ul>
                        </p>                       
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style ="text-align: left">
                            <b>Non-Pl/PDIWD (Other) Tort</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="NonTort" id="NonTort1" value="option1" style="text-align: center;">
                                    &nbsp;Business tort/unfair business practice (07)
                                </label>

                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="NonTort" id="NonTort2" value="option2" style="text-align: center;">
                                    &nbsp;Civil rights (08)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="NonTort" id="NonTort3" value="option3" style="text-align: center;">
                                    &nbsp;Defamation (13)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="NonTort" id="NonTort4" value="option4" style="text-align: center;">
                                    &nbsp;Fraud (16)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="NonTort" id="NonTort5" value="option5" style="text-align: center;">
                                    &nbsp;Intellectual properly (19)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="NonTort" id="NonTort6" value="option5" style="text-align: center;">
                                    &nbsp;Professional negligence (25)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="NonTort" id="NonTort7" value="option6" style="text-align: center;">
                                    &nbsp;Other non-Pl/PDIWD tort (35)
                                </label>
                            </li>
                        </ul>
                        </p>
                    </td>
                    <td>
                        <p style ="text-align: left">
                            <b>Unlawful Detainer</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="UnlawfulDetainer" id="UnlawfulDetainer1" value="option1" style="text-align: center;">
                                    &nbsp;Commercial (31)
                                </label>

                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="UnlawfulDetainer" id="UnlawfulDetainer2" value="option2" style="text-align: center;">
                                    &nbsp;Residential (32)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="UnlawfulDetainer" id="UnlawfulDetainer3" value="option3" style="text-align: center;">
                                    &nbsp;Drugs (38)
                                </label>
                            </li>
                        </ul>
                        </p>
                    </td>
                    <td>
                         <p style ="text-align: left">
                            <b>Miscellaneous Civil Complaint</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="UnlawfulDetainer" id="UnlawfulDetainer1" value="option1" style="text-align: center;">
                                    &nbsp;RICO (27)
                                </label>

                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="UnlawfulDetainer" id="UnlawfulDetainer2" value="option2" style="text-align: center;">
                                    &nbsp;Other complaint (not specified above) (42)
                                </label>
                            </li>
                        </ul>
                        </p>                 
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style ="text-align: left">
                            <b>Employment</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="Employment" id="Employment1" value="option1" style="text-align: center;">
                                    &nbsp;Wrongful termination (36)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="Employment" id="Employment2" value="option2" style="text-align: center;">
                                    &nbsp;Other employment (15)
                                </label>
                            </li>
                        </ul>
                        </p>
                    </td>
                    <td>
                        <p style ="text-align: left">
                            <b>Judicial Review</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="JudicialReview" id="JudicialReview1" value="option1" style="text-align: center;">
                                    &nbsp;Asset forfeiture (05)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="JudicialReview" id="JudicialReview2" value="option2" style="text-align: center;">
                                    &nbsp;Petition re: arbitration award (11)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="JudicialReview" id="JudicialReview3" value="option2" style="text-align: center;">
                                    &nbsp;Writ of mandate (02)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="JudicialReview" id="JudicialReview4" value="option2" style="text-align: center;">
                                    &nbsp;Other judicial review (39)
                                </label>
                            </li>
                        </ul>
                        </p>
                    </td>
                    <td>
                        <p style ="text-align: left">
                            <b>Miscellaneous Civil Petition</b>
                        <ul style="list-style: none; text-align: left">
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="MiscCiPe" id="MiscCiPe1" value="option1" style="text-align: center;">
                                    &nbsp;Partnership and corporate governance (21)
                                </label>
                            </li>
                            <li>
                                <label class ="radio">
                                    <input type="radio" name="MiscCiPe" id="MiscCiPe2" value="option2" style="text-align: center;">
                                    &nbsp;Other petition (not specified above) (43)
                                </label>
                            </li>
                        </ul>
                        </p>                    
                    </td>
                </tr>
            </tbody>            
        </table>
        <hr class="hr_att">
        <p>
            <font size="3">2. This case 
            <label class ="radio">
                <input type="radio" name="ComplexityOption" id="ComplexityOption1" value="option1" style="text-align: center;">
                &nbsp;<b><font size="3">is</font></b>
            </label>
            <label class ="radio">
                <input type="radio" name="ComplexityOption" id="ComplexityOption2" value="option2" style="text-align: center;">
                &nbsp;<b><font size="3">is not</font></b>
            </label> 
            complex under rule 3.400 of the California Rules of Court. If the case is complex, mark the factors requiring exceptional judicial management:
            </font>
        </p>
        <table >
            <tbody style="text-align: left;">
                <tr>
                    <td>
                        <p style="text-align: left;">
                        a.&nbsp;<input type="checkbox" name="checkbox2" id="checkbox2" /> Large number of separately represented parties &nbsp;&nbsp; 
                        </p>
                    </td>
                    <td>
                        <p style="text-align: left;">
                        d.&nbsp;<input type="checkbox" name="checkbox2" id="checkbox2" /> Large number of witnesses &nbsp;&nbsp; 
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="text-align: left;">
                        b.&nbsp;<input type="checkbox" name="checkbox2" id="checkbox2" /> Extensive motion practice raising difficult or novel issues that will be time-consuming to resolve  &nbsp;&nbsp; 
                        </p>
                    </td>
                    <td>
                        <p style="text-align: left;">
                        e.&nbsp;<input type="checkbox" name="checkbox2" id="checkbox2" /> Coordination with related actions pending in one or more courts in other counties, states, or countries, or in a federal court  &nbsp;&nbsp; 
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="text-align: left;">
                        c.&nbsp;<input type="checkbox" name="checkbox2" id="checkbox2" /> Substantial amount of documentary evidence  &nbsp;&nbsp; 
                        </p>
                    </td>
                    <td>
                        <p style="text-align: left;">
                        f.&nbsp;<input type="checkbox" name="checkbox2" id="checkbox2" /> Substantial postjudgment judicial supervision  &nbsp;&nbsp;
                        </p>
                    </td>
                </tr>
            </tbody>            
        </table>
        <hr class="hr_att">
        <p>
            <font size="3">3. Remedies sought <i>(check all that apply):</i>  
        <p>a.&nbsp;<input type="checkbox" name="checkbox2" id="checkbox2" /> monetary  &nbsp;&nbsp;</p>
        <p>b.&nbsp;<input type="checkbox" name="checkbox2" id="checkbox2" /> nonmonetary; declaratory or injunctive relief   &nbsp;&nbsp;</p>
        <p>c.&nbsp;<input type="checkbox" name="checkbox2" id="checkbox2" /> punitive  &nbsp;&nbsp;</p>
            </font>
        </p>
        <hr class="hr_att">
        <p>
            <div class="controls">
            <font size="3">4. Number of causes of action (specify):</font>
            <input class="input-xlarge focused" id="focusedInput" type="text" value="">
            </div>
        </p>
        <hr class="hr_att">
        <p>
            <font size="3">2. This case 
            <label class ="radio">
                <input type="radio" name="ClassActionSuit" id="ClassActionSuit1" value="option1" style="text-align: center;">
                &nbsp;<b><font size="3">is</font></b>
            </label>
            <label class ="radio">
                <input type="radio" name="ClassActionSuit" id="ClassActionSuit2" value="option2" style="text-align: center;">
                &nbsp;<b><font size="3">is not</font></b>
            </label> 
            a class action suit.
            </font>
        </p>
        <hr class="hr_att">
        <p> 
            <font size="3">6. If there are any known related cases, file and serve a notice of related case. <i>(You may use form CM-015.)</i></font>
        </p>
        <hr class="hr_att">
        <div class="controls">     
            <p style ="display: inline-block; ">
            <font size ="3"> Date: &nbsp;<input style="height:15px; width:125px;"class="input-xlarge datepicker hasDatepicker" id="focusedInput" type="date" value=""></font>
            </p>
        </div>
    </div>
    <div class="modal-footer">
        <div style= "margin-right: 75%;">
        <a href="#myCM-010InstructionsModal" data-toggle="modal" data-dismiss="modal"><i class="icon-info-sign"></i> Civil Case Cover Sheet Instruction</a>
        </div>
        <a href="#NoticeSum100Modal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal">Next</a>
        <a href="#NoticeSum100Modal" data-toggle="modal" class="btn" data-dismiss="modal">Close</a>
    </div> 
</div>
<div class="modal hide fade" id="NoticeSum100Modal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Notice for Summons</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myDefendantModal >Defendant</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCaseModal >Case</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href="#myCM-010Modal">Civil Case Cover Sheet</a><span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#NoticeSum100Modal >Notice for Summons</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body">


        <p style="padding-left:20px ;padding-right:20px " >

            <b>NOTICE!</b> You have been sued. The court may decide against you without your being heard unless you respond within 30 days. Read the information

            below.<br><br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You have 30 CALENDAR DAYS after this summons and legal papers are served on you to file a written response at this court and have a copy

            served on the plaintiff. A letter or phone call will not protect you. Your written response must be in proper legal form if you want the court to hear your

            case. There may be a court form that you can use for your response. You can find these court forms and more information at the California Courts

            Online Self-Help Center (www.courtinfo.ca.gov/selfhelp), your county law library, or the courthouse nearest you. If you cannot pay the filing fee, ask

            the court clerk for a fee waiver form. If you do not file your response on time, you may lose the case by default, and your wages, money, and property

            may be taken without further warning from the court.<br><br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are other legal requirements You may want to call an attorney right away. If you do not know an attorney, you may want to call an attorney

            referral service. If you cannot afford an attorney, you may be eligible for free legal services from a nonprofit legal services program. You can locate

            these nonprofit groups at the California Legal Services Web site (www.lawhelpcalifornia.org), the California Courts Online Self-Help Center

            (www.courtinfo.ca.gov/selfhelp), or by contacting your local court or county bar association. <b>NOTE:</b> The court has a statutory lien for waived fees and

            costs on any settlement or arbitration award of $10,000 or more in a civil case The court’s lien must be paid before the court will dismiss the case.

            <b>¡A VISO!</b> Lo han demandado. Si no responde dentro de 30 días, la corte puede decidir en su contra sin escuchar SU versión. Lea la información a

            continuación.<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tiene 30 DIAS DE CALENDARIO después de que le entreguen esta citación y papeles legales para presentar una respuesta por escrito en esta

            corte y hacer que se entre gue una copia al demandante. Una carta o una llamada telefónica no lo protegen. Su respuesta por escrito tiene que estar

            en formato legal correcto si desea que procesen su caso en la corte. Es posible que haya un formulario que usted pueda ¿tsar para su respuesta.

            Puede encontrar estos formularios de la corte y más información en el Centro de Ayuda de las Cortes de California (www.sucorte.ca .gov), en la

            biblioteca de leyes de su condado o en la corte que le quede más cerca Si no puede pagar la cuota de presentación, pida al secretario de la corte

            que le dé ¿in formulario de exención de pago de cuotas. Si no presenta su respuesta a tiempo, puede perder el caso por incumplimiento y la corte le

            podrá quitar su sueldo, dinero y bienes sin más advertencia<br><br>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hay otros requisitos legales. Es recomendable que llame a ¿in abogado inmediatamente. Si no conoce a ¿in abogado, puede llamar a un servicio de

            remisión a abogados. Si no puede pagar a un abogado, es posible que cumpla con los requisitos para obtener servicios legales gratuitos de un

            programa de servicios legales sin fines de lucro. Puede encontrar estos grupos sin fines de lucro en el sitio web de California Legal Services,

            (www.Iawhelpcaliforniaorg), en el Centro de Ayuda de las Cortes de California, (www.sucorte.ca.gov) o poniéndose en contacto con la corte o el

            colegio de abogados locales. A VISO: Por ley, la corte tiene derecho a reclamar las cuotas y los costos exentos por imponer ¿in gravamen sobre

            cualquier recuperación de $10,000 6 más de valor recibida mediante un acuerdo o una concesión de arbitraje en un caso de derecho civil Tiene que

            pagar el gravamen de la corte antes de que la corte pueda desechar el caso.<br>

        </p>
    </div>
    <div class="modal-footer">
       <input type="checkbox" name="checkbox2" id="checkbox2" />Dont show this message again &nbsp;&nbsp;  <a data-dismiss="modal" class="btn btn-primary" href="#Summons100Modal" data-toggle="modal">Next</a>
        
    </div>
</div>
<div class="modal hide fade" id="Summons100Modal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Summons</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myDefendantModal >Defendant</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCaseModal >Case</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href="#myCM-010Modal">Civil Case Cover Sheet</a><span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#NoticeSum100Modal >Notice for Summons</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#Summons100Modal >Summons 100</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body">
        <form class="form-horizontal">
            <fieldset>
            <br>
                <h4 class="client_input_design_h" style="margin-left:3%"><b>NOTICE TO THE PERSON SERVED:&nbsp;</b>You are served</h4>

                <ul class="pdfList">
                    <li>
                        <div class="controls">
                            <label class="checkbox inline">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" id="inlineCheckbox1" value="option1" > as an individual defendant
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="controls">
                            <label class="checkbox inline">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" id="inlineCheckbox1" value="option1" > as the person sued under the fictitious name of <i>(specify):</i>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="controls" style="margin-left: 37.5%">
                            <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                        </div>
                    </li>
                    <li>
                        <div class="controls">
                            <label class="checkbox inline">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" id="inlineCheckbox1" value="option1" > on behalf of <i>(specify):</i><br></label>
                        </div>
                        <ul  class="pdf2ndlist" style="margin-left: 20%;">
                            <li>
                                <label class="checkbox inline">under&nbsp;
                                    <input type="checkbox" id="inlineCheckbox1" value="option1" > COP 416.10 (corporation)<br>
                                </label>
                            </li>
                            <li class="pdf3ndlist">
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1" > COP 416.20 (defunct corporation)<br>
                                </label>
                            </li>

                            <li class="pdf3ndlist">
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1" > COP 416.40 (association or partnership) <br>
                                </label>
                            </li>

                            <li class="pdf3ndlist">
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1" > COP 416.60 (minor)<br>
                                </label>
                            </li>

                            <li class="pdf3ndlist">
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1" > COP 416.70 (conservatee)<br>
                                </label>
                            </li>

                            <li class="pdf3ndlist">
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1" > COP 416.90 (authorized person) <br>
                                </label>
                            </li>

                            <li class="pdf3ndlist">
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1" > Other <i>(specify):</i> <br>
                                </label>
                            </li>
                            <li>
                                <div class="controls" style="margin-left: 20%">
                                    <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="controls">
                            <label class="checkbox inline">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" id="inlineCheckbox1" value="option1" > by personal delivery on <i>(date):&nbsp;</i> <input style="height:15px; width:125px;"class="input-xlarge focused" id="focusedInput" type="date" value="">
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="controls" style="margin-left: 37.5%">

                        </div>
                    </li>
                </ul>

            </fieldset>
        </form>
    </div>
    <div class="modal-footer">
        <a data-dismiss="modal" class="btn btn-primary" href="#mySummons200AModal" data-toggle="modal">Next</a>
        <a data-dismiss="modal" class="btn" href="#" data-toggle="modal">Close</a>
    </div>
</div>
<div class="modal hide fade" id="mySummons200AModal" style="width: 1000px; position: absolute; left: 450px; display: block;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Summons Additional Parties</h3>
        <ul class="breadcrumb-modal">
            <li>
                <a data-dismiss="modal" data-toggle="modal" href=#myPlaintiffModal >Plaintiff</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myDefendantModal >Defendant</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#myCaseModal >Case</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href="#myCM-010Modal">Civil Case Cover Sheet</a><span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#NoticeSum100Modal >Notice for Summons</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#Summons100Modal >Summons 100</a> <span class=divider>/</span>
                <a data-dismiss="modal" data-toggle="modal" href=#mySummons200AModal >Summons 200A</a> <span class=divider>/</span>
            </li>
        </ul>
    </div>
    <div class="modal-body" style="padding-left:20px ;padding-right:20px;">
        <p style="text-align: center;">
            <b>INSTRUCTIONS FOR USE</b>
        </p>
        <p style="text-align: left;">
            <ul>
                <li>This form may be used as an attachment to any summons  if space does not permit the listing of all parties  on the summons.</li><br>
                <li>If this attachment is used, insert the following statement in the plaintiff or defendant box on the summons: "Additional Parties Attachment form is attached."</li>
            </ul><br>
            <b>List additional parties</b><i>(Choose only one option. Use a separate page for each type of party):</i>
        </p>
        <hr class="hr_att">
        <script>
            function togglePurDec(evt) {
                evt = (evt) ? evt : event;
                var target = (evt.target) ? evt.target : evt.srcElement;
                var block1 = document.getElementById("PlaintiffData");
                var block2 = document.getElementById("DefendantData");
                var block3 = document.getElementById("CrossComplainantData");
                var block4 = document.getElementById("CrossDefendantData");
                if (target.id == "Plaintiff") 
                {
                    block1.style.display = "block";
                    block2.style.display = "none";
                    block3.style.display = "none";
                    block4.style.display = "none";
                }
                else if (target.id == "Defendant")
                {
                    block1.style.display = "none";
                    block2.style.display = "block";
                    block3.style.display = "none";
                    block4.style.display = "none";
                }
                else if (target.id == "CrossComplainant")
                {
                    block1.style.display = "none";
                    block2.style.display = "none";
                    block3.style.display = "block";
                    block4.style.display = "none";   
                }
                else if (target.id == "CrossDefendant")
                {
                    block1.style.display = "none";
                    block2.style.display = "none";
                    block3.style.display = "none";
                    block4.style.display = "block";        
                }
                else
                {
                    block1.style.display = "none";
                    block2.style.display = "none";
                    block3.style.display = "none";
                    block4.style.display = "none";
                }
            }
        </script>
        
            <label class="radio">
                <input type="radio" id="Plaintiff" name="partyDecision"
                       onclick="togglePurDec(event)" />Plaintiff
            </label>
            <label class="radio">
                <input type="radio" id="Defendant" name="partyDecision"
                       onclick="togglePurDec(event)" />Defendant
            </label>
            <label class="radio">
                <input type="radio" id="CrossComplainant" name="partyDecision"
                       onclick="togglePurDec(event)" />Cross-Complainant
            </label>
            <label class="radio">
                <input type="radio" id="CrossDefendant" name="partyDecision"
                       onclick="togglePurDec(event)" />Cross-Defendant
            </label>
            <div id="PlaintiffData" style="padding-left:20px ;padding-right:20px; display:none; margin-left:20px; height: 350px; border: 1px solid #cccccc;">
                        <div style="margin-left: 2%">
                            <label class="control-label" for="focusedInput">Search:</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                            </div>
                            <div style="margin-left:85%; margin-bottom: 5%;">
                                <a href="#myCreatePlaintiffModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Add</a>
                            </div>
                        </div>
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>
                    
                        <input type="checkbox" name="checkbox" id="checkbox" />
                        <label for="checkbox"></label>
                   
                    </th>
                    <th>Client Name</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                            <td class="center">Tyrone Fernandez</td>
                            <td><a href="#myDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                                <a href="#myCreatePlaintiffModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                            <td class="center">Christian Buela</td>
                            <td> <a href="#myDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                                <a href="#myCreatePlaintiffModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                            <td class="center">Vladimer Dagdag</td>
                            <td><a href="#myDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                                <a href="#myCreatePlaintiffModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a></td>
                        </tr>
                    </tbody>
                </table>
                    
                <div class="dataTables_paginate paging_bootstrap pagination">
                    <ul>
                        <li class="prev disabled"><a href="#">Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                </div>
                <div style="margin-left: 66.9%; margin-top: -9.6%; ">
                    <a href="#myDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal" style="width">Use</a>
                </div>
            </div>
            </div>
            <div id="DefendantData" style="display:none; margin-left:20px">
                Defendant
            </div>
            <div id="CrossComplainantData" style="display:none; margin-left:20px">
                Cross Complainant
            </div>
            <div id="CrossDefendantData" style="display:none; margin-left:20px">
                Cross Defendant
            </div>
     <div class="modal-footer">
       <input type="checkbox" name="checkbox2" id="checkbox2" />Dont show this message again &nbsp;&nbsp;  <a data-dismiss="modal" class="btn btn-primary" href="#SummonsEnterInfo" data-toggle="modal">Next</a>    
    </div>
    </div>
<?php include('footer.php'); ?>