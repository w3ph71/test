<?php 
/*
Plugin Name: Search Plugin
Version: 0.1
Plugin URI: http://projectsdev.info/paulondona/
Description: Testing for plugins
Author:Paul Ondona
Author URI: http://projectsdev.info/paulondona/
*/


//add_action('wp_print_scripts', 'load_search_validation_javascript');
add_shortcode('search-address-form','search_by_address');
add_shortcode('search-by-county','search_by_county');
//add_filter('the_content', 'searchresults');
//add_action('wp_print_styles', 'load_style');


function search_by_county() {
global $post;
	if(isset($_POST['submit']))
	{
		include('inc-search_result.php');
	}else
	{
		
		include('inc-sc_form.php');
	}
}

function search_by_address(){
global $post;
	if(isset($_POST['submit'])){
	
	}else{
		include('inc-sa_form.php');
	}
}


/*function load_search_validation_javascript(){
$wp_search_validation_scroller=trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );
	
	if(!is_admin())
	{
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery_validation',$wp_search_validation_scroller.'/jquery.validate.js');
		wp_enqueue_script('cmx_form',$wp_search_validation_scroller.'/cmxforms.js');
		wp_enqueue_script('search_address',$wp_search_validation_scroller.'/search.address.js');
		wp_enqueue_script('fancy_box',$wp_search_validation_scroller.'/fancybox/jquery.fancybox-1.3.1.js');
		wp_enqueue_script('tip_info',$wp_search_validation_scroller.'/tip.info.js');
		wp_localize_script('jquery_validation','wp_validation_scroller_settings',array('refreshtime'=>5,'mode'=>'auto'));
		wp_localize_script('cmx_form','wp_validation_scroller_settings',array('refreshtime'=>5,'mode'=>'auto'));
		wp_localize_script('search_address','wp_validation_scroller_settings',array('refreshtime'=>5,'mode'=>'auto'));
		wp_localize_script('fancy_box','wp_validation_scroller_settings',array('refreshtime'=>5,'mode'=>'auto'));
	}

}*/

/*function load_style(){
$wp_search_validation_scroller=trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );
	wp_enqueue_style('validation_style', '/wp-content/plugins/search-address/validation_style.css');
	wp_enqueue_style('fancy_box_style', '/fancybox/jquery.fancybox-1.3.1.css');
}*/

///add_shortcode('bartag', 'bartag_func');

