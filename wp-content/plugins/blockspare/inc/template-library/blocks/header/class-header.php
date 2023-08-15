<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Header_Template_Block' ) ) {

	class Blockspare_Header_Template_Block extends Blockspare_Import_Block_Base{
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
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_1',
						'name'     => esc_html__( 'Agency Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/agency/",
						'content'  => '<!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"#cccccc","width":"1px"}},"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide has-base-background-color has-background" style="border-bottom-color:#cccccc;border-bottom-width:1px;padding-top:30px;padding-bottom:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":true} /-->
                        
                        <!-- wp:navigation {"ref":662,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}}} /--></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
                        <div class="wp-block-group"><!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"right","uniqueClass":"blockspare-758c16ad-5210-4","buttonBackgroundColor":"#2e947d","buttonShape":"blockspare-button-shape-square","marginTop":0,"marginBottom":0} -->
                        <div class="wp-block-blockspare-blockspare-buttons blockspare-758c16ad-5210-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-758c16ad-5210-4 .blockspare-block-button{text-align:right;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-758c16ad-5210-4 .blockspare-block-button span{color:#fff;border-width:2px}.blockspare-758c16ad-5210-4 .blockspare-block-button .blockspare-button{background-color:#2e947d}.blockspare-758c16ad-5210-4 .blockspare-block-button .blockspare-button:visited{background-color:#2e947d}.blockspare-758c16ad-5210-4 .blockspare-block-button .blockspare-button:focus{background-color:#2e947d}.blockspare-758c16ad-5210-4 .blockspare-block-button span,.blockspare-758c16ad-5210-4 .blockspare-block-button i{font-size:16px}.blockspare-758c16ad-5210-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-758c16ad-5210-4 .blockspare-block-button span,.blockspare-758c16ad-5210-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-758c16ad-5210-4 .blockspare-block-button span,.blockspare-758c16ad-5210-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-square blockspare-button-size-small"><span>Get Started</span></a></div></div>
                        <!-- /wp:blockspare/blockspare-buttons --></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_2',
						'name'     => esc_html__( 'Lawyer Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/lawyer/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":0,"paddingRight":0,"paddingBottom":0,"paddingLeft":0,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-8e37aa95-6584-4","backGroundColor":"#f6f6f6"} -->
                        <div class="wp-block-blockspare-blockspare-container alignfull blockspare-8e37aa95-6584-4" blockspare-animation=""><style>.blockspare-8e37aa95-6584-4 > .blockspare-block-container-wrapper{background-color:#f6f6f6;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-8e37aa95-6584-4 .blockspare-image-wrap{background-image:none}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-100 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:group {"style":{"border":{"bottom":{"color":"#cccccc","width":"1px"}},"color":{"background":"#f5f5ef"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-background" style="border-bottom-color:#cccccc;border-bottom-width:1px;background-color:#f5f5ef"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":true} /-->
                        
                        <!-- wp:navigation {"ref":1895,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}}} /--></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
                        <div class="wp-block-group"><!-- wp:blockspare/blockspare-buttons {"sectionAlignment":"right","uniqueClass":"blockspare-c87b3294-bd44-4","buttonText":"Take Appointment","buttonBackgroundColor":"#b69d74","buttonStyle":"solid","borderColor":"#b69d74"} -->
                        <div class="wp-block-blockspare-blockspare-buttons blockspare-c87b3294-bd44-4 blockspare-block-button-wrap" blockspare-animation=""><style>.blockspare-c87b3294-bd44-4 .blockspare-block-button{text-align:right;margin-top:30px;margin-bottom:30px;margin-left:0px;margin-right:0px}.blockspare-c87b3294-bd44-4 .blockspare-block-button span{color:#404040}.blockspare-c87b3294-bd44-4 .blockspare-button{border-color:#b69d74;border-style:solid;border-width:2px}.blockspare-c87b3294-bd44-4 .blockspare-block-button .blockspare-button{background-color:transparent}.blockspare-c87b3294-bd44-4 .blockspare-block-button span,.blockspare-c87b3294-bd44-4 .blockspare-block-button i{font-size:16px}.blockspare-c87b3294-bd44-4 .blockspare-block-button a{padding-top:12px;padding-bottom:12px;padding-right:22px;padding-left:22px}@media screen and (max-width:1025px){.blockspare-c87b3294-bd44-4 .blockspare-block-button span,.blockspare-c87b3294-bd44-4 .blockspare-block-button i{font-size:14px}}@media screen and (max-width:768px){.blockspare-c87b3294-bd44-4 .blockspare-block-button span,.blockspare-c87b3294-bd44-4 .blockspare-block-button i{font-size:14px}}</style><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small"><span>Take Appointment</span></a></div></div>
                        <!-- /wp:blockspare/blockspare-buttons --></div>
                        <!-- /wp:group --></div>
                        <!-- /wp:column --></div>
                        <!-- /wp:columns --></div>
                        <!-- /wp:group --></div></div></div></div>
                        <!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_3',
						'name'     => esc_html__( 'Restaurant Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/restaurant/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_4',
						'name'     => esc_html__( 'Apps Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/apps/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_5',
						'name'     => esc_html__( 'Education Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/education/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_6',
						'name'     => esc_html__( 'Fitness Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/fitness/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_7',
						'name'     => esc_html__( 'Real Estate Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/real-eastate/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_8',
						'name'     => esc_html__( 'Medical Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/medical/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_9',
						'name'     => esc_html__( 'Charity Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/charity/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_10',
						'name'     => esc_html__( 'Sport Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/sport-news/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_11',
						'name'     => esc_html__( 'Pet Care Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/puppycare/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_12',
						'name'     => esc_html__( 'Gadgets Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/tech-gadgets/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
                    ),
					array(
						'type'     => 'header',
						'item'     => ['Header'],
						'key'      => 'bs_header_13',
						'name'     => esc_html__( 'Construction Header', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/constructions/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'header',
					)
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Header_Template_Block::get_instance()->run();