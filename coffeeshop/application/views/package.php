<?php
include_once ("header.php");
?>
<section class="breadcrumb-blog-version-one">
	<div class="single-bredcurms" style="background-image:url('<?php echo base_url();?>assets/images/bercums/package-Version-01.jpg');">
	   <div class="container">
		   <div class="row">
			   <div class="col-sm-12 col-md-12">
				 <div class="bredcrums-content">
					 <h2>Package</h2>
					 <ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="javascript:void(0);">Package Style One</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</section><!-- blog breadcrumb version one end here -->
<style type="text/css">
	.single-package :hover
	{
		color:#f17b37;
		cursor: default;
	}

</style>
<!-- popular destination strat -->
<section class="blog-contents-version-one pt-100 pb-70 popular-packages">
	<div class="container">
		<div class="row">
<?php foreach($package_row as $row) { ?>
			<div class="col-md-4 col-sm-6">
				<div class="single-package">
					<p class="text-center" style="margin-top: 10px;color: #37b721"><?php
							$sel=$this->db->query("select * from package_cat where id='$row[cat_id]'");
							$data=$sel->result_array();
							foreach ($data as $row1) {
								
							}
							?><span><?php echo $row1['name'];?></span></p>
					<div class="package-image">
						<a href="#"><img src="<?php echo base_url();?>upload/<?php echo $row['image'];?>" style="height: 300px;width: 100%" alt="">
						</a>
					</div>
					<div class="package-content">
						<h3><?php echo $row['heading'];?></h3>
						<p><?php echo substr($row['content'], 0,180);?> 		
						</p>
					</div>
					<div class="package-calto-action">
						<ul class="ct-action">
							<li><a href="<?php echo site_url('welcome/singlepackage');?>?id=<?php echo $row['id'];?>" class="travel-booking-btn hvr-shutter-out-horizontal" style="cursor: pointer;">Read More</a>
							</li>
							<!--<li>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</li>-->
						</ul>
					</div>
				</div>
			</div><!--end single package -->
<?php
}
?>
		</div>
<!--
		<div class="row">
			<div class="col-sm-12 text-center">
				<ul class="pagination">
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a>
					</li>
					<li><a href="#">2</a>
					</li>
					<li><a href="#">3</a>
					</li>
				</ul>
			</div><!-- pagination end here
		</div> -->
	</div>
</section><!-- single popular destination  end-->
<?php
include_once ("footer.php");
?>