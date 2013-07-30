<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i>Accounts</h2>
        </div>
        <div class="box-content">
            <div class="box-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#info">Civil Case Sheet</a></li>
                    <li><a href="#custom">Summons</a></li>
                    <li><a href="#messages">POS4A</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div style="height:100%;width:100%"class="tab-pane " id="info">
                        <iframe style="height:100%;width:100%" src="Doctemplates/new.pdf" type="application/pdf"></iframe>
                    </div>
                    <div style="height:100%;width:100%" class="tab-pane active" id="custom">
                        <iframe style="height:100%;width:100%"src="Doctemplates/example-submittable.pdf" type="application/pdf"></iframe>
                    </div>
                    <div style="height:100%;width:100%"class="tab-pane" id="messages">
                        <iframe style="height:100%;width:100%" src="Doctemplates/ab.pdf" type="application/pdf"></iframe>
                    </div>
                </div>
            </div>
            <form class="form-horizontal">
                <fieldset>
                    <div class="control-group">
                        <div class="controls" style="margin-left:5%">
                            <label class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                &nbsp;Insert the entered information to all templates with the same fields
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                                <input class="btn btn-primary" data-toggle="modal"href="#excludedModals" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Specify templates to be excluded
                            </label>
                        </div>
                        <a data-dismiss="modal" class="btn btn-primary" href="#myModal4" data-toggle="modal" style="margin-left:95%">Save</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div class="modal hide fade" id="excludedModals">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h3>Template(s) to be excluded</h3>
    </div>
    <div class="modal-body">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th><form id="form1" name="form1" method="post" action="">
                <input type="checkbox" name="checkbox" id="checkbox" />
                <label for="checkbox"></label>
            </form>
            </th>
            <th>Template Name</th>
            <th>Version</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Civil Case Sheet</td>
                    <td class="center">Version 1.0</td>
                    <td> <button type="submit" class="btn btn-primary">Exclude</button> </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">Summons</td>
                    <td class="center">Version 5.0</td>
                    <td> <button type="submit" class="btn btn-primary">Exclude</button> </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                    <td class="center">POS4A</td>
                    <td class="center">Version 7.0</td>
                    <td> <button type="submit" class="btn btn-primary">Exclude</button> </td>
                </tr>
            </tbody>
        </table>
        <a href="#" class="btn btn-primary" data-dismiss="modal">Exclude</a>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn btn-primary" data-dismiss="modal">Done</a>
    </div>
</div>