<?php include('../LawFirm/application/views/header.php'); ?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well">
            <h2><i class="icon-th"></i> Archive</h2>
            <div class="box-icon">
            </div>
        </div>
        <div class="box-content">
            <ul class="nav nav-tabs" id="myTab">
                <li class=""><a href="#accounts">Accounts</a></li>
                <li class="active"><a href="#documents">Documents</a></li>
                <li class=""><a href="#templates">Templates</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane" id="accounts">
                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-briefcase"></i></h2>
                            </div>
                            <div class="box-content">
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th><form id="form1" name="form1" method="post" action="">
                                        <div class="checker" id="uniform-checkbox"><span><input type="checkbox" name="checkbox" id="checkbox" style="opacity:0"></span></div>
                                        <label for="checkbox"></label>
                                    </form>
                                    </th>
                                    <th class="center">Employee ID Number</th>
                                    <th class="center">Employee Name</th>
                                    <th class="center">Created By</th>
                                    <th class="center">Date Created</th>
                                    <th class="center">Status</th>
                                    <th class="center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="checker" id="uniform-checkbox2"><span><input type="checkbox" name="checkbox2" id="checkbox2" style="opacity:0"></span></div></td>
                                            <td class="center">0001</td>
                                            <td class="center">2010001</td>
                                            <td class="center">Mark David</td>
                                            <td class="center">0/15/2013</td>
                                            <td class="center">Inactive</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="checker" id="uniform-checkbox2"><span><input type="checkbox" name="checkbox2" id="checkbox2" style="opacity:0"></span></div></td>
                                            <td class="center">0002</td>
                                            <td class="center">2010002</td>
                                            <td class="center">Mark Santos</td>
                                            <td class="center">02/11/2013</td>
                                            <td class="center">Inactive</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="checker" id="uniform-checkbox2"><span><input type="checkbox" name="checkbox2" id="checkbox2" style="opacity:0"></span></div></td>
                                            <td class="center">0003</td>
                                            <td class="center">2010003</td>
                                            <td class="center">Pedro Maliksi</td>
                                            <td class="center">02/15/2013</td>
                                            <td class="center">Inactive</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox3" id="checkbox3" style="opacity:0" /></td>
                                            <td class="center">0003</td>
                                            <td class="center">201003</td>
                                            <td class="center">Pedro Maliksi</td>
                                            <td class="center">02/15/2013</td>
                                            <td class="center">Inactive</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <td class="center">
                                    <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> Restore all</a>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active" id="documents">
                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-briefcase"></i></h2>
                            </div>
                            <div class="box-content">
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th><form id="form1" name="form1" method="post" action="">
                                        <div class="checker" id="uniform-checkbox"><span><input type="checkbox" name="checkbox" id="checkbox" style="opacity:0"></span></div>
                                        <label for="checkbox"></label>
                                    </form>
                                    </th>
                                    <th>Client Name</th>
                                    <th>Template Title</th>
                                    <th>Created By</th>
                                    <th>Date/Time Created</th>
                                    <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="checker" id="uniform-checkbox2"><span><input type="checkbox" name="checkbox2" id="checkbox2" style="opacity:0"></span></div></td>
                                            <td class="center">Channister Tatum</td>
                                            <td class="center">Civil Case Cover Sheet</td>
                                            <td class="center">Tyrone Fernandez</td>
                                            <td class="center">02/10/2013 10:00AM</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="checker" id="uniform-checkbox2"><span><input type="checkbox" name="checkbox2" id="checkbox2" style="opacity:0"></span></div></td>
                                            <td class="center">Tirong Puruntong</td>
                                            <td class="center">Summons</td>
                                            <td class="center">Christian Buela</td>
                                            <td class="center">01/10/2013 9:00PM</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="document-archiving.html"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="checker" id="uniform-checkbox2"><span><input type="checkbox" name="checkbox2" id="checkbox2" style="opacity:0"></span></div></td>
                                            <td class="center">Vlad the Big</td>
                                            <td class="center">Summons Additional Parties</td>
                                            <td class="center">Vladimer Mansanas</td>
                                            <td class="center">01/10/2013 10:00PM</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="document-archiving.html"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <td class="center">
                                    <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> Restore all</a>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="templates">
                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header well" data-original-title>
                                <h2><i class="icon-briefcase"></i></h2>
                            </div>
                            <div class="box-content">
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                            <th><form id="form1" name="form1" method="post" action="">
                                        <div class="checker" id="uniform-checkbox"><span><input type="checkbox" name="checkbox" id="checkbox" style="opacity:0"></span></div>
                                        <label for="checkbox"></label>
                                    </form>
                                    </th>
                                    <th>Template Title</th>
                                    <th>Versions</th>
                                    <th>Modified By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div class="checker" id="uniform-checkbox2"><span><input type="checkbox" name="checkbox2" id="checkbox2" style="opacity:0"></span></div></td>
                                            <td class="center">Civil Case Cover Sheet</td>
                                            <td class="center">1.0.0</td>
                                            <td class="center">Juan Dela Cruz</td>
                                            <td class="center">Inactive</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="checker" id="uniform-checkbox2"><span><input type="checkbox" name="checkbox2" id="checkbox2" style="opacity:0"></span></div></td>
                                            <td class="center">Summons</td>
                                            <td class="center">1.0.0</td>
                                            <td class="center">Pedro Santos</td>
                                            <td class="center">Inactive</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div class="checker" id="uniform-checkbox2"><span><input type="checkbox" name="checkbox2" id="checkbox2" style="opacity:0"></span></div></td>
                                            <td class="center">Summons Additional Parties</td>
                                            <td class="center">1.0.0</td>
                                            <td class="center">Estong Makisig</td>
                                            <td class="center">Inactive</td>
                                            <td class="center">
                                                <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <td class="center">
                                    <a class="btn btn-group" href="#"> <i class="icon-refresh icon-black"></i> Restore all</a>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../LawFirm/application/views/footer.php'); ?>