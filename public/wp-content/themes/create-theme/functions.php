<?php
/**
 * wpp_project functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpp_project
 */




if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'create_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function create_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wpp_project, use a find and replace
		 * to change 'create-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'create-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				// 'menu-1' => esc_html__( 'Primary', 'create-theme' ),
				'MyPoca Menu' => esc_html__( 'Primary', 'MyPoca Menu' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'create_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'create_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function create_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'create_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'create_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function create_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'create-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'create-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'create_theme_widgets_init' );


	// for( $i = 1; $i <= 4; $i++ ) {
	//     register_sidebar( array(
	//         /* translators: 1: Widget number. */
	//         'name'          => sprintf( esc_html__( 'Footer %d', 'create-theme' ), $i ),
	//         'id'            => 'footer-'.$i,
	//         'before_widget' => '<div id="%1$s" class="widget footer-widgets %2$s">',
	//         'after_widget'  => '</div>',
	//         'before_title'  => '<h2 class="widget-title">',
	//         'after_title'   => '</h2>',
	//     ) );
	// }

// add_action( 'widgets_init', 'create-theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function create_theme_scripts() {
	wp_enqueue_script( 'create-theme-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.1', 'all'  );
	wp_enqueue_script( 'create-theme-popper.min', get_template_directory_uri() . '/js/popper.min.js', array(), '1.1', 'all'  );
	wp_enqueue_script( 'create-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'create-theme-boot', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'create-theme-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.1', 'all');
	wp_enqueue_script( 'create-theme-isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '1.1', 'all');
	wp_enqueue_script( 'create-theme-jarallax-video.min', get_template_directory_uri() . '/js/jarallax-video.min.js', array(), '1.1', 'all');
	wp_enqueue_script( 'create-theme-jarallax.min', get_template_directory_uri() . '/js/jarallax.min.js', array(), '1.1', 'all');
	// wp_enqueue_script( 'create-theme-jquery.easing.min', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '1.1', 'all');
	wp_enqueue_script( 'create-theme-owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.1', 'all');
	wp_enqueue_script( 'create-theme-poca.bundle', get_template_directory_uri() . '/js/poca.bundle.js', array(), '1.1', 'all');
	wp_enqueue_script( 'create-theme-waypoints.min', get_template_directory_uri() . '/js/waypoints.min.js', array(), '1.1', 'all'  );
	wp_enqueue_script( 'create-theme-wow.min', get_template_directory_uri() . '/js/wow.min.js', array(), '1.1', 'all'  );
	wp_enqueue_script( 'create-theme-active', get_template_directory_uri() . '/js/default-assets/active.js', array(), '1.1', 'all'  );
	wp_enqueue_script( 'create-theme-audioplayer', get_template_directory_uri() . '/js/default-assets/audioplayer.js', array(), '1.1', 'all'  );
	wp_enqueue_script( 'create-theme-avoid.console.error', get_template_directory_uri() . '/js/default-assets/avoid.console.error.js', array(), '1.1', 'all'  );
	// wp_enqueue_script( 'create-theme-classynav', get_template_directory_uri() . '/js/default-assets/classynav.js', array(), '1.1', 'all'  );
	wp_enqueue_script( 'create-theme-jquery.scrollup.min', get_template_directory_uri() . '/js/default-assets/jquery.scrollup.min.js', array(), '1.1', 'all'  );

	wp_style_add_data( 'create-theme-style', 'rtl', 'replace' );

	wp_enqueue_style( 'create-theme-style', get_stylesheet_uri(), array(), _S_VERSION, true);
	wp_enqueue_style( 'create-theme-audio', get_template_directory_uri() .'/css/default-assets/audioplayer.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'create-theme-classy', get_template_directory_uri() .'/css/default-assets/classy-nav.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'create-theme-fonts', get_template_directory_uri() .'/css/default-assets/hkgrotesk-fonts.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'create-theme-main', get_template_directory_uri() .'/css/animate.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'create-theme-bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'create-theme-font-awesome', get_template_directory_uri() .'/css/font-awesome.min.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'create-theme-owl', get_template_directory_uri() .'/css/owl.carousel.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'create-theme-main-style', get_template_directory_uri() .'/css/style.css', array(), '1.1', 'all');
	

	

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'create_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Functions which create Recent Post widget into WordPress.
 */

function register_my_widget(){
	register_widget("my_Widget");
}
add_action( 'widgets_init', 'register_my_widget' );

class my_Widget extends WP_Widget {
 
    function __construct() { //1 WIDGET ME SHOW KARANE KE LIYE
		// actual widget processes
		parent::__construct(
			'my_Widget', //widget ki id
			__("Recent Post.."),   // widget title
			array('description' => __( "The most recent posts on your site"))
        );
    }
 
    function widget( $args, $instance) {//4 TITLE KO FRONTEND PE SHOW KRNE KE LIYE
		// outputs the content of the widget
		
		$title= apply_filters('widget_title',$instance['title']);  // assigning title to widget.

		// before and after widget argument are defined by themes.
		echo $args['before_widget'];  //<aside>
		if(!empty($title))
		echo $args['before_title'] . $title . $args['after_title'];  // <h1>....</h1>

		// this is where you run the code and display the output.
		//echo __("Hello World");
		$recent_post=wp_get_recent_posts(array(
			'numberposts'=>$num,
			'post_status'=>'publish'
		));
	//   print_r($recent_post);
	  
		foreach($recent_post as $post){ ?>
            <div class="single-news-area d-flex">
                <div class="blog-thumbnail">
					<?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
                </div>
                <div class="blog-content">
                  <a href="#" class="post-title"><?echo $post['post_title'];?></a>
                  <span class="post-date"><?echo $post['post_date'];?></span>
                </div>
            </div>
		<?php }

		wp_reset_query();
	}
    
 
    function form($instance) { // 2 TITLE TAG ADMIN PE SHOW KRNE KE LIYE
		// outputs the options form in the admin
		if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'my_widget_domain' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>	
			<label for="<?php echo $this->get_field_name( 'num' ); ?>">No. of posts to show</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>" name="<?php echo $this->get_field_name( 'num' ); ?>" class="tiny-text" type="number" step="1" min="1" value="<?php echo esc_attr( $num ); ?>" size="3"/>
        </p>
    <?php
    }
    
 
    function update($new_instance, $old_instance) { //  3 TITLE KO SAVE KRNE KE LIYE
		// processes widget options to be saved
		$instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
}

/**
 * Functions which create Categories widget into WordPress.
 */

function register_my_widget_cat(){
	register_widget("my_Widget_cat");
}
add_action( 'widgets_init', 'register_my_widget_cat' );

class my_Widget_cat extends WP_Widget {
 
    function __construct() { //1 WIDGET ME SHOW KARANE KE LIYE
		// actual widget processes
		parent::__construct(
			'my_Widget_categories', //widget ki id
			__("Categories.."),   // widget title
			array('description' => __( "The categories on your site"))
        );
    }
 
    function widget( $args, $instance) {//4 TITLE KO FRONTEND PE SHOW KRNE KE LIYE
		// outputs the content of the widget
		
		$title= apply_filters('widget_title',$instance['title']);  // assigning title to widget.

		// before and after widget argument are defined by themes.
		echo $args['before_widget'];  //<aside>
		if(!empty($title))
		echo $args['before_title'] . $title . $args['after_title'];  // <h1>....</h1>

		// this is where you run the code and display the output.
		//echo __("Hello World");
		$categorie=get_categories();
		?>
		<div class="single-widget-area catagories-widget mb-80">
              <!-- <h5 class="widget-title"><?php //echo $title; ?> </h5> -->
				<ul class="categories-list">
					<?php foreach($categorie as $category){?>
						<li><a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo $category->name;?></a></li>
					<?php } ?>
				</ul>
		</div>
		<?php
	}
    
 
    function form($instance) { // 2 TITLE TAG ADMIN PE SHOW KRNE KE LIYE
		// outputs the options form in the admin
		if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'my_widget_domain' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
         </p>
    <?php
    }
    
 
    function update($new_instance, $old_instance) { //  3 TITLE KO SAVE KRNE KE LIYE
		// processes widget options to be saved
		$instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
}




/**
 * Functions which create tags widget into WordPress.
 */

function register_my_widget_tag(){
	register_widget("my_Widget_tag");
}
add_action( 'widgets_init', 'register_my_widget_tag' );

class my_Widget_tag extends WP_Widget {
 
    function __construct() { //1 WIDGET ME SHOW KARANE KE LIYE
		// actual widget processes
		parent::__construct(
			'my_Widget_tags', //widget ki id
			__("Tags.."),   // widget title
			array('description' => __( "The tags on your site"))
        );
    }
 
    function widget( $args, $instance) {//4 TITLE KO FRONTEND PE SHOW KRNE KE LIYE
		// outputs the content of the widget
		
		$title= apply_filters('widget_title',$instance['title']);  // assigning title to widget.

		// before and after widget argument are defined by themes.
		echo $args['before_widget'];  //<aside>
		if(!empty($title))
		echo $args['before_title'] . $title . $args['after_title'];  // <h1>....</h1>

		// this is where you run the code and display the output.
		//echo __("Hello World");
		$tags=get_tags();
		?>
		<div class="single-widget-area catagories-widget mb-80">
              
				<ul class="tags-list">
					<?php foreach($tags as $tag){?>
						<li><a href="#"><?php echo $tag->name;?></a></li>
					<?php } ?>
				</ul>
		</div>

		
		<?php
	}
    
 
    function form($instance) { // 2 TITLE TAG ADMIN PE SHOW KRNE KE LIYE
		// outputs the options form in the admin
		if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'my_widget_domain' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
         </p>
    <?php
    }
    
 
    function update($new_instance, $old_instance) { //  3 TITLE KO SAVE KRNE KE LIYE
		// processes widget options to be saved
		$instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
}