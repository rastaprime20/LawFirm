<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>Forgot password?</h2>
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
                        <p>We’ll email you a link on where you can change your password.</p>
                    </li>
                    <li>
                        <p>Then will redirect you to the change password page</p>
                    </li>
                </ul>
            </h4>

        </div>
        <form class="form-horizontal" action="<?php echo base_url() ?>loginforgotpassword/forget" method="post">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="focusedInput">Email Address:</label>
                    <div class="controls">
                        <input class="input-xlarge focused" id="email" name="email" type="text" value="<?php echo set_value('email') ?>"><br>
                        <p style="font-size: x-small">
                            Type in the email address you used when you registered with LawFirm. 
                            Then we’ll email a code to this address.</p>
                    </div>
                    <?php
                    echo validation_errors('<p class ="error">');
                    if (isset($error)) {
                        echo '<p class="error">' . $error . '</p>';
                    }
                     ?>
                     
                </div>
                <div class="form-actions">
                    <input type="submit" class="btn btn-primary" value="Reset" />
                </div>
            </fieldset>
        </form>
    </div>
</div>