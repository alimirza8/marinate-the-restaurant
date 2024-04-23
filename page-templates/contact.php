<?php

/**
 * Template Name: Contact
 */
get_header();
?>

<main>

		<div class="hero_single inner_pages background-image" data-background="url(<?php asset_path('img/contact-us.png', true); ?>)">
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
		                    <a href="tel:+39 371 673 2900">+39 371 673 2900</a>
                        <!-- <a href="#0">reserve@Foores.com</a> -->
		                    <!-- <small>- <a href="reservations.html">Or use the online form</a> -</small> -->
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_pin_alt"></i>
		                    <h2>Address</h2>
		                    <div class="address"><a href="https://maps.app.goo.gl/Emv2u1YZGGDjgUXCA" target="_blank">VIALE GUIDO fASSI 29 41012 <br>Carpi, Emilia-Romagna - Italy</a></div>
		                    <div class="address"><a href="https://maps.app.goo.gl/3A3B5xSQmQ6DBaXA9" target="_blank">VIA XXVIII APRILE, 23 12100<br>Cuneo, Piedmont - Italy</a></div>
		                    <!-- <small>- <a href="#0">Get Directions</a> -</small> -->
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_clock_alt"></i>
		                    <h2>Opening Hours</h2>
		                    <div>MON to SUN 11:00am - 11:00pm</div>
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
		            <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.786446794899!2d10.879077576320304!3d44.785158871071005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f8d3175f7e69d%3A0x1ae978dbcd50dc4b!2sVia%20Guido%20Fassi%2C%2029%2C%2041012%20Carpi%20MO%2C%20Italy!5e0!3m2!1sen!2s!4v1713871424232!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
		        </div>
		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->

	</main>
<?php get_footer();?>