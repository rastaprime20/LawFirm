<?php
$no_visible_elements = true;
include('../LawFirm/application/views/header.php');
?>
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
        <form class="form-horizontal" action="<?php echo base_url() ?>home" method="post">
            <fieldset>
                <div class="input-prepend" title="Username" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" value="admin" />
                </div>
                <div class="clearfix"></div>
                <div class="input-prepend" title="Password" data-rel="tooltip">
                    <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" value="admin123456" />
                </div>
                <div class="clearfix"></div>
                <div class="input-prepend">
                    <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
                </div>
                <br>
                <div class="input-prepend">
                    <label class="forgotpassword" for="remember"><a href="#">Forgot Password</a></label>
                </div>
                <div class="clearfix"></div>
                <p class="center span5">
                    <button type="submit" class="btn btn-primary">Login</button>
                </p>
            </fieldset>
        </form>
    </div>
</div>
<?php include('../LawFirm/application/views/footer.php'); ?>