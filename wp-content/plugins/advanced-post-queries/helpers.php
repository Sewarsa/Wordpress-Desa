<?php

function apq_get_taxonomies( $args = array() ) {

	// vars
	$taxonomies = array();
	
	// get taxonomy objects
	$objects = get_taxonomies( $args, 'objects' );
	
	// loop
	foreach( $objects as $i => $object ) {
		
		// bail early if is builtin (WP) private post type
		// - nav_menu_item, revision, customize_changeset, etc
		if( $object->_builtin && !$object->public ) continue;
		
		// append
		$taxonomies[] = $i;
	}
	
	// filter
	$taxonomies = apply_filters('apq/get_taxonomies', $taxonomies, $args);
	
	// return
	return $taxonomies;
}

function apq_get_taxonomy_labels( $taxonomies = array() ) {
	
	// default
	if( empty($taxonomies) ) {
		$taxonomies = apq_get_taxonomies();
	}
	
	// vars
	$ref = array();
	$data = array();
	
	// loop
	foreach( $taxonomies as $taxonomy ) {
		
		// vars
		$object = get_taxonomy( $taxonomy );
		$label = $object->labels->singular_name;
		
		// append
		$data[ $taxonomy ] = $label;
		
		// increase counter
		if( !isset($ref[ $label ]) ) {
			$ref[ $label ] = 0;
		}
		$ref[ $label ]++;
	}
	
	// show taxonomy name next to label for shared labels
	foreach( $data as $taxonomy => $label ) {
		if( $ref[$label] > 1 ) {
			$data[ $taxonomy ] .= ' (' . $taxonomy . ')';
		}
	}
	
	// return
	return $data;
}