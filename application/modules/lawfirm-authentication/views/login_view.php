<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>Law Firm</h2>
    </div>
</div>
<div class="row-fluid"> 
    <div class="well span5 center login-box">
        <div class="alert alert-info">
            Please login with your Username and Password.
        </div>
        
        <?php if (isset($_SESSION['loginerror'])): ?>
            <div class="alert alert-error">
                <?php echo ($_SESSION['loginerror']) ?>
            </div>
        <?php endif; ?>
        
        <form class="form-horizontal" action="<?php echo base_url(); ?>login/validate_credentials" method="post">
            <fieldset>
                <div class="input-prepend" title="Username" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span><input class="input-large span10" name="username" id="username" type="text" placeholder="Username" 
                    value = "<?php if (isset($_COOKIE["remember_user"]))
                                   {
                                        echo $_COOKIE["remember_user"];
                                   }
                             ?>">
                </div>
                
                <div class="clearfix"></div>
                <div class="input-prepend" title="Password" data-rel="tooltip">
                    <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="Password"
                    value = "<?php if (isset($_COOKIE["remember_password"]))
                                   {
                                        echo $_COOKIE["remember_password"];
                                   }
                             ?>">
                </div>
                
                <div class="clearfix"></div>
                <div class="input-prepend">
                    <label class="remember" for="remember"><input type="checkbox" id="remember" name ="rememberMe"  
                    <?php   if(isset($_COOKIE['remember_user'])) 
                            {      
                                echo 'checked="checked"';
                            }
                            else 
                            {
                                echo '';
                            }
                    ?>/>Remember me</label>
                </div>
                
                <div class="clearfix"></div>
                <div class="input-prepend">
                    <label class="forgotpassword" for="remember"><a href="<?php echo base_url(); ?>loginforgotpassword/forget">Forgot Password?</a></label>
                </div>
                
                <div class="clearfix"></div>
                <p class="center span5">
                    <button type="submit" class="btn btn-primary">Login</button>
                </p> 
            </fieldset>     
        </form>
    </div>
</div>