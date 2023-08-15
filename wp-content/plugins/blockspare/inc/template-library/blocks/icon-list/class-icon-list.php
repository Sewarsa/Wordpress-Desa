<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Icon_list_Template_Block' ) ) {

	class Blockspare_Icon_list_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Icon List'],
						'key'      => 'bs_icon_list_1',
						'name'     => esc_html__( 'Icon list 1', 'blockspare' ),
                        'blockLink'=>"https://www.blockspare.com/block/icon-list/",
						'content'  => '<!-- wp:blockspare/blockspare-list {"uniqueClass":"blockspare-1c59dc57-27de-4","sectionAlignment":"center","listBackGroundColor":"#e74c3c","color":"#f7f7f7","descriptionIconColor":"#f7f7f7","borderRadius":15,"descriptionFontSize":20,"descriptionFontFamily":"Source Sans Pro","descriptionFontWeight":"400","descriptionFontSubset":"latin","descriptionLoadGoogleFonts":true,"marginTop":100,"marginBottom":100,"paddingTop":15,"paddingBottom":15,"enableBoxShadow":true} -->
                        <div class="wp-block-blockspare-blockspare-list aligncenter blockspare-1c59dc57-27de-4 blockspare-block-iconlist-wrap" blockspare-animation=""><style>.blockspare-1c59dc57-27de-4 .blockspare-list-wrap{background-color:#e74c3c;border-radius:15px;box-shadow:0px 6px 12px -10px #000;margin-top:100px;margin-bottom:100px;padding-top:15px;padding-right:0px;padding-bottom:15px;padding-left:0px}.blockspare-1c59dc57-27de-4 .blockspare-list-wrap .listDescription li{color:#f7f7f7;text-align:center;font-size:20px;font-family:Source Sans Pro;font-weight:400}.blockspare-1c59dc57-27de-4 .blockspare-list-wrap .listDescription li:before{color:#f7f7f7}.blockspare-1c59dc57-27de-4 .listDescription li:before{font-size:18px}@media screen and (max-width:1025px){.blockspare-1c59dc57-27de-4 .blockspare-list-wrap .listDescription li{font-size:14px}.blockspare-1c59dc57-27de-4 .listDescription li:before{font-size:18px}}@media screen and (max-width:768px){.blockspare-1c59dc57-27de-4 .blockspare-list-wrap .listDescription li{font-size:14px}.blockspare-1c59dc57-27de-4 .listDescription li:before{font-size:18px}}</style><div class="blockspare-blocks blockspare-list-wrap blockspare-hover-item"><ul class="blockspare-list-check listDescription"><li>Vestibulum ac diam sit amet</li><li>Vestibulum ac diam sit amet</li><li>Vestibulum ac diam sit amet</li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-list -->',
                        'imagePath'    => 'icon-list',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Icon List'],
						'key'      => 'bs_icon_list_2',
						'name'     => esc_html__( 'Icon list 2', 'blockspare' ),
                        'blockLink'=>"https://www.blockspare.com/block/icon-list/",
						'content'  => '<!-- wp:blockspare/blockspare-list {"uniqueClass":"blockspare-2f9c044d-9022-4","color":"#6d6d6d","descriptionFontSize":14} -->
                        <div class="wp-block-blockspare-blockspare-list aligncenter blockspare-2f9c044d-9022-4 blockspare-block-iconlist-wrap" blockspare-animation=""><style>.blockspare-2f9c044d-9022-4 .blockspare-list-wrap{border-radius:0px;margin-top:30px;margin-bottom:30px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-2f9c044d-9022-4 .blockspare-list-wrap .listDescription li{color:#6d6d6d;text-align:left;font-size:14px}.blockspare-2f9c044d-9022-4 .blockspare-list-wrap .listDescription li:before{color:#404040}.blockspare-2f9c044d-9022-4 .listDescription li:before{font-size:12px}@media screen and (max-width:1025px){.blockspare-2f9c044d-9022-4 .blockspare-list-wrap .listDescription li{font-size:14px}.blockspare-2f9c044d-9022-4 .listDescription li:before{font-size:12px}}@media screen and (max-width:768px){.blockspare-2f9c044d-9022-4 .blockspare-list-wrap .listDescription li{font-size:14px}.blockspare-2f9c044d-9022-4 .listDescription li:before{font-size:12px}}</style><div class="blockspare-blocks blockspare-list-wrap blockspare-hover-item"><ul class="blockspare-list-check listDescription"><li>Aenean eu leo quam ornare curabitur blandit temp.</li><li>Etiam porta sem malesuada magna mollis euismod.</li><li>Fermentum massa vivamus faucibus amet euismod.</li></ul></div></div>
                        <!-- /wp:blockspare/blockspare-list -->',
                        'imagePath'    => 'icon-list',
                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Icon List'],
						'key'      => 'bs_icon_list_3',
						'name'     => esc_html__( 'Icon list 3', 'blockspare' ),
                        'blockLink'=>"https://www.blockspare.com/block/icon-list/",
						'content'  => BLOCKSPARE_PRO_PATH,
                        'imagePath'    => 'icon-list',
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Icon_list_Template_Block::get_instance()->run();