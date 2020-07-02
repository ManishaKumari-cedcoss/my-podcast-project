<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpp_project
 */

get_header();
?>
<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo get_template_directory_uri();?>/img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">Blog Page</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Blog Area Start ***** -->
  <section class="blog-area">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
        <?php
	        if ( have_posts() ) {
	        	while ( have_posts() ) {
		        the_post();
        ?>

          <!-- Single Blog Area -->
          <div class="single-blog-area mt-50 mb-50">
            <?php the_post_thumbnail(); ?>
            <!-- <a href="#" class="mb-30"><img src="<?php //echo get_template_directory_uri();?>/img/bg-img/21.jpg" alt=""></a> -->
            <!-- Content -->
            <div class="post-content">
              <a href="#" class="post-date"><?php the_date();?></a>
              <a href="<?php the_permalink();?>" class="post-title"><?php the_title();?></a>
              <div class="post-meta mb-15">
                <a href="#" class="post-author"><?php the_author();?></a> |
                <a href="#" class="post-catagory"><?php the_category();?></a>
              </div>
              <p><?php the_content();?></p>
              <!-- <p>Vestibulum lacus erat, pharetra et sodales ut, porta sit amet nibh. Sed vestibulum lacinia quam, vel iaculis nunc condimentum eget. Aliquam in mi pharetra, molestie augue ac, fermentum orci.</p> -->
              <a href="<?php the_permalink();?>" class="read-more-btn">Continue reading <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>

			  <?php
		     }
	    }  
			?>

          <!-- Pagination -->
          <div class="poca-pager d-flex mb-80">
            <a href="#">Previous Post <span>Previous</span></a>
            <a href="#">Next Post <span>Next</span></a>
          </div>

        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
<!-- ***** Blog Area end ***** -->
 
<?php
get_footer();