<div id=content class=span10>
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>case/viewCase>Case</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-list-alt"></i> Cases</h2>
            </div>
            <div class="box-content" style="display: block;">
                <form>
                    <fieldset>
                        <legend>
                            <h4 style="color: #4F5155">List of Cases imposed by Christian Buela</h4>
                        </legend>
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
                                            <option value="Case Number">Case Number</option>
                                            <option value="Case Title">Case Title</option>
                                            <option value="Created by">Created by</option>
                                            <option value="Date/Time Created">Date/Time Created</option>
                                            <option value="Status">Status</option>
                                        </select>
                                        &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                                    </label>
                                </div>
                            </div>
                        
                            <br>
                        <br>
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Case Number</th>
                                    <th>Case Title</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Date/Time Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>document/viewListDocument"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">LC-132842394</td>
                                    <td class="center">Rape</td>
                                    <td class="center"><span class="label label-success">Done</span></td>
                                    <td class="center">Tyrone Fernandez</td>
                                    <td class="center">07/31/2013 10:37PM</td>
                                    <td class="center">
                                        <a class="btn btn-group" href="#"> <i class="icon-time icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>document/viewListDocument"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">LC-1328567567</td>
                                    <td class="center">Child Abuse</td>
                                    <td class="center"><span class="label label-warning">Pending Case Documents</span></td>
                                    <td class="center">Christian Buela</td>
                                    <td class="center">07/30/2013 10:37PM</td>
                                    <td class="center">
                                        <a class="btn btn-group" href="#"> <i class="icon-time icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
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
                    </fieldset>
                </form>
                <div class="modal-footer">
                        <a class="btn" href="<?php echo base_url(); ?>home">Back</a>
                    </div>
            </div>
        </div>
    </div>