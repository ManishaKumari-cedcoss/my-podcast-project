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
 * Template Name: Contact_template
 */

get_header();
?>
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo get_template_directory_uri();?>/img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">Contact</h2>
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
  <!-- ***** Contact Area Start ***** -->
  <section class="poca-contact-area mt-50 mb-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="google-maps mb-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11956.9355465873!2d24.0768412544878!3d56.9550599906977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2z4Kaw4Ka_4KaX4Ka-LCDgprLgp43gpq_gpr7gpp_gp43gpq3gpr_gpoY!5e0!3m2!1sbn!2sbd!4v1543911160102"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>

     
		<div class="row">
		  <!-- Contact Information -->
		  <div class="col-12 col-md-6">
			<div class="contact-information">
				<div class="contact-heading mb-50">
					<?php
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								the_content();
							}
						}
					?>
			  	</div>
			</div>
		  </div>
  
		  <!-- Contact Form -->
		  <div class="col-12 col-md-6">
			<div class="contact-form">
			  <div class="contact-heading">
				<h2>Get In Touch</h2>
				<h5>Don't hesitate to contact us</h5>
			  </div>
			  <!-- Form -->
			  <form action="#" method="post">
				<div class="row">
				  <div class="col-12">
					<input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
				  </div>
				  <div class="col-12">
					<input type="email" name="message-email" class="form-control mb-30" placeholder="Your Email">
				  </div>
				  <div class="col-12">
					<textarea name="message" class="form-control mb-30" placeholder="Your Message"></textarea>
				  </div>
				  <div class="col-12">
					<button type="submit" class="btn poca-btn">Send Message</button>
				  </div>
				</div>
			  </form>
  
			</div>
		  </div>
		</div>
	  </div>
	</section>
	
  <!-- ***** Contact Area End ***** -->
<?php

get_footer();