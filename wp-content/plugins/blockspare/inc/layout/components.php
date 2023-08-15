<?php
/**
 * Register layouts and sections for the Layout block.
 *
 * @package Blockspare
 */

namespace Blockspare\Layouts;
include BLOCKSPARE_PLUGIN_DIR .'inc/template-library/init.php';
add_action( 'plugins_loaded', __NAMESPACE__ . '\register_components', 11 );
/**
 * Registers section and layout components.
 *
 * @since 2.0
 */
function register_components() {
	$blocks_lists = array();

	$templates = apply_filters( 'blockspare_template_library', $blocks_lists );

	if(!empty($templates)){
		foreach($templates as $temp){
		blockspare_register_layout_component($temp);
		}
	}

}




