<?php 
if($this->session->userdata('admin') == '') { redirect('admin'); }
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from dreamguys.co.in/preadmin/purple/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jun 2018 06:59:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/admin/img/favicon.png">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/plugins/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/style.css">
    <!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/admin/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="<?php echo base_url(); ?>assets/admin/img/logo.png" width="40" height="40" alt="">
                </a>
            </div>
            <div class="page-title-box pull-left">
                <h3>Preadmin</h3>
            </div>
            <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <ul class="nav user-menu pull-right">
               
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="<?php echo base_url(); ?>assets/admin/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo site_url('admin/logout'); ?>">Logout</a>
						<?php //echo anchor('admin/logout','Logout',array('class'=>'dropdown-item')); ?>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                       <a class="dropdown-item" href="<?php echo site_url('admin/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>