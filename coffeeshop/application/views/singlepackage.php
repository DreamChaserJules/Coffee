<?php
include_once ("header.php");

?>
<?php
foreach ($fetch1 as $key) {
	}
?>
<section class="breadcrumb-blog-version-one">
	<div class="single-bredcurms" style="background-image:url('<?php echo base_url();?>assets/images/bercums/package-Version-01.jpg');">
	   <div class="container">
		   <div class="row">
			   <div class="col-sm-12 col-md-12">
				 <div class="bredcrums-content">
					 <h2>Service Detail</h2>
					 <ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href=""><?php echo $key['heading'];?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</section><!-- blog breadcrumb version one end here -->

<section class="section-paddings welcome-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="single-welcome-area">
					<div class="single-imag">
						<img src="<?php echo base_url(); ?>upload/<?php echo $key['image'];?>" alt="" class="img-thumbnail img-responsive">
					</div>
					<div class="overlay-image">
						<img src="<?php echo base_url(); ?>upload/<?php echo $key['image'];?>" alt="" class="img-thumbnail img-responsive">
					</div>
				</div>
			</div> <!-- welcome area left side end -->

			<div class="col-md-6">
				<div class="single-welcome-text">
					<div class="section-title-version-2">
						<h2><?php echo $key['heading'];?></h2>
					(<?php echo $key['price'];?>)
						<div class="welcome-content">
							<p>
								<?php echo $key['content'];?></p>
							<a href="<?php echo site_url('welcome/contact');?>" class="read-more hvr-fade">Contact Us</a>
						</div>
					</div>
				</div>
			</div>  <!-- welcome area right side end -->
		</div>
	</div>
</section> <!-- welcome area start end here -->
	

<?php
include_once ("footer.php");
?>