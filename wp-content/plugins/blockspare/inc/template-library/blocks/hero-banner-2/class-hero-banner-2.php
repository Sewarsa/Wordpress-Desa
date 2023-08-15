<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Hero_Banner_2_Template_Block' ) ) {

	class Blockspare_Hero_Banner_2_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Hero Banner 2'],
						'key'      => 'bs_Hero_Banner_2_1',
						'name'     => esc_html__( 'Hero Banner 2 1', 'blockspare' ),
                        'imagePath'    => 'hero-banner-2',
						'blockLink'=>"https://blockspare.com/demo/default/fashion-news/",
						'content'  => '<!-- wp:cover {"url":"https://blockspare.com/demo/default/fashion-news/wp-content/uploads/sites/13/2022/02/pexels-igor-haritanovich-1695050.jpg","id":866,"dimRatio":50,"isDark":false,"align":"full"} -->
						<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-866" alt="" src="https://blockspare.com/demo/default/fashion-news/wp-content/uploads/sites/13/2022/02/pexels-igor-haritanovich-1695050.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
						<div class="wp-block-group alignwide"><!-- wp:blockspare/blockspare-banner-2 {"align":"full","uniqueClass":"blockspare-856e0617-7d70-4","bannerTwoLayout":"banner-style-3 has-bg-layout","sliderEnableNavInHover":false} /--></div>
						<!-- /wp:group --></div></div>
						<!-- /wp:cover -->',
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Hero_Banner_2_Template_Block::get_instance()->run();