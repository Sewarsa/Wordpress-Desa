<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}


/**
 * WP Post Author
 *
 * Allows user to get WP Post Author.
 *
 * @class   WP_Post_Author_Core
 */


class WP_Post_Author_Core
{
	/**
	 * Init and hook in the integration.
	 *
	 * @return void
	 */


	public function __construct()
	{
		$this->id                 = 'WP_Post_Author_Core';
		$this->method_title       = __('WP Post Author Core', 'wp-post-author');
		$this->method_description = __('WP Post Author Core', 'wp-post-author');

		include_once 'awpa-backend.php';
		include_once 'awpa-functions.php';
		include_once 'awpa-shortcodes.php';
		include_once 'awpa-frontend.php';

		add_action( 'rest_api_init', array($this,'awpa_post_author_api_endpoints' ));
	}

	public function awpa_post_author_api_endpoints(){
		$awpa_settings = new Awpa_Settings_Rest_Controller();
		$awpa_settings->awpa_settings_register_routes();

		 $awpa_membership = new Awpa_Registered_Users_Rest_Controller();
		 $awpa_membership->awpa_registered_user_register_routes();
		
		$awpa_form_builder = new Awpa_Formbuilder_Rest_Controller();
		$awpa_form_builder->awpa_formbuilder_register_routes();

		$awpa_frontend_api = new Awpa_Frontend_Form_Builder_Rest_Controller();
		$awpa_frontend_api->awpa_frontend_form_register_routes();

		$awpa_multiauthors = new Awpa_Multiauthor_Rest_Controller();
		$awpa_multiauthors->awpa_multiahuthors_register_routes();

		$awpa_ratings =  new Awpa_Ratings_Rest_Controller();
		$awpa_ratings->awpa_ratings_register_routes();

	}
}

$awpa_frontend = new WP_Post_Author_Core();
