<?php 
include"header.php"; 
 include_once "banner.php"; 
?>
<style type="text/css">

</style>

<section class="tabbased-search-area tabbased-search-area-2" >
	<div class="container">
		<!-- tab menu 2 start -->
		<div class="row" style="">
			<div class="col-md-12">
				<div class="tabbable-menu background-opacity">
					<ul class="tab-menu" id="myTab1">
						<li class="active">
							<h6><a href="#hotels" data-easein="fadeIn">Hotels <img src="<?php echo base_url(); ?>assets/images/icon/hotel.png" alt=""></a></h6>
						</li>
						<li>
							<h6><a href="#tour" data-easein="fadeIn">Tour <img src="<?php echo base_url(); ?>assets/images/icon/tour.png" alt=""></a></h6>
						</li><!--
						<li>
							<h6><a href="#flights" data-easein="fadeIn">Flights <img src="<?php echo base_url(); ?>assets/images/icon/fly.png" alt=""></a></h6>
						</li>-->
						<li>
							<h6><a href="#vehicles" data-easein="fadeIn">Vehicles <img src="<?php echo base_url(); ?>assets/images/icon/car.png" alt=""></a></h6>
						</li>
						<li>
							<h6><a href="#ship" data-easein="fadeIn">Ship <img src="<?php echo base_url(); ?>assets/images/icon/ship.png" alt=""></a></h6>
						</li>
					</ul>
				</div>
			</div>
		</div> <!-- tab menu 2 end -->

		</div>
</section> <!--end header tab based search area-->

<section class="section-paddings welcome-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="single-welcome-area">
					<div class="single-imag">
						<img src="<?php echo base_url(); ?>assets/images/welcome/1.jpg" alt="" class="img-thumbnail img-responsive">
					</div>
					<div class="overlay-image">
						<img src="<?php echo base_url(); ?>assets/images/welcome/2.jpg" alt="" class="img-thumbnail img-responsive">
					</div>
				</div>
			</div> <!-- welcome area left side end -->

			<div class="col-md-6">
				<div class="single-welcome-text">
					<div class="section-title-version-2">
						<h2>Welcome to Absolute Vacations</h2>
						<h5></h5>
						<div class="welcome-content">
							<p>
								Absolute Vacations are not a run of the mill travel provider. We work closely with you and understand your needs while giving you the best of experiences. You are always at the center of the process and we make sure that you get more than what you came for, while mesmerizing you with the destinations we offer.

You are important to us and we make sure that you feel that throughout the journey. Our plans are crafted to offer exciting experiences that last a lifetime.
</p>
							<a href="<?php echo site_url('welcome/about');?>" class="read-more hvr-fade">Read More</a>
						</div>
					</div>
				</div>
			</div>  <!-- welcome area right side end -->
		</div>
	</div>
</section> <!-- welcome area start end here -->

<section class="section-paddings best-services-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title-version-2-black  text-center">
					<h2>Why we are the best</h2>
					<p>We will give better experience you had before</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single we are best -->
			<div class="col-md-3 col-sm-6 col-xs-12 single-item">
				<div class="single-best-services">
					<div class="services-image">
						<a href="#"><img src="<?php echo base_url(); ?>assets/images/icon/5-1.png" alt="">
						</a>
					</div>
					<div class="services-content">
						<a href="#"><h4>Travel Arrangements</h4></a>
						<p>Lorem ipsum dolor sit ametpr consect adiu piscing eli sed diam nonum euismo.</p>
						<a href="#">Read More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div><!--End single we are best -->

			<div class="col-md-3  col-sm-6 col-xs-12  single-item">
				<div class="single-best-services">
					<div class="services-image">
						<a href="#"><img src="<?php echo base_url(); ?>assets/images/icon/5-2.png" alt="">
						</a>
					</div>
					<div class="services-content  single-item">
						<a href="#"><h4>Best Price Guarantee</h4></a>
						<p>Lorem ipsum dolor sit ametpr consect adiu piscing eli sed diam nonum euismo.</p>
						<a href="#">Read More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div><!--End single we are best -->

			<div class="col-md-3 col-sm-6 col-xs-12 single-item">
				<div class="single-best-services">
					<div class="services-image">
						<a href="#"><img src="<?php echo base_url(); ?>assets/images/icon/5-3.png" alt="">
						</a>
					</div>
					<div class="services-content">
						<a href="#"><h4>BHappy Clients</h4></a>
						<p>Lorem ipsum dolor sit ametpr consect adiu piscing eli sed diam nonum euismo.</p>
						<a href="#">Read More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div><!--End single we are best -->
   
			<div class="col-md-3 col-sm-6 col-xs-12 single-item">
				<div class="single-best-services">
					<div class="services-image">
						<a href="#"><img src="<?php echo base_url(); ?>assets/images/icon/5-4.png" alt="">
						</a>
					</div>
					<div class="services-content">
						<a href="#"><h4>Travel Insurance</h4></a>
						<p>Lorem ipsum dolor sit ametpr consect adiu piscing eli sed diam nonum euismo.</p>
						<a href="#">Read More <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div><!--End single we are best -->
		</div>
	</div>
