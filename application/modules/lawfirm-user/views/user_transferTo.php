<div id=content class=span10>
<div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>user>Accounts</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>user/transfer>Transfer</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>user/transfertTo>Transfer To</a> <span class=divider>/</span>
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
                  <legend><h4>Transfer to</h4></legend>
                <label style="margin-left: 50%;">
                    &nbsp; Filter By: &nbsp;
                    <select style="width:145px">
                        <option value="Lawyer">Lawyer</option>
                        <option value="Cases handle">Cases handle</option>
                    </select>
                    &nbsp; Search: &nbsp; <input type="text" style="width:200px">
                </label>
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>Lawyer</th>
                            <th>Cases handle</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">Buela, Christian</td>
                            <td class="center">3</td>
                            <td><a href="<?php base_url()?>user/transferToAtty" class="btn btn-primary" >Use </a></td>
                        </tr>
                        <tr>
                            <td class="center">Pascua, Jonna</td>
                            <td class="center">3</td>
                           <td><a href="<?php base_url()?>user/transferToAtty" class="btn btn-primary" >Use </a></td>

                        </tr>
                        <tr>
                            <td class="center">Silam, Joanna</td>
                            <td class="center">3</td>
                            <td><a href="<?php base_url()?>user/transferToAtty" class="btn btn-primary" >Use </a></td>

                        </tr>
                        <tr>
                            <td class="center">Fernandez, Tyrone</td>
                            <td class="center">5</td>
                            <td><a data-toggle="modal" data-dismiss="modal" href="#" class="btn btn-primary" >Use </a></td>

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
                <a href="<?php echo base_url() ?>user/transfer" class="btn" data-dismiss="modal">back</a>
                <a href="<?php echo base_url() ?>user" class="btn" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>