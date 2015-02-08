<?php 

	//IMPORTS 
	require_once('custom-post-functions.php');
	
	//SUPPORTS 
	add_theme_support( 'post-thumbnails' );
	
	// Add RSS links to <head> section
	automatic_feed_links(); 
	
	// CUSTOM WORDPRESS LOGIN CSS
	function login_css() {
		wp_enqueue_style( 'login_css', get_template_directory_uri() . '/css/custom-login.css' );
	}
	add_action('login_head', 'login_css');
	
	//LOAD SCRIPTS 
	if ( !is_admin() ) {
      wp_register_script('modernizr', get_bloginfo('template_directory') . "/js/modernizr.custom.js"); // modernizr.js  
      wp_enqueue_script('modernizr'); //modernizr anmelden 

      wp_deregister_script('jquery');//jQuery aus der WP Library abmelden...
      wp_register_script('jquery', get_bloginfo('template_directory') . "/js/jquery.js" , false); //...neue Quelle für jQuery angeben 
      wp_enqueue_script('jquery'); //jquery anmelden 
	
		  wp_register_script('min-js', get_bloginfo('template_directory') . "/js/scripts.min.js"); // plugins, custom.js minified 
		  wp_enqueue_script('min-js'); //custom anmelden 
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    } 

  //CUSTOM MENUS 
    function register_my_menus() {
      register_nav_menus(
        array(
          'main-nav' => __( 'Main Nav' ),
          'footer-nav' => __( 'Footer Nav' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );

	//GET FIRST IMAGE
	   function catch_that_image() {
	     global $post, $posts;
	     $first_img = '';
	     ob_start();
	     ob_end_clean();
	     $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	     $first_img = $matches [1] [0];
	     
	     return $first_img;
	   } 

    //ADDITIONAL IMG SIZES

    if ( function_exists( 'add_image_size' ) ) { 
      add_image_size( 'home-slide','1024' ); // name, width, height, crop
    }


	//CUSTOM PASSWORD-PROTECTED AREA FORM
    add_filter( 'the_password_form', 'custom_password_form' );
      	function custom_password_form() {
       		global $post;
       		$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
       		$o = '
       		<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post">
       		' . __( "Die Seite ist Passwortgesch&uuml;tzt." ) . '
       		<label class="pass-label" for="' . $label . '">' . __( "PASSWORD:" ) . ' </label>
       		<input name="post_password" id="' . $label . '" type="password" style="background: #ffffff; border:1px solid #999; color:#333333; padding:10px;" size="20" /><input type="submit" name="Submit" class="button" value="' . esc_attr__( "Senden" ) . '" />
       		</form>
       		<p style="font-size:14px;margin:0px;">*Password is Case-Sensitive</p>
       		';
       		return $o;
    } 

    //GERMAN QUOTES
      function deutscheanfuehrungen($content) {
          $content = str_replace (' &#8220;', ' &#8222;', $content);
          $content = str_replace ('&#8221;', '&#8220;', $content);
          $content = str_replace (' &#quot;', ' &#8222;', $content);
          $content = str_replace ('&#quot;', '&#8220;', $content);
          $content = str_replace (' &#34;', ' &#8222;', $content);
          $content = str_replace ('&#34;', '&#8220;', $content);
          $content = str_replace (' &#8216;', ' &#8218;', $content);
          $content = str_replace ('&#8217;', '&#8216;', $content);
           
          return $content;
      }
        add_filter('the_content', 'deutscheanfuehrungen');
        add_filter('get_the_content', 'deutscheanfuehrungen');
        add_filter('the_title', 'deutscheanfuehrungen');
        add_filter('get_the_title', 'deutscheanfuehrungen');
        add_filter('the_excerpt', 'deutscheanfuehrungen');
        add_filter('get_the_excerpt', 'deutscheanfuehrungen'); 

      //REMOVE THUMB DIMENSIONS (RESPONSIVE IMAGES)
        add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );  
        add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); 
        function remove_thumbnail_dimensions( $html ) {     
        $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );     
        return $html; } 

      //Add Google Fonts to Editor 
        // function my_theme_add_google_fonts() {
        //     $font_url = 'http://fonts.googleapis.com/css?family=Raleway:700,300,400,100,200,500,600';
        //     add_editor_style( str_replace( ',', '%2C', $font_url ) );
        // }
        // add_action( 'init', 'my_theme_add_google_fonts' );

      //Custom Editor Styles 
        // function my_theme_add_editor_styles() {
        //     add_editor_style( 'css/custom-editor-style.css' );
        // }
        // add_action( 'init', 'my_theme_add_editor_styles' ); 

      //Login-Logo Link und text 
        // function my_login_logo_url() {
        //     return get_bloginfo( 'url' );
        // }
        // add_filter( 'login_headerurl', 'my_login_logo_url' );
        
        // function my_login_logo_url_title() {
        //     return 'Wordpress Theme by Ralf Hoffmeister';
        // }
        // add_filter( 'login_headertitle', 'my_login_logo_url_title' ); 

      // custom excerpt word count
        // function my_excerpt_length($length) {
        //   return 17; // Or whatever you want the length to be.
        // }
        // add_filter('excerpt_length', 'my_excerpt_length'); 

      //Custom Excerpt more
        add_filter('excerpt_more', 'new_excerpt_more');
        function new_excerpt_more( $more ) {
         return '...';
        } 
	

?>