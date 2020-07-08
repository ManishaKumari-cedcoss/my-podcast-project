<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpp_project
 * Template Name: About_template
 */

get_header();
?>
<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo get_template_directory_uri();?>/img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">About Us</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->
	<section class="about-us-area section-padding-0-80 mt-50">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<div class="about-us-content">
						<?php
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								the_post_thumbnail();
								?>
								<br>
								<br>
								<?php
								the_content();
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php

get_footer();