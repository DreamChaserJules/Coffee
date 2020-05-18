<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/admin/img/favicon.png">
    <title>Preadmin - Bootstrap Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/style.css">
  
</head>

<body>
    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title">Login</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="index.php"><img src="<?php echo base_url(); ?>assets/admin/img/logo2.png" alt="Preadmin"></a>
                        </div>
                        <?php echo form_open("admin/login");?>
                            <div class="form-group form-focus">
                                <label class="focus-label">Username or Email</label>
								<?php echo form_input(array('class'=>'form-control floating','type'=>'text','name'=>'username'));?>
                           
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">Password</label>
                              <?php echo form_input(array('class'=>'form-control floating','type'=>'password','name'=>'password'));?>
                            </div>
                            <div class="form-group text-center">
                               
								<?php echo form_submit(array('class'=>'btn btn-primary btn-block account-btn','type'=>'submit','name'=>'submit','value'=>'Login'));?>
                            </div>
                            
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
           
            
	   
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>
</body>


<!-- Mirrored from dreamguys.co.in/preadmin/purple/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jun 2018 07:00:51 GMT -->
</html>