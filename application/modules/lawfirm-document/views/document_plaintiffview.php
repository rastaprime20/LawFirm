<div id=content class=span10>
    
    <!--Start of page bread crumb-->
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Create Document</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Plaintiff</a> <span class=divider>/</span>
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
                    <div class="alert alert-info">
                        <h1 style="font-family: arial; font-weight: lighter">Step 1</h1> 
                        <h4 style="font-family: arial; font-weight: lighter"> &nbsp; >> &nbsp; Create Document</h4>
                        <h4 style="font-family: arial; font-weight: lighter"> &nbsp; >> &nbsp; Choose a plaintiff or create a plaintiff</h4>
                    </div>
                    <form method="post">
                        <fieldset>
                            
                            <legend>
                                <h4 style="color: #4F5155">Create Document - Plaintiff</h4>
                            </legend>
                            
                            <!--Start of searching, filtering, records per page and to all function-->
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
                                        <div style="margin-left: 30%">
                                            <label>
                                                &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0" name="searchPlaintiffRecord">
                                            </label>
                                            
                                            <?php if (isset($_SESSION['search_notification'])): ?>
                                                <div class="alert alert-error">
                                                    <?php echo ($_SESSION['search_notification']) ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div style="margin-left: 73%">
                                            <label>
                                                <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                <a href="<?php echo base_url(); ?>home/createDocument/createPlaintiff" class="btn btn-group"><i class="icon-plus icon-black"></i> </a>                                               
                                            </label>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <!--End of searching, filtering, records per page and to all function-->
                            
                            
                            <!--Start of viewing the Plaintiff records-->
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" name="checkbox" id="checkbox" />
                                        </th>
                                        <th>Client Name</th>
                                        <th>Date/Time Created</th>
                                        <th>Created By</th>
                                        <th>Date/Time Modified</th>
                                        <th>Modified By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php foreach ($plaintiff_list as $key => $client){?>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                        <td class="center"><?php echo $plaintiff_list[$key]['client_Lastname']. " , " . $plaintiff_list[$key]['client_Firstname']. " " . $plaintiff_list[$key]['client_Middlename'] ; ?></td>
                                        <td class="center"><?php echo $plaintiff_list[$key]['client_history_datecreated'] ; ?></td>
                                        <td class="center"><?php echo $plaintiff_list[$key]['userAccount_lastname']. " , " . $plaintiff_list[$key]['userAccount_firstname']; ?></td>
                                        <td class="center"><?php echo $plaintiff_list[$key]['client_history_datemodified'] ; ?></td>
                                        <td class="center"><?php echo $plaintiff_list[$key]['userAccount_lastname']. " , " . $plaintiff_list[$key]['userAccount_firstname']; ?></td>
                                        <td><a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                            <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                        </td>
                                    </tr>
                                </tbody>
                                <?php }?>
                            </table>
                            <!--End of viewing the Plaintiff records-->
                            
                            <!--Start of pagination for Plaintiff records-->
                            <div class="row-fluid">
                                <div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 5 of 32 entries</div></div>
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
                            <!--End of pagination for Plaintiff records-->
                            
                        </fieldset>
                    </form>
                 </div>
                <!--End of box content-->
                
                <!--Start of footer for Plaintiff records-->
                
                <!--End of footer for Plaintiff records-->
                
            </div>
        </div>
    </div>
    <!--End of whole box-->