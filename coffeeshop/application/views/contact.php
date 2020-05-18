<?php
include_once ("header.php");
?>
<!-- blog breadcrumb version one strat here -->
<section class="breadcrumb-blog-version-one">
	<div class="single-bredcurms" style="background-image:url('<?php echo base_url();?>assets/images/bercums/contact-page.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="bredcrums-content">
						<h2>Contact</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- blog breadcrumb version one end here -->

<!-- google map start  -->
<div class="map-wrapper" >
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.509122018549!2d81.84184331436356!3d25.454669827454286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399acac3aaaaaab9%3A0xad844214e1c27df9!2z4KSo4KS_4KSw4KSq4KWH4KSV4KWN4KS3IOCkheCkteCkleCkvuCktg!5e0!3m2!1shi!2sin!4v1536059147656" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>
</div>

<!-- google map end  -->
<section class="section-paddings">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="contact-title">
					<h2>Our Office</h2>
				</div>
				<div class="address">
					<p>
						<strong>Address</strong>
						<br> L-3k, Taskhand Marg, Civil Lines, allahabad - 211001,<br> Opposite St. Joseph Collage
					</p>
					<p>
						<strong>Contact No.</strong>
						<br>+91 9161116112
					</p>
					<p>
						<strong>Email</strong>
						<br> info@yourdomian.com
					</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="contact-title">
					<h2>Contact</h2>
				</div>
				<div class="contact-form">
					<div id="contact">  
						<div id="message"></div> 						
						<!-- Contact Form -->
						<?php echo form_open('welcome/contact')?>
							<div class="form-group">
								<input type="text" placeholder="Name" required="required" name="name" id="name">
							</div>
							<div class="form-group">
								<input type="email" placeholder="Email" required="required" name="email" id="email">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Subject" required="required" name="subject" id="subject">
							</div>
							<div class="form-group">
								<textarea name="message" rows="6" placeholder="Message" id="comments"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" name="submit" class="button primary"><i class="fa fa-send"></i>Submit</button>
							</div>
						</form><!--/ End Contact Form -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include_once ("footer.php");
?>