<?php
session_start();
include("../../../db/connection.php");
$obj=new connection();
include("bind.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.html" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts  -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <!-- Switchery -->
    <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Feature detection -->
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
	
	<link href="../themes/style.css" rel="stylesheet" />
	
	<script type="text/javascript" src="ajax.js"></script>
	<script type="text/javascript" src="../validation/validation.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/vendor/html5shiv.js"></script>
    <script src="assets/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<section id="main-wrapper" class="theme-dark-full">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="../home.php" class="logo">
                     
                    <span>MERCEDES BENZ</span><img src="../symbol3 - Copy.png" style="position:relative;margin-left:175px;top:-29px; width:40px;"/></a>            </div>
            <!--logo end-->
            <ul class="nav navbar-nav navbar-left">
                <li class="toggle-navigation toggle-left">
                    <button class="sidebar-toggle" id="toggle-left">
                        <i class="fa fa-bars"></i>
                    </button>
                </li>
                <li class="toggle-profile hidden-xs">
                    <button type="button" class="btn btn-default" id="toggle-profile">
                        <i class="icon-user"></i>
                    </button>
                </li>
                <li class="hidden-xs hidden-sm">
                    
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown profile hidden-xs">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="meta">
                            <span class="avatar">
                                
                            </span>
                        <span class="text" style="text-transform:uppercase;"><?php echo $_SESSION["name"]; ?></span>
                        <span class="caret"></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight" role="menu">
                         
                       <!-- <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-cog"></i>
                                </span>Settings</a>
                        </li>
                        <li class="divider"></li>-->
                        <li>
                            <a href="../../../web1/login.php">
                                <span class="icon"><i class="fa fa-sign-out"></i>
								<?php
									//session_destroy();
								?>
                                </span>Logout</a>
                        </li>
                    </ul>
                </li>
                <li class="toggle-fullscreen hidden-xs">
                    <button type="button" class="btn btn-default expand" id="toggle-fullscreen">
                        <i class="fa fa-expand"></i>
                    </button>
                </li>
                <li class="toggle-navigation toggle-right">
                    <button class="sidebar-toggle" id="toggle-right">
                        <i class="fa fa-comment-o"></i>
                    </button>
                </li>
            </ul>
        </header>
        <!--sidebar left start-->
        <aside class="sidebar sidebar-left">
            <div class="sidebar-profile">
                <div class="avatar">
                                         
                </div>
                <div class="profile-body">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><h4 style="text-transform:uppercase;"><?php echo $_SESSION["name"]; ?></h4></a>
                    <small class="title"></small>
                </div>
            </div>
            <nav>
                
                <ul class="nav nav-pills nav-stacked">
				                
                
                    <li>
                        <a href="userhome.php" title="Dashboard">
                            <i class="fa  fa-fw fa-file-text"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="../Home.php" title="Dashboard">
                            <i class="fa  fa-fw fa-file-text"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="" title="Dashboard">
                            <i class="fa  fa-fw fa-file-text"></i>Booking
                        </a>	
                           <ul class="nav-sub">
						   
                            <li><a href="../aqua/enginetopup.php" title="" >Engine Top-Up Booking</a>
                            </li>                             
                            <li><a href="../aqua/carpaint.php" title="" >Car Re-Paint Booking</a>
                            </li>
                            <li><a href="../aqua/carwash.php" title="" >Car Wash Booking</a>
                            </li>     
                            <li><a href="servbooking.php.php" title="" >Genaral Service Booking</a>
                            </li> 
                            <li><a href="bookingstatus.php" title="" >View Bookings Status</a>
                            </li> 	 
							<li><a href="servicestatus.php" title="" >View Service Status</a>
                            </li> 
							 	
                    </li>
					
				 </ul>
					
                    <!--<li class="nav-dropdown">
                        <a href="" title="Forms">
                            <i class="fa  fa-fw fa-edit"></i> Lab Management
                        </a>
                        <ul class="nav-sub">
                            <li><a href="lab.php" title="">Assign Lab</a>
                            </li>
                            <li><a href="viewlab.php" title="">View Lab</a>
                            </li>  
                            <li><a href="systemno.php" title="">Add Systems</a>
                            </li>  
                            <li><a href="browsedetail.php" title="">Browse Details</a>
                            </li>    
                            <li><a href="viewbrowsedetail.php" title="">View Browse Details</a>
                            </li>                            
                        </ul>
                    </li>-->
					<li>
                        <a href="../../../web1/login.php" title="Change Password">
                            <i class="fa  fa-fw fa-edit"></i> Login out 
                        </a>
                    </li>
                  
            </nav>
             
        </aside>
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <div class="pageheader dark">
                <h1></h1>
                <div class="breadcrumb-wrapper hidden-xs">
                    <span class="label"></span>
                    <ol class="breadcrumb">
                        <li><a href="#"></a>
                        </li>
                        <li></li>
                        <li class="active"></li>
                    </ol>
                </div>
            </div>
            <section id="main-content" class="animated fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"></h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-expand"></i>
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>                                </div>
                            </div>
                            <div class="panel-body">
							 <form name="form1" enctype="multipart/form-data" method="post">