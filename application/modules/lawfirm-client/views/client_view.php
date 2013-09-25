<div id=content class=span10>
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Client</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-list-alt"></i> Clients</h2>
            </div>
            <div class="box-content" style="display: block;">
                <form method="post" name="ClientForm" action="<?php base_url(); ?>saveClientRecord">
                    <fieldset>
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                            <div class="row-fluid">
                                <table class="table table-condensed table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th><input class="input-prepend" title="Select all plaintiff" data-rel="tooltip" type="checkbox" name="checkbox2" id="checkbox2" /></th>
                                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Client Name: activate to sort column descending">Client Name</th>
                                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <?php if (isset($no_client_list)): ?>
                                        <div class="alert alert-info" style="display: block;">
                                            There's no information available on this table, please create a document to be able to view something on this table.
                                        </div>
                                        <?php else: ?>
                                        <?php foreach ($client_list as $key => $client){?>
                                            <tr class="odd">
                                                <td><input class="input-prepend" title="Select plaintiff" data-rel="tooltip" type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="  sorting_1"><?php echo $client['client_Lastname'] . " , " . $client['client_Firstname'] . " " . $client['client_Middlename']; ?></td>
                                                <td class="center ">
                                                    <a class="btn btn-group input-prepend tickerActionVerb" title="View cases" data-rel="tooltip" href=<?php echo base_url(); ?>case/viewCase> <i class="icon-eye-open icon-black"></i></a>
                                                    <a class="btn btn-group input-prepend" title="Append plaintiff" data-rel="tooltip" href="#"> <i class='icon-pencil icon-black'></i> </a>
                                                    <a class="btn btn-group input-prepend" title="Edit plaintiff" data-rel="tooltip" href="#"> <i class='icon-edit icon-black'></i> </a>
                                                    <a class="btn btn-group input-prepend" title="View history" data-rel="tooltip" href="#"> <i class='icon-time icon-black'></i> </a>
                                                    <a class="btn btn-group input-prepend" title="Download all documents" data-rel="tooltip" href="<?php echo base_url(); ?>tutorial"> <i class='icon-download-alt icon-black'></i> </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="SaveClientRecord" class="btn btn-primary">Save</button>
                            <a href="#" class="btn" data-dismiss="modal">Cancel</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>