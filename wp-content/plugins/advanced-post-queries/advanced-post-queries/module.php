<?php
namespace AdvancedPostQueries\Module\AdvancedPostQueries;

use Elementor\Controls_Manager;
use Elementor\Core\Base\Module;
use ElementorPro\Modules\QueryControl\Module as Module_Query;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class APQ_Module extends Module {
		
	private $components = [];
	
	public function get_name() {
		return 'advanced_post_queries';
	}


	public function add_component( $id, $instance ) {
		$this->components[ $id ] = $instance;
	}
	
	public function get_components( $id = null ) {
		if ( $id ) {
			if ( ! isset( $this->components[ $id ] ) ) {
				return null;
			}

			return $this->components[ $id ];
		}

		return $this->components;
	}
	
	public function advanced_query_options( $element, $args ) {
		
	  $element->add_control(
        'advanced_query_options',
        [
          'label'       => __( 'Advanced Query Options', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::SELECT2,
		  'multiple'	=> true,
 		  'options' 	=> [
			  'dynamic_user' => __( 'Dynamic User', 'advanced-post-queries' ),
			  'dynamic_date' => __( 'Dynamic Date and Time', 'advanced-post-queries' ),
  			  'dynamic_related' => __( 'Dynamic Related Posts', 'advanced-post-queries' ),
  			  'dynamic_orderby' => __( 'Advanced OrderBy Options', 'advanced-post-queries' ),
  			  'custom_field' => __( 'Custom Field Value', 'advanced-post-queries' ),
		  ],	
        ]
     ); 	
		
		$element->add_control(
			'dynamic_user_heading',
			[
				'label' => __( 'Dynamic User', 'advanced-post-queries' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
				 'advanced_query_options' => 'dynamic_user',
				],
			]
		);
		
      $element->add_control(
        'dynamic_user_options',
        [
          'label'       => __( 'Dynamic User Options', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::SELECT2,
 		  'options' 	=> [
			  'author_is_current_user' => __( 'Post Author is Current User', 'advanced-post-queries' ),
			  'author_is_current_author' => __( 'Post Author is Current Post/Archive Author', 'advanced-post-queries' ),
			  'user_id_is_current_user' => __( 'Custom Field is Current User', 'advanced-post-queries' ),
			  'user_id_contains_current_user' => __( 'Custom Field Contains Current User', 'advanced-post-queries' ),
		  ],
		  'condition' => [
			  'advanced_query_options' => 'dynamic_user',
		  ],
        ]
     ); 
		

	$element->add_control(
        'user_field_key',
        [
          'label'       => __( 'User Data to Compare', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::SELECT,
		  'default' 	=> 'ID',
		  'options' => [
			  'ID' => __( 'User ID', 'advanced-post-queries' ),
			  'email' => __( 'User Email', 'advanced-post-queries' ),
			  'login' => __( 'Username', 'advanced-post-queries' ),
		  ],
		  'condition' => [
			  'advanced_query_options' => 'dynamic_user',
			  'dynamic_user_options' => [ 'user_id_is_current_user', 'user_id_contains_current_user' ],
		  ],
		]
     );		
	$element->add_control(
        'user_field_name',
        [
          'label'       => __( 'User Field Name', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'user_id',
		  'default' 	=> 'user_id',
		  'description' => __( 'No support for checkboxes yet', 'advanced-post-queries' ),
		  'condition' => [
			  'advanced_query_options' => 'dynamic_user',
			  'dynamic_user_options' => [ 'user_id_is_current_user', 'user_id_contains_current_user' ],
		  ],
		]
     );		
		
		$element->add_control(
			'dynamic_datetime_heading',
			[
				'label' => __( 'Dynamic Date and Time', 'advanced-post-queries' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
				 	'advanced_query_options' => 'dynamic_date',
				],			
			]
		);
	$element->add_control(
        'dynamic_date_options',
        [
          'label'       => __( 'Dynamic Date Options', 'advanced-post-queries' ),
          'type'        => \Elementor\Controls_Manager::SELECT2,
		  'label_block' => true,
		  'multiple'	=> true,
 		  'options' 	=> [
			  'posts_pre_expired' => __( 'Custom Field is Start Date', 'advanced-post-queries' ),
			  'posts_expired' => __( 'Custom Field is End Date', 'advanced-post-queries' ),
		  ],
		  'condition' => [
			  'advanced_query_options' => 'dynamic_date',
		  ],
        ]
     ); 
	
	$element->add_control(
        'include_today',
        [
          'label'       => __( 'Include Today', 'advanced-post-queries' ),
          'type'        => \Elementor\Controls_Manager::SWITCHER,
		  'label_on' => __( 'Yes', 'advanced-post-queries' ),
		  'label_off' => __( 'No', 'advanced-post-queries' ),  
		  'return_value' => 'true',
		  'condition' => [
			  'advanced_query_options' => 'dynamic_date',
		  ],
        ]
     ); 	
		
	$element->add_control(
        'query_time',
        [
          'label'       => __( 'Query by the time', 'advanced-post-queries' ),
          'type'        => \Elementor\Controls_Manager::SWITCHER,
		  'label_on' => __( 'Yes', 'advanced-post-queries' ),
		  'label_off' => __( 'No', 'advanced-post-queries' ),
		  'return_value' => 'true',
		  'condition' => [
			  'advanced_query_options' => 'dynamic_date',
		  ],
        ]
     ); 
	
	
		
	$element->add_control(
        'start_field_name',
        [
          'label'       => __( 'Start Field Name', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'start_date',
		  'default' 	=> 'start_date',
		  'condition' => [
			  'advanced_query_options' => 'dynamic_date',
			  'dynamic_date_options' => 'posts_pre_expired' ,
			],
		]
     );
		
	$element->add_control(
        'expired_field_name',
        [
          'label'       => __( 'End Field Name', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'end_date',
		  'default' 	=> 'end_date',
		  'condition' => [
			  'advanced_query_options' => 'dynamic_date',
		  	  'dynamic_date_options' => 'posts_expired',
			],
		]
     );
	

		$element->add_control(
			'dynamic_related_heading',
			[
				'label' => __( 'Related Posts', 'advanced-post-queries' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
				 	'advanced_query_options' => 'dynamic_related',
				],				
			]
		);	
	$element->add_control(
        'dynamic_related_options',
        [
          'label'       => __( 'Related Posts', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::SELECT2,
 		  'options' 	=> [
			  'related_posts' => __( 'Post is in Current Post Custom Field', 'advanced-post-queries' ),
			  'related_terms' => __( 'Post Terms are in the Current Post\'s Custom Field', 'advanced-post-queries' ),
			  'same_terms' => __( 'Post shares terms with the Current Post', 'advanced-post-queries' ),
			  'postid_parent' => __( 'Post Custom Field Contains Current Post ID', 'advanced-post-queries' ),
		  ],
		  'condition' => [
			  'advanced_query_options' => 'dynamic_related',
		  ],
        ]
     ); 		
		
	$element->add_control(
        'related_posts',
        [
          'label'       => __( 'Related Posts Field', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'related_posts',
		  'default' 	=> 'related_posts',
		  'condition' => [
			  'advanced_query_options' => 'dynamic_related',
			  'dynamic_related_options' => 'related_posts',
		  ],
		 'description' => __( 'Field must return post ids', 'advanced-post-queries' ),
		]
     );	
	$element->add_control(
        'related_tax',
        [
          'label'       => __( 'Related Terms Taxonomy', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::SELECT,
		  'default' 	=> 'category',
		  'options'     => apq_get_taxonomy_labels(),
		  'condition' => [
			  'advanced_query_options' => 'dynamic_related',
			  'dynamic_related_options' => [ 'related_terms', 'same_terms' ],
		  ],
		 'description' => __( 'Taxonomy slug of the terms to query by', 'advanced-post-queries' ),
		]
     );	
	$element->add_control(
        'related_terms',
        [
          'label'       => __( 'Related Terms Field', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'related_terms',
		  'default' 	=> 'related_terms',
		  'condition' => [
			  'advanced_query_options' => 'dynamic_related',
			  'dynamic_related_options' => 'related_terms',
		  ],
		 'description' => __( 'Field must return term ids', 'advanced-post-queries' ),
		]
     );	

	$element->add_control(
        'postid_parent',
        [
          'label'       => __( 'Custom Field Name', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'post_id',
		  'default' 	=> 'post_id',
		  'condition' => [
			  'advanced_query_options' => 'dynamic_related',
			  'dynamic_related_options' => [ 'postid_parent' ],
		  ],
		 'description' => __( 'Field must return post ids', 'advanced-post-queries' ),
		]
     );
		$element->add_control(
			'advnaced_order_by_heading',
			[
				'label' => __( 'Advanced OrderBy', 'advanced-post-queries' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					  'advanced_query_options' => 'dynamic_orderby',
				  ],
			]
		);	
	$element->add_control(
        'advanced_orderby_options',
        [
          'label'       => __( 'Advanced OrderBy Options', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::SELECT2,
 		  'options' 	=> [
			  'dynamic_orderby' => __( 'Dynamic OrderBy Field', 'advanced-post-queries' ),
			  'last_modified' => __( 'Last Modified Date', 'advanced-post-queries' ),
			  'comment_count' => __( 'Comment Count', 'advanced-post-queries' ),
		  ],
		  'condition' => [
			  'advanced_query_options' => 'dynamic_orderby',
		  ],
        ]
     ); 		
		
	$element->add_control(
        'dynamic_orderby_options',
        [
          'label'       => __( 'Dynamic OrderBy Field', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'order_posts',
		  'condition' => [
			  'advanced_query_options' => 'dynamic_orderby',
			  'advanced_orderby_options' => 'dynamic_orderby',
		  ],
		  'description' => __( 'This will override the default orderby setting', 'advanced-post-queries' ),
        ]
     ); 	
	
		$element->add_control(
			'custom_field_heading',
			[
				'label' => __( 'Custom Field and Value', 'advanced-post-queries' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				  'condition' => [
					  'advanced_query_options' => 'custom_field',
				  ],			
			]
		);	
	$element->add_control(
        'custom_field_options',
        [
          'label'       => __( 'Custom Field Options', 'advanced-post-queries' ),
		  'label_block' => true,
          'type'        => \Elementor\Controls_Manager::SELECT,
 		  'options' 	=> [
			'name_is_value' => __( 'Custom Field is Value', 'advanced-post-queries' ),
			'name_is_post_id' => __( 'Custom Field is Current Post ID', 'advanced-post-queries' ),
			'name_is_post_title' => __( 'Custom Field is Current Post Title', 'advanced-post-queries' ),
			'name_is_post_cf' => __( 'Custom Field is Current Post Custom Field', 'advanced-post-queries' ),
		  ],
		  'condition' => [
			  'advanced_query_options' => 'custom_field',
		  ],
        ]
     ); 	
		
	$element->add_control(
        'custom_field_name',
        [
          'label'       => __( 'Field Name', 'advanced-post-queries' ),
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'Field Name',
		  'condition' => [
			  'advanced_query_options' => 'custom_field',
		  ],
			'description' => __( 'No support for checkboxes yet', 'advanced-post-queries' ),
        ]
     ); 	
				
	 $element->add_control(
        'custom_field_value',
        [
          'label'       => __( 'Field Value', 'advanced-post-queries' ),
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'Value',
		  'condition' => [
			'advanced_query_options' => 'custom_field',
			'custom_field_options' => 'name_is_value',
			]
        ]
	 ); 		
	 $element->add_control(
        'cp_custom_fields',
        [
          'label'       => __( 'Current Post Field Name', 'advanced-post-queries' ),
          'type'        => \Elementor\Controls_Manager::TEXT,
 		  'placeholder' => 'field_name',
		  'condition' => [
			'advanced_query_options' => 'custom_field',
			'custom_field_options' => 'name_is_post_cf',
			]
        ]
     ); 	
				
	
    }
	

	public function advanced_query_args( $query_vars, $widget ){
		$settings = $widget->get_settings();
		
		if( empty( $settings[ 'advanced_query_options' ] ) ){
			return $query_vars;
		}
		
		
		$meta_query = array();
		
		if( isset( $query_vars[ 'meta_query' ] ) ) $meta_query = $query_vars[ 'meta_query' ];
		$advanced_options = $settings[ 'advanced_query_options' ];
		$post_id = get_the_ID();
		
		global $current_user;
		
		if( $advanced_options ){
			
			if( in_array( 'dynamic_user', $advanced_options ) ){
				
				if( $settings[ 'dynamic_user_options' ] == 'author_is_current_user' ){
					if( $current_user->ID > 0 ){
						$query_vars[ 'author' ] = $current_user->ID;
					}else{
						$query_vars[ 'post__in' ] = [ 0 ];
					}
				}			
				if( $settings[ 'dynamic_user_options' ] == 'author_is_current_author' ){
					$author = get_queried_object_id();
					
					if( is_single() ){
						$author = get_the_author_meta( 'ID' );
					}
					$query_vars[ 'author' ] = $author;
				}
				$compare = '';
				if( $settings[ 'dynamic_user_options' ] == 'user_id_is_current_user' ){
					$compare = '==';
				}				
				if( $settings[ 'dynamic_user_options' ] == 'user_id_contains_current_user' ){
					$compare = 'IN';
				}
				
				if( $compare ){
					$user_field_value = '';
					if( $settings[ 'user_field_key' ] == 'ID' ){
						$user_field_value = $current_user->ID;
					}
					if( $settings[ 'user_field_key' ] == 'email' ){
						$user_field_value = $current_user->user_email;
					}
					if( $settings[ 'user_field_key' ] == 'login' ){
						$user_field_value = $current_user->user_login;
					}

					$meta_query[] = [
						'key' => $settings[ 'user_field_name' ],
						'compare' => $compare,
						'value' => $user_field_value,
					];	
				}

			}
			
			if( in_array( 'dynamic_related', $advanced_options ) ){
					
				if( $settings[ 'dynamic_related_options' ] == 'related_posts' ){
					$posts = get_post_meta( $post_id, $settings[ 'related_posts' ], true );
					if( $posts ){
						$posts = (is_array($posts)) ? $posts : [$posts];
						$query_vars[ 'post__in' ] = $posts;
					}else{
						$query_vars[ 'post__in' ] = array( 0 );
					}
				}				
				
				if( $settings[ 'dynamic_related_options' ] == 'related_terms' ){
					$terms = get_post_meta( $post_id, $settings[ 'related_terms' ], true );
					$query_vars[ 'tax_query' ][] = [
						'taxonomy' => $settings[ 'related_tax' ],
						'field' => 'id',
						'terms' => $terms,
					];
				}
				if( $settings[ 'dynamic_related_options' ] == 'same_terms' ){
					$terms = get_the_terms( $post_id, $settings[ 'related_tax' ] );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
						$terms = wp_list_pluck( $terms, 'term_id' );
						$query_vars[ 'tax_query' ][] = [
							'taxonomy' => $settings[ 'related_tax' ],
							'field' => 'id',
							'terms' => $terms,
						];
					}
				}
					
				if( $settings[ 'dynamic_related_options' ] == 'postid_parent' ){
					$meta_query[] = [
						'key' => $settings[ 'postid_parent' ],
						'compare' => '==',
						'value' => $post_id,
					];
				}

			}			

			if( in_array( 'dynamic_date', $advanced_options ) ){
				
				$today = date('Ymd');
				$query_type = 'DATE';
				if( $settings[ 'query_time' ] ){
					$today = date('Y-m-d H:i:s');
					$query_type = 'DATETIME';
				}
				$include_today = '';
				if( $settings[ 'include_today' ] == 'true' ) $include_today = '=';
				
				$expired_meta_query = [
					'key' => $settings[ 'expired_field_name' ],
					'compare' => '>' . $include_today,
					'value' => $today,
					'type' => $query_type,
				];
				$start_meta_query = [
					'key' => $settings[ 'start_field_name' ],
					'compare' => '<' . $include_today,
					'value' => $today,
					'type' => $query_type,
				];
				
				if( in_array( 'posts_pre_expired', $settings[ 'dynamic_date_options' ] ) ){
					$meta_query[] = $start_meta_query;
				}
				if( in_array( 'posts_expired', $settings[ 'dynamic_date_options' ] ) ){
					$meta_query[] = $expired_meta_query;
				}
			}
			
			if( in_array( 'dynamic_orderby', $advanced_options ) ){
				if( $settings[ 'advanced_orderby_options' ] == 'dynamic_orderby' ){
					$query_vars[ 'meta_key' ] = $settings[ 'dynamic_orderby_options' ]; 
					$query_vars[ 'orderby' ] = 'meta_value'; 
				}
				if( $settings[ 'advanced_orderby_options' ] == 'last_modified' ){
					$query_vars[ 'orderby' ] = 'modified'; 
				}				
				if( $settings[ 'advanced_orderby_options' ] == 'comment_count' ){
					$query_vars[ 'orderby' ] = 'comment_count'; 
				}
			}
			
			if( in_array( 'custom_field', $advanced_options ) ){
				$field_names = explode( ',', $settings[ 'custom_field_name' ] );
				if( $settings[ 'custom_field_options' ] == 'name_is_post_id' ){
					foreach( $field_names as $field_name ){
						$meta_query[ 'custom_field_value' ][] = [
							'key' => $field_name,
							'compare' => '==',
							'value' => $post_id,
						];
					}
				}				
				if( $settings[ 'custom_field_options' ] == 'name_is_post_title' ){
					foreach( $field_names as $field_name ){
						$meta_query[ 'custom_field_value' ][] = [
							'key' => $field_name,
							'compare' => '==',
							'value' => get_the_title(),
						];
					}
				}

				if( $settings[ 'custom_field_options' ] == 'name_is_value' ){
					$custom_field_values = explode( ',', $settings[ 'custom_field_value' ] );

					foreach( $field_names as $field_name ){
						foreach( $custom_field_values as $field_value ){
							$meta_query[ 'custom_field_value' ][] = [
								'key' => $field_name,
								'compare' => '==',
								'value' => $field_value,
							];
						}
					}
				}
								
				if( $settings[ 'custom_field_options' ] == 'name_is_post_cf' ){
					if( $settings[ 'cp_custom_fields' ] ){
						$custom_field_cp = explode( ',', $settings[ 'cp_custom_fields' ] );

						foreach( $field_names as $field_name ){
							foreach( $custom_field_cp as $field_value ){
								$custom_value = get_post_meta( $post_id, $field_value, true );
								$meta_query[ 'custom_field_value' ][] = [
									'key' => $field_name,
									'compare' => '==',
									'value' => $custom_value,
								];
							}
						}
					}
				}
				if( isset( $meta_query[ 'custom_field_value' ] ) ){
					$meta_query[ 'custom_field_value' ]['relation'] = 'OR';
				}
			}

			$query_vars[ 'meta_query' ] = $meta_query;
			
		}

		return $query_vars;
	}

	
	public function __construct() {

		add_action( 'elementor/element/posts/section_query/before_section_end', [ $this, 'advanced_query_options' ], 10, 2 );
		add_action( 'elementor/element/loop-grid/section_query/before_section_end', [ $this, 'advanced_query_options' ], 10, 2 );
		add_action( 'elementor/element/portfolio/section_query/before_section_end', [ $this, 'advanced_query_options' ], 10, 2 );
		add_action( 'elementor/element/posts-extra/section_query/before_section_end', [ $this, 'advanced_query_options' ], 10, 2 );		
		add_action( 'elementor/element/loop-carousel/section_query/before_section_end', [ $this, 'advanced_query_options' ], 10, 2 );
		

		add_filter( 'elementor/query/query_args', [ $this, 'advanced_query_args' ], 10, 2 );

		
	}
	
}

APQ_Module::instance();