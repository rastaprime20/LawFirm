<?php include('../LawFirm/application/views/header.php'); ?>



<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i>Accounts</h2>

        </div>
        <div class="box-content">

            <!-- the search code -->
            <div class="row-fluid">
                <div class="span6">
                    <div id="DataTables_Table_0_length" class="dataTables_length ">
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
                    <div class="dataTables_filter, dataTables_length2 " id="DataTables_Table_0_filter">
                        <label>Filter By: &nbsp;
                            <select id="selectError3" size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                <option value="Employee ID No" >Employee ID No.</option>
                                <option value="Employee Name" >Employee Name</option>
                                <option value="Created by" >Created by</option>
                                <option value="Date/Time Created" >Date/Time Created</option>
                                <option value="Status" >Status</option>
                            </select> 
                            &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                        </label>
                    </div>
                </div>

                <div class ="span6">
                    <div id="DataTables_Table_0_filter" class="dataTables_filter, dataTables_length2">
                        <a class="btn btn-setting" > <i class="icon-file icon-black"></i> <!-- Edit --></a>
                        <a class="btn btn-danger"><i class="icon-trash icon-white"></i> <!-- Delete --></a>
                        <a class="btn btn-danger" href="#"> <i class="icon-refresh icon-white"></i> <!-- Reset Password --></a>
                    </div>
                    <br>
                </div>


            </div>
            <!-- the search code end -->



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
                    <!--first information-->
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center">20100103</td>
                        <td class="center">Buela, Christian</td>
                        <td class="center">Admin</td>							
                        <td class="center">07/16/2013</td>
                        <td class="center">active</td>

                        <td class="center">
                           
                            <a data-toggle="modal" href="#myModal1" class="btn btn-warning"> <i class="icon-edit icon-black"></i> <!-- Edit --></a>
                            <a data-toggle="modal" href="#myModal2" class="btn btn-group "> <i class="icon icon-clock"></i> <!-- History --></a>
                            <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                            <a class="btn btn-danger" href="#"> <i class="icon-refresh icon-white"></i> <!-- Reset Password --></a>
                        </td>
                    </tr>

                    <!-- second information -->
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center">20100102</td>
                        <td class="center">Fernandez, Tyrone</td>
                        <td class="center">Admin</td>
                        <td class="center">07/15/2013</td>
                        <td class="center">active</td>
                        <td class="center">
                            
                            <a data-toggle="modal" href="#myModal1" class="btn btn-warning"> <i class="icon-edit icon-black"></i> <!-- Edit --></a>
                            <a data-toggle="modal" href="#myModal2" class="btn btn-group "> <i class="icon icon-clock"></i> <!-- History --></a>
                            <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                            <a class="btn btn-danger" href="#"> <i class="icon-refresh icon-white"></i> <!-- Reset Password --></a>
                        </td>
                    </tr>

                    <!-- third information -->
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center">20100101</td>
                        <td class="center">Dagdag, Vladimer</td>
                        <td class="center">Admin</td>
                        <td class="center">02/10/2013</td>
                        <td class="center">active</td>

                        <td class="center">
                            <a data-toggle="modal" href="#myModal1" class="btn btn-warning"> <i class="icon-edit icon-black"></i> <!-- Edit --></a>
                            <a data-toggle="modal" href="#myModal2" class="btn btn-group "> <i class="icon icon-clock"></i> <!-- History --></a>
                            <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                            <a class="btn btn-danger" href="#"> <i class="icon-refresh icon-white"></i> <!-- Reset Password --></a>
                        </td>
                    </tr>

                </tbody>
            </table>

            <!-- paging part -->
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
    </div><!--/span-->
</div><!--/row-->

