<?php

/**
 * Template Name: Contact
 */
get_header();
?>

<main>

		<div class="hero_single inner_pages background-image" data-background="url(<?php asset_path('img/hero_contact.jpeg', true); ?>)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Contact Us</h1>
							<!-- <p>Per consequat adolescens ex cu nibh commune</p> -->
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="frame white"></div>
		</div>
		<!-- /hero_single -->

		<div class="bg_gray">
		    <div class="container margin_60_40">
		        <div class="row justify-content-center">
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_tag_alt"></i>
		                    <h2>Reservations</h2>
		                    <a href="#0">+94 053 3724692</a>
                        <!-- <a href="#0">reserve@Foores.com</a> -->
		                    <!-- <small>- <a href="reservations.html">Or use the online form</a> -</small> -->
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_pin_alt"></i>
		                    <h2>Address</h2>
		                    <div><p>Chenab School Road, Servis Industries, <br>Gujrat - Pakistan</p></div>
		                    <!-- <small>- <a href="#0">Get Directions</a> -</small> -->
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_clock_alt"></i>
		                    <h2>Opening Hours</h2>
		                    <div>MON to SUN 11am-11:30pm</div>
		                    <!-- <small>- Sunday Closed -</small> -->
		                </div>
		            </div>
		        </div>
		        <!-- /row -->
		    </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="container margin_60_40">
		    <h5 class="mb_5">Drop Us a Line</h5>
		    <div class="row">
		        <div class="col-lg-4 col-md-6 add_bottom_25">
                <?php
                  if( shortcode_exists( 'gravityform') ){
                    echo do_shortcode('[gravityform id="1" title="false" description="false"]');
                  }
                ?>
		        </div>
		        <div class="col-lg-8 col-md-6 add_bottom_25">
		            <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13447.597191451376!2d74.0575521!3d32.5822096!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f1ac91138158d%3A0x497468c314f18892!2sMarinate%20Restaurant!5e0!3m2!1sen!2s!4v1710254917125!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
		        </div>
		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->

	</main>
<?php get_footer();?>
