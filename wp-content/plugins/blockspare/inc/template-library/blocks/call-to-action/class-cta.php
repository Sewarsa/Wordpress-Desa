<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Call_To_Action_Template_Block' ) ) {

	class Blockspare_Call_To_Action_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Call To Action'],
						'key'      => 'bs_call_to_action_1',
						'name'     => esc_html__( 'Call To Action 1', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/lawyer/",
						'content'  => '<!-- wp:blockspare/blockspare-call-to-action {"uniqueClass":"blockspare-5d43b5b4-243c-4","align":"full","headerTitle":"Attorna Law Firm","titleFontSize":52,"headerSubTitle":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\u003cbr\u003eincididunt ut labore et dolore magna aliqua.","headertitleColor":"#ffffff","headersubtitleColor":"#abb8c3","headermarginBottom":30,"headerlayoutOption":"blockspare-style2","titlePaddingBottom":10,"subtitlePaddingTop":20,"dashColor":"#b69d74","titleFontFamily":"Helvetica","titleFontWeight":"800","subTitleFontSize":15,"subTitleFontFamily":"Helvetica","imgURL":"https://blockspare.com/demo/default/lawyer/wp-content/uploads/sites/3/2022/08/top-view-career-guidance-judges-1-scaled.jpg","imgID":2004,"imgAlt":"","opacityRatio":30,"buttonText":"Contact Now","buttonBackgroundColor":"#b69d74","buttonStyle":"solid","borderColor":"#ffffff","borderBtnTextColor":"#ffffff","buttonFontFamily":"Helvetica","marginTop":0} -->
						<div class="wp-block-blockspare-blockspare-call-to-action blockspare-5d43b5b4-243c-4 alignfull blockspare-calltoaction" blockspare-animation=""><style>.blockspare-5d43b5b4-243c-4 .blockspare-cta-wrapper{background-color:#0e0e0e;text-align:center;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;margin-top:0px;margin-right:0px;margin-bottom:30px;margin-left:0px;border-radius:null}.blockspare-5d43b5b4-243c-4 .blockspare-block-button a.blockspare-button{padding-top:12px;padding-right:22px;padding-bottom:12px;padding-left:22px;margin-top:10px;margin-right:0px;margin-bottom:0px;margin-left:0px;color:#ffffff;background-color:transparent;border-color:#ffffff;border-style:solid;border-width:2px;font-family:Helvetica;font-size:16px}.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap{background-color:transparent;text-align:center;margin-top:5px;margin-right:0px;margin-bottom:30px;margin-left:0px}.blockspare-5d43b5b4-243c-4 .blockspare-title{color:#ffffff;font-size:52px!important;font-family:Helvetica;font-weight:800;padding-top:0px;padding-right:0px;padding-bottom:10px;padding-left:0px}.blockspare-5d43b5b4-243c-4 .blockspare-subtitle{color:#abb8c3;font-size:15px!important;font-family:Helvetica;padding-top:20px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#b69d74}.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#b69d74}.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#b69d74}.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#b69d74}.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-5d43b5b4-243c-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-5d43b5b4-243c-4 .blockspare-block-button a.blockspare-button{font-size:14px}.blockspare-5d43b5b4-243c-4 .blockspare-title{font-size:26px!important}.blockspare-5d43b5b4-243c-4 .blockspare-subtitle{font-size:16px!important}}@media screen and (max-width:768px){.blockspare-5d43b5b4-243c-4 .blockspare-block-button a.blockspare-button{font-size:14px}.blockspare-5d43b5b4-243c-4 .blockspare-title{font-size:20px!important}.blockspare-5d43b5b4-243c-4 .blockspare-subtitle{font-size:14px!important}}</style><div class="blockspare-cta-wrapper blockspare-blocks blockspare-hover-item"><div class="blockspare-image-wrap blockspare-cta-background has-background-opacity-30 has-background-opacity" style="background-image:url(https://blockspare.com/demo/default/lawyer/wp-content/uploads/sites/3/2022/08/top-view-career-guidance-judges-1-scaled.jpg)"></div><div class="blockspare-section-header-wrapper blockspare-blocks"><div class="blockspare-section-head-wrap blockspare-style2 blockspare-center"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">Attorna Law Firm</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><p class="blockspare-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua.</p><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small"><span>Contact Now</span></a></div></div></div>
						<!-- /wp:blockspare/blockspare-call-to-action -->',	
						'imagePath'    => 'call-to-action',
					),
					array(
						'type'     => 'block',
						'item'     => ['Call To Action'],
						'key'      => 'bs_call_to_action_2',
						'name'     => esc_html__( 'Call To Action 2', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/education/",
						'content'  => '<!-- wp:blockspare/blockspare-call-to-action {"uniqueClass":"blockspare-c7ba970a-a82f-4","align":"full","headerTitle":" Build Skills with Online Courses \u003cbr\u003efrom Expert Instructor ","titleFontSize":36,"headerSubTitle":" Start streaming on-demand video lectures today from top level \u003cbr\u003einstructors Attention heatmaps. ","subtitlePaddingTop":20,"subtitlePaddingBottom":25,"titleFontFamily":"Helvetica","titleFontWeight":"800","titleFontSubset":"devanagari","subTitleFontFamily":"Helvetica","subTitleFontWeight":"400","subTitleFontSubset":"latin","imgURL":"https://blockspare.com/demo/default/education/wp-content/uploads/sites/6/2021/09/banner3.jpg","imgID":582,"imgAlt":"","buttonText":"Enroll Now","buttonBackgroundColor":"#275be2","buttonHoverEffect":"hover-style-2","buttonFontFamily":"Helvetica","buttonFontSubset":"latin","marginTop":0,"marginBottom":0} -->
						<div class="wp-block-blockspare-blockspare-call-to-action blockspare-c7ba970a-a82f-4 alignfull blockspare-calltoaction" blockspare-animation=""><style>.blockspare-c7ba970a-a82f-4 .blockspare-cta-wrapper{background-color:#0e0e0e;text-align:center;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:null}.blockspare-c7ba970a-a82f-4 .blockspare-block-button a.blockspare-button{padding-top:12px;padding-right:22px;padding-bottom:12px;padding-left:22px;margin-top:10px;margin-right:0px;margin-bottom:0px;margin-left:0px;color:#fff;border-width:2px;font-family:Helvetica;font-size:16px}.blockspare-c7ba970a-a82f-4.wp-block-blockspare-blockspare-call-to-action .blockspare-block-button .blockspare-button{background-color:#275be2}.blockspare-c7ba970a-a82f-4.wp-block-blockspare-blockspare-call-to-action .blockspare-block-button .blockspare-button:visited{background-color:#275be2}.blockspare-c7ba970a-a82f-4.wp-block-blockspare-blockspare-call-to-action .blockspare-block-button .blockspare-button:focus{background-color:#275be2}.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap{background-color:transparent;text-align:center;margin-top:5px;margin-right:0px;margin-bottom:5px;margin-left:0px}.blockspare-c7ba970a-a82f-4 .blockspare-title{color:#fff;font-size:36px!important;font-family:Helvetica;font-weight:800;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-c7ba970a-a82f-4 .blockspare-subtitle{color:#fff;font-size:18px!important;font-family:Helvetica;font-weight:400;padding-top:20px;padding-right:0px;padding-bottom:25px;padding-left:0px}.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#8b249c}.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#8b249c}.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#8b249c}.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#8b249c}.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-c7ba970a-a82f-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-c7ba970a-a82f-4 .blockspare-block-button a.blockspare-button{font-size:14px}.blockspare-c7ba970a-a82f-4 .blockspare-title{font-size:26px!important}.blockspare-c7ba970a-a82f-4 .blockspare-subtitle{font-size:16px!important}}@media screen and (max-width:768px){.blockspare-c7ba970a-a82f-4 .blockspare-block-button a.blockspare-button{font-size:14px}.blockspare-c7ba970a-a82f-4 .blockspare-title{font-size:20px!important}.blockspare-c7ba970a-a82f-4 .blockspare-subtitle{font-size:14px!important}}</style><div class="blockspare-cta-wrapper blockspare-blocks blockspare-hover-item"><div class="blockspare-image-wrap blockspare-cta-background has-background-opacity-80 has-background-opacity" style="background-image:url(https://blockspare.com/demo/default/education/wp-content/uploads/sites/6/2021/09/banner3.jpg)"></div><div class="blockspare-section-header-wrapper blockspare-blocks"><div class="blockspare-section-head-wrap blockspare-style1 blockspare-center"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title"> Build Skills with Online Courses <br>from Expert Instructor </h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><p class="blockspare-subtitle"> Start streaming on-demand video lectures today from top level <br>instructors Attention heatmaps. </p><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-rounded blockspare-button-size-small hover-style-2"><span>Enroll Now</span></a></div></div></div>
						<!-- /wp:blockspare/blockspare-call-to-action -->',
						'imagePath'    => 'call-to-action',
					),
					array(
						'type'     => 'block',
						'item'     => ['Call To Action'],
						'key'      => 'bs_call_to_action_3',
						'name'     => esc_html__( 'Call To Action 3', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/fitness/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'call-to-action',
					),
					array(
						'type'     => 'block',
						'item'     => ['Call To Action'],
						'key'      => 'bs_call_to_action_4',
						'name'     => esc_html__( 'Call To Action 4', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/charity/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'call-to-action',
					),
					array(
						'type'     => 'block',
						'item'     => ['Call To Action'],
						'key'      => 'bs_call_to_action_5',
						'name'     => esc_html__( 'Call To Action 5', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/charity/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'call-to-action',
					),
					array(
						'type'     => 'block',
						'item'     => ['Call To Action'],
						'key'      => 'bs_call_to_action_6',
						'name'     => esc_html__( 'Call To Action 6', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/puppycare/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'call-to-action',
					),
					array(
						'type'     => 'block',
						'item'     => ['Call To Action'],
						'key'      => 'bs_call_to_action_7',
						'name'     => esc_html__( 'Call To Action 7', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/constructions/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'call-to-action',
					)
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Call_To_Action_Template_Block::get_instance()->run();