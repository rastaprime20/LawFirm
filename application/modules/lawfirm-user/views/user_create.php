<div id=content class=span10>
<div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>user>Accounts</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>user/create>Create Account</a> <span class=divider>/</span>
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
                <form action="<?php echo base_url()?>user" method="post"  class="form-horizontal">
                    <fieldset>
                       <legend><h4>Create Accounts</h4></legend>
                        <div class="row-fluid" >
                           
                            <div class="span5">
                                 <h4 style="text-align:center;color:#4F5155">Personal Information</h4><br>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">State Bar No.:</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">Last Name:</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">First Name:</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">Middle Name:</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                               <h4 style="text-align:center;color:#4F5155">Address Information</h4><br>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">Street:</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">City:</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">Province:</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                            </div>
                            
                            <div class="span5">
                               <h4 style="text-align:center;color:#4F5155">Account Information</h4><br>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">Username:</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">Default password:</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                               <div class="control-group">
                                  <label class="control-label" for="focusedInput">Created By :</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                                <div class="control-group">
                                  <label class="control-label" for="focusedInput">Date Created :</label>
                                  <div class="controls">
                                      <input class="input-xlarge focused" id="focusedInput" type="text" value="">
				  </div>
			       </div>
                                <div class="control-group">
                                  <label class="control-label" for="focusedInput">Status:</label>
                                  <div class="controls">
                                      <input type="checkbox" checked="checked" id="inlineCheckbox1" value="option1" >Active
				  </div>
			       </div>
                            </div>               
                         </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url()?>user" class="btn" data-dismiss="modal">Cancel</a>
                <a href="<?php echo base_url()?>user" class="btn" data-dismiss="modal">Save</a>
    </div>
        </div>
    </div>
</div>