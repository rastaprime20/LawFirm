<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i>Templates</h2>
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
                                <option value="Employee ID No">Template Title</option>
                                <option value="Employee Name">Versions</option>
                                <option value="Created by">Modified by</option>
                                <option value="Status">Status</option>
                            </select>
                            &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                        </label>
                    </div>
                </div>
                <div class="span6">
                    <div id="DataTables_Table_0_filter" class="dataTables_filter, dataTables_length2">
                        <a class="btn btn-group" title="Create Template" href="<?php echo base_url(); ?>template/create "><i class="icon-file icon-black"></i> </a>
                        <a class="btn btn-group" title="Delete"><i class="icon-trash icon-black"></i> </a>
                        <a class="btn btn-group" title="Download"><i class="icon-download-alt icon-black"></i></a>
                        <input type="file" size="50" name="FileName">
                        <a class="btn btn-group" title="Upload"><i class="icon-upload icon-info"></i></a>
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
                <th>Template Title</th>
                <th>Versions</th>
                <th>Modified by</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center"><a href="#">Civil Case Cover Sheet</a></td>
                        <td class="center">Version 1.0</td>
                        <td class="center">Channister Minister</td>
                        <td class="center">Active</td>
                        <td class="center">
                            <a class="btn btn-group" href=#"> <i class="icon-edit icon-black"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                            <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock icon-black"></i> </a>
                            <a class="btn btn-group"><i class="icon-download-alt icon-info"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center"><a href="#">Summons</a></td>
                        <td class="center">Version 2.0</td>
                        <td class="center">Tirong Puruntong</td>
                        <td class="center">Active</td>
                        <td class="center">
                            <a class="btn btn-group" href=#"> <i class="icon-edit icon-black"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                            <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock icon-black"></i> </a>
                            <a class="btn btn-group"><i class="icon-download-alt icon-info"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center"><a href="#">POS-4A</a></td>
                        <td class="center">Version 1.0</td>
                        <td class="center">Dagdag, Vladimer</td>
                        <td class="center">Active</td>
                        <td class="center">
                            <a class="btn btn-group" href=#"> <i class="icon-edit icon-black"></i> </a>
                            <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                            <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock icon-black"></i> </a>
                            <a class="btn btn-group"><i class="icon-download-alt icon-info"></i></a>
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