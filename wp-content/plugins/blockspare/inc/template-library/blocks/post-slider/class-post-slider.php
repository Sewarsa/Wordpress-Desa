<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Post_Slider_Template_Block' ) ) {

	class Blockspare_Post_Slider_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Post Slider'],
						'key'      => 'bs_post_slider_1',
						'name'     => esc_html__( 'Post Slider 1', 'blockspare' ),
                        'imagePath'    => 'post-slider',
						'blockLink'=>"https://blockspare.com/demo/default/sport-news/",
						'content'  => '<!-- wp:group {"layout":{"type":"default"}} -->
						<div class="wp-block-group"><!-- wp:blockspare/blockspare-section-header {"uniqueClass":"blockspare-cedbe42d-aa0c-4","headerTitle":"NATIONAL","titleFontSize":18,"headerSubTitle":"Tournaments","headerlayoutOption":"blockspare-style10","dashColor":"#689f38","titleFontSizeMobile":18,"titleFontSizeTablet":18,"subTitleFontSize":14,"subTitleFontSizeTablet":14} -->
						<div class="wp-block-blockspare-blockspare-section-header aligncenter blockspare-cedbe42d-aa0c-4 blockspare-section-header-wrapper blockspare-blocks aligncenter" blockspare-animation=""><style>.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap{background-color:transparent;text-align:left;margin-top:30px;margin-right:0px;margin-bottom:30px;margin-left:0px}.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap .blockspare-title{color:#404040;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px}.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#6d6d6d;font-size:14px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#689f38}.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#689f38}.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#689f38}.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#689f38}.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap .blockspare-title{font-size:18px}.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}@media screen and (max-width:768px){.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap .blockspare-title{font-size:18px}.blockspare-cedbe42d-aa0c-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style10 blockspare-left blockspare-hover-item"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">NATIONAL</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><p class="blockspare-subtitle">Tournaments</p><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div>
						<!-- /wp:blockspare/blockspare-section-header -->
						
						<!-- wp:blockspare/blockspare-posts-block-slider {"uniqueClass":"blockspare-10f0e949-25ac-4","postTitleFontSize":27,"slider":"blockspare-posts-block-full-layout-4"} /--></div>
						<!-- /wp:group -->',
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Post_Slider_Template_Block::get_instance()->run();