</section>


<section class="tour-package-bg image-bg-padding-100">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title-version-2-white text-center">
					<h2>Let’s Enjoy Excellent Tour Packages</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
				</div>
			</div>
			<!-- tour packages carosual -->
			<div class="popular-packages-carasoul owl-carousel">
				<?php
				foreach ($package_row as $row) {
					
				?>
				<div class="single-package-carasoul">
					<div class="package-location">
						<img src="<?php echo base_url(); ?>upload/<?php echo($row['image'])?>" style="height: 300px;width: 100%;" alt="">
						<?php
							$sel=$this->db->query("select * from package_cat where id='$row[cat_id]'");
							$data=$sel->result_array();
							foreach ($data as $key => $row1) {
								
							}
							?><span><?php echo $row['price'];?></span>
					</div>

					<div class="package-details">
						<div class="package-places">
							
							<h4><?php echo $row['heading'];?></h4>
							<!--<span> <i class="fa fa-clock-o"></i> 4 Days, 5 Nights Stay</span>-->
							<div class="details">
								<p><span></span><?php echo $row1['name'];?></p>
							</div>
						</div><!--	
						<div class="package-ratings-review">
							<ul class="two-column">
								<li>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<p>(27 Reviews)</p>
								</li>
							</ul>
						</div>-->
					</div>
					<div class="package-long-btn hvr-shutter-out-horizontal">
						<a href="<?php echo site_url('welcome/singlepackage');?>?id=<?php echo $row['id'];?>">Read More</a>
					</div>
				</div>
				<?php
			}
				?>
				
			</div> <!-- tour packages carosual end -->
		</div>
	</div>
</section> <!-- Tour Packages end here -->

<section class="section-paddings popular-country">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title-version-2-black text-center">
					<h2>Most popular destinations</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
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
										<figure>
											<a href="#"><img src="<?php echo base_url(); ?>upload/<?php echo $key['image'];?>" style="height: 250px;width: 100%" alt="" class="img-responsive img-rounded">
											</a>
											<figcaption style=" bottom: 80px;text-align: center;">
												<div class="city-name">
													<span><img src="<?php echo base_url(); ?>assets/images/icon/map.png" alt=""><?php echo $key['content'];?></span>
												<!--	<ul class="tower-bridge">
														<li><?php //echo $key['content'];?></li>
														
													</ul>-->
												</div><!--
												<div class="travel-book-btn">
													<a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Book Now</a>
												</div>-->
											</figcaption>
										</figure>
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

<section class="discount-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="discount-content text-center">
					<h2>50% Discount Offer!</h2>
					<h3>Italy – All Stunning Places</h3>
					<h4><span>$800</span> - 2 Persons - 4day, 5night Stay</h4>
					<div class="discount-btn">
						<a href="#" class="travel-primary-btn hvr-fade">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> <!-- discount offer end here -->

<!-- Last minute offer start here -->
<section class="section-paddings offer-package">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title-version-2-black text-center">
					<h2>Latest Offer</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$query=$this->db->query("select * from package order by rand() limit 4");
			$datap=$query->result_array();
			foreach ($datap as $key) {
			

			?>
			<div class="col-md-6 col-sm-6 col xs-12">
				<div class="single-offer">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 package-pho-res">
							<div class="single-offer-image">
								<img src="<?php echo base_url(); ?>upload/<?php echo $key['image'];?>" style="height: 250px;width: 100%;" alt="">
									<?php
							$sel=$this->db->query("select * from package_cat where id='$key[cat_id]'");
							$data=$sel->result_array();
							foreach ($data as $row1) {
								
							}
							?><span><?php echo $row1['name'];?></span>
							</div>
						</div>
						<div class="single-offers-elemetns">
							<div class="col-md-6 col-sm-6 col-xs-12 package-pho-res-text">
								<div class="single-offer-details">
									<div class="offer-title">
									
										<h4><?php echo $key['heading'];?></h4>
										<!--<p>4Days, 5Nights <del>$550</del> <span>$500</span>
										</p>-->
									</div>
									<div class="offer-details">
										<p><?php echo substr($key['content'], 0,150);?></p>
										<div class="offer-btn">
											<a href="<?php echo site_url('welcome/singlepackage');?>?id=<?php echo $key['id'];?>" class="travel-booking-btn-lg hvr-shutter-out-horizontal">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- end single  offer -->

			<?php
		}
			?>
		</div>
	</div>
