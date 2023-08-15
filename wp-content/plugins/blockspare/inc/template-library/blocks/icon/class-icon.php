<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Icon_Template_Block' ) ) {

	class Blockspare_Icon_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Icon'],
						'key'      => 'bs_icon_1',
						'name'     => esc_html__( 'Icon 1', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '<!-- wp:blockspare/blockspare-iconset {"uniqueClass":"blockspare-491abd72-59a1-4","name":"fas fa-user-graduate","iconBackgroundColor":"#b69d74","marginTop":0,"marginBottom":0} -->
						<div class="wp-block-blockspare-blockspare-iconset blockspare-491abd72-59a1-4 blockspare-blocks" blockspare-animation=""><style>.blockspare-491abd72-59a1-4 .blockspare-block-icon-wrapper{text-align:center;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-491abd72-59a1-4 .blockspare-block-icon-wrapper .blockspare-block-icon{padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;color:#fff;border-radius:50%}.blockspare-491abd72-59a1-4 .blockspare-block-icon-wrapper .blockspare-block-icon::after{background-color:#b69d74;opacity:1}</style><div class="blockspare-block-icon-wrapper"><div class="blockspare-block-icon blockspare-icon-size-small blockspare-icon-style2 blockspare-hover-item"><i class="fas fa-user-graduate"></i></div></div></div>
						<!-- /wp:blockspare/blockspare-iconset -->',
						'imagePath'    => 'icon',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Icon'],
						'key'      => 'bs_icon_2',
						'name'     => esc_html__( 'Icon 2', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '<!-- wp:blockspare/blockspare-iconset {"uniqueClass":"blockspare-a3e82487-91c9-4","name":"fas fa-air-freshener","iconSize":"blockspare-icon-size-medium","iconStyles":"blockspare-icon-style3","iconBorderColor":"#345C00","iconColor":"#345C00","borderRadius":45} -->
						<div class="wp-block-blockspare-blockspare-iconset blockspare-a3e82487-91c9-4 blockspare-blocks" blockspare-animation=""><style>.blockspare-a3e82487-91c9-4 .blockspare-block-icon-wrapper{text-align:center;margin-top:30px;margin-right:0px;margin-bottom:30px;margin-left:0px}.blockspare-a3e82487-91c9-4 .blockspare-block-icon-wrapper .blockspare-block-icon{padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;border-color:#345C00;color:#345C00;border-radius:45%}</style><div class="blockspare-block-icon-wrapper"><div class="blockspare-block-icon blockspare-icon-size-medium blockspare-icon-style3 blockspare-hover-item"><i class="fas fa-air-freshener"></i></div></div></div>
						<!-- /wp:blockspare/blockspare-iconset -->',
						'imagePath'    => 'icon',

                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Icon'],
						'key'      => 'bs_icon_3',
						'name'     => esc_html__( 'Icon 3', 'blockspare' ),
						'blockLink'=>"",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'icon',
                    ),
					
                    array(
						'type'     => 'block',
						'item'     => ['Icon'],
						'key'      => 'bs_icon_4',
						'name'     => esc_html__( 'Icon 4', 'blockspare' ),
						'blockLink'=>"",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'icon',
					)
                
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Icon_Template_Block::get_instance()->run();