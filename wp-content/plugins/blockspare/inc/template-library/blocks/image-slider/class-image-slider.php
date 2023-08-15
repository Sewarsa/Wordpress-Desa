<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Image_Slider_Template_Block' ) ) {

	class Blockspare_Image_Slider_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Image Slider'],
						'key'      => 'bs_image_slider_1',
						'name'     => esc_html__( 'Image Slider 1', 'blockspare' ),
						'blockLink'=>"https://www.blockspare.com/block/image-slider/",
						'content'  => '<!-- wp:blockspare/blockspare-slider {"uniqueClass":"blockspare-f46b2934-4ec7-4","images":[{"alt":"","id":149,"link":"http://blockspare.com/6/","caption":"","sizes":{"thumbnail":{"height":150,"width":150,"url":"http://blockspare.com/wp-content/uploads/2020/03/6-150x150.jpg","orientation":"landscape"},"medium":{"height":200,"width":300,"url":"http://blockspare.com/wp-content/uploads/2020/03/6-300x200.jpg","orientation":"landscape"},"large":{"height":386,"width":580,"url":"http://blockspare.com/wp-content/uploads/2020/03/6-1024x682.jpg","orientation":"landscape"},"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/6.jpg","height":853,"width":1280,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/6-1024x682.jpg","imgLink":""},{"alt":"","id":148,"link":"http://blockspare.com/5/","caption":"","sizes":{"thumbnail":{"height":150,"width":150,"url":"http://blockspare.com/wp-content/uploads/2020/03/5-150x150.jpg","orientation":"landscape"},"medium":{"height":200,"width":300,"url":"http://blockspare.com/wp-content/uploads/2020/03/5-300x200.jpg","orientation":"landscape"},"large":{"height":386,"width":580,"url":"http://blockspare.com/wp-content/uploads/2020/03/5-1024x682.jpg","orientation":"landscape"},"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/5.jpg","height":853,"width":1280,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/5-1024x682.jpg","imgLink":""},{"alt":"","id":147,"link":"http://blockspare.com/4/","caption":"","sizes":{"thumbnail":{"height":150,"width":150,"url":"http://blockspare.com/wp-content/uploads/2020/03/4-150x150.jpg","orientation":"landscape"},"medium":{"height":200,"width":300,"url":"http://blockspare.com/wp-content/uploads/2020/03/4-300x200.jpg","orientation":"landscape"},"large":{"height":386,"width":580,"url":"http://blockspare.com/wp-content/uploads/2020/03/4-1024x682.jpg","orientation":"landscape"},"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/4.jpg","height":853,"width":1280,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/4-1024x682.jpg","imgLink":""},{"alt":"","id":146,"link":"http://blockspare.com/3/","caption":"","sizes":{"thumbnail":{"height":150,"width":150,"url":"http://blockspare.com/wp-content/uploads/2020/03/3-150x150.jpg","orientation":"landscape"},"medium":{"height":200,"width":300,"url":"http://blockspare.com/wp-content/uploads/2020/03/3-300x200.jpg","orientation":"landscape"},"large":{"height":386,"width":580,"url":"http://blockspare.com/wp-content/uploads/2020/03/3-1024x682.jpg","orientation":"landscape"},"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/3.jpg","height":853,"width":1280,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/3-1024x682.jpg","imgLink":""},{"alt":"","id":145,"link":"http://blockspare.com/2/","caption":"","sizes":{"thumbnail":{"height":150,"width":150,"url":"http://blockspare.com/wp-content/uploads/2020/03/2-150x150.jpg","orientation":"landscape"},"medium":{"height":200,"width":300,"url":"http://blockspare.com/wp-content/uploads/2020/03/2-300x200.jpg","orientation":"landscape"},"large":{"height":386,"width":580,"url":"http://blockspare.com/wp-content/uploads/2020/03/2-1024x682.jpg","orientation":"landscape"},"full":{"url":"http://blockspare.com/wp-content/uploads/2020/03/2.jpg","height":853,"width":1280,"orientation":"landscape"}},"url":"http://blockspare.com/wp-content/uploads/2020/03/2-1024x682.jpg","imgLink":""}],"className":"blockspare-blocks blockspare-slider-wrap has-gutter-space-1 blockspare-original blockspare-navigation-small blockspare-1a7d2159-6e7b-4"} -->
							<div class="wp-block-blockspare-blockspare-slider blockspare-blocks blockspare-slider-wrap has-gutter-space-1 blockspare-original blockspare-navigation-small blockspare-1a7d2159-6e7b-4 blockspare-f46b2934-4ec7-4" blockspare-animation=""><style>.blockspare-f46b2934-4ec7-4 .blockspare-slider-wrap span:before,.blockspare-f46b2934-4ec7-4 .blockspare-slider-wrap ul li button{color:#000}.blockspare-f46b2934-4ec7-4 .blockspare-slider-wrap .slick-slider .slick-dots > li button{background-color:#000}.blockspare-f46b2934-4ec7-4 .blockspare-slider-wrap .blockspare-gallery-figure img{border-radius:0px}.blockspare-f46b2934-4ec7-4 .slick-slider .slick-arrow:after{background-color:#fff}.blockspare-f46b2934-4ec7-4 .blockspare-slider-wrap{margin-top:30px;margin-right:0px;margin-bottom:30px;margin-left:0px}</style><div class="blockspare-blocks blockspare-slider-wrap has-gutter-space-1 blockspare-original lpc-navigation-1 blockspare-navigation-small bs-has-equal-height"><div class="blockspare-carousel-items"><div data-next="fas fa-chevron-right" data-prev="fas fa-chevron-left" data-slick="{&quot;autoplay&quot;:true,&quot;slidesToShow&quot;:1,&quot;speed&quot;:&quot;1000&quot;,&quot;arrows&quot;:true,&quot;dots&quot;:false}"><div><div class="blockspare-gallery-figure "> <img src="http://blockspare.com/wp-content/uploads/2020/03/6.jpg" class="blockspare-hover-item"/></div></div><div><div class="blockspare-gallery-figure "> <img src="http://blockspare.com/wp-content/uploads/2020/03/5.jpg" class="blockspare-hover-item"/></div></div><div><div class="blockspare-gallery-figure "> <img src="http://blockspare.com/wp-content/uploads/2020/03/4.jpg" class="blockspare-hover-item"/></div></div><div><div class="blockspare-gallery-figure "> <img src="http://blockspare.com/wp-content/uploads/2020/03/3.jpg" class="blockspare-hover-item"/></div></div><div><div class="blockspare-gallery-figure "> <img src="http://blockspare.com/wp-content/uploads/2020/03/2.jpg" class="blockspare-hover-item"/></div></div></div></div></div></div>
							<!-- /wp:blockspare/blockspare-slider -->',
						),

						array(
							'type'     => 'block',
							'item'     => ['Image Slider'],
							'key'      => 'bs_image_slider_2',
							'name'     => esc_html__( 'Image Slider 2', 'blockspare' ),
							'blockLink'=>"https://www.blockspare.com/block/image-slider/",
							'content'  => BLOCKSPARE_PRO_PATH,
						)
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Image_Slider_Template_Block::get_instance()->run();