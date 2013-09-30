<!DOCTYPE html>
<base href=<?php echo base_url(); ?>>
<?php
$fullname = $this->session->userdata('firstname'). " " . $this->session->userdata('lastname') ;
?>
<html lang=en>
    <head>
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
        <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
        <META HTTP-EQUIV="EXPIRES" CONTENT=0>
        <?php header("Cache-Control: no-store, no-cache, must-revalidate"); ?>
        <meta charset=utf-8>
        <title>Online Law Firm System</title>
        <link id=bs-css href="  css/bootstrap-cerulean.css" rel=stylesheet>
        <style type=text/css>body{padding-bottom:40px}.sidebar-nav{padding:9px 0}</style>
        <script src=<?php echo base_url(); ?>"http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src=<?php echo base_url(); ?>"http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script src=<?php echo base_url(); ?>"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <link href=<?php echo base_url(); ?>"  css/bootstrap-responsive.css" rel=stylesheet>
        <link href=<?php echo base_url(); ?>"  css/charisma-app.css" rel=stylesheet>
        <link href=<?php echo base_url(); ?>"  css/jquery-ui-1.8.21.custom.css" rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/fullcalendar.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/fullcalendar.print.css' rel=stylesheet media=print>
        <link href=<?php echo base_url(); ?>'  css/chosen.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/uniform.default.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/colorbox.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/jquery.cleditor.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/jquery.noty.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/noty_theme_default.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/elfinder.min.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/elfinder.theme.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/jquery.iphone.toggle.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/opa-icons.css' rel=stylesheet>
        <link href=<?php echo base_url(); ?>'  css/uploadify.css' rel=stylesheet>
        <link rel=<?php echo base_url(); ?>"shortcut icon" href="  img/favicon.ico">
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
                        <div class="top-nav nav-collapse in collapse" style="margin-left: 77%;">
                                <ul class="nav">
                                    <h2 style="color:white;">Welcome!</h2>
                                </ul>
                        </div>
                        <div class="btn-group pull-right">
                            <a class="btn dropdown-toggle" data-toggle=dropdown href=#>
                                <i class=icon-user></i>
                                <span class=hidden-phone><?php echo sprintf($fullname); ?></span>
                                <span class=caret></span>
                            </a>
                            <ul class=dropdown-menu>
                                <li><a href=#>Profile</a></li>
                                <li class=divider></li>
                                <li><a href=<?php echo base_url(); ?>logout>Logout</a></li>
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
                                <li><a class=ajax-link href=<?php echo base_url(); ?>clients><i class=icon-user></i><span class=hidden-tablet> Clients</span></a></li>
                                <li><a class=ajax-link href=<?php echo base_url(); ?>uuser><i class=icon-user></i><span class=hidden-tablet> Accounts</span></a></li>
                                <li><a class=ajax-link href=<?php echo base_url(); ?>archive><i class=icon-briefcase></i><span class=hidden-tablet> Archive</span></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <?php } ?>