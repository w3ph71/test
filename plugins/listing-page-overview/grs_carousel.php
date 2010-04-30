<?php
/*
Plugin Name: Carousel
Plugin URI: http://www.bin-co.com/tools/wordpress/plugins/gallifrey/
Description: A gallery based on the Galleriffic jQuery plugin
Version: 1.00.0
Author: Binny V A
Author URI: http:/binnyva.com/
*/

function carousel_jsscript() 
    {
        /* Register our script.*/
?>
	<script type="text/javascript" src="<?php echo  WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)) . '/jquery-1.4.2.min.js';?>" ></script>
	<script type="text/javascript" src="<?php echo WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)) . '/jquery.galleryview-2.1.1.js'; ?>" ></script>
	<script type="text/javascript" src="<?php echo  WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)) . '/jquery.easing.1.3.js'; ?>" ></script>
	<script type="text/javascript" src="<?php echo  WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)) . '/jquery.galleryview-2.1.1-pack.js'; ?>" ></script>
	<script type="text/javascript" src="<?php echo  WP_PLUGIN_URL.'/'. dirname(plugin_basename(__FILE__)) . '/jquery.timers-1.2.js'; ?>" ></script>
	<script type="text/javascript" src="<?php echo  WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)) . '/js/jquery.lightbox-0.5.js'; ?>" ></script>
		
	<script type="text/javascript" src="<?php echo  WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)) . '/jquery-ui-1.8.custom.min.js';?>" ></script>
		
	<link rel="stylesheet" type="text/css" href="<?php echo WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)) . '/jquery-ui-1.8.custom.css'; ?>"/>	
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)) . '/css/jquery.lightbox-0.5.css'; ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)) . '/galleryview.css'; ?>" />
		
	
		
<?php		 
    }

	
function enqueue_js_scripts(){
	wp_enqueue_script('jquery');
}

/*function carousel_css() {
		wp_register_style('myPluginStylesheet', WP_PLUGIN_URL . dirname(plugin_basename(__FILE__)) .'css/jquery.lightbox-0.5.css');
		wp_register_style('myPluginStylesheet', WP_PLUGIN_URL . dirname(plugin_basename(__FILE__)) .'galleryview.css');
}*/ 



function add_jquery(){
echo "<script type='text/javascript'>
			  $(document).ready(function(){
			  $('#gallery').galleryView({
			  panel_width: ".((is_page('6')) ? 400 : 400).",
			  panel_height: 300,
			  frame_width: 75,
			  frame_height: 75,
			  gallery_width: 100,  
			});		
		});
		</script>

		<script type='text/javascript'>
			$(function() {
				$('a[rel=lightbox]').lightBox();
			});
		</script>
		
		<script type='text/javascript'>
			$(function() {
				$('#tabs').tabs();		
			});
		</script>
		
		";
}


function add_css(){ //additional css
echo "<style type='text/css'>
			#jquery-lightbox{
				position:absolute;
				z-index:1000;
				margin-top:-50px;
			}
			
			#tabs{font-size:12px;}
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>
	";
}

function display_content($content){
	global $post;
	if(!is_page())
		return $content;
	if($post->ID != 6)
		return $content;
		
	$output = '<div id="tabs">
            <ul>
                <li><a href="#tabs-1"><span>Home Facts</span></a></li>
                <li><a href="#tabs-2"><span>Photos and Videos</span></a></li>
                <li><a href="#tabs-3"><span>Map and nearby</span></a></li>
				<li><a href="#tabs-4"><span>Neighborhood</span></a></li>
            </ul>
	<div id="tabs-1">
	<table border=0>
	<tr>
	<td>
	<ul id="gallery">
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/auckland.jpg" rel="lightbox">Image 1 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/auckland.jpg" alt="image1" />
				</li>
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/fern.jpg" rel="lightbox">Image 2 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/fern.jpg" alt="image2" />
				</li>
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/lion_rock.jpg" rel="lightbox">Image 3 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/lion_rock.jpg" alt="image3" />
				</li>
				
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/rangitoto.jpg" rel="lightbox">Image 4 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/rangitoto.jpg" alt="image4" />
				</li>
				
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/river.jpg" rel="lightbox">Image 5 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/river.jpg" alt="image5" />
				</li>
				
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/towards_the_gap.jpg" rel="lightbox">Image 6 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/towards_the_gap.jpg" alt="image6" />
				</li>
				
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/waves.jpg" rel="lightbox">Image 7 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/waves.jpg" alt="image7" />
				</li>
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/01.jpg" rel="lightbox">Image 8 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/01.jpg" alt="image8" />
				</li>
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/02.jpg" rel="lightbox">Image 9 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/02.jpg" alt="image9" />
				</li>
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/03.jpg" rel="lightbox">Image 10 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/03.jpg" alt="image10" />
				</li>
				<li>
					<span class="panel-overlay"><a href="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/04.jpg" rel="lightbox">Image 11 - Click here to view larger image.</a></span>
					<img src="'.WP_PLUGIN_URL .'/'. dirname(plugin_basename(__FILE__)).'/'.'pics/04.jpg" alt="image11" />
				</li>
	</ul>
	</td>
	<td valign="top">
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
	</td>
	</tr>
	</table>
	</div>
 
			<div id="tabs-2">
                Photos and Videos
            </div>
            
			<div id="tabs-3">
                Map and nearby
            </div>
			
			<div id="tabs-4">
                Neighborhood
            </div>
			
</div>


            



';
	
	return $content.$output;
}

add_action('init', 'enqueue_js_scripts');
add_filter('the_content', 'display_content');
add_action('wp_head', 'carousel_jsscript'); 
add_action('wp_head', 'add_jquery');
//add_action('init', 'carousel_css');
add_action('wp_head', 'add_css');

?>
