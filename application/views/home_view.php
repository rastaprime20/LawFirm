<?php
$no_visible_elements = false;
include('header.php');
?>

<!-- topbar ends -->
<div class="container-fluid">
    <div class="row-fluid">

        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="#">Blank</a>
            </li>
        </ul>
    </div>

    <!-- the introduction -->
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
    <!-- the introduction end -->

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-list-alt"></i>Documents</h2>

            </div>
            <div class="box-content">

                <!-- the search code -->
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
                        <div class="dataTables_filter, dataTables_length2 " id="DataTables_Table_0_filter">
                            <label>Filter By: &nbsp;
                                <select id="selectError3" size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                    <option value="client name" >Client Name</option>
                                    <option value="template name" >Template Name</option>
                                    <option value="date and time created" >Date/Time Created</option>
                                </select> 
                                &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                            </label>
                        </div>
                    </div>
                    
                    <div class ="span6">
                        <div id="DataTables_Table_0_length" class="dataTables_length">
                                <a class="btn btn-info"><i class="icon-file icon-white"></i> <!-- New --> </a> 
                                <a class="btn btn-danger"><i class="icon-trash icon-white"></i> <!-- Delete --></a>
                                <a class="btn btn-group"><i class ="icon-download-alt icon-info"></i><!--Download --></a>
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
                    <th>Client Name</th>
                    <th>Template Title</th>
                    <th>Created By</th>
                    <th>Date Created</th>
                    <th>Action</th>
                    </tr>
                    </thead>   

                    <tbody>
                        <!--first information-->
                        <tr>
                            <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                            <td class="center">Channister Tatum</td>
                            <td class="center">Civil Case Cover Sheet</td>
                            <td class="center">Tyrone Fernandez</td>							
                            <td class="center">01/10/2013</td>


                            <td class="center">
                                <a class="btn btn-info" href="pdf/1.  CM-010 (Civil Case Cover Sheet).pdf"> <i class="icon-eye-open icon-white"></i> <!-- View --> </a> 
                                <a class="btn btn-warning" href=#"> <i class="icon-edit icon-white"></i> <!-- Edit --></a>
                                <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                                <a href ="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
                            </td>
                        </tr>

                        <!-- second information -->
                        <tr>
                            <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                            <td class="center">Tirong Puruntong</td>
                            <td class="center">Summons</td>
                            <td class="center">Christian Buela</td>
                            <td class="center">02/10/2013</td>

                            <td class="center">
                                <a class="btn btn-info" href="pdf/2.  SUM-100 (Summons).pdf"> <i class="icon-eye-open icon-white"></i> <!-- View --> </a> 
                                <a class="btn btn-warning" href="#"> <i class="icon-edit icon-white"></i> <!-- Edit --></a>
                                <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                                <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
                            </td>
                        </tr>

                        <!-- third information -->
                        <tr>
                            <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                            <td class="center">Vlad the Big</td>
                            <td class="center">Summons Additional Parties</td>
                            <td class="center">Vladimer Mansanas</td>
                            <td class="center">02/10/2013</td>


                            <td class="center">
                                <a class="btn btn-info" href="pdf/3.  SUM-200(A) (Summons Additional Parties).pdf"> <i class="icon-eye-open icon-white"></i> <!-- View --> </a> 
                                <a class="btn btn-warning" href="#"> <i class="icon-edit icon-white"></i> <!-- Edit --></a>
                                <a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
                                <a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <!-- paging part -->
                <div class="row-fluid"><div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="span12 center"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div>



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

<hr>

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Document history</h3>
    </div>
    <div class="modal-body">
        <table border="0">
            <tr>
                <td>Last accessed by:</td>
                <td>Juan Dela Cruz</td>
            </tr>
            <tr>
                <td>Date of last accessed:</td>
                <td>December 12, 2013</td>
            </tr>
            <tr>
                <td>Modified by:</td>
                <td>Pedro Santos</td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <a href="index.html" class="btn" data-dismiss="modal">Restore</a>
        <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
    </div>
</div>		

<footer>

</footer>

</div><!--/.fluid-container-->





<?php include('footer.php'); ?>
