<div id=content class=span10>
    
    <!--Start of page bread crumb-->
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Christian Buela</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Edit Document</a> <span class=divider>/</span>
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
                    <form>
                        <fieldset>
                            
                            <legend>
                                <h4 style="color: #4F5155">Edit Document - List of Documents and Cases of Christian Buela</h4>
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
                                                &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                                            </label>
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
                                        <th>Document Name</th>
                                        <th>Last Modified</th>
                                        <th>Modified By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                        <td class="center">Tyrone Fernandez</td>
                                        <td class="center">07/30/2013 9:26PM</td>
                                        <td class="center">Christian Buela</td>
                                        <td><a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                            <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                        <td class="center">Christian Buela</td>
                                        <td class="center">07/29/2013 9:26AM</td>
                                        <td class="center">Tyrone Fernandez</td>
                                        <td> <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                             <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i></a>                                               
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                        <td class="center">Vladimer Dagdag</td>
                                        <td class="center">07/28/2013 8:06PM</td>
                                        <td class="center">Christian Buela</td>
                                        <td><a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                            <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                        <td class="center">Vladimer Dagdag</td>
                                        <td class="center">07/27/2013 10:26PM</td>
                                        <td class="center">Tyrone Fernandez</td>
                                        <td><a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                            <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                        <td class="center">Vladimer Dagdag</td>
                                        <td class="center">07/26/2013 9:26PM</td>
                                        <td class="center">Christian Buela</td>
                                        <td><a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                            <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                        </td>
                                    </tr>
                                </tbody>
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


