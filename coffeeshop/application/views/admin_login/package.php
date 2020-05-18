<?php
include ("header.php");
include ("rightmenu.php");

?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <?php if(isset($error))
{
    echo $error;
}?>
                        <h4 class="page-title">Manage Package</h4>
                      <?php echo form_open_multipart(site_url('admin/package')); ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <select name="cat" class="form-control" required="">
                                        <label>Heading</label>
                                      <option value="">--- Select ---</option>
                                      <?php  foreach($fetch as $row) : ?>
                                      <option required="" value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                      <?php
                                  endforeach;
                                      ?>
                                  </select>
                                  </div>
                            </div>                           
                            </div>
                             <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Heading</label>
                                       <?php $content=array(
                        'type'=>'text',
                        'class'=>'form-control',
                        'id'=>'contentid',
                        'name'=>'heading',
                        'required'=>""
                  
                  );
                  echo form_input($content);
                  ?>
                                    </div>
                                </div>
                            </div>
							 <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Content</label>
                                       <?php $content=array(
												'type'=>'text',
												'class'=>'form-control',
												'id'=>'contentid',
												'name'=>'content',
												'required'=>""
									
									);
									echo form_input($content);
									?>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Price</label>
                                       <?php $content=array(
                        'type'=>'text',
                        'class'=>'form-control',
                        'id'=>'contentid',
                        'name'=>'price',
                        'required'=>""
                  
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
                                       <?php $image=array(
												'type'=>'file',
												'class'=>'form-control',
												
												'name'=>'userfile',
												'required'=>""
												
									
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
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
             </div>

    <div class="sidebar-overlay" data-reff=""></div>
   <?php
  
   include ("footer.php");
   ?>