<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Post_Grid_Template_Block' ) ) {

	class Blockspare_Post_Grid_Template_Block extends Blockspare_Import_Block_Base{
		public static function get_instance() {

			static $instance = null;
			if ( null === $instance ) {
				$instance = new self();
			}
			return $instance;

		}
        public function add_block_template_library( $blocks_lists ){

            $block_library_list = array(
					array(
						'type'     => 'block',
						'item'     => ['Post Grid'],
						'key'      => 'bs_post_grid_1',
						'name'     => esc_html__( 'Post Grid 1', 'blockspare' ),
						'imagePath'    => 'post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/sport-news/",
						'content'  => '<!-- wp:column {"width":"33.33%"} -->
						<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
						<div class="wp-block-group alignwide"><!-- wp:blockspare/blockspare-section-header {"uniqueClass":"blockspare-d759023e-744d-4","headerTitle":"INTERNATIONAL","titleFontSize":18,"headerSubTitle":"Tournaments","headermarginTop":0,"headerlayoutOption":"blockspare-style10","dashColor":"#689f38","titleFontSizeMobile":18,"titleFontSizeTablet":18,"subTitleFontSize":14,"subTitleFontSizeTablet":14} -->
						<div class="wp-block-blockspare-blockspare-section-header aligncenter blockspare-d759023e-744d-4 blockspare-section-header-wrapper blockspare-blocks aligncenter" blockspare-animation=""><style>.blockspare-d759023e-744d-4 .blockspare-section-head-wrap{background-color:transparent;text-align:left;margin-top:0px;margin-right:0px;margin-bottom:30px;margin-left:0px}.blockspare-d759023e-744d-4 .blockspare-section-head-wrap .blockspare-title{color:#404040;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px}.blockspare-d759023e-744d-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#6d6d6d;font-size:14px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#689f38}.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#689f38}.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#689f38}.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#689f38}.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-d759023e-744d-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-d759023e-744d-4 .blockspare-section-head-wrap .blockspare-title{font-size:18px}.blockspare-d759023e-744d-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}@media screen and (max-width:768px){.blockspare-d759023e-744d-4 .blockspare-section-head-wrap .blockspare-title{font-size:18px}.blockspare-d759023e-744d-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style10 blockspare-left blockspare-hover-item"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">INTERNATIONAL</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><p class="blockspare-subtitle">Tournaments</p><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div>
						<!-- /wp:blockspare/blockspare-section-header -->
						
						<!-- wp:blockspare/blockspare-latest-posts-grid {"uniqueClass":"blockspare-95e95367-92db-4","displayPostAuthor":false,"postTitleFontSize":14,"displayPostCategory":false,"enableComment":false} /--></div>
						<!-- /wp:group --></div>
						<!-- /wp:column -->',
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Post Grid'],
						'key'      => 'bs_post_grid_2',
						'name'     => esc_html__( 'Post Grid 2', 'blockspare' ),
						'imagePath'    => 'post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/fashion-news/",
						'content'  => '<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
						<div class="wp-block-group alignwide"><!-- wp:blockspare/blockspare-section-header {"uniqueClass":"blockspare-2f42ecc5-1701-4","align":"","headerTitle":"Latest","titleFontSize":14,"headermarginTop":0,"headermarginBottom":0,"headerlayoutOption":"blockspare-style18","dashColor":"#000000"} -->
						<div class="wp-block-blockspare-blockspare-section-header blockspare-2f42ecc5-1701-4 blockspare-section-header-wrapper blockspare-blocks align" blockspare-animation=""><style>.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap{background-color:transparent;text-align:left;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap .blockspare-title{color:#fff;font-size:14px}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap .blockspare-title-wrapper{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#6d6d6d;font-size:18px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#000000}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#000000}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#000000}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#000000}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap .blockspare-title{font-size:26px}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:16px}}@media screen and (max-width:768px){.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap .blockspare-title{font-size:20px}.blockspare-2f42ecc5-1701-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style18 blockspare-left blockspare-hover-item"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">Latest</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div>
						<!-- /wp:blockspare/blockspare-section-header -->
						
						<!-- wp:blockspare/blockspare-latest-posts-grid {"uniqueClass":"blockspare-fb7589fe-ced4-4","postTitleColor":"#e8eaed","linkColor":"#e8eaed","generalColor":"#e8eaed","columns":4,"backGroundColor":"#000000","titleOnHoverColor":"#ffffff","enablePagination":true,"loadMoreTextColor":"#c4c4c4","loadMoreTextHoverColor":"#ffffff","loadMoreColor":"#ffffff"} /--></div>
						<!-- /wp:group -->',
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Post Grid'],
						'key'      => 'bs_post_grid_3',
						'name'     => esc_html__( 'Post Grid 3', 'blockspare' ),
						'imagePath'    => 'post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/fashion-news/",
						'content'  => BLOCKSPARE_PRO_PATH,
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Post Grid'],
						'key'      => 'bs_post_grid_4',
						'name'     => esc_html__( 'Post Grid 4', 'blockspare' ),
						'imagePath'    => 'post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/recipe-blog/",
						'content'  => BLOCKSPARE_PRO_PATH,
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Post Grid'],
						'key'      => 'bs_post_grid_5',
						'name'     => esc_html__( 'Post Grid 5', 'blockspare' ),
						'imagePath'    => 'post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/recipe-blog/",
						'content'  => BLOCKSPARE_PRO_PATH,
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Post Grid'],
						'key'      => 'bs_post_grid_6',
						'name'     => esc_html__( 'Post Grid 6', 'blockspare' ),
						'imagePath'    => 'post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/puppycare/",
						'content'  => BLOCKSPARE_PRO_PATH,
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Post Grid'],
						'key'      => 'bs_post_grid_7',
						'name'     => esc_html__( 'Post Grid 7', 'blockspare' ),
						'imagePath'    => 'post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/tech-gadgets/",
						'content'  => BLOCKSPARE_PRO_PATH,
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Post Grid'],
						'key'      => 'bs_post_grid_8',
						'name'     => esc_html__( 'Post Grid 8', 'blockspare' ),
						'imagePath'    => 'post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/constructions/",
						'content'  => BLOCKSPARE_PRO_PATH,
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Post_Grid_Template_Block::get_instance()->run();