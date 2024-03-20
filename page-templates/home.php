<?php

/**
 * Template Name: Home
 */
get_header();
?>

<main>
		<div id="carousel-home">
			<div class="owl-carousel owl-theme">
        <div class="owl-slide cover lazy" data-bg="url(<?php asset_path('img/slides/landing-page-01b.png', true);?>)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(49, 16, 16, 0.6)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">Taste<br>unique food</h2>
										<p class="owl-slide-animated owl-slide-subtitle">Crafting Tempting Meals since 2014</p>
										<!-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="menu-1.html" role="button">Read more</a></div> -->
									</div>
								</div>
							</div>
						</div>

					</div>
          <p class="banner-marinate-text">Marinate</p>
					<!--/owl-slide-->
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover lazy" data-bg="url(<?php asset_path('img/slides/landing-page-02b.png', true);?>)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(49, 16, 16, 0.6)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">Enjoy<br>a Party</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
                    Serving up Savory Delights since 2014
										</p>
										<!-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="menu-1.html" role="button">Read more</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
          <p class="banner-marinate-text">Marinate</p>
					<!--/owl-slide-->
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover lazy" data-bg="url(<?php asset_path('img/slides/landing-page-03b.png', true);?>)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(49, 16, 16, 0.6)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">Enjoy<br>a friends dinner</h2>
										<p class="owl-slide-animated owl-slide-subtitle">Delighting Taste Buds since 2014
										</p>
										<!-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="menu-1.html" role="button">Read more</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
          <p class="banner-marinate-text">Marinate</p>
					<!--/owl-slide-->
				</div>
        <!--/owl-slide-->
				<div class="owl-slide cover lazy" data-bg="url(<?php asset_path('img/slides/landing-page-04b.png', true);?>)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(49, 16, 16, 0.6)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">Enjoy<br>Delicious Dishes</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Cooking delicious food since 2014
										</p>
										<!-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="menu-1.html" role="button">Read more</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
          <p class="banner-marinate-text">Marinate</p>
					<!--/owl-slide-->
				</div>
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
		<!--/carousel-->

		<ul id="banners_grid" class="clearfix">
			<li>
				<a href="#marinate-menu" class="img_container">
					<img src="<?php asset_path('img/menu.png', true);?>" data-src="<?php asset_path('img/menu.png', true);?>" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Our Menu</h3>
						<p>View Our Specialites</p>
					</div>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" class="img_container">
					<img src="<?php asset_path('img/delivery.png', true);?>" data-src="<?php asset_path('img/delivery.png', true);?>" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Delivery</h3>
						<p>Home delivery or take away food</p>
					</div>
				</a>
			</li>
			<!-- <li>
				<a href="#" class="img_container">
					<img src="<?php asset_path('img/banners_cat_placeholder.jpg', true);?>" data-src="<?php asset_path('img/banner_3.jpg', true);?>" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Inside Foores</h3>
						<p>View the Gallery</p>
					</div>
				</a>
			</li> -->
		</ul>
		<!--/banners_grid -->

		<div class="pattern_2">
		    <div class="container margin_120_100 home_intro">
		        <div class="row justify-content-center d-flex align-items-center">
              <div class="col-lg-5 text-lg-center d-none d-lg-block" data-cue="slideInUp">
                  <figure>
                      <img src="<?php asset_path('img/chef.png', true);?>" data-src="<?php asset_path('img/chef.png', true);?>" width="354" height="440" alt="" class="img-fluid lazy">
                  </figure>
              </div>
              <div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
                  <div class="main_title">
                      <span><em></em></span>
                      <h2>An introduction to our eatery.</h2>
                  </div>
                  <p>Marinate is your one-stop destination for a diverse range of cuisines, from Pakistani delicacies to fast food and Chinese dishes to soups, pizzas, and indulgent ice cream shakes. Whether you’re in the mood for a quick bite or a hearty meal, our extensive menu has something for everyone. From classic Pakistani flavors to the savory delights of Chinese cuisine and the comfort of pizza, we promises a satisfying dining experience. Don’t forget to top it all off with one of our irresistible ice cream shakes for the perfect sweet finish.</p>
                  <p>Conveniently located in the city center, Marinate is your go-to destination for a delightful dining experience that promises satisfaction with every bite</p>

              </div>
		        </div>
		        <!--/row -->
		    </div>
		    <!--/container -->
		</div>
		<!--/pattern_2 -->

		<div class="bg_gray" id="marinate-menu" >
      <div class="container margin_120_100" data-cue="slideInUp">
          <div class="main_title center mb-5">
              <span><em></em></span>
              <h2>Our Delicious Menu</h2>
          </div>
          <!-- /main_title -->
          <?php /*
          <div class="banner lazy" data-bg="url(<?php asset_path('img/banner_bg.jpg', true);?>)">
              <div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                  <div>
                      <small>Special Offer</small>
                      <h3>Burgher Menu $18 only</h3>
                      <p>Hamburgher, Chips, Mix Sausages, Beer, Muffin</p>
                      <a href="reservations.html" class="btn_1">Reserve now</a>
                  </div>
                  <figure class="d-none d-lg-block"><img src="<?php asset_path('img/banner.svg', true);?>" alt="" width="200" height="200" class="img-fluid"></figure>
              </div>
          </div> */
          ?>
              <!-- /banner -->
          <div class="row magnific-gallery homepage add_bottom_25">
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/italian.png', true);?>" title="Italian" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/large/italian.png', true);?>" data-src="<?php asset_path('img/menu_items/large/italian.png', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Italian</h3>
                               <!-- <em>$10</em> -->
                          </div>
                          <!-- <p>Raspberries, Blackberries</p> -->
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/pakistani-cusine.png', true);?>" title="Pakistani Cusine" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/large/pakistani-cusine.png', true);?>" data-src="<?php asset_path('img/menu_items/large/pakistani-cusine.png', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Pakistani Cuisine</h3>
                          </div>

                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/bbq.png', true);?>" title="BBQ & Grill" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/large/bbq.png', true);?>" data-src="<?php asset_path('img/menu_items/large/bbq.png', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>BBQ & Grill</h3>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/burgers.png', true);?>" title="Burgers" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/large/burgers.png', true);?>" data-src="<?php asset_path('img/menu_items/large/burgers.png', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Burgers</h3>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/rice.png', true);?>" title="Rice" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/large/rice.png', true);?>" data-src="<?php asset_path('img/menu_items/large/rice.png', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Rice</h3>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/salads.png', true);?>" title="Salads" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/large/salads.png', true);?>" data-src="<?php asset_path('img/menu_items/large/salads.png', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Salads</h3>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/juices.png', true);?>" title="Juices" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/large/juices.png', true);?>" data-src="<?php asset_path('img/menu_items/large/juices.png', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Juices</h3>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/deserts.png', true);?>" title="Deserts" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/large/deserts.png', true);?>" data-src="<?php asset_path('img/menu_items/large/deserts.png', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Deserts</h3>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /row -->
          <p class="text-center"><a href="#" class="btn_1 outline" data-cue="zoomIn">Download Menu</a></p>
      </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="call_section lazy" data-bg="url(<?php asset_path('img/celebration.jpeg', true);?>)">
      <div class="container clearfix">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 text-center">
                <div class="box_1" data-cue="slideInUp">
                    <h2>Celebrate<span>a Special Event with us!</span></h2>
                    <p>Join us for memorable events filled with joy, laughter, and delicious food. Whether it's a birthday, anniversary, or any special milestone, let us make your celebration unforgettable</p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn_1 mt-3">Contact us</a>
                </div>
            </div>
        </div>
      </div>
    </div>
   		<!--/call_section-->

		<!-- <div class="pattern_2">
      <div class="container margin_120_100 pb-0">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center d-none d-lg-block" data-cue="slideInUp">
                <img src="<?php asset_path('img/chef.png', true);?>" width="420" height="770" alt="" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-8" data-cue="slideInUp">
                <div class="main_title">
                    <span><em></em></span>
                    <h2>Reserve a table</h2>
                    <p>or Call us at 0344 32423453</p>
                </div>
                <div id="wizard_container">
                  <form id="wrapped" method="POST">
                      <input id="website" name="website" type="text" value="">\
                      <div id="middle-wizard">
                          <div class="step">
                              <h3 class="main_question"><strong>1/3</strong> Please Select a date</h3>
                              <div class="form-group">
                                  <input type="hidden" name="datepicker_field" id="datepicker_field" class="required">
                              </div>
                              <div id="DatePicker"></div>
                          </div>
                          <div class="step">
                              <h3 class="main_question"><strong>2/3</strong> Select time and guests</h3>
                              <div class="step_wrapper">
                                  <h4>Time</h4>
                                  <div class="radio_select add_bottom_15">
                                      <ul>
                                          <li>
                                              <input type="radio" id="time_1" name="time" value="12.00am" class="required">
                                              <label for="time_1">12.00</label>
                                          </li>
                                          <li>
                                              <input type="radio" id="time_2" name="time" value="12.30pm" class="required">
                                              <label for="time_2">12.30</label>
                                          </li>
                                          <li>
                                              <input type="radio" id="time_3" name="time" value="1.00pm" class="required">
                                              <label for="time_3">1.00</label>
                                          </li>
                                          <li>
                                              <input type="radio" id="time_4" name="time" value="1.30pm" class="required">
                                              <label for="time_4">1.30</label>
                                          </li>
                                            <li>
                                              <input type="radio" id="time_5" name="time" value="08.00pm" class="required">
                                              <label for="time_5">8.00</label>
                                          </li>
                                          <li>
                                              <input type="radio" id="time_6" name="time" value="08.30pm" class="required">
                                              <label for="time_6">8.30</label>
                                          </li>
                                          <li>
                                              <input type="radio" id="time_7" name="time" value="09.00pm" class="required">
                                              <label for="time_7">9.00</label>
                                          </li>
                                          <li>
                                              <input type="radio" id="time_8" name="time" value="09.30pm" class="required">
                                              <label for="time_8">9.30</label>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="step_wrapper">
                                  <h4>How many people?</h4>
                                  <div class="radio_select">
                                      <ul>
                                          <li>
                                              <input type="radio" id="people_1" name="people" value="1" class="required">
                                              <label for="people_1">1</label>
                                          </li>
                                          <li>
                                              <input type="radio" id="people_2" name="people" value="2" class="required">
                                              <label for="people_2">2</label>
                                          </li>
                                          <li>
                                              <input type="radio" id="people_3" name="people" value="3" class="required">
                                              <label for="people_3">3</label>
                                          </li>
                                          <li>
                                              <input type="radio" id="people_4" name="people" value="4" class="required">
                                              <label for="people_4">4</label>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="submit step">
                              <h3 class="main_question"><strong>3/3</strong> Please fill with your details</h3>
                              <div class="form-group">
                                  <input type="text" name="name_reserve" class="form-control required" placeholder="First and Last Name">
                              </div>
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                  <input type="email" name="email_reserve" class="form-control required" placeholder="Your Email">
                              </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                  <input type="text" name="telephone_reserve" class="form-control required" placeholder="Your Telephone">
                              </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <textarea class="form-control" name="opt_message_reserve" placeholder="Please provide any additional info"></textarea>
                              </div>
                              <div class="form-group terms">
                                  <label class="container_check">Please accept our <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and conditions</a>
                                      <input type="checkbox" name="terms" value="Yes" class="required">
                                      <span class="checkmark"></span>
                                  </label>
                              </div>
                          </div>
                      </div>
                      <div id="bottom-wizard">
                          <button type="button" name="backward" class="backward">Prev</button>
                          <button type="button" name="forward" class="forward">Next</button>
                          <button type="submit" name="process" class="submit">Submit</button>
                      </div>
                  </form>
                </div>
              </div>
          </div>
      </div>
		</div> -->
	</main>
<?php get_footer(); ?>