<div id=content class=span10>
<div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>user>Accounts</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>user/transfer>Transfer</a> <span class=divider>/</span>
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
                 <legend><h4>Case(s) to Transfer</h4></legend>
                <label style="margin-left: 50%;">
                    &nbsp; Filter By: &nbsp;
                    <select style="width:145px">
                        <option value="Client name">Client name</option>
                        <option value="Case Title">Case Title</option>
                        <option value="Lawyer">Lawyer</option>
                    </select>
                    &nbsp; Search: &nbsp; <input type="text" style="width:200px">
                </label>
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="checkbox" id="checkbox" /></th>
                            <th>Client name</th>
                            <th>Case Title</th>
                            <th>Lawyer</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                            <td class="center">Fernandez, Tyrone A.K.A Boy Tuwad</td>
                            <td class="center">Killer smile</td>
                            <td class="center">Vladimer Dagdag</td>
                            <td> <a data-dismiss="modal"  href="<?php base_url()?>user/transfertTo" class="btn btn-primary" >Transfer</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                            <td class="center">Murdoc, Rubios A.K.A Boy Bakal</td>
                            <td class="center">Killer eye</td>
                            <td class="center">MangKepweng</td>
                            <td> <a data-dismiss="modal"  href="<?php base_url()?>user/transfertTo" class="btn btn-primary" >Transfer</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                            <td class="center">Islaw, Kinang A.K.A Boy Batya</td>
                            <td class="center">Killer Nail</td>
                            <td class="center">Mang Do</td>
                            <td> <a data-dismiss="modal"  href="<?php base_url()?>user/transfertTo" class="btn btn-primary" >Transfer</a></td>
                        </tr>
                    </tbody>
                </table>
                <form class="form-horizontal" >
                    <fieldset>
                        <label class="control-label" for="focusedInput">Remark(s):</label>
                        <div class="controls">
                            <textarea style="width: 400px;"></textarea>
                        </div>
                    </fieldset>
                </form>
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
            </div>
        </div>
    </div>
</div>