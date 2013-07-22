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
            <div style="margin-left: 67.5%; margin-top: -7.6%; ">
            <a href="#myDefendantModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal" style="width">Use</a>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
        </div>
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
            <div style="margin-left: 75%; margin-top: -7.6%; ">
                <a href="#myCaseModal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal" style="width">Use</a>
            </div>
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
        <input type="checkbox" name="checkbox2" id="checkbox2" /> Stay on this page after saving &nbsp;&nbsp; <a data-dismiss="modal" class="btn btn-primary" href="#myModal4" data-toggle="modal">Save</a>
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
                    <td> <a href="#myModal4" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreateCaseModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Assassin</td>
                    <td> <a href="#myModal4" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
                        <a href="#myCreateCaseModal" data-toggle="modal" class="btn" data-dismiss="modal"> Modify</a>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Drugs</td>
                    <td> <a href="#myModal4" data-toggle="modal" class="btn btn-primary" data-dismiss="modal"> Use</a>
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
                <div style="margin-left: 86.5%; margin-top: -7.6%; ">
                    <a href="#myCM-010Modal" data-toggle="modal" class="btn btn-primary" data-dismiss="modal" style="width">Use</a>
                </div>
            </ul>
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
        <input type="checkbox" name="checkbox2" id="checkbox2" /> Stay on this page after saving &nbsp;&nbsp; <a data-dismiss="modal" class="btn btn-primary" href="#myModal4" data-toggle="modal">Save</a>
    </div>
</div>
<div class="modal hide fade" id="myCM-010Modal">
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
    <div class="modal-body">
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
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" style="text-align: center;"/>
                            &nbsp;Unlimited
                            <p>
                                (Amount demanded exceeds $25,000)
                            </p>    
                    </td>
                    <td>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" style="text-align: center;">
                            &nbsp;Limited
                            <p>
                                (Amount demanded is $25,000 or less)
                            </p>
                    </td>
                    <td>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" style="text-align: center;">
                            &nbsp;Counter &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" style="text-align: center;">
                            &nbsp;Joinder
                            <p>
                                Filed with first appearance by defendant (Cal. Rules of Court, rule 3.402)
                            </p>
                    </td>
                </tr>
            </tbody>
            
        </table>
        <br>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<?php include('footer.php'); ?>