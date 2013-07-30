<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i>Accounts</h2>
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
                                <option value="Employee ID No">Employee ID No.</option>
                                <option value="Employee Name">Employee Name</option>
                                <option value="Created by">Created by</option>
                                <option value="Date/Time Created">Date/Time Created</option>
                                <option value="Status">Status</option>
                            </select>
                            &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                        </label>
                    </div>
                </div>
                <div class="span6">
                    <div id="DataTables_Table_0_filter" class="dataTables_filter, dataTables_length2">
                        <a class="btn btn-group" data-toggle="modal"href="#CreateUser"> <i class="icon-file icon-black" title="Create User"></i> </a>
                        <a class="btn btn-group"><i class="icon-trash icon-black" title="Archive"></i> </a>
                        <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black" title="Reset Password"></i> </a>
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
                <th>Employee ID number</th>
                <th>Employee Name</th>
                <th>Created By</th>
                <th>Date Created</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center">20100103</td>
                        <td class="center">Buela, Christian</td>
                        <td class="center">Admin</td>
                        <td class="center">07/16/2013</td>
                        <td class="center">active</td>
                        <td class="center">
                            <a data-toggle="modal" href="#myModal1" class="btn btn-group"> <i class="icon-edit icon-black" title="Edit"></i> </a>
                            <a data-toggle="modal" href="#myModal2" class="btn btn-group"> <i class="icon icon-clock icon-black" title="History"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-trash icon-black" title="Archive"></i> </a>
                            <a data-toggle="modal" href="#TransferWork" class="btn btn-group" > <i class="icon-share-alt icon-black" title="Transfer"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black" title="Reset Password"></i> </a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center">20100102</td>
                        <td class="center">Fernandez, Tyrone</td>
                        <td class="center">Admin</td>
                        <td class="center">07/15/2013</td>
                        <td class="center">active</td>
                        <td class="center">
                            <a data-toggle="modal" href="#myModal1" class="btn btn-group"> <i class="icon-edit icon-black" title="Edit"></i> </a>
                            <a data-toggle="modal" href="#myModal2" class="btn btn-group"> <i class="icon icon-clock icon-black" title="History"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-trash icon-black" title="Archive"></i> </a>
                            <a data-toggle="modal" href="#TransferWork" class="btn btn-group" > <i class="icon-share-alt icon-black" title="Transfer"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black" title="Reset Password"></i> </a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center">20100101</td>
                        <td class="center">Dagdag, Vladimer</td>
                        <td class="center">Admin</td>
                        <td class="center">02/10/2013</td>
                        <td class="center">active</td>
                        <td class="center">
                            <a data-toggle="modal" href="#myModal1" class="btn btn-group"> <i class="icon-edit icon-black" title="Edit"></i> </a>
                            <a data-toggle="modal" href="#myModal2" class="btn btn-group"> <i class="icon icon-clock icon-black" title="History"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-trash icon-black" title="Archive"></i> </a>
                            <a data-toggle="modal" href="#TransferWork" class="btn btn-group" > <i class="icon-share-alt icon-black" title="Transfer"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black" title="Reset Password"></i> </a>
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
                            <li class="next"><a href="#">Next →</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal hide fade" id="CreateUser">
    <div class="row-fluid">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Create Accounts</h3>
        </div>
        <div class="modal-body" style="overflow:hidden">
            <form action="#" method="post">
                <fieldset>
                    <div style="float:left;text-align:right;margin-left:50px">
                        <label value="lblEmpIdNo">Employee ID No.:&nbsp;</label><br>
                        <label value="lblEmployeeLastName">Employee Last Name:&nbsp;</label><br>
                        <label value="lblEmployeeFirstName">Employee First Name:&nbsp;</label><br>
                        <label value="lblEmployeeMiddleInitial">Employee Middle Initial:&nbsp;</label><br>
                        <label value="lblEmployeeMiddleInitial">Employee Position:&nbsp;</label><br>
                        <label value="lblEmployeeEmail">Employee E-mail:&nbsp;</label><br>
                        <label value="lblDefaultusername">Employee Username:&nbsp;</label><br>
                        <label value="lblDefaultpassword">Employee Default password:&nbsp;</label><br>
                        <label value="lblCreatedby">Created By :&nbsp;</label><br>
                        <label value="lblDateCreated">Date Created :&nbsp;</label>
                        <label value="lblStatus">Status:&nbsp;</label>
                    </div>
                    <div style="float:left;text-align:left">
                        <input class="input-large" name="txtEmpIdNo" id="txtEmpIdNo" type="text" disabled/><br>
                        <input class="input-large" name="txtEmpLastname" id="txtEmpLastname" type="text" /><br>
                        <input class="input-large" name="txtEmpFirstname" id="txtEmpFirstname" type="text" /><br>
                        <input class="input-large" name="txtEmpMidInitial" id="txtEmpMidInitial" type="text" /><br><br>
                        <select class="input-large" name="cmbEmpPosition" id="cmbEmpPosition" <option value="0">index</option>
                            <option value="1">Admin</option>
                            <option value="2">Lawyer</option>
                            <option value="2">Secratery</option>
                        </select><br>
                        <input class="input-large" name="txtEmpEmail" id="txtEmpEmail" type="text"/><br>
                        <input class="input-large" name="txtEmpUsername" id="txtEmpUsername" type="text" disabled/><br>
                        <input class="input-large" name="txtDefaultPassword" id="txtDefaultPassword" type="text" disabled/><br>
                        <input class="input-large" name="txtCreatedby" id="txtCreatedby" type="text" disabled/><br>
                        <input class="input-large" name="txtDateCreated" id="txtDateCreated" type="text" disabled/><br>
                        <input class="input-large" name="chkStatus" id="txtStatus" type="checkbox" checked="checked"/> Active
                        <div style="text-align:right">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer" style="width:500px;display:inline-block">
            Stay on this page <input class="input-large" name="chkAddMore" id="txtAddMore" type="checkbox"/>
            <a href="" class="btn" data-dismiss="modal">Close</a>
            <a href="<?php echo base_url() ?>user" class="btn btn-primary" data-dismiss="modal">Create</a>
        </div>
    </div>
