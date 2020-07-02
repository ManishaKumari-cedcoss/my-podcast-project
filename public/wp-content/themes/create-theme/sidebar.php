<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpp_project
 */


?>


<div class="col-12 col-lg-4">
          <div class="sidebar-area mt-5">
             <!-- Search Area -->
            <div class="card-body">
              <div class="input-group">
                <form method="get" action="<?php esc_html( home_url( '/' ) ); ?>"> 
                  <input type="text"  class="form-control" name="s" placeholder="Search for...">
                  <input type="submit"  value="go"/>
                </form>
              </div>	
            </div>


           
         
            <!-- Single Widget Area -->

            
              <?php if(is_active_sidebar('sidebar-1')): ?>
		          <div id="seconadary" class="sidebar-container" role="complementary">
			          <div class="widget-area">
				          <?php dynamic_sidebar('sidebar-1');?>
                </div>
              </div>
              <?php endif; ?>
              <br>
              <br>
             

            <!-- Single Widget Area -->
            <div class="single-widget-area adds-widget mb-80">
              <a href="#"><img class="w-100" src="<?php echo get_template_directory_uri();?>/img/bg-img/banner.png" alt=""></a>
            </div>

            
          </div>
        </div>

        