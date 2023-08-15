<?php
/**
 * WXR importer class used in the Templatespare plugin.
 * Needed to extend the AFTMLS_WXR_Importer_Logger class to get/set the importer protected variables,
 * for use in the multiple AJAX calls.
 *
 * @package templatespare
 */

// Include files.
require AFTMLS_PLUGIN_DIR. 'includes/companion/importer/class-wxr-importer.php';

class AFTMLS_WXR_Importer extends AFTMLS_WXR_Importer_Logger {

	public function __construct( $options = array() ) {
		parent::__construct( $options );

		// Set current user to $mapping variable.
		// Fixes the [WARNING] Could not find the author for ... log warning messages.
		$current_user_obj = wp_get_current_user();
		$this->mapping['user_slug'][ $current_user_obj->user_login ] = $current_user_obj->ID;

		// WooCommerce product attributes registration.
		//   if ( class_exists( 'WooCommerce' ) ) {
		
		//  	add_filter( 'wxr_importer.pre_process.term', array( $this, 'woocommerce_product_attributes_registration' ), 10, 1 );
		//   }
	}

	/**
	 * Get all protected variables from the AFTMLS_WXR_Importer_Logger needed for continuing the import.
	 */
	public function get_importer_data() {
		return array(
			'mapping'            => $this->mapping,
			'requires_remapping' => $this->requires_remapping,
			'exists'             => $this->exists,
			'user_slug_override' => $this->user_slug_override,
			'url_remap'          => $this->url_remap,
			'featured_images'    => $this->featured_images,
		);
	}

	/**
	 * Sets all protected variables from the AFTMLS_WXR_Importer_Logger needed for continuing the import.
	 *
	 * @param array $data with set variables.
	 */
	public function set_importer_data( $data ) {
		$this->mapping            = empty( $data['mapping'] ) ? array() : $data['mapping'];
		$this->requires_remapping = empty( $data['requires_remapping'] ) ? array() : $data['requires_remapping'];
		$this->exists             = empty( $data['exists'] ) ? array() : $data['exists'];
		$this->user_slug_override = empty( $data['user_slug_override'] ) ? array() : $data['user_slug_override'];
		$this->url_remap          = empty( $data['url_remap'] ) ? array() : $data['url_remap'];
		$this->featured_images    = empty( $data['featured_images'] ) ? array() : $data['featured_images'];
	}



	public function woocommerce_product_attributes_registration( $data ) {
		global $wpdb;

		if ( strstr( $data['taxonomy'], 'pa_' ) ) {
			if ( ! taxonomy_exists( $data['taxonomy'] ) ) {
				$attribute_name = wc_sanitize_taxonomy_name( str_replace( 'pa_', '', $data['taxonomy'] ) );

				// Create the taxonomy
				if ( ! in_array( $attribute_name, wc_get_attribute_taxonomies() ) ) {
					$attribute = array(
						'attribute_label'   => $attribute_name,
						'attribute_name'    => $attribute_name,
						'attribute_type'    => 'select',
						'attribute_orderby' => 'menu_order',
						'attribute_public'  => 0
					);
					$wpdb->insert( $wpdb->prefix . 'woocommerce_attribute_taxonomies', $attribute );
					delete_transient( 'wc_attribute_taxonomies' );
				}

				// Register the taxonomy now so that the import works!
				register_taxonomy(
					$data['taxonomy'],
					apply_filters( 'woocommerce_taxonomy_objects_' . $data['taxonomy'], array( 'product' ) ),
					apply_filters( 'woocommerce_taxonomy_args_' . $data['taxonomy'], array(
						'hierarchical' => true,
						'show_ui'      => false,
						'query_var'    => true,
						'rewrite'      => false,
					) )
				);
			}
		}

		return $data;
	}
}
