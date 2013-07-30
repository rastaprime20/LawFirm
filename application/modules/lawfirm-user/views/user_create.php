<div class="row-fluid">
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-list-alt"></i>Accounts</h2>
            </div>
            <div class="box-content"style="display: block;">
                <form action="<?php echo base_url() ?>user" method="post">
                    <fieldset>
                        <div style="float:left;text-align:right">
                            <label value="lblEmpIdNo">Employee ID No.:&nbsp;</label><br>
                            <label value="lblEmployeeLastName">Employee Last Name:&nbsp;</label><br>
                            <label value="lblEmployeeFirstName">Employee First Name:&nbsp;</label><br>
                            <label value="lblEmployeeMiddleInitial">Employee Middle Initial:&nbsp;</label><br>
                            <label value="lblEmployeeMiddleInitial">Employee Position:&nbsp;</label><br>
                            <label value="lblDefaultusername">Employee Username:&nbsp;</label><br>
                            <label value="lblDefaultpassword">Employee Default password:&nbsp;</label><br>
                            <label value="lblCreatedby">Created By :&nbsp;</label><br>
                            <label value="lblDateCreated">Date Created :&nbsp;</label>
                            <label value="lblStatus">Status:&nbsp;</label>
                        </div>
                        <div style="float:left;text-align:left">
                            <input class="input-large" name="txtEmpIdNo" id="txtEmpIdNo" type="text" disabled/><br>
                            <input class="input-large" name="txtEmpLastname" id="txtEmpLastname" type="text" /><br>
                            <input class="input-large" name="txtEmpFirstname" id="txtEmpFirstname" type="text" /><br>
                            <input class="input-large" name="txtEmpMidInitial" id="txtEmpMidInitial" type="text" /><br><br>
                            <select class="input-large" name="cmbEmpPosition" id="cmbEmpPosition" <option value="0">index</option>
                                <option value="1">Admin</option>
                                <option value="2">Lawyer</option>
                                <option value="2">Secratery</option>
                            </select><br>
                            <input class="input-large" name="txtEmpUsername" id="txtEmpUsername" type="text" disabled/><br>
                            <input class="input-large" name="txtDefaultPassword" id="txtDefaultPassword" type="text" disabled/><br>
                            <input class="input-large" name="txtCreatedby" id="txtCreatedby" type="text" disabled/><br>
                            <input class="input-large" name="txtDateCreated" id="txtDateCreated" type="text" disabled/><br>
                            <input class="input-large" name="chkStatus" id="txtStatus" type="checkbox" checked="checked"><label value="lblActive">Active</label></input>
                            <div style="text-align:right">
                                <button type="cancel" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>