</div>
<div class="modal hide fade" id="myModal1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Edit Accounts</h3>
    </div>
    <div class="modal-body" style="overflow:hidden">
        <form style="height:100%" action="<?php echo base_url() ?>user" method="post">
            <fieldset>
                <div style="float:left;text-align:right;margin-left:50px">
                    <label value="lblEmpIdNo">Employee ID No.:&nbsp;</label><br>
                    <label value="lblEmployeeLastName">Employee Last Name:&nbsp;</label><br>
                    <label value="lblEmployeeFirstName">Employee First Name:&nbsp;</label><br>
                    <label value="lblEmployeeMiddleInitial">Employee Middle Initial:&nbsp;</label><br>
                    <label value="lblEmployeeMiddleInitial">Employee Position:&nbsp;</label><br>
                    <label value="lblEmployeeEmail">Employee E-mail:&nbsp;</label><br>
                    <label value="lblDefaultusername">Employee Username:&nbsp;</label><br>
                    <label value="lblDefaultpassword">Employee Default password:&nbsp;</label><br>
                    <label value="lblCreatedby">Created By :&nbsp;</label><br>
                    <label value="lblDateCreated">Date Created :&nbsp;</label>
                    <label value="lblStatus">Status:&nbsp;</label><br>
                </div>
                <div style="float:left;text-align:left">
                    <input class="input-large" name="txtEmpIdNo" id="txtEmpIdNo" type="text" disabled value="20100102"/><br>
                    <input class="input-large" name="txtEmpLastname" id="txtEmpLastname" type="text" value="Buela"/><br>
                    <input class="input-large" name="txtEmpFirstname" id="txtEmpFirstname" type="text" value="Christian"/><br>
                    <input class="input-large" name="txtEmpMidInitial" id="txtEmpMidInitial" type="text" value="R."/><br><br>
                    <select class="input-large" name="cmbEmpPosition" id="cmbEmpPosition" <option value="0">index</option>
                        <option value="1">Admin</option>
                        <option value="2">Lawyer</option>
                        <option value="2">Secratery</option>
                    </select><br>
                    <input class="input-large" name="txtEmpEmail" id="txtEmpEmail" type="text"/><br>
                    <input class="input-large" name="txtEmpUsername" id="txtEmpUsername" type="text" value="buela_c" disabled/><br>
                    <input class="input-large" name="txtDefaultPassword" id="txtDefaultPassword" type="password" value="123" disabled/><br>
                    <input class="input-large" name="txtCreatedby" id="txtCreatedby" type="text" value="Admin" disabled/><br>
                    <input class="input-large" name="txtDateCreated" id="txtDateCreated" type="text" value="07/16/2013" disabled/><br>
                    <input class="input-large" name="chkStatus" id="txtStatus" type="checkbox" checked="checked"/>Active
                </div>
            </fieldset>
        </form>
    </div>
    <div class="modal-footer">
        <a href="" class="btn" data-dismiss="modal">Close</a>
        <a href="<?php echo base_url() ?>user" class="btn btn-primary" data-dismiss="modal">Save</a>
    </div>
