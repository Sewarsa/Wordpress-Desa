<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Logo_Grid_Template_Block' ) ) {

	class Blockspare_Logo_Grid_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Logo Grid'],
						'key'      => 'bs_logo_grid_1',
						'name'     => esc_html__( 'Logo Grid 1', 'blockspare' ),
						'blockLink'=>"https://www.blockspare.com/block/logo-grid/",
						'content'  => '<!-- wp:blockspare/blockspare-logos {"uniqueClass":"blockspare-ce005073-6743-4","images":[{"alt":"","id":291,"link":"http://blockspare.com/home/image-carousel-image/","caption":"","sizes":{"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/image-carousel-image.png","height":150,"width":150,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/image-carousel-image.png","imgLink":""},{"alt":"","id":288,"link":"http://blockspare.com/home/cta-image-2/","caption":"","sizes":{"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/cta-image-1.png","height":150,"width":150,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/cta-image-1.png","imgLink":""},{"alt":"","id":285,"link":"http://blockspare.com/home/content-box-image-2/","caption":"","sizes":{"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/content-box-image-1.png","height":150,"width":150,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/content-box-image-1.png","imgLink":""},{"alt":"","id":298,"link":"http://blockspare.com/home/post-list-image/","caption":"","sizes":{"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/post-list-image.png","height":150,"width":150,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/post-list-image.png","imgLink":""},{"alt":"","id":292,"link":"http://blockspare.com/home/image-slider-image/","caption":"","sizes":{"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/image-slider-image.png","height":150,"width":150,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/image-slider-image.png","imgLink":""},{"alt":"","id":304,"link":"http://blockspare.com/home/shape-divider-image/","caption":"","sizes":{"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/shape-divider-image.png","height":150,"width":150,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/shape-divider-image.png","imgLink":""}],"columns":3,"gutter":50,"className":"blockspare-c2144358-f9cd-4"} -->
							<div class="blockspare-blocks blockspare-logos-wrapper has-gap-50 has-colums-3 wp-block-blockspare-blockspare-logos blockspare-c2144358-f9cd-4 blockspare-ce005073-6743-4" blockspare-animation=""><style>.blockspare-ce005073-6743-4 .blockspare-logo-grid-main{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:30px;margin-right:0px;margin-bottom:30px;margin-left:0px}</style><div class="blockspare-logo-grid-main"><ul class="blockspare-logo-wrap"><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="http://blockspare.com/wp-content/uploads/2020/03/image-carousel-image.png" alt="" data-id="291" data-imglink="" data-link="http://blockspare.com/home/image-carousel-image/" class="wp-image-291 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="http://blockspare.com/wp-content/uploads/2020/03/cta-image-1.png" alt="" data-id="288" data-imglink="" data-link="http://blockspare.com/home/cta-image-2/" class="wp-image-288 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="http://blockspare.com/wp-content/uploads/2020/03/content-box-image-1.png" alt="" data-id="285" data-imglink="" data-link="http://blockspare.com/home/content-box-image-2/" class="wp-image-285 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="http://blockspare.com/wp-content/uploads/2020/03/post-list-image.png" alt="" data-id="298" data-imglink="" data-link="http://blockspare.com/home/post-list-image/" class="wp-image-298 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="http://blockspare.com/wp-content/uploads/2020/03/image-slider-image.png" alt="" data-id="292" data-imglink="" data-link="http://blockspare.com/home/image-slider-image/" class="wp-image-292 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="http://blockspare.com/wp-content/uploads/2020/03/shape-divider-image.png" alt="" data-id="304" data-imglink="" data-link="http://blockspare.com/home/shape-divider-image/" class="wp-image-304 blockspare-hover-item"/></figure></li></ul></div></div>
							<!-- /wp:blockspare/blockspare-logos -->',
						'imagePath'    => 'logo-grid',

                    ),
                    array(
						'type'     => 'block',
						'item'     => ['Logo Grid'],
						'key'      => 'bs_logo_grid_2',
						'name'     => esc_html__( 'Logo Grid 2', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/agency/",
						'content'  => '<!-- wp:blockspare/blockspare-logos {"uniqueClass":"blockspare-e892f541-5476-4","align":"wide","images":[{"alt":"","id":130,"link":"https://blockspare.com/demo/default/agency/home/c2/","caption":"","sizes":{"thumbnail":{"height":88,"width":150,"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c2-150x88.png","orientation":"landscape"},"full":{"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c2.png","height":88,"width":252,"orientation":"landscape"}},"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c2.png","imgLink":""},{"alt":"","id":129,"link":"https://blockspare.com/demo/default/agency/home/c3/","caption":"","sizes":{"thumbnail":{"height":70,"width":150,"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c3-150x70.png","orientation":"landscape"},"full":{"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c3.png","height":70,"width":250,"orientation":"landscape"}},"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c3.png","imgLink":""},{"alt":"","id":128,"link":"https://blockspare.com/demo/default/agency/home/c4/","caption":"","sizes":{"thumbnail":{"height":72,"width":150,"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c4-150x72.png","orientation":"landscape"},"full":{"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c4.png","height":72,"width":268,"orientation":"landscape"}},"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c4.png","imgLink":""},{"alt":"","id":127,"link":"https://blockspare.com/demo/default/agency/home/c5/","caption":"","sizes":{"thumbnail":{"height":62,"width":150,"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c5-150x62.png","orientation":"landscape"},"full":{"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c5.png","height":62,"width":194,"orientation":"landscape"}},"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c5.png","imgLink":""},{"alt":"","id":126,"link":"https://blockspare.com/demo/default/agency/home/c1/","caption":"","sizes":{"thumbnail":{"height":80,"width":150,"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c1-150x80.png","orientation":"landscape"},"full":{"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c1.png","height":80,"width":272,"orientation":"landscape"}},"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c1.png","imgLink":""},{"alt":"","id":125,"link":"https://blockspare.com/demo/default/agency/home/c6/","caption":"","sizes":{"thumbnail":{"height":60,"width":150,"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c6-150x60.png","orientation":"landscape"},"full":{"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c6.png","height":60,"width":258,"orientation":"landscape"}},"url":"https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c6.png","imgLink":""}],"columns":6,"gutter":40,"className":"blockspare-2ad12675-67a6-4 blockspare-1564c2d5-89f1-4 blockspare-0b8d4d58-d4fb-4"} -->
							<div class="blockspare-blocks blockspare-logos-wrapper has-gap-40 has-colums-6 wp-block-blockspare-blockspare-logos alignwide blockspare-2ad12675-67a6-4 blockspare-1564c2d5-89f1-4 blockspare-0b8d4d58-d4fb-4 blockspare-e892f541-5476-4" blockspare-animation=""><style>.blockspare-e892f541-5476-4 .blockspare-logo-grid-main{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:30px;margin-right:0px;margin-bottom:30px;margin-left:0px}</style><div class="blockspare-logo-grid-main"><ul class="blockspare-logo-wrap"><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c2.png" alt="" data-id="130" data-imglink="" data-link="https://blockspare.com/demo/default/agency/home/c2/" class="wp-image-130 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c3.png" alt="" data-id="129" data-imglink="" data-link="https://blockspare.com/demo/default/agency/home/c3/" class="wp-image-129 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c4.png" alt="" data-id="128" data-imglink="" data-link="https://blockspare.com/demo/default/agency/home/c4/" class="wp-image-128 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c5.png" alt="" data-id="127" data-imglink="" data-link="https://blockspare.com/demo/default/agency/home/c5/" class="wp-image-127 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c1.png" alt="" data-id="126" data-imglink="" data-link="https://blockspare.com/demo/default/agency/home/c1/" class="wp-image-126 blockspare-hover-item"/></figure></li><li class="blockspare-gallery-item"><figure class="blockspare-gallery-figure"><img src="https://blockspare.com/demo/default/agency/wp-content/uploads/sites/2/2021/07/c6.png" alt="" data-id="125" data-imglink="" data-link="https://blockspare.com/demo/default/agency/home/c6/" class="wp-image-125 blockspare-hover-item"/></figure></li></ul></div></div>
							<!-- /wp:blockspare/blockspare-logos -->',
						'imagePath'    => 'logo-grid',
					),
                    array(
						'type'     => 'block',
						'item'     => ['Logo Grid'],
						'key'      => 'bs_logo_grid_3',
						'name'     => esc_html__( 'Logo Grid 3', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/constructions/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'logo-grid',
                    )
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Logo_Grid_Template_Block::get_instance()->run();