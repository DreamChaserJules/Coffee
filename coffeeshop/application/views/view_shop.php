<?php
include_once ("header.php");
?>
<section class="breadcrumb-blog-version-one">
	<div class="single-bredcurms" style="background-image:url('<?php echo base_url();?>assets/images/bercums/package-Version-01.jpg');">
	   <div class="container">
		   <div class="row">
			   <div class="col-sm-12 col-md-12">
				 <div class="bredcrums-content">
					 <h2>Coffee Shop</h2>
				</div>
			</div>
		</div>
	</div>
</div>
</section><!-- blog breadcrumb version one end here -->


<section class="section-paddings popular-country">
	<div class="container">
		<div class="col-md-6">
			<table class="table table-bordered">
				<tr>
					<th>Shop Name</th>
					<th><?php echo $shopdata[0]['name']; ?></th>	
				</tr>
				<tr>
					<th>Shop Review</th>
					<th><?php echo $shopdata[0]['reviewer']; ?></th>	
				</tr>
			</table>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title-version-2-black text-center">
					<h2>Details</h2>
					<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>-->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="destination-countrys">
					<div class="tab-content" id="tab-content2">
						<!-- Asia tab content start -->
						
						<div class="">
							<div class="row">
								
								<div class="col-sm-3 col-md-3 padding-bottom">
									<div class="single-country">
										
											<a href="">
												<img src="<?php echo base_url(); ?>upload/<?php echo $arrData[0]['image'];?>" style="height: 250px;width: 100%" alt="" class="img-responsive img-rounded">
											</a>
										
									</div>
								</div>
								<div class="col-sm-3 col-md-3 padding-bottom">
									<span><?php echo $arrData[0]['content'];?></span>
								</div>
								
							</div>
						</div> <!-- Asia tab content end -->


					
					</div>
				</div> <!-- tab content end -->

			</div>


			<div class="row" style="line-height: 3;">
				<div class="col-md-12">
					<p>User Comment</p>
					<?php foreach ($comment as $key => $value) { ?>
						<p><?php echo $value['comment'];  ?></p>
					<?php } ?>
				</div>	
			</div>	
			<div class="row" style="line-height: 9;">
				<div class="col-md-12">
					<p>Add Comment</p>
					<form action="<?php echo base_url('welcome/addcomment');  ?>" method="post">
						<div class="form-group">
							<input type="hidden" name="cat_id" value="<?php echo $cat_id;  ?>">
							<textarea name="comment" rows="6" placeholder="Add  Comment" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-sm"><i class="fa fa-send"></i>Submit</button>
						</div>
					</form>
				</div>
			</div>

			
		</div>
	</div>
</section> <!-- most popular destination end here -->



<?php
include_once ("footer.php");
?>