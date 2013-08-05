<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>Forgotten your password?</h2>
    </div>
</div>
<div class="row-fluid">
    <div class="well ">
        <div class="alert alert-info" style="font-family: arial; font-weight: lighter">
           <h4>Change your password in three easy steps. This helps to keep your new password secure.<br>
               <ul >
                <li>
                    <p>Fill in your email address below.</p>
                </li>
                 <li>
                     <p>We’ll email you a temporary code.</p>
                </li>
                 <li>
                     <p>Use the code to change your password on our secure website.</p>
                </li>
            </ul>
           </h4>
            
        </div>
        <form class="form-horizontal" action="<?php echo base_url() ?>home" method="post">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="focusedInput">Email Address:</label>
                    <div class="controls">
                        <input class="input-xlarge focused" id="focusedInput" type="text" value=""><br>
                        <p style="font-size: x-small">
                        Type in the email address you used when you registered with LawFirm. 
                        Then we’ll email a code to this address.</p>
                    </div>
                    <div class="control-group">
                    
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>