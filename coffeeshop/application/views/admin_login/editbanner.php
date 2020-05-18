<?php
include ("header.php");
include ("rightmenu.php");

?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                       
                        <h4 class="page-title">Manage Banner</h4>
                      <?php echo form_open_multipart(site_url('admin/editbanner')); ?>
                      <?php

                      foreach($fetch as $row) :
                      ?>
                            
							 <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Heading</label>
                                       <?php $heading=array(
												'type'=>'text',
												'class'=>'form-control',
												'id'=>'contentid',
												'name'=>'heading',
												'required'=>"",
									       'value'=>$row['heading']
									);
									echo form_input($heading);
									?>
                                    </div>
                                </div>
                            </div>
                            <?php $content=array(
                        'type'=>'hidden',
                        'class'=>'form-control',
                        'id'=>'contentid',
                        'name'=>'id',
                        'required'=>"",
                         'value'=>$row['id']
                  );
                  echo form_input($content);
                  ?>
							 <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Content</label>
                                       <?php $content=array(
												'type'=>'text',
												'class'=>'form-control',
												'id'=>'contentid',
												'name'=>'content',
												'required'=>"",
									       'value'=>$row['content']
									);
									echo form_input($content);
									?>
                                    </div>
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <img src="<?php echo base_url();?>upload/<?php echo $row['image'];?>" style="height: 120px;width: 120px;">
                                       <?php $image=array(
												'type'=>'file',
												'class'=>'form-control',
                        'name'=>'userfile'
												
									
									);
									echo form_input($image);
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
                          <?php endforeach; ?>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
             </div>

    <div class="sidebar-overlay" data-reff=""></div>
   <?php
  
   include ("footer.php");
   ?>