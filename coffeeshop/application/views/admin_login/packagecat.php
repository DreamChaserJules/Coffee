<?php
include ("header.php");
include ("rightmenu.php");
?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h4 class="page-title">Manage Package</h4>
                      <?php echo form_open(site_url('admin/packagecat')); ?>
							 <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                       <?php $content=array(
												'type'=>'text',
												'id'=>'contentid',
												'name'=>'cat',
												'class'=>'form-control'
									
									);
									echo form_input($content);
									?>
                                    </div>
                                </div>
                            </div>
							 
                            <div class="row">
                                <div class="col-sm-12 float-left m-t-20">
                                  <?php $submit=array(
												'type'=>'submit',
												'class'=>'form-control1 btn btn-primary',
												'id'=>'submit',
												'name'=>'submit',
												'value'=>'Insert'
												
									
									);
									echo form_input($submit);
									?>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
             </div>

    <div class="sidebar-overlay" data-reff=""></div>
   <?php
  
   include ("footer.php");
   ?>