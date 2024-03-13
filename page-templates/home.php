<?php

/**
 * Template Name: Home
 */
get_header();
?>

<main>
		<div id="carousel-home">
			<div class="owl-carousel owl-theme">
        <div class="owl-slide cover lazy" data-bg="url(<?php asset_path('img/slides/landing-page-01.png', true);?>)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">Taste<br>unique food</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Cooking delicious food since 2014
										</p>
										<!-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="menu-1.html" role="button">Read more</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/owl-slide-->
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover lazy" data-bg="url(<?php asset_path('img/slides/landing-page-02.png', true);?>)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">Enjoy<br>a Party</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Serving quality food since 2014
										</p>
										<!-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="menu-1.html" role="button">Read more</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/owl-slide-->
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover lazy" data-bg="url(<?php asset_path('img/slides/landing-page-03.png', true);?>)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">Enjoy<br>a friends dinner</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Cooking delicious food since 2014
										</p>
										<!-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="menu-1.html" role="button">Read more</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/owl-slide-->
				</div>
        <!--/owl-slide-->
				<div class="owl-slide cover lazy" data-bg="url(<?php asset_path('img/slides/landing-page-04.png', true);?>)">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-12 static">
									<div class="slide-text text-center white">
										<h2 class="owl-slide-animated owl-slide-title">Enjoy<br>a friends dinner</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											Cooking delicious food since 2014
										</p>
										<!-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="menu-1.html" role="button">Read more</a></div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/owl-slide-->
				</div>
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
		<!--/carousel-->

		<ul id="banners_grid" class="clearfix">
			<li>
				<a href="#" class="img_container">
					<img src="<?php asset_path('img/banners_cat_placeholder.jpg', true);?>" data-src="<?php asset_path('img/banner_1.jpg', true);?>" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
						<h3>Our Menu</h3>
						<p>View Our Specialites</p>
					</div>
				</a>
			</li>
			<li>
				<a href="#" class="img_container">
					<img src="<?php asset_path('img/banners_cat_placeholder.jpg', true);?>" data-src="<?php asset_path('img/banner_2.jpg', true);?>" alt="" class="lazy">
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
                      <img src="<?php asset_path('img/home_1.jpg', true);?>" data-src="<?php asset_path('img/home_1.jpg', true);?>" width="354" height="440" alt="" class="img-fluid lazy">
                  </figure>
              </div>
              <div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
                  <div class="main_title">
                      <span><em></em></span>
                      <h2>Some words about us</h2>
                      <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                  </div>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p><img src="<?php asset_path('img/signature.png', true);?>" width="140" height="50" alt="" class="mt-3"></p>
              </div>
		        </div>
		        <!--/row -->
		    </div>
		    <!--/container -->
		</div>
		<!--/pattern_2 -->

		<div class="bg_gray">
      <div class="container margin_120_100" data-cue="slideInUp">
          <div class="main_title center mb-5">
              <span><em></em></span>
              <h2>Our Daily Menu</h2>
          </div>
          <!-- /main_title -->
          <div class="banner lazy" data-bg="url(<?php asset_path('img/banner_bg.jpg', true);?>)">
                  <div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                      <div>
                          <small>Special Offer</small>
                          <h3>Burgher Menu $18 only</h3>
                          <p>Hamburgher, Chips, Mix Sausages, Beer, Muffin</p>
                          <!-- <a href="reservations.html" class="btn_1">Reserve now</a> -->
                      </div>
                      <figure class="d-none d-lg-block"><img src="<?php asset_path('img/banner.svg', true);?>" alt="" width="200" height="200" class="img-fluid"></figure>
                  </div>
                  <!-- /wrapper -->
              </div>
              <!-- /banner -->
          <div class="row magnific-gallery homepage add_bottom_25">
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/3.jpg', true);?>" title="Summer Berry" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/menu_items_placeholder.png', true);?>" data-src="<?php asset_path('img/menu_items/3.jpg', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Summer Berry</h3><em>$8</em>
                          </div>
                          <p>Raspberries, Blackberries</p>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/4.jpg', true);?>" title="Coconut Tart" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/menu_items_placeholder.png', true);?>" data-src="<?php asset_path('img/menu_items/4.jpg', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Coconut Tart</h3><em>$10</em>
                          </div>
                          <p>Blueberries, Graham cracker crumbs</p>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/5.jpg', true);?>" title="Pumpkin Cookies" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/menu_items_placeholder.png', true);?>" data-src="<?php asset_path('img/menu_items/5.jpg', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Pumpkin Cookies</h3><em>$11</em>
                          </div>
                          <p>Pumpkin, Sugar, Butter</p>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/7.jpg', true);?>" title="Cookies Cream Cheese" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/menu_items_placeholder.png', true);?>" data-src="<?php asset_path('img/menu_items/7.jpg', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Cookies Cream Cheese</h3><em>$14</em>
                          </div>
                          <p>Sugar, Butter, Eggs</p>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/8.jpg', true);?>" title="Chocolate Cupcakes" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/menu_items_placeholder.png', true);?>" data-src="<?php asset_path('img/menu_items/8.jpg', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Chocolate Cupcakes</h3><em>$14</em>
                          </div>
                          <p>Chocolate, Eggs, Vanilla</p>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/9.jpg', true);?>" title="Chocolate Cupcakes" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/menu_items_placeholder.png', true);?>" data-src="<?php asset_path('img/menu_items/9.jpg', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Chocolate Cupcakes</h3><em>$14</em>
                          </div>
                          <p>Chocolate, Eggs, Vanilla</p>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/10.jpg', true);?>" title="Soft shell crab" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/large/3.jpg', true);?>" data-src="<?php asset_path('img/menu_items/10.jpg', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Soft shell crab</h3><em>$14</em>
                          </div>
                          <p>Chicken, Potato, Salad</p>
                      </div>
                  </div>
                  <div class="col-lg-6" data-cue="slideInUp">
                      <div class="menu_item">
                          <figure>
                              <a href="<?php asset_path('img/menu_items/large/11.jpg', true);?>" title="Soft shell crab" data-effect="mfp-zoom-in">
                                  <img src="<?php asset_path('img/menu_items/menu_items_placeholder.png', true);?>" data-src="<?php asset_path('img/menu_items/11.jpg', true);?>" class="lazy" alt="">
                              </a>
                          </figure>
                          <div class="menu_title">
                              <h3>Soft shell crab</h3><em>$14</em>
                          </div>
                          <p>Chicken, Potato, Salad</p>
                      </div>
                  </div>
              </div>
              <!-- /row -->
          <p class="text-center"><a href="#0" class="btn_1 outline" data-cue="zoomIn">Download Menu</a></p>
      </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="call_section lazy" data-bg="url(<?php asset_path('img/bg_call_section.jpg', true);?>)">
      <div class="container clearfix">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 text-center">
                <div class="box_1" data-cue="slideInUp">
                    <h2>Celebrate<span>a Special Event with us!</span></h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <a href="contacts.html" class="btn_1 mt-3">Contact us</a>
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