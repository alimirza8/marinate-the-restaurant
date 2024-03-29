<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marinate_The_Restaurant
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>

  <div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Page Preload -->

	<header class="header clearfix element_to_stick">
		<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
		<div class="container-fluid">
		<div id="logo">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php asset_path('img/logo/marinate-logo-red-white.png', true);?>" width="120" height="70" alt="" class="logo_normal">
				<img src="<?php asset_path('img/logo/marinate-logo-vertical.png', true);?>" width="120" height="70" alt="" class="logo_sticky">
			</a>
		</div>

		<!-- <ul id="top_menu">
			<li><a href="#0" class="search-overlay-menu-btn"></a></li>
			<li>
				<div class="dropdown dropdown-cart">
				    <a href="shop-cart.html" class="cart_bt"><strong>2</strong></a>
				    <div class="dropdown-menu">
				        <ul>
				            <li>
				                <figure><img src="<?php asset_path('img/item_placeholder_square_small.jpg', true);?>" data-src="img/item_square_small_1.jpg" alt="" width="50" height="50" class="lazy"></figure>
				                <strong><span>1x Pizza Napoli</span>$12.00</strong>
				                <a href="#0" class="action"><i class="icon_trash_alt"></i></a>
				            </li>
				             <li>
				                <figure><img src="<?php asset_path('img/item_placeholder_square_small.jpg', true);?>" data-src="img/item_square_small_2.jpg" alt="" width="50" height="50" class="lazy"></figure>
				                <strong><span>1x Hamburgher Maxi</span>$10.00</strong>
				                <a href="#0" class="action"><i class="icon_trash_alt"></i></a>
				            </li>
				             <li>
				                <figure><img src="<?php asset_path('img/item_placeholder_square_small.jpg', true);?>" data-src="img/item_square_small_3.jpg" alt="" width="50" height="50" class="lazy"></figure>
				                <strong><span>1x Red Wine Bottle</span>$20.00</strong>
				                <a href="#0" class="action"><i class="icon_trash_alt"></i></a>
				            </li>
				        </ul>
				        <div class="total_drop">
				            <div class="clearfix add_bottom_15"><strong>Total</strong><span>$32.00</span></div>
				            <a href="shop-cart.html" class="btn_1 outline">View Cart</a><a href="shop-checkout.html" class="btn_1">Checkout</a>
				        </div>
				    </div>
				</div>
			</li>
		</ul> -->

		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		<nav class="main-menu">
		    <div id="header_menu">
		        <a href="#0" class="open_close">
		            <i class="icon_close"></i><span>Menu</span>
		        </a>
		        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php asset_path('img/logo/marinate-logo-white.png', true);?>" width="120" height="70" alt=""></a>
		    </div>
        <?php
        wp_nav_menu(
          array(
              'theme_location' => 'menu-1',
              'menu_id' => 'primary-menu',
          )
      );
?>
		    <!-- <ul>
		        <li class="submenu">
		            <a href="#0" class="show-submenu">Home</a>
		            <ul>
		            	<li><a href="index-7.html">KenBurns Slider <span class="badge text-bg-danger">New</span></a></li>
		                <li><a href="index.html">Slider 1</a></li>
		                <li><a href="index-2.html">Slider 2</a></li>
		                <li><a href="index-6.html">Slider 3</a></li>
		                <li><a href="index-3.html">Video Background</a></li>
		                <li><a href="index-5.html">Text Rotator</a></li>
		                <li><a href="index-4.html">GDPR Cookie Bar EU Law</a></li>
		            </ul>
		        </li>
		        <li class="submenu">
		            <a href="#0" class="show-submenu">Menu</a>
		            <ul>
		                <li><a href="menu-1.html">Menu 2 Column</a></li>
		                <li><a href="menu-2.html">Menu Add To Cart</a></li>
		                <li><a href="menu-3.html">Menu With Tabs</a></li>
		                <li><a href="menu-4.html">Menu Grid</a></li>
		                <li><a href="menu-of-the-day.html">Menu of the Day <span class="badge badge-danger">HOT</span></a></li>
		                <li><a href="order-food.html">Order Food</a></li>
		                <li><a href="confirm.html">Confirm</a></li>
		            </ul>
		        </li>
		        <li class="submenu">
		            <a href="#0" class="show-submenu">Other Pages</a>
		            <ul>
		            	<li><a href="about.html">About</a></li>
		                <li><a href="blog.html">Blog</a></li>
		                <li><a href="gallery.html">Gallery</a></li>
		                <li><a href="gallery-2.html">Gallery Masonry</a></li>
		                <li><a href="modal-advertise.html">Modal Advertise</a></li>
		                <li><a href="modal-newsletter.html">Modal Newsletter</a></li>
		                <li><a href="404.html">404 Error page</a></li>
		                <li><a href="coming-soon.html" target="_blank">Coming Soon</a></li>
		                <li><a href="leave-review.html">Leave a review</a></li>
		                <li><a href="contacts.html">Contacts</a></li>
		                <li><a href="icon-pack-1.html">Icon Pack 1</a></li>
		                <li><a href="icon-pack-2.html">Icon Pack 2</a></li>
		            </ul>
		        </li>
		         <li class="submenu">
		            <a href="#0" class="show-submenu">Shop</a>
		            <ul>
		                <li><a href="shop-1.html">Shop Grid</a></li>
		                <li><a href="shop-2.html">Shop Rows</a></li>
		                <li><a href="shop-single.html">Product Single</a></li>
		                <li><a href="shop-cart.html">Cart Page</a></li>
		                <li><a href="shop-checkout.html">Checkout</a></li>
		            </ul>
		        </li>
		        <li><a href="reservations.html" class="btn_top">Reservations</a></li>
		    </ul> -->
		</nav>
	</div>
	<!-- Search -->
	<!-- <div class="search-overlay-menu">
	    <span class="search-overlay-close"><span class="closebt"><i class="icon_close"></i></span></span>
	    <form role="search" id="searchform" method="get">
	        <input value="" name="q" type="search" placeholder="Search..." />
	        <button type="submit"><i class="icon_search"></i></button>
	    </form>
	</div> -->
  <!-- End Search -->
	</header>
	<!-- /header -->