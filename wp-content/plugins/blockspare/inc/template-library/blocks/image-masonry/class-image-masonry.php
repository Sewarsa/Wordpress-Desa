<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Image_Masonry_Template_Block' ) ) {

	class Blockspare_Image_Masonry_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Image Masonry'],
						'key'      => 'bs_image_masonry_1',
						'name'     => esc_html__('Image Masonry 1', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/puppycare/",
						'content'  => '<!-- wp:blockspare/blockspare-container {"paddingTop":60,"paddingBottom":60,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-14abe4d1-30dd-4","backGroundColor":"#ffebca"} -->
						<div class="wp-block-blockspare-blockspare-container alignfull blockspare-14abe4d1-30dd-4" blockspare-animation=""><style>.blockspare-14abe4d1-30dd-4 > .blockspare-block-container-wrapper{background-color:#ffebca;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;border-radius:0}.blockspare-14abe4d1-30dd-4 .blockspare-image-wrap{background-image:none}</style><div class="blockspare-block-container-wrapper blockspare-hover-item"><div class="blockspare-container-background blockspare-image-wrap has-background-opacity-100 has-background-opacity"></div><div class="blockspare-container"><div class="blockspare-inner-blocks blockspare-inner-wrapper-blocks"><!-- wp:blockspare/blockspare-section-header {"uniqueClass":"blockspare-f689c996-89c2-4","align":"wide","sectionAlignment":"center","headerTitle":" WELCOME TO PET CARE","titleFontSize":62,"headertitleColor":"#ff6900","headersubtitleColor":"#ffffff","headermarginTop":0,"titleFontFamily":"Oxygen","titleFontWeight":"700","titleLoadGoogleFonts":true,"subTitleFontFamily":"Oxygen","subTitleLoadGoogleFonts":true} -->
						<div class="wp-block-blockspare-blockspare-section-header alignwide blockspare-f689c996-89c2-4 blockspare-section-header-wrapper blockspare-blocks alignwide" blockspare-animation=""><style>.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap{background-color:transparent;text-align:center;margin-top:0px;margin-right:0px;margin-bottom:30px;margin-left:0px}.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap .blockspare-title{color:#ff6900;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:62px;font-family:Oxygen;font-weight:700}.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#ffffff;font-size:18px;font-family:Oxygen;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#8b249c}.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#8b249c}.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#8b249c}.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#8b249c}.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap .blockspare-title{font-size:26px}.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:16px}}@media screen and (max-width:768px){.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap .blockspare-title{font-size:20px}.blockspare-f689c996-89c2-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style1 blockspare-center blockspare-hover-item"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title"> WELCOME TO PET CARE</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div>
						<!-- /wp:blockspare/blockspare-section-header -->
						
						<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
						<div class="wp-block-group alignwide"><!-- wp:blockspare/blockspare-masonry {"align":"wide","gridSize":"lrg","uniqueClass":"blockspare-269f88c6-3ded-4"} -->
						<div class="blockspare-blocks blockspare-masonry-wrapper blockspare-original wp-block-blockspare-blockspare-masonry alignwide blockspare-269f88c6-3ded-4" blockspare-animation=""><style>.blockspare-269f88c6-3ded-4 .blockspare-gutter-wrap{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:30px;margin-bottom:30px}</style><div class="has-gutter blockspare-gutter-wrap"><ul class="has-grid-lrg has-gutter-15"><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/image-6.png" alt="" data-id="13" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/image-6/" class="wp-image-13"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/image-8-683x1024.png" alt="" data-id="11" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/image-8/" class="wp-image-11"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/image-7.png" alt="" data-id="12" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/image-7/" class="wp-image-12"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/funny-dog-standing-hind-legs-733x1024.jpg" alt="" data-id="17" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/funny-dog-standing-hind-legs/" class="wp-image-17"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/image-5-1024x682.png" alt="" data-id="14" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/image-5/" class="wp-image-14"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/1happy-cute-dog-looking-away.jpg" alt="" data-id="15" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/1happy-cute-dog-looking-away/" class="wp-image-15"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/friendly-smart-basenji-dog-giving-his-paw-close-up-isolated-white.jpg" alt="" data-id="18" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/friendly-smart-basenji-dog-giving-his-paw-close-up-isolated-white/" class="wp-image-18"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/image-4-1024x684.png" alt="" data-id="20" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/image-4/" class="wp-image-20"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/1beautiful-pet-portrait-dog.jpg" alt="" data-id="29" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/1beautiful-pet-portrait-dog/" class="wp-image-29"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/petcare/wp-content/uploads/sites/21/2023/05/1pleased-happy-afro-girl-gets-lovely-puppy-plays-embraces-four-legged-friend-with-love-stands-against-yellow-background-1024x448.jpg" alt="" data-id="10" data-imglink="" data-link="https://blockspare.com/demo/default/petcare/home/1pleased-happy-afro-girl-gets-lovely-puppy-plays-embraces-four-legged-friend-with-love-stands-against-yellow-background/" class="wp-image-10"/></figure></li></ul></div></div>
						<!-- /wp:blockspare/blockspare-masonry --></div>
						<!-- /wp:group --></div></div></div></div>
						<!-- /wp:blockspare/blockspare-container -->',
						'imagePath'    => 'image-masonry',
					),
					array(
						'type'     => 'block',
						'item'     => ['Image Masonry'],
						'key'      => 'bs_image_masonry_2',
						'name'     => esc_html__('Image Masonry 2', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/tech-gadgets/",
						'content'  => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
						<div class="wp-block-group alignwide"><!-- wp:blockspare/blockspare-section-header {"uniqueClass":"blockspare-7fa45533-36a6-4","align":"wide","sectionAlignment":"center","headerTitle":"Our Latest Gadgets","titleFontSize":42,"headermarginTop":0,"titleFontFamily":"Helvetica","titleFontWeight":"700","subTitleFontFamily":"Helvetica"} -->
						<div class="wp-block-blockspare-blockspare-section-header alignwide blockspare-7fa45533-36a6-4 blockspare-section-header-wrapper blockspare-blocks alignwide" blockspare-animation=""><style>.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap{background-color:transparent;text-align:center;margin-top:0px;margin-right:0px;margin-bottom:30px;margin-left:0px}.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap .blockspare-title{color:#404040;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:42px;font-family:Helvetica;font-weight:700}.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#6d6d6d;font-size:18px;font-family:Helvetica;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#8b249c}.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#8b249c}.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#8b249c}.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#8b249c}.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap .blockspare-title{font-size:26px}.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:16px}}@media screen and (max-width:768px){.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap .blockspare-title{font-size:20px}.blockspare-7fa45533-36a6-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style1 blockspare-center blockspare-hover-item"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">Our Latest Gadgets</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div>
						<!-- /wp:blockspare/blockspare-section-header -->
						
						<!-- wp:blockspare/blockspare-masonry {"align":"wide","gridSize":"lrg","uniqueClass":"blockspare-587a3b30-d4f9-4","animation":"AFTfadeInUp"} -->
						<div class="blockspare-blocks blockspare-masonry-wrapper blockspare-original wp-block-blockspare-blockspare-masonry alignwide blockspare-587a3b30-d4f9-4 blockspare-block-animation" blockspare-animation="AFTfadeInUp"><style>.blockspare-587a3b30-d4f9-4 .blockspare-gutter-wrap{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:30px;margin-bottom:30px}</style><div class="has-gutter blockspare-gutter-wrap"><ul class="has-grid-lrg has-gutter-15"><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/gadgets/wp-content/uploads/sites/22/2023/05/close-up-hand-wearing-smartwatch-1-1024x681.jpg" alt="" data-id="11" data-imglink="" data-link="https://blockspare.com/demo/default/gadgets/home/close-up-hand-wearing-smartwatch-1/" class="wp-image-11"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/gadgets/wp-content/uploads/sites/22/2023/05/mod678ern-stationary-collection-arrangement1.jpg" alt="" data-id="9" data-imglink="" data-link="https://blockspare.com/demo/default/gadgets/home/mod678ern-stationary-collection-arrangement1/" class="wp-image-9"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/gadgets/wp-content/uploads/sites/22/2023/05/electronic-device-balancing-concept-2-791x1024.jpg" alt="" data-id="13" data-imglink="" data-link="https://blockspare.com/demo/default/gadgets/home/electronic-device-balancing-concept-2/" class="wp-image-13"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/gadgets/wp-content/uploads/sites/22/2023/05/electronic-device-balancing-concept-1-1-791x1024.jpg" alt="" data-id="14" data-imglink="" data-link="https://blockspare.com/demo/default/gadgets/home/electronic-device-balancing-concept-1-1/" class="wp-image-14"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/gadgets/wp-content/uploads/sites/22/2023/05/r123etro-cameras.jpg" alt="" data-id="16" data-imglink="" data-link="https://blockspare.com/demo/default/gadgets/home/r123etro-cameras/" class="wp-image-16"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/gadgets/wp-content/uploads/sites/22/2023/05/high-angle-shot-lens-headphones-gimbal-phone-1-1024x683.jpg" alt="" data-id="15" data-imglink="" data-link="https://blockspare.com/demo/default/gadgets/home/high-angle-shot-lens-headphones-gimbal-phone-1/" class="wp-image-15"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure blockspare-hover-item"><img src="https://blockspare.com/demo/default/gadgets/wp-content/uploads/sites/22/2023/05/headphones-stereo-equipment-single-object-technology-generated-by-ai-1-1024x585.jpg" alt="" data-id="12" data-imglink="" data-link="https://blockspare.com/demo/default/gadgets/home/headphones-stereo-equipment-single-object-technology-generated-by-ai-1/" class="wp-image-12"/></figure></li></ul></div></div>
						<!-- /wp:blockspare/blockspare-masonry --></div>
						<!-- /wp:group -->',
						'imagePath'    => 'image-masonry',
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Image_Masonry_Template_Block::get_instance()->run();