</div>
<div class="modal hide fade" id="myModal2">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Accounts History</h3>
    </div>
    <div class="modal-body">
        <label>
            &nbsp; Filter By: &nbsp;
            <select style="width:145px">
                <option value="client name">Accessed by</option>
                <option value="template name">Modified by</option>
                <option value="date and time created">Date/Time Modified</option>
            </select>
            &nbsp; Search: &nbsp; <input type="text" style="width:200px">
        </label>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th>Last Accessed/Modified by</th>
                    <th>Position</th>
                    <th>Last accessed/Modified Date/Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center">Buela, Christian</td>
                    <td class="center">Admin</td>
                    <td class="center">01/16/2013 09:49AM</td>
                </tr>
            </tbody>
        </table>
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
        <div class="modal-footer">
            <a href="" class="btn" data-dismiss="modal">Close</a>
        </div>
    </div>
</div>

<div class="modal hide fade" id="TransferWork" style="width: 700px;">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Case(s) to transfer</h3>
    </div>
    <div class="modal-body"style="overflow:hidden;">
        <label>
            &nbsp; Filter By: &nbsp;
            <select style="width:145px">
                <option value="Client name">Client name</option>
                <option value="Case Title">Case Title</option>
                <option value="Lawyer">Lawyer</option>
            </select>
            &nbsp; Search: &nbsp; <input type="text" style="width:200px">
        </label>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th><input type="checkbox" name="checkbox" id="checkbox" /></th>
                    <th>Client name</th>
                    <th>Case Title</th>
                    <th>Lawyer</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                    <td class="center">Fernandez, Tyrone A.K.A Boy Tuwad</td>
                    <td class="center">Killer smile</td>
                    <td class="center">Vladimer Dagdag</td>
                    <td> <a data-dismiss="modal"  data-toggle="modal" href="#TransferWorkTo" class="btn btn-primary" >Transfer</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                    <td class="center">Murdoc, Rubios A.K.A Boy Bakal</td>
                    <td class="center">Killer eye</td>
                    <td class="center">MangKepweng</td>
                    <td> <a data-dismiss="modal"  data-toggle="modal" href="#TransferWorkTo" class="btn btn-primary" >Transfer</a></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                    <td class="center">Islaw, Kinang A.K.A Boy Batya</td>
                    <td class="center">Killer Nail</td>
                    <td class="center">Mang Do</td>
                    <td> <a data-dismiss="modal"  data-toggle="modal" href="#TransferWorkTo" class="btn btn-primary" >Transfer</a></td>
                </tr>
            </tbody>
        </table>
        <form class="form-horizontal" style="margin-left: -10%">
            <fieldset>
                <label class="control-label" for="focusedInput">Remark(s):</label>
                <div class="controls">
                    <textarea style="width: 400px;"></textarea>
                </div>
            </fieldset>
        </form>
        <div class="dataTables_paginate paging_bootstrap pagination" >
            <ul>
                <li class="prev disabled"><a href="#">← Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="next"><a href="#">Next → </a></li>
            </ul>
            <div style="margin-left: 86.5%;margin-top: -17%;">
                <a data-dismiss="modal"  data-toggle="modal" href="#TransferWorkTo" class="btn btn-primary" >Transfer</a>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<div class="modal hide fade" id="TransferWorkTo">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Transfer to</h3>
    </div>
    <div class="modal-body">
        <label>
            &nbsp; Filter By: &nbsp;
            <select style="width:145px">
                <option value="Lawyer">Lawyer</option>
                <option value="Cases handle">Cases handle</option>
            </select>
            &nbsp; Search: &nbsp; <input type="text" style="width:200px">
        </label>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th>Lawyer</th>
                    <th>Cases handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center">Buela, Christian</td>
                    <td class="center">3</td>
                    <td><a data-toggle="modal" data-dismiss="modal" href="#" class="btn btn-primary" >Use </a></td>
                </tr>
                <tr>
                    <td class="center">Pascua, Jonna</td>
                    <td class="center">3</td>
                    <td><a data-toggle="modal" data-dismiss="modal" href="#" class="btn btn-primary" >Use </a></td>

                </tr>
                <tr>
                    <td class="center">Silam, Joanna</td>
                    <td class="center">3</td>
                    <td><a data-toggle="modal" data-dismiss="modal" href="#" class="btn btn-primary" >Use </a></td>

                </tr>
                <tr>
                    <td class="center">Fernandez, Tyrone</td>
                    <td class="center">5</td>
                    <td><a data-toggle="modal" data-dismiss="modal" href="#" class="btn btn-primary" >Use </a></td>

                </tr>
            </tbody>
        </table>
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
    <div class="modal-footer">
        <a href="" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>