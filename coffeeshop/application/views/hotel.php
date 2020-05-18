<?php
include_once ("header.php");
?>
<!-- blog breadcrumb version one strat here -->
<section class="breadcrumb-blog-version-one">
	<div class="single-bredcurms" style="background-image:url('<?php echo base_url();?>assets/images/bercums/Hotels-Version-02.jpg');">
	 <div class="container">
		 <div class="row">
			 <div class="col-sm-12">
			   <div class="bredcrums-content">
			   <h2>Services</h2>
			   <ul>
				<li><a href="index.html">Home</a></li>
				<li class="active"><a href="hotel.html">Service</a></li>
			</ul>
			</div>
			 </div>
		 </div>
	 </div>
	</div>
</section><!-- blog breadcrumb version one end here -->

<!-- popular destination strat -->
<section class="blog-contents-version-one pt-100 pb-70">
	<div class="container">
		<div class="row">
			<!-- single hotels -->
			<?php
			foreach ($service_row as $row) {
				
			?>
			<div class="col-md-4 col-sm-6 co-lxs-12 single-item">
				<div class="single-hotels">
					<div class="hotel-image">
						<img src="<?php echo base_url();?>upload/<?php echo $row['image'];?>" alt="" class="border-raduis-3">
					</div>
					<div class="hotel-description">
						<h4><?php echo $row['heading'];?></h4>
						<p><?php echo $row['content'];?></p>
						<!--<div class="hotel-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>-->
						<div class="hotet-book-btn">
							<a href="<?php echo site_url('welcome/servicedetail')?>?id=<?php echo $row['id'];?>" class="travel-primary-btn hvr-shutter-out-horizontal">More details</a>
						</div>
					</div>
				</div>
			</div><!--End single hotels -->
<?php
}
?>
			</div>

		<div class="row">
			<!-- pagination start here -
			<div class="col-sm-12 text-center">
				<ul class="pagination">
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a>
					</li>
					<li><a href="#">2</a>
					</li>
					<li><a href="#">3</a>
					</li>
				</ul>
			</div><!-- pagination end here -->
		</div>
	</div>
</section><!-- single popular destination  end-->

<?php
include_once ("footer.php");
?>