<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Buttons_Template_Block' ) ) {

	class Blockspare_Buttons_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Button'],
						'key'      => 'bs_button_1',
						'name'     => esc_html__( 'Button 1', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/agency/",
						'content'  => '<!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"left","uniqueClass":"blockspare-deb04257-c66f-4","buttonBackgroundColor":"#2e947d","buttonShape":"blockspare-button-shape-square","marginBottom":0} -->
						<div class="wp-block-blockspare-blockspare-buttons blockspare-deb04257-c66f-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-deb04257-c66f-4 .blockspare-block-button{text-align:left;margin-top:30px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-deb04257-c66f-4 .blockspare-block-button span{color:#fff;border-width:2px}.blockspare-deb04257-c66f-4 .blockspare-block-button .blockspare-button{background-color:#2e947d}.blockspare-deb04257-c66f-4 .blockspare-block-button .blockspare-button:visited{background-color:#2e947d}.blockspare-deb04257-c66f-4 .blockspare-block-button .blockspare-button:focus{background-color:#2e947d}.blockspare-deb04257-c66f-4 .blockspare-block-button span,.blockspare-deb04257-c66f-4 .blockspare-block-button i{font-size:16px}.blockspare-deb04257-c66f-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-deb04257-c66f-4 .blockspare-block-button span,.blockspare-deb04257-c66f-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-deb04257-c66f-4 .blockspare-block-button span,.blockspare-deb04257-c66f-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-square blockspare-button-size-small"><span>Get Started</span></a></div></div>
						<!-- /wp:blockspare/blockspare-buttons -->',
						'imagePath'    => 'buttons',
						),

						array(
							'type'     => 'block',
							'item'     => ['Button'],
							'key'      => 'bs_button_2',
							'name'     => esc_html__( 'Button 2', 'blockspare' ),
							'blockLink'=>"https://blockspare.com/demo/default/lawyer/contact-us-2/",
							'content'  => '<!-- wp:blockspare/blockspare-buttons {"uniqueClass":"blockspare-6c2f0ff6-e3f4-4","buttonBackgroundColor":"#b69d74","buttonHoverEffect":"hover-style-2"} -->
							<div class="wp-block-blockspare-blockspare-buttons blockspare-6c2f0ff6-e3f4-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button{text-align:center;margin-top:30px;margin-bottom:30px;margin-left:0px;margin-right:0px}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button span{color:#fff;border-width:2px}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button .blockspare-button{background-color:#b69d74}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button .blockspare-button:visited{background-color:#b69d74}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button .blockspare-button:focus{background-color:#b69d74}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button span,.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button i{font-size:16px}.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button span,.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button span,.blockspare-6c2f0ff6-e3f4-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small hover-style-2"><span>Get Started</span></a></div></div>
							<!-- /wp:blockspare/blockspare-buttons -->',
							'imagePath'    => 'buttons',
						),
						array(
							'type'     => 'block',
							'item'     => ['Button'],
							'key'      => 'bs_button_3',
							'name'     => esc_html__( 'Button 3', 'blockspare' ),
							'blockLink'=>"https://blockspare.com/demo/default/restaurant/",
							'content'  => BLOCKSPARE_PRO_PATH,
							'imagePath'    => 'buttons',
						),
						array(
							'type'     => 'block',
							'item'     => ['Button'],
							'key'      => 'bs_button_4',
							'name'     => esc_html__( 'Button 4', 'blockspare' ),
							'blockLink'=>"https://blockspare.com/demo/default/app/",
							'content'  => BLOCKSPARE_PRO_PATH,
							'imagePath'    => 'buttons',
						),
						array(
							'type'     => 'block',
							'item'     => ['Button'],
							'key'      => 'bs_button_5',
							'name'     => esc_html__( 'Button 5', 'blockspare' ),
							'blockLink'=>"https://blockspare.com/demo/default/education/",
							'content'  => BLOCKSPARE_PRO_PATH,
							'imagePath'    => 'buttons',
						)
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Buttons_Template_Block::get_instance()->run();