<div id=content class=span10>
<div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>user>Accounts</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
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
                        <a class="btn btn-group" title="Create Template" href="<?php echo base_url(); ?>user/create "><i class="icon-file icon-black"></i> </a>
                        <a class="btn btn-group" title="Delete" href=""><i class="icon-trash icon-black"></i> </a>
                     
                      
                    </div>
                    <br>
                </div>
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
                            <a href="<?php base_url();?>user/edit" class="btn btn-group"> <i class="icon-edit icon-black" title="Edit"></i> </a>
                            <a href="<?php base_url();?>user/history" class="btn btn-group"> <i class="icon icon-clock icon-black" title="History"></i> </a>
                            <a class="btn btn-group" title="Delete" href=""><i class="icon-trash icon-black"></i> </a>
                            <a href="<?php base_url();?>user/transfer" class="btn btn-group" > <i class="icon-share-alt icon-black" title="Transfer"></i> </a>
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
                            <li class="next"><a href="#">Next → </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
 function its()
{ $(document).ready(function() {

    $.noty.returns = 'id'; // BC for old api
  	
		var n = noty({
      layout: 'center',  
      theme: 'noty_theme_default',
      animateOpen: {height: 'toggle'},
      animateClose: {height: 'toggle'},
      easing: 'swing',
      text: 'Test with old options',
      type: 'alert',
      speed: 500,
      timeout: 5000,
      closeButton: false,
      closeOnSelfClick: true,
      closeOnSelfOver: false,
      force: false,
      onShow: false,
      onShown: false,
      onClose: false,
      onClosed: false,
      buttons: [
        {type: 'btn btn-primary', text: 'Ok', click: function($noty) {

            // this = button element
            // $noty = $noty element

            $noty.close();
            noty({force: true, text: 'You clicked "Ok" button', type: 'success', layout: 'topLeft'});
          }
        },
        {type: 'btn btn-danger', text: 'Cancel', click: function($noty) {
            $noty.close();
            noty({force: true, text: 'You clicked "Cancel" button', type: 'error', layout: 'topLeft'});
          }
        }
      ],
      modal: false,
      template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
      cssPrefix: 'noty_',
      custom: {
        container: null
      }
    });

    console.log('html: '+n);
  	
  });
  }
  </script>
