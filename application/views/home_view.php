<div id=content class=span10>
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header well">
                <h2><i class="icon-info-sign"></i>Introduction</h2>
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
                <h2><i class="icon-user"></i> Clients</h2>
            </div>
            <div class="box-content" style="display: block;">
                <form>
                    <fieldset>
                        <legend>
                            <h4 style="color: #4F5155">List of Client with Documents</h4>
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
                                <br>
                                <div style="margin-left: 11%">
                                    <label>
                                        <a href="<?php echo base_url(); ?>home/createDocument/plaintiff" class="btn btn-group" id="CreateDocument"><i class='icon-file icon-black'></i> </a>
                                    </label>
                                </div>
                            </div>
                            
                            <div style="margin-left: 70%;">
                                    <label>
                                        &nbsp; Search: &nbsp; <input type="text">
                                    </label>  
                            </div>
                            
                        </div>
                        
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Client Name</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">
                                        <a class="btn btn-group" href=<?php echo base_url(); ?>case/viewCase> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">Channister Tatum</td>
                                    <td class="center"><span class="label label-success">Done</span></td>
                                </tr>
                                <tr>
                                    <td class="center">
                                        <a class="btn btn-group" href=<?php echo base_url(); ?>case/viewCase> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">Tirong Puruntong</td>
                                    <td class="center"><span class="label label-warning">Pending Case Documents</span></td>
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
            </div>
        </div>
    </div>