</section> <!-- Last minute offer end here -->

<section class="section-blog-bg blog-2">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="section-title-version-2-white text-center">
					<h2>Travel guide and Expert Advice</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single travel blog-->
			<?php
			$query=$this->db->query("select * from service order by rand() limit 3");
			$datas=$query->result_array();
			foreach ($datas as $value) {
				
			?>
			<div class="col-md-4 col-sm-4 col-xs-12 single-item">
				<div class="single-travel-blog single-travel-blog-2">
					<div class="blog-image">
						<a href="#"><img src="<?php echo base_url(); ?>upload/<?php echo $value['image'];?>" style="height: 250px;width: 100%" alt="">
						</a>
					</div>
					<div class="blog-content">
						<div class="blog-post-content">
							<h4><?php echo $value['heading'];?></h4>
							<div class="blog-meta">
								<ul class="post-social-2">
									<li><a href="#"><i class="fa fa-calendar"></i> <?php echo substr($value['datetime'], 8,2);?><?php $s=substr($value['datetime'], 5,2);?><?php
									if($s==1){echo "jan";}if($s==2){echo "feb";}if($s==3){echo "march";}if($s==4){echo "april";}if($s==5){echo "may";}if($s==6){echo "june";}if($s==7){echo "july";}if($s==8){echo "aug";}if($s==9){echo "sep";}if($s==10){echo "oct";}if($s==11){echo "nov";}if($s==12){echo "dec";}
									?>, 
									<?php echo substr($value['datetime'], 0,4);?></a>
									</li>
									
								</ul>
							</div>
							<p><?php echo substr($value['content'],0,150);?></p>
						</div>
						<div class="read-more-btn">
							<a href="<?php echo site_url('welcome/servicedetail')?>?id=<?php echo $value['id'];?>">Read More <i class="fa fa-angle-right"> </i></a>
						</div>
						<ul class="soical-share">
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-youtube-play"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- single travel guide & security end-->
<?php
}
?>
		</div>
	</div>
</section> <!-- single popular destination  end-->

<section class="section-paddings">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title-version-2-black text-center">
					<h2>Gallery from Travelars</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
				</div>
			</div>
		</div>
		<!-- gallery iteam start here -->
		<div class="grid-3">
			<?php
			$query=$this->db->query("select * from gallery order by id desc limit 3");
			$datag=$query->result_array();
foreach ($datag as $row) {
		?>
			<div class="col-sm-6 col-md-4 col-xs-12 grid-item">
				<figure>
					<img src="<?php echo base_url(); ?>upload/<?php echo $row['image'];?>" style="height:250px;width: 100%;"alt="">
					<figcaption>
						<a href="<?php echo base_url(); ?>upload/<?php echo $row['image'];?>"><i class="fa fa-pencil"></i></a>
						<h4>Place <span><?php echo $row['content'];?></span></h4>
						<!--<h4>Caption By: <span>Michel Jusi</span></h4>-->
					</figcaption>
				</figure>
			</div> <!-- end single gallery -->
<?php

}
?>
			 <!--single gallery end -->
		</div> <!-- gallery item end here -->
	</div>
</section> <!-- gallery section end here -->

<section class="subscribe-area subscribe-area-2">
	<div class="container">
		<div class="row bg-gradent">
			<div class="col-md-5 col-sm-6 col-xs-12 subscribe-title-box">
				<div class="subscribe-title">
					<h2>Join Our Subscribe List</h2>
				</div>
			</div>
			<!-- subscribe form start here -->
			<div class="col-md-7 col-sm-7 col-xs-12 subscribe-form-box">
				<div class="subscribe-form">
					<form action="#" method="post">
						<div class="serach-form">
							<input type="text" name="search" id="search" placeholder="" value="Enter Your Email To subscribe" onblur="if(this.value==''){this.value='Enter Your Email To subscribe'}" onfocus="if(this.value=='Enter Your Email To subscribe'){this.value=''}">
						</div>
						<div class="search-btn">
							<button type="button">Send</button>
						</div>
					</form>
				</div>
			</div> <!-- subscribe form end here -->
		</div>
	</div>
</section> <!-- subscribe area end here -->



<?php include"footer.php"; ?>
