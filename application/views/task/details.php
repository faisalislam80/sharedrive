<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from responsivewebinc.com/premium/macadmin/post.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 03 Aug 2013 18:00:22 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>Shared Drive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <!-- Stylesheets -->
    <link href="<?php echo www_url(); ?>/style/bootstrap.css" rel="stylesheet">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="<?php echo www_url(); ?>/style/font-awesome.css">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="<?php echo www_url(); ?>/style/jquery-ui.css">
    <!-- Calendar -->
    <link rel="stylesheet" href="<?php echo www_url(); ?>/style/fullcalendar.css">
    <!-- prettyPhoto -->
    <link rel="stylesheet" href="<?php echo www_url(); ?>/style/prettyPhoto.css">
    <!-- Star rating -->
    <link rel="stylesheet" href="<?php echo www_url(); ?>/style/rateit.css">
    <!-- Date picker -->
    <link rel="stylesheet" href="<?php echo www_url(); ?>/style/bootstrap-datetimepicker.min.css">
    <!-- CLEditor -->
    <link rel="stylesheet" href="<?php echo www_url(); ?>/style/jquery.cleditor.css">
    <!-- Uniform -->
    <link rel="stylesheet" href="<?php echo www_url(); ?>/style/uniform.default.css">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" href="<?php echo www_url(); ?>/style/bootstrap-toggle-buttons.css">
    <!-- Main stylesheet -->
    <link href="<?php echo www_url(); ?>/style/style.css" rel="stylesheet">
    <!-- Widgets stylesheet -->
    <link href="<?php echo www_url(); ?>/style/widgets.css" rel="stylesheet">
    <!-- Responsive style (from Bootstrap) -->
    <link href="<?php echo www_url(); ?>/style/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="<?php echo www_url(); ?>/js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo www_url(); ?>/img/favicon/favicon.png">
</head>

<body>









<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- Menu button for smallar screens -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span>Menu</span>
            </a>
            <!-- Site name for smallar screens -->
            <a href="#" class="brand hidden-desktop">Shared Drive</a>

            <!-- Navigation starts -->
            <div class="nav-collapse collapse">

                <!-- Links -->
                <ul class="nav pull-right">
                    <li class="dropdown pull-right">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-user"></i> <?php echo $user_details['username']; ?> <b class="caret"></b>
                        </a>

                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                            <li><a href="#"><i class="icon-cogs"></i> Settings</a></li>
                            <li><a href="./auth/logout/"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</div>

