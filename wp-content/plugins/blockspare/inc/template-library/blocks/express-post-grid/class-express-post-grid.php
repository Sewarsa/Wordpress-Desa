<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Express_Post_Grid_Template_Block' ) ) {

	class Blockspare_Express_Post_Grid_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Express Post Grid'],
						'key'      => 'bs_express_post_grid_1',
						'name'     => esc_html__( 'Express Post Grid 1', 'blockspare' ),
                        'imagePath'    => 'express-post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/sport-news",
						'content'  => '<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
						<div class="wp-block-group alignwide"><!-- wp:blockspare/blockspare-section-header {"uniqueClass":"blockspare-e92f1ad3-5f14-4","headerTitle":"INTERNATIONAL","titleFontSize":18,"headerSubTitle":"Tournaments","headerlayoutOption":"blockspare-style10","dashColor":"#689f38","titleFontSizeMobile":18,"titleFontSizeTablet":18,"subTitleFontSize":14,"subTitleFontSizeTablet":14} -->
						<div class="wp-block-blockspare-blockspare-section-header aligncenter blockspare-e92f1ad3-5f14-4 blockspare-section-header-wrapper blockspare-blocks aligncenter" blockspare-animation=""><style>.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap{background-color:transparent;text-align:left;margin-top:30px;margin-right:0px;margin-bottom:30px;margin-left:0px}.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap .blockspare-title{color:#404040;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px}.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#6d6d6d;font-size:14px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#689f38}.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#689f38}.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#689f38}.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#689f38}.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap .blockspare-title{font-size:18px}.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}@media screen and (max-width:768px){.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap .blockspare-title{font-size:18px}.blockspare-e92f1ad3-5f14-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style10 blockspare-left blockspare-hover-item"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">INTERNATIONAL</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><p class="blockspare-subtitle">Tournaments</p><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div>
						<!-- /wp:blockspare/blockspare-section-header -->
						
						<!-- wp:blockspare/latest-posts-express-grid {"uniqueClass":"blockspare-53b98745-3217-4","postsToShow":3,"postTitleFontSize":14,"express":"blockspare-posts-block-express-grid-layout-2","excerptLength":1,"spostTitleFontSize":20} /--></div>
						<!-- /wp:group -->',
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Express Post Grid'],
						'key'      => 'bs_express_post_grid_2',
						'name'     => esc_html__( 'Express Post Grid 2', 'blockspare' ),
                        'imagePath'    => 'express-post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/fashion-news/",
						'content'  => BLOCKSPARE_PRO_PATH,
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Express Post Grid'],
						'key'      => 'bs_express_post_grid_3',
						'name'     => esc_html__( 'Express Post Grid 3', 'blockspare' ),
                        'imagePath'    => 'express-post-grid',
						'blockLink'=>"https://blockspare.com/demo/default/recipe-blog/",
						'content'  => BLOCKSPARE_PRO_PATH,
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Express_Post_Grid_Template_Block::get_instance()->run();