<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Hero_Banner_1_Template_Block' ) ) {

	class Blockspare_Hero_Banner_1_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Hero Banner 1'],
						'key'      => 'bs_Hero_Banner_1_1',
						'name'     => esc_html__( 'Hero Banner 1 1', 'blockspare' ),
                        'imagePath'    => 'hero-banner-1',
						'blockLink'=>"https://blockspare.com/demo/default/sport-news/",
						'content'  => '<!-- wp:cover {"url":"https://blockspare.com/demo/default/sport-news/wp-content/uploads/sites/12/2022/01/pexels-fwstudio-131634-1.jpg","id":284,"dimRatio":50,"isDark":false,"align":"full"} -->
						<div class="wp-block-cover alignfull is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-284" alt="" src="https://blockspare.com/demo/default/sport-news/wp-content/uploads/sites/12/2022/01/pexels-fwstudio-131634-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group"><!-- wp:blockspare/blockspare-banner-1 {"uniqueClass":"blockspare-91b99139-aba8-4"} /--></div>
						<!-- /wp:group --></div></div>
						<!-- /wp:cover -->',
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Hero Banner 1'],
						'key'      => 'bs_Hero_Banner_1_2',
						'name'     => esc_html__( 'Hero Banner 1 2', 'blockspare' ),
                        'imagePath'    => 'hero-banner-1',
						'blockLink'=>"https://blockspare.com/demo/default/recipe-blog/",
						'content'  => BLOCKSPARE_PRO_PATH,
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Hero_Banner_1_Template_Block::get_instance()->run();