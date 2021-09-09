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
                     
                    <span>MERCEDES BENZ</span><img src="../symbol3 - Copy.png" style="position:relative;margin-left:175px;top:-29px; width:40px;"/><!--INTERACTIVE--></span></a>            </div>
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
                        <span class="text">Administrator</span>
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
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><h4>Administrator</h4></a>
                    <small class="title"></small>
                </div>
            </div>
            <nav>
                <h5 class="sidebar-header">Navigation</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="adminhome.php" title="Dashboard">
                            <i class="fa  fa-fw fa-file-text"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-dropdown">
                        <a href="" title="Forms">
                            <i class="fa  fa-fw fa-edit"></i> Add Stock
                        </a>
                        <ul class="nav-sub">
                            <li><a href="facultyreg.php" title="">Add Vehicels</a>
                            </li>
                            <li><a href="company.php" title="">Add Accessories</a>
                            </li>
                            
                            <!--<li><a href="addsubject.php" title="">Subject</a>
                            </li>
                            <li><a href="addmodules.php" title="">Modules</a>
                            </li>-->
                        </ul>
                    </li>
                    <li class="nav-dropdown">
                        <a href="" title="Forms">
                            <i class="fa  fa-fw fa-edit"></i> view Details
                        </a>
                        <ul class="nav-sub">
                           
                            <li><a href="userdetails.php" title="">View User Details</a>
                            </li>                             
                            <li><a href="viewcourse.php" title="">View Accessories Details</a>
                            </li>
                            <li><a href="viewvehicels.php" title="">View Vehicels Details</a>
                            </li>     
                            <li><a href="approvevaccancy.php" title="">View Bookings Request</a>
                            </li> 
                            <li><a href="approvedvaccancy.php" title="">View Bookings Details</a>
                            </li> 	 
							<li><a href="servicerqst.php" title="">View Service Request</a>
                            </li> 
							<li><a href="servicedetails.php" title="">View Service Details</a>
                            </li> 	
							<li><a href="carwashlist.php" title="">View Carwash list</a>
                            </li> 
							 <li><a href="repaintlist.php" title="">View Repaint List</a>
                            </li> 	
							 <li><a href="topuplist.php" title="">View Top-Up List</a>
                            </li> 	
							
                             							
                        </ul>
                    </li>
                    </li>
                    <li class="nav-dropdown">
                       
                        
                    </li>
					<li>
                        <a href="changepwd.php" title="Change Password">
                            <i class="fa  fa-fw fa-edit"></i> Change Password
                        </a>
                    </li>
                   </ul>
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