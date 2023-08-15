<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Social_Sharing_Template_Block' ) ) {

	class Blockspare_Social_Sharing_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_1',
						'name'     => esc_html__( 'Social Sharing 1', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '<!-- wp:blockspare/blockspare-social-sharing {"custombackgroundColorOption":"#e74c3c","buttonShapes":"blockspare-social-icon-circle","uniqueClass":"blockspare-1cc8fd61-ac3e-4"} /-->',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_2',
						'name'     => esc_html__( 'Social Sharing 2', 'blockspare' ),
						'blockLink'=>"",
						'content'  => '<!-- wp:blockspare/blockspare-social-sharing {"buttonFills":"blockspare-social-icon-border","iconColorOption":"custom","customfontColorOption":"#8e44ad","custombackgroundColorOption":"#8e44ad","buttonShapes":"blockspare-social-icon-rounded","uniqueClass":"blockspare-8e15cdcc-54ba-4"} /-->',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_3',
						'name'     => esc_html__( 'Social Sharing 3', 'blockspare' ),
						'blockLink'=>"",
						'content'  => BLOCKSPARE_PRO_PATH,
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_4',
						'name'     => esc_html__( 'Social Sharing 4', 'blockspare' ),
						'blockLink'=>"",
						'content'  => BLOCKSPARE_PRO_PATH,
					),
                    array(
						'type'     => 'block',
						'item'     => ['Social Sharing'],
						'key'      => 'bs_social_sharing_5',
						'name'     => esc_html__( 'Social Sharing 5', 'blockspare' ),
						'blockLink'=>"",
						'content'  => BLOCKSPARE_PRO_PATH,
					)
                
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Social_Sharing_Template_Block::get_instance()->run();