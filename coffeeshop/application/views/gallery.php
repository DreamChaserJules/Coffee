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
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title-version-2-black text-center">
					<h2>Shop List</h2>
					<!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>-->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="destination-tab-menu">
					<ul class="destination-menu" id="myTab2">
						<?php
						$a=1;
						foreach ($gallerycat_row as $row) {
							
						?>
						<li  class="<?php if($a==1){?>active<?php }?>"><a href="#<?php echo $row['id'];?>" data-easein="fadeIn"><?php echo $row['name'];?></a>
						</li>
						<?php
						$a++;
}
						?>
						
					</ul>
				</div><!-- tab menu end -->

				<div class="destination-countrys">
					<div class="tab-content" id="tab-content2">
						<!-- Asia tab content start -->
						<?php
						$a=1;
						foreach ($gallerycat_row as $row) {
							
						?>
						<div class="tab-pane <?php if($a==1) {?>active<?php }?>" id="<?php echo $row['id']?>">
							<div class="row">
								<?php
								$sel=$this->db->query("select * from gallery where cat_id='$row[id]'");
								$data=$sel->result_array();
								foreach ($data as $key) {
									
								?>
								<div class="col-sm-3 col-md-3 padding-bottom">
									<div class="single-country">
										
											<a href="<?php echo base_url('welcome/view/'.$key['id']); ?>">
												<img src="<?php echo base_url(); ?>upload/<?php echo $key['image'];?>" style="height: 250px;width: 100%" alt="" class="img-responsive img-rounded">
											</a>
												<div class="city-name">
													<span><?php echo $key['content'];?></span>
												<!--	<ul class="tower-bridge">
														<li><?php //echo $key['content'];?></li>
														
													</ul>-->
												</div><!--
												<div class="travel-book-btn">
													<a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Book Now</a>
												</div>-->
										
									</div>
								</div>
								<?php
								$a++;
							}
								?>
							</div>
						</div> <!-- Asia tab content end -->

					<?php
}
					?>
					</div>
				</div> <!-- tab content end -->
			</div>
		</div>
	</div>
</section> <!-- most popular destination end here -->



<?php
include_once ("footer.php");
?>