<!-- Header starts -->
<header>
    <div class="container-fluid">
        <div class="row-fluid">

            <!-- Logo section -->
            <div class="span4">
                <!-- Logo. -->
                <div class="logo">
                    <h1><a href="#">Shared <span class="bold">Drive</span></a></h1>
                    <p class="meta">we share something</p>
                </div>
                <!-- Logo ends -->
            </div>

            <!-- Button section -->
            <div class="span4">

                <!-- Buttons -->
                <ul class="nav nav-pills">
                    <!-- Comment button with number of latest comments count -->
                    <li class="dropdown dropdown-big">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="icon-comments"></i> Task <span   class="badge badge-info">6</span>
                        </a>
                    </li>

                    <!-- Message button with number of latest messages count-->
                    <li class="dropdown dropdown-big">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="icon-envelope-alt"></i> Inbox <span class="badge badge-important">6</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <!-- Heading - h5 -->
                                <h5><i class="icon-envelope-alt"></i> Messages</h5>
                                <!-- Use hr tag to add border -->
                                <hr />
                            </li>
                            <li>
                                <div class="drop-foot">
                                    <a href="#">View All</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <!-- Members button with number of latest members count -->
                    <li class="dropdown dropdown-big">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="icon-user"></i> Users <span   class="badge badge-success">6</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
            <!-- Main menu with font awesome icon -->
            <li><a href=""><i class="icon-home"></i> Home</a></li>
            <li><a href=""><i class="icon-desktop"></i> Share Drive</a></li>
        </ul>
    </div>

    <!-- Sidebar ends -->

    <!-- Main bar -->
    <div class="mainbar">

        <!-- Page heading -->
        <div class="page-head">
            <h2 class="pull-left"><i class="icon-home"></i> Add new task</h2>
            <div class="clearfix"></div>
        </div>
        <!-- Page heading ends -->


        <!-- Matter -->

        <div class="matter">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span8">

                        <div class="widget">
                            <div class="widget-head">
                                <div class="pull-left">Task# <?php echo $task[0]->id; ?></div>
                                <div class="widget-icons pull-right">
                                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-content">
                                <div class="padd">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Subject</th>
                                                <th>Description</th>
                                            </tr>
                                            <tr>
                                                <td><?php echo $task[0]->id;?></td>
                                                <td><?php echo $task[0]->subject;?></td>
                                                <td><?php echo $task[0]->description;?></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- post sidebar -->

                    <div class="span4">
                        <div class="widget">
                            <div class="widget-head">
                                <div class="pull-left">Open Task</div>
                                <div class="widget-icons pull-right">
                                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-content">
                                <div class="padd">
                                    <ul>
                                        <?php foreach($open_tasks as $task):?>
                                            <li><?php echo anchor('/task/details/'.$task->id,$task->subject); ?></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                                <div class="widget-foot">
                                </div>
                            </div>
                        </div>


                        <div class="widget">
                            <div class="widget-head">
                                <div class="pull-left">Close Task</div>
                                <div class="widget-icons pull-right">
                                    <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                                    <a href="#" class="wclose"><i class="icon-remove"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget-content">
                                <div class="padd">
                                    <ul>
                                        <?php foreach($closed_tasks as $task):?>
                                            <li><?php echo anchor('/task/details/'.$task->id,$task->subject); ?></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                                <div class="widget-foot">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Matter ends -->

    </div>

    <!-- Mainbar ends -->
    <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <!-- Copyright info -->
                <p class="copy">Copyright &copy; 2012 | <a href="#">Royal Technology</a> </p>
            </div>
        </div>
    </div>
</footer>

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

<!-- JS -->
<script src="<?php echo www_url(); ?>/js/jquery.js"></script> <!-- jQuery -->
<script src="<?php echo www_url(); ?>/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="<?php echo www_url(); ?>/js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="<?php echo www_url(); ?>/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="<?php echo www_url(); ?>/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="<?php echo www_url(); ?>/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

<!-- jQuery Flot -->
<script src="<?php echo www_url(); ?>/js/excanvas.min.js"></script>
<script src="<?php echo www_url(); ?>/js/jquery.flot.js"></script>
<script src="<?php echo www_url(); ?>/js/jquery.flot.resize.js"></script>
<script src="<?php echo www_url(); ?>/js/jquery.flot.pie.js"></script>
<script src="<?php echo www_url(); ?>/js/jquery.flot.stack.js"></script>

<!-- jQuery Notification - Noty -->
<script src="<?php echo www_url(); ?>/js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="<?php echo www_url(); ?>/js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="<?php echo www_url(); ?>/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="<?php echo www_url(); ?>/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="<?php echo www_url(); ?>/js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="<?php echo www_url(); ?>/js/sparklines.js"></script> <!-- Sparklines -->
<script src="<?php echo www_url(); ?>/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="<?php echo www_url(); ?>/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="<?php echo www_url(); ?>/js/jquery.uniform.min.js"></script> <!-- jQuery Uniform -->
<script src="<?php echo www_url(); ?>/js/jquery.toggle.buttons.js"></script> <!-- Bootstrap Toggle -->
<script src="<?php echo www_url(); ?>/js/filter.js"></script> <!-- Filter for support page -->
<script src="<?php echo www_url(); ?>/js/custom.js"></script> <!-- Custom codes -->
<script src="<?php echo www_url(); ?>/js/charts.js"></script> <!-- Charts & Graphs -->
</body>
</html>