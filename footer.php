<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marinate_The_Restaurant
 */

?>

<?php /*
<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'marinate-the-restaurant' ) ); ?>">
				<?php
				printf( esc_html__( 'Proudly powered by %s', 'marinate-the-restaurant' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'marinate-the-restaurant' ), 'marinate-the-restaurant', '<a href="http://underscores.me/">Ali Mirza</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

*/ ?>
<footer>
  <div class="frame black"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="footer_wp">
          <i class="icon_pin_alt"></i>
          <h3>Address</h3>
          <p>Chenab School Road, Servis Industries, <br>Gujrat - Pakistan</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="footer_wp">
          <i class="icon_tag_alt"></i>
          <h3>Reservations</h3>
          <p><a href="tel:+920533724692">+92 053 3724692</a><br><a href="mailto:themarinaterestaurant@gmail.com">themarinaterestaurant@gmail.com</a></p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="footer_wp">
          <i class="icon_clock_alt"></i>
          <h3>Opening Hours</h3>
          <ul>
            <li>Mon - Sat: 11am - 11:30pm</li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <h3>Keep in touch</h3>
        <div id="newsletter">
          <div id="message-newsletter"></div>
          <form method="post" action="phpmailer/newsletter_template_email.php" name="newsletter_form" id="newsletter_form">
            <div class="form-group">
              <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
              <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /row-->
    <hr>
    <div class="row">
      <div class="col-sm-5">
        <p class="copy">© Marinate The Restaurant - All rights reserved</p>
      </div>
      <div class="col-sm-7">
        <div class="follow_us">
          <ul>
            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php asset_path( 'img/twitter_icon.svg', true ); ?>" alt="" class="lazy"></a></li>
            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php asset_path( 'img/facebook_icon.svg', true ); ?>" alt="" class="lazy"></a></li>
            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php asset_path( 'img/instagram_icon.svg', true ); ?>" alt="" class="lazy"></a></li>
            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php asset_path( 'img/youtube_icon.svg', true ); ?>" alt="" class="lazy"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <p class="text-center"></p>
  </div>
</footer>
<!--/footer-->

<div id="toTop"></div><!-- Back to top button -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php wp_footer(); ?>

<!-- typing text -->
<script>
  var typed = new Typed('.element', {
    strings: ["Delicious Food", "Nice Ambient", "Affordable Prices"],
    startDelay: 10,
    loop: true,
    backDelay: 2000,
    typeSpeed: 50
  });
</script>

<!-- Video Header -->
<script>
  HeaderVideo.init({
    container: $('.header-video'),
    header: $('.header-video--media'),
    videoTrigger: $("#video-trigger"),
    autoPlayVideo: true
  });
</script>

<!-- kenburns slider -->
<script>
  $(function() {
    "use strict";
    $('.kenburns_slider').vegas({
      slides: [{
          src: 'img/flex_slides/slide_3.jpg'
        },
        {
          src: 'img/flex_slides/slide_1.jpg'
        },
        {
          src: 'img/slides/slide_home_2.jpg'
        }
      ],
      overlay: false,
      transition: 'fade2',
      animation: 'kenburnsUpRight',
      transitionDuration: 1000,
      delay: 4000,
      animationDuration: 70000
    });
  });
</script>

</body>

</html>