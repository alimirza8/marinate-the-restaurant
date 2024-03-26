<?php

/**
 * Template Name: Menu
 */
get_header();
?>
    <section class="menu-section">
      <div class="full-container">
          <h1 class="p-3">Menu<span></span></h1>
      </div>
    </section> <!-- End  menu-section-->

    <section class="menu-section">
      <div class="full-container">
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-01.png', true); ?>)"></div>
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-02.png', true); ?>)"></div>
      </div>
    </section>

    <section class="menu-section">
      <div class="full-container">
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-04.png', true); ?>)"></div>
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-03.png', true); ?>)"></div>
      </div>
    </section>

    <section class="menu-section">
      <div class="full-container">
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-05.png', true); ?>)"></div>
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-06.png', true); ?>)"></div>
      </div>
    </section>

    <section class="menu-section">
      <div class="full-container">
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-08.png', true); ?>)"></div>
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-07.png', true); ?>)"></div>
      </div>
    </section>

    <section class="menu-section">
      <div class="full-container">
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-09.png', true); ?>)"></div>
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-10.png', true); ?>)"></div>
      </div>
    </section>

    <section class="menu-section">
      <div class="full-container">
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-12.png', true); ?>)"></div>
        <div class="half-container" style="background-image:url(<?php asset_path('img/daymenu/page-11.png', true); ?>)"></div>
      </div>
    </section>


    <nav>
      <ul class="vertical-nav">
        <li><a href="#0" class="prev inactive">Next</a></li>
        <li><a href="#0" class="next">Prev</a></li>
      </ul>
    </nav> <!-- End vertical-nav-->

    <nav>
      <ul class="top-nav">
        <li><a href="<?php echo esc_url(home_url('/')); ?>" class="back"><i class="arrow_back"></i></a></li>
      </ul>
    </nav> <!-- End top-nav-->

<?php get_footer();?>