<div class="modal hide fade" id="myModal">
    
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Create Accounts</h3>
    </div>
 <div class="modal-body">

        <form  action="<?php echo base_url() ?>user" method="post">
                   <fieldset>
                     
                        <div style="float:left; text-align: right">
                        <label value="lblEmpIdNo">Employee ID No.:&nbsp;</label><br>
                        <label value="lblEmployeeLastName">Employee Last Name:&nbsp;</label><br>
                        <label value="lblEmployeeFirstName">Employee First Name:&nbsp;</label><br>
                        <label value="lblEmployeeMiddleInitial">Employee Middle Initial:&nbsp;</label><br>
                        <label value="lblEmployeeMiddleInitial">Employee Position:&nbsp;</label><br>
                        <label value="lblDefaultusername">Employee Username:&nbsp;</label><br>
                        <label value="lblDefaultpassword">Employee Default password:&nbsp;</label><br>
                        <label value="lblCreatedby">Created By :&nbsp;</label><br>
                        <label value="lblDateCreated">Date Created :&nbsp;</label>
                        <label value="lblStatus">Status:&nbsp;</label>
                        
                        </div>
                      
                        
                       <div style="float:left;  text-align: left" >
                        <input class="input-large" name="txtEmpIdNo" id="txtEmpIdNo" type="text" disabled/><br>
                        <input class="input-large" name="txtEmpLastname" id="txtEmpLastname" type="text" /><br>
                        <input class="input-large" name="txtEmpFirstname" id="txtEmpFirstname" type="text" /><br>
                        <input class="input-large " name="txtEmpMidInitial" id="txtEmpMidInitial" type="text" /><br><br>
                        <select class="input-large" name="cmbEmpPosition" id="cmbEmpPosition" 
                            <option value="0">index</option>              
                            <option value="1">Admin</option>
                            <option value="2">Lawyer</option>
                            <option value="2">Secratery</option>
                            </select><br>
                        <input class="input-large " name="txtEmpUsername" id="txtEmpUsername" type="text" disabled/><br>
                        <input class="input-large " name="txtDefaultPassword" id="txtDefaultPassword" type="text" disabled/><br>
                        <input class="input-large " name="txtCreatedby" id="txtCreatedby" type="text" disabled/><br>
                        <input class="input-large " name="txtDateCreated" id="txtDateCreated" type="text" disabled/><br>
                        <input class="input-large " name="chkStatus" id="txtStatus" type="checkbox" checked="checked"><label value="lblActive">Active</label></input>
                        <div style="text-align:right">
                        
                       </div>
                        </div>                     
                                     

                      </fieldset>
                </form>
        


   
    </div>
     <div class="modal-footer">
        <a href="" class="btn" data-dismiss="modal">Close</a>
        <a href="<?php echo base_url()?>user" class="btn btn-primary" data-dismiss="modal">Create</a>
    </div>
   </div>
<!--2nd modal-->
<div class="modal hide fade" id="myModal1"  >
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
   <h3>Edit Accounts</h3>
  </div>
  <div class="modal-body">

        <form style="height:100%" action="<?php echo base_url() ?>user" method="post">
                   <fieldset >
                     
                        <div style="float:left; text-align: right">
                        <label value="lblEmpIdNo">Employee ID No.:&nbsp;</label><br>
                        <label value="lblEmployeeLastName">Employee Last Name:&nbsp;</label><br>
                        <label value="lblEmployeeFirstName">Employee First Name:&nbsp;</label><br>
                        <label value="lblEmployeeMiddleInitial">Employee Middle Initial:&nbsp;</label><br>
                        <label value="lblEmployeeMiddleInitial">Employee Position:&nbsp;</label><br>
                        <label value="lblDefaultusername">Employee Username:&nbsp;</label><br>
                        <label value="lblDefaultpassword">Employee Default password:&nbsp;</label><br>
                        <label value="lblCreatedby">Created By :&nbsp;</label><br>
                        <label value="lblDateCreated">Date Created :&nbsp;</label>
                        <label value="lblStatus">Status:&nbsp;</label><br>
                        
                        
                        </div>
                      
                        
                       <div style="float:left;  text-align: left" >
                        <input class="input-large" name="txtEmpIdNo" id="txtEmpIdNo" type="text" disabled value="20100102"/><br>
                        <input class="input-large" name="txtEmpLastname" id="txtEmpLastname" type="text" value="Buela"/><br>
                        <input class="input-large" name="txtEmpFirstname" id="txtEmpFirstname" type="text" value="Christian"/><br>
                        <input class="input-large " name="txtEmpMidInitial" id="txtEmpMidInitial" type="text" value="R."/><br><br>
                        <select class="input-large" name="cmbEmpPosition" id="cmbEmpPosition" 
                            <option value="0">index</option>              
                            <option value="1">Admin</option>
                            <option value="2">Lawyer</option>
                            <option value="2">Secratery</option>
                            </select><br>
                        <input class="input-large " name="txtEmpUsername" id="txtEmpUsername" type="text" value="buela_c" disabled/><br>
                        <input class="input-large " name="txtDefaultPassword" id="txtDefaultPassword" type="password" value="123" disabled/><br>
                        <input class="input-large " name="txtCreatedby" id="txtCreatedby" type="text" value="Admin" disabled/><br>
                        <input class="input-large " name="txtDateCreated" id="txtDateCreated" type="text" value="07/16/2013" disabled/><br>
                        <input class="input-large " name="chkStatus" id="txtStatus" type="checkbox" checked="checked"><label value="lblActive">Active</label></input>
                        
                        
                        </div>                     
                                     

                      </fieldset>
                </form>
          
    </div>
     <div class="modal-footer">
        <a href="" class="btn" data-dismiss="modal">Close</a>
        <a href="<?php echo base_url()?>user" class="btn btn-primary" data-dismiss="modal">Save</a>
    </div>
   </div>

   <!--3rd modal-->
   <div class="modal hide fade" id="myModal2">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
   <h3>Accounts History</h3>
  </div>
  <div class="modal-body">

       <label>                  
            &nbsp; Filter By: &nbsp;
            <select style="width: 145px;" >
                <option value="client name" >Accessed by</option>
                <option value="template name" >Modified by</option>
                <option value="date and time created" >Date/Time Modified</option>
            </select>

            &nbsp; Search: &nbsp; <input type="text" style="width: 200px;">
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
                <!--first information-->
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
          
    
 
<?php include('../LawFirm/application/views/footer.php'); ?>

