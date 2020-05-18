<style type="text/css">
	.tp-bgimg {
		height:;
	}
	@media(max-width: 600px)
	{
		.slider-area-2
		{
			height: auto !important;
		}
		.tp-caption h2
		{
			font-size: 20px !important;
		}
	}
</style>
<section class="slider-area-2" style="">
	<div class="rev_slider_wrapper">
		<div id="rev_slider_2" class="rev_slider" style="display:none">
			<!-- BEGIN SLIDES LIST -->
			<ul>
				<!-- slider one start -->
				<?php
					$a=1;
				 foreach($banner_row as $row) 
				 	:
				 if($a%2==1)
				 {
				 	?>
			   <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?php echo base_url(); ?>upload/<?php echo $row['image'];?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- MAIN IMAGE -->
					<img src="<?php echo base_url(); ?>upload/<?php echo $row['image'];?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					<!-- LAYERS -->
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-12" data-x="['center', 'center', 'center', 'center']" data-hoffset="0" data-y="center" data-voffset="-50" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; color:#fff; text-transform:uppercase; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:400;">
						<h2 style="font-size:60px;"><?php echo $row['heading'];?></h2>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-2" data-x="center" data-hoffset="0" data-y="center" data-voffset="10" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:20px; color:#fff; text-transform:capitalize; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:400; line-height: 50px !important;">
						<h3><?php echo $row['content'];?></h3>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption lfb tp-resizeme header-btn-2" data-x="center" data-hoffset="0" data-y="center" data-voffset="100" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;"><!--<a href="#" class="travel-primary-btn hvr-fade">Start Tour</a>--<
					</div>
				</li>
				
				<!-- end slider one -->
				<?php
			}
			if($a%2==0)
			{
				?>
				<!-- slider two start -->
				<li data-index="rs-3048" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?php echo base_url(); ?>upload/<?php echo $row['image'];?>"  data-rotate="0"  data-saveperformance="off"  data-title="HTML5 Video" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- MAIN IMAGE -->
					<img src="<?php echo base_url(); ?>upload/<?php echo $row['image'];?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					<!-- BEGIN BASIC TEXT LAYER -->
					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-12" data-x="['center', 'center', 'center', 'center']" data-hoffset="0" data-y="center" data-voffset="-50" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; color:#fff; text-transform:uppercase; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:400;">
						<h2 style="font-size:60px;"><?php echo $row['heading'];?> </h2>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 title-line-2" data-x="center" data-hoffset="0" data-y="center" data-voffset="10" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:20px; color:#fff; text-transform:capitalize; font-family:'Poppins', sans-serif; white-space: nowrap; font-weight:400; line-height: 50px;">
						<!--<h3>Start From <span>$250</span>/3Days, 2Night</h3>-->
						<h3><?php echo $row['content'];?></h3>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption lfb tp-resizeme header-btn-2" data-x="center" data-hoffset="0" data-y="center" data-voffset="100" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;"><!--<a href="#" class="travel-primary-btn hvr-fade">Start Tour</a>-->
					</div>
				</li>
				<?php
			}
				$a++;
			endforeach;
				?>
			</ul> <!-- END SLIDES LIST -->
		</div> <!-- END SLIDER CONTAINER -->
	</div> <!-- END SLIDER CONTAINER WRAPPER -->
</section> <!-- slider area end here -->
