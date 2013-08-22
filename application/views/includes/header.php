<!DOCTYPE html>
<base href=<?php echo base_url(); ?>>
<?php
$fullname = $this->session->userdata('firstname'). " " . $this->session->userdata('lastname') ;
?>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <title>Online Law Firm System</title>
        <link id=bs-css href="  css/bootstrap-cerulean.css" rel=stylesheet>
        <style type=text/css>body{padding-bottom:40px}.sidebar-nav{padding:9px 0}</style>
        <link href="  css/bootstrap-responsive.css" rel=stylesheet>
        <link href="  css/charisma-app.css" rel=stylesheet>
        <link href="  css/jquery-ui-1.8.21.custom.css" rel=stylesheet>
        <link href='  css/fullcalendar.css' rel=stylesheet>
        <link href='  css/fullcalendar.print.css' rel=stylesheet media=print>
        <link href='  css/chosen.css' rel=stylesheet>
        <link href='  css/uniform.default.css' rel=stylesheet>
        <link href='  css/colorbox.css' rel=stylesheet>
        <link href='  css/jquery.cleditor.css' rel=stylesheet>
        <link href='  css/jquery.noty.css' rel=stylesheet>
        <link href='  css/noty_theme_default.css' rel=stylesheet>
        <link href='  css/elfinder.min.css' rel=stylesheet>
        <link href='  css/elfinder.theme.css' rel=stylesheet>
        <link href='  css/jquery.iphone.toggle.css' rel=stylesheet>
        <link href='  css/opa-icons.css' rel=stylesheet>
        <link href='  css/uploadify.css' rel=stylesheet>
        <link rel="shortcut icon" href="  img/favicon.ico">
    </head>
    <body>
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
            <div class=navbar>
                <div class=navbar-inner>
                    <div class=container-fluid>
                        <a class="btn btn-navbar" data-toggle=collapse data-target=.top-nav.nav-collapse,.sidebar-nav.nav-collapse>
                            <span class=icon-bar></span>
                            <span class=icon-bar></span>
                            <span class=icon-bar></span>
                        </a>
                        <div class="btn-group pull-right">
                            <a class="btn dropdown-toggle" data-toggle=dropdown href=#>
                                <i class=icon-user></i>
                                <span class=hidden-phone><?php echo sprintf($fullname); ?></span>
                                <span class=caret></span>
                            </a>
                            <ul class=dropdown-menu>
                                <li><a href=#>Profile</a></li>
                                <li class=divider></li>
                                <li><a href=<?php echo base_url();?>login>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class=container-fluid>
            <div class=row-fluid>
                <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
                    <div class="span2 main-menu-span">
                        <div class="well nav-collapse sidebar-nav">
                            <ul class="nav nav-tabs nav-stacked main-menu">
                                <li class="nav-header hidden-tablet">Main</li>
                                <li><a class=ajax-link href=<?php echo base_url(); ?>home><i class=icon-home></i><span class=hidden-tablet> Home</span></a></li>
                                <li><a class=ajax-link href=<?php echo base_url(); ?>template><i class=icon-list-alt></i><span class=hidden-tablet> Templates</span></a></li>
                                <li><a class=ajax-link href=<?php echo base_url(); ?>user><i class=icon-user></i><span class=hidden-tablet> Accounts</span></a></li>
                                <li><a class=ajax-link href=<?php echo base_url(); ?>archive><i class=icon-briefcase></i><span class=hidden-tablet> Archive</span></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <?php } ?>