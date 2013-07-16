<?php
include('../LawFirm/application/views/header.php');
?>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i>Templates</h2>
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
                                <option value="Employee ID No" >Template Title</option>
                                <option value="Employee Name" >Versions</option>
                                <option value="Created by" >Modified by</option>
                                <option value="Status" >Status</option>
                            </select> 
                            &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                        </label>
                    </div>
                </div>

                <div class ="span6">
                    <div id="DataTables_Table_0_filter" class="dataTables_filter, dataTables_length2">
                        <a class="btn btn-info" title="Create Template"><i class="icon-file icon-white"></i> <!-- New --> </a> 
                        <a class="btn btn-danger" title ="Delete"><i class="icon-trash icon-white"></i> <!-- Delete --></a>
                        <a class="btn btn-group" title ="Download"><i class ="icon-download-alt icon-info"></i><!--Download --></a>
                        <input type="file" size="50" name="FileName">
                        <a class="btn btn-group" title ="Upload"><i class ="icon-upload icon-info"></i><!--Upload --></a>
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
                <th>Template Title</th>
                <th>Versions</th>
                <th>Modified by</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
                </thead>   

                <tbody>
                    <!--first information-->
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center"><a href="#">Civil Case Cover Sheet</a></td>
                        <td class="center">Version 1.0</td>
                        <td class="center">Channister Minister</td>							
                        <td class="center">Active</td>
                        <td class="center">
                            <a class="btn btn-warning" href=#"> <i class="icon-edit icon-white"></i> <!-- Edit --></a>
                            <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                            <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
                            <a class="btn btn-group"><i class ="icon-download-alt icon-info"></i><!--Download --></a>
                        </td>
                    </tr>

                    <!-- second information -->
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center"><a href="#">Summons</a></td>
                        <td class="center">Version 2.0</td>
                        <td class="center">Tirong Puruntong</td>
                        <td class="center">Active</td>
                        <td class="center">
                            <a class="btn btn-warning" href="#"> <i class="icon-edit icon-white"></i> <!-- Edit --></a>
                            <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                            <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
                            <a class="btn btn-group"><i class ="icon-download-alt icon-info"></i><!--Download --></a>
                        </td>
                    </tr>

                    <!-- third information -->
                    <tr>
                        <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                        <td class="center"><a href="#">POS-4A</a></td>
                        <td class="center">Version 1.0</td>
                        <td class="center">Dagdag, Vladimer</td>
                        <td class="center">Active</td>

                        <td class="center">
                            <a class="btn btn-warning" href="#"> <i class="icon-edit icon-white"></i> <!-- Edit --></a>
                            <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                            <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
                            <a class="btn btn-group"><i class ="icon-download-alt icon-info"></i><!--Download --></a>
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

<!-- content ends -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

</div>
</div><!--/span-->

</div><!--/row-->


<!-- content ends -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<?php include('../LawFirm/application/views/footer.php'); ?>