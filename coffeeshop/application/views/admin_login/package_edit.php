<?php
include ("header.php");
include ("rightmenu.php");

?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h4 class="page-title">Manage service</h4>
                        <?php echo form_open_multipart('tour_c/package_update'); ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Heading</label> 
										<?php $head=array(
												'type'=>'text',
												'class'=>'form-control',
												'id'=>'headid',
												'name'=>'heading'
												'value'=>'$row["heading"]'
									
									);
									echo form_input($head);
									?>
										
                                        <input type="text" value="<?php echo $row['heading'];?>" placeholder="Enter Heading...." name="heading" class="form-control">
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
												'name'=>'content'
												'value'=>"$row['content']"
									
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
									
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-center m-t-20">
								 <?php $submit=array(
												'type'=>'submit',
												'class'=>'form-control',
												'id'=>'submit',
												'name'=>'submit',
												'value'=>'Update'
												
									
									);
									echo form_input($submit);
									?>
                                 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
             </div>

    <div class="sidebar-overlay" data-reff=""></div>
   <?php
  
   include ("footer.php");
   ?>