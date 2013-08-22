<div id=content class=span10>
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>case/viewCase>Case</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>document/viewListDocument>Documents</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-list-alt"></i> Documents</h2>
            </div>
            <div class="box-content" style="display: block;">
                <form>
                    <fieldset>
                        <legend>
                            <h4 style="color: #4F5155">Rape case documents imposed by Christian Buela</h4>
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
                            <div style="margin-left: 70%;">
                                    <label>
                                        &nbsp; Search: &nbsp; <input type="text">
                                    </label>  
                            </div>
                        </div>
                        <br>
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkbox" id="checkbox" /></th>
                                    <th></th>
                                    <th>Document Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">Civil Case Cover Sheet</td>
                                    <td class="center"><span class="label label-success">Done</span></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="#"> <i class="icon-edit icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>home/createDocument/createSummons100"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">Summons-100</td>
                                    <td class="center"><span class="label label-success">Done</span></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="#"> <i class="icon-edit icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>home/createDocument/viewAdditionalSummons200"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">Summons-200A</td>
                                    <td class="center"><span class="label label-success">Done</span></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="#"> <i class="icon-edit icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>home/updateDocument/createProofSummons"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">POS-010</td>
                                    <td class="center"><span class="label label-success">Done</span></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="#"> <i class="icon-edit icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>home/createDocument/createCivilFeeWaiver"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">FW-001</td>
                                    <td class="center"><span class="label label-success">Done</span></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="#"> <i class="icon-edit icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>home/createDocument/createCivilFeeWaiverOrder"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">FW-003</td>
                                    <td class="center"><span class="label label-success">Done</span></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="#"> <i class="icon-edit icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">POS-030</td>
                                    <td class="center"><span class="label label-warning">Pending</span></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>home/updateDocument/createProofSummons"> <i class="icon-edit icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">POS-030(P)</td>
                                    <td class="center"><span class="label label-warning">Pending</span></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>home/updateDocument/createAdditionalPartiesLisPendens"> <i class="icon-edit icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-download-alt icon-black"></i> </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>"> <i class="icon-eye-open icon-black"></i> </a>
                                    </td>
                                    <td class="center">SD Court Form</td>
                                    <td class="center"><span class="label label-warning">Pending</span></td>
                                    <td class="center">
                                        <a class="btn btn-group" href="<?php echo base_url(); ?>home/updateDocument/createProofSummons"> <i class="icon-edit icon-black"></i> </a>
                                        <a class="btn btn-group" href="#"> <i class="icon-trash icon-black"></i> </a>
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
                        <a class="btn" href="<?php echo base_url(); ?>case/viewCase">Back</a>
                    </div>
            </div>
        </div>
    </div>
