<?php
include ("header.php");
include ("rightmenu.php");
?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h4 class="page-title">Manage  Shop Name</h4>
                      <?php echo form_open(site_url('admin/editgalcat')); ?>
					  <?php foreach($fetch as $data) :?>
                <?php $content=array(
                        'type'=>'hidden',
                        'id'=>'contentid',
                        'name'=>'id',
                        'class'=>'form-control',
                        'value'=>$data['id']
                  );
                  echo form_input($content);
                  ?>
							 <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                       <?php $content=array(
												'type'=>'text',
												'id'=>'contentid',
												'name'=>'cat',
												'class'=>'form-control',
												'value'=>$data['name']
									);
									echo form_input($content);
									?>
                                    </div>

                                    <div class="form-group">
                                      <label>Add Review</label>
                                      <textarea class="form-control" name="reviewer" >
                                        <?php  echo $data['reviewer']; ?>
                                      </textarea>
                                    </div>
                                </div>
                            </div>
							 <?php
							 endforeach;
							 ?>
                            <div class="row">
                                <div class="col-sm-12 float-left m-t-20">
                                  <?php $submit=array(
												'type'=>'submit',
												'class'=>'form-control1 btn btn-primary',
												'id'=>'submit',
												'name'=>'submit',
												'value'=>'Update'
												
									
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