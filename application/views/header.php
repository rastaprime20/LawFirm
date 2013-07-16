
<!DOCTYPE html>
<base href="<?php echo base_url(); ?>">
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <title>Online Law Firm System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman">

        <!-- The styles -->
        <link id="bs-css" href="  css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        
        </style>
        <link href="  css/bootstrap-responsive.css" rel="stylesheet">
        <link href="  css/charisma-app.css" rel="stylesheet">
        <link href="  css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='  css/fullcalendar.css' rel='stylesheet'>
        <link href='  css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='  css/chosen.css' rel='stylesheet'>
        <link href='  css/uniform.default.css' rel='stylesheet'>
        <link href='  css/colorbox.css' rel='stylesheet'>
        <link href='  css/jquery.cleditor.css' rel='stylesheet'>
        <link href='  css/jquery.noty.css' rel='stylesheet'>
        <link href='  css/noty_theme_default.css' rel='stylesheet'>
        <link href='  css/elfinder.min.css' rel='stylesheet'>
        <link href='  css/elfinder.theme.css' rel='stylesheet'>
        <link href='  css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='  css/opa-icons.css' rel='stylesheet'>
        <link href='  css/uploadify.css' rel='stylesheet'>
        <link rel="shortcut icon" href="  img/favicon.ico">

    </head>

    <body>
        
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
            <!-- topbar starts -->
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- user dropdown starts -->
                        <div class="btn-group pull-right" >
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i><span class="hidden-phone">ChanPrimeBig</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <!-- user dropdown ends -->


                    </div>
                </div>
            </div>
            <!-- topbar ends -->

        <?php } ?>
        <div class="container-fluid">

            <div class="row-fluid">

                <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

                    <!-- left menu starts -->
                    <div class="span2 main-menu-span">
                        <div class="well nav-collapse sidebar-nav">
                            <ul class="nav nav-tabs nav-stacked main-menu">
                                <li class="nav-header hidden-tablet">Main</li>
                                <li><a class="ajax-link" href="<?php base_url();?>home"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
                                <li><a class="ajax-link" href="<?php base_url();?>template"><i class="icon-list-alt"></i><span class="hidden-tablet"> Templates</span></a></li>
                                <li><a class="ajax-link" href="<?php base_url() ?>user"><i class="icon-user"></i><span class="hidden-tablet"> Accounts</span></a></li>
                                <li><a class="ajax-link" href="<?php base_url() ?>login"><i class="icon-user"></i><span class="hidden-tablet"> Log out</span></a></li>
                            </ul>

                        </div><!--/.well -->

                    </div><!--/span-->
                    <!-- left menu ends -->



                    <div id="content" class="span10">
                        <!-- content starts -->
                        <div class="row-fluid">
                            <div class="span12">
                                <ul class="breadcrumb">
                                    <li>
                                        <a href="<?php echo base_url();?>home">Home</a> <span class="divider">/</span>
                                    </li>
                                    <li>
                                        <a href="#">Blank</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    
                       
                    <?php } ?>
                   