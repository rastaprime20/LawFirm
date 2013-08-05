<div id=content class=span10>
<div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>user>Accounts</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>user/history>Account History</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
<div class="row-fluid">
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-list-alt"></i>Accounts</h2>
            </div>
            <div class="box-content"style="display: block;">
                 <legend><h4>Accounts History</h4></legend>

                <label>
                    &nbsp; Filter By: &nbsp;
                    <select style="width:145px">
                        <option value="client name">Accessed by</option>
                        <option value="template name">Modified by</option>
                        <option value="date and time created">Date/Time Modified</option>
                    </select>
                    &nbsp; Search: &nbsp; <input type="text" style="width:200px">
                </label>
                <br>
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
            <div class="modal-footer">
                <a href="<?php echo base_url() ?>user" class="btn" data-dismiss="modal">Cancel</a>
                <a href="<?php echo base_url() ?>user" class="btn" data-dismiss="modal">Update</a>
            </div>
        </div>
    </div>
</div>