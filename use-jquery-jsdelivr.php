<?php
 /*
Plugin Name: Use jQuery jsDelivr
Plugin URI: http://additifstabac.free.fr/index.php/use-jquery-jsDelivr/
Donate link: additifstabac@free.fr
Description: Charge les bibliothèques open source jQuery, jQuery-migrate et jQuery-masonry depuis le CDN de jsDelivr
Author: luciole135
Author URI: http://additifstabac.free.fr
Version: 1.2
*/
function modify_jquery_luc() {global $wp_scripts;
	if (!is_admin()) {
		$jquery_ver = $wp_scripts->registered['jquery']->ver;
		$jquery_migrate_ver = $wp_scripts->registered['jquery-migrate']->ver;
		$jquery_masonry_ver = $wp_scripts->registered['masonry']->ver;
		wp_deregister_script('jquery');
		wp_deregister_script('jquery-migrate');
		wp_deregister_script('masonry');
		wp_enqueue_script('jquery', 'https://cdn.jsdelivr.net/jquery/'.$jquery_ver.'/jquery.min.js', false, null,true);
		wp_enqueue_script('jquery-migrate', 'https://cdn.jsdelivr.net/jquery.migrate/'.$jquery_migrate_ver.'/jquery-migrate.min.js', false, null,true);
		wp_enqueue_script('masonry', 'https://cdn.jsdelivr.net/masonry/'.$jquery_masonry_ver.'/masonry.min.js', false, null,true);
		}
}
add_action('wp_enqueue_scripts', 'modify_jquery_luc',9999);
?>