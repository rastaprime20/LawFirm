<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>Law Firm</h2>
    </div>
</div>
<div class="row-fluid"> 
    <div class="well span5 center login-box">
        <div class="alert alert-info">
            Please change your password
        </div>
        <form class="form-horizontal" action="<?php echo base_url(); ?>loginforgotpassword/update" method="post">
            <fieldset>

                <?php if ((isset($email_hash)) && (isset($email_code))) : ?>
                    <input type="hidden" value="<?php echo $email_hash ?>" name="email_hash"/>
                    <input type="hidden" value="<?php echo $email_code ?>" name="email_code"/>

                <?php endif ?>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Email:</label>
                        <div class="controls">
                            <input class="input-xlarge focused" id="focusedInput" name="email" type="email" value="<?php echo $email; ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">New Password:</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="password" id="focusedInput" type="password" value="<?php echo set_value('password') ?>"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Confirm Password:</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="password_conf" id="focusedInput" type="password" value="<?php echo set_value('password_conf') ?>" />
                        </div>
                    </div>
             
                
                <p class="center span5">
                    <button type="submit" class="btn btn-primary">Save</button>
                </p>
                <?php
                echo validation_errors('<p class ="error">');
                if ((isset($error)) && (isset($admin_email)))
                    {
                    echo '<p class="error">' . $error . '&nbsp;' . $admin_email . '</p>';
                    }
                ?>
            </fieldset>
        </form>

    </div>
</div>