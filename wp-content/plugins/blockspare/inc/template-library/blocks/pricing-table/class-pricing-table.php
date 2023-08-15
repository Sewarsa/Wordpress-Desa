<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Pricing_Table_Template_Block' ) ) {

	class Blockspare_Pricing_Table_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Pricing Table'],
						'key'      => 'bs_pricing_table_1',
						'name'     => esc_html__( 'Pricing Table 1', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/agency/",
						'content'  => '<!-- wp:blockspare/blockspare-pricing {"columns":2,"columnsGap":2,"marginTop":0,"marginBottom":0,"uniqueClass":"blockspare-74e8bd18-7b6f-4"} -->
						<div class="wp-block-blockspare-blockspare-pricing alignwide blockspare-74e8bd18-7b6f-4 blockspare-main-blockwrapper" blockspare-animation=""><div class="blockspare-blocks blockspare-pricing-block-wrapper"><div class="blockspare-pricing-columns-2 bs-layout-1"><div class="blockspare-pricing-table-wrap blockspare-pricing-table-layout-1 blockspare-block-pricing-table-gap-2"><!-- wp:blockspare/blockspare-pricing-inner-item {"itemborderWidth":1,"uniqueClass":"blockspare-46883671-ca5e-4","pricingLayout":"bpl-2","primaryColor":"#ffffff","secondaryColor":"#ffffff","enableIcon":false,"headerTitle":"Premium Plan","titleFontSize":20,"pricePaddingTop":50,"pricePaddingBottom":10,"priceColor":"#34ce8f","descriptionpaddingBottom":50,"descriptionFontSize":14,"descriptionIconColor":"#f9805f","buttonBackgroundColor":"#2e947d","buttonShape":"blockspare-button-shape-square"} -->
						<div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-46883671-ca5e-4 blockspare-block-pricing-table-center blockspare-block-pricing-table blockspare-icon-size-small layout-item-1 order-2" itemscope itemtype="http://schema.org/Product"><style>.blockspare-46883671-ca5e-4 .blockspare-block-pricing-table-inside{border-width:1px;border-style:solid;border-color:#ececec;border-radius:null;background-color:#fff;padding:0px}.blockspare-46883671-ca5e-4 .blockspare-badge span{color:#fff;background-color:#8b249c}.blockspare-46883671-ca5e-4 .blockspare-badge-image{width:100px}.blockspare-46883671-ca5e-4 .blockspare-block-pricing-table-inside .blockspare-pricing-wrap-1:before{background-color:#ffffff}.blockspare-46883671-ca5e-4 .blockspare-block-pricing-table-inside .blockspare-pricing-wrap-2:before{background-color:#ffffff}.blockspare-46883671-ca5e-4 .blockspare-block-pricing-table-inside .blockspare-pricing-wrap-3:before{background-color:#FFFFFF}</style><div class="blockspare-block-pricing-table-inside has-scale-ratio-0 blockspare-hover-item"><div class="blockspare-pricing-wrap-1"></div><div class="blockspare-pricing-wrap-2"><div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-46883671-ca5e-4 blockspare-46883671-ca5e-4 blockspare-section-header-wrapper blockspare-blocks"><style>.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap{background-color:transparent;text-align:center;margin-top:10px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap .blockspare-title{color:#404040;font-size:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#6d6d6d;font-size:18px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#8b249c}.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#8b249c}.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#8b249c}.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#8b249c}.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap .blockspare-title{font-size:26px}.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:16px}}@media screen and (max-width:768px){.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap .blockspare-title{font-size:20px}.blockspare-46883671-ca5e-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style1 blockspare-center"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">Premium Plan</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div><div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-46883671-ca5e-4 blockspare-46883671-ca5e-4 blockpare-priceunit"><style>.blockspare-46883671-ca5e-4 .blockspare-pricing-table-price-wrap{text-align:center;padding-top:50px;padding-bottom:10px;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-price{color:#34ce8f;font-size:52px}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-currency{color:#34ce8f;font-size:20px}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-term{color:#34ce8f;font-size:20px}@media screen and (max-width:1025px){.blockspare-46883671-ca5e-4 .blockspare-pricing-table-price{font-size:42px}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-currency{font-size:16px}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-term{font-size:6px}}@media screen and (max-width:768px){.blockspare-46883671-ca5e-4 .blockspare-pricing-table-price{font-size:32px}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-currency{font-size:21px}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-term{font-size:14px}}</style><div class="blockspare-pricing-table-price-wrap blockspare-pricing-has-currency"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="blockspare-pricing-table-currency">$</span><div itemprop="price" class="blockspare-pricing-table-price">59</div><span class="blockspare-pricing-table-term">/mo</span></div></div></div></div><div class="blockspare-pricing-wrap-3"><div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-46883671-ca5e-4 blockspare-46883671-ca5e-4 blockspare-pirce-description"><style>.blockspare-46883671-ca5e-4 .blockspare-list-wrap{padding-top:10px;padding-bottom:50px;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-features li{text-align:center;color:#6d6d6d;font-size:14px}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-features li:before{font-size:10px;color:#f9805f}@media screen and (max-width:1025px){.blockspare-46883671-ca5e-4 .blockspare-pricing-table-features li{font-size:14px}}@media screen and (max-width:768px){.blockspare-46883671-ca5e-4 .blockspare-pricing-table-features li{font-size:14px}}</style><div class="blockspare-blocks blockspare-list-wrap"><ul itemprop="description" class="blockspare-pricing-table-features blockspare-list-border-none blockspare-list-border-width-1 blockspare-list-check"><li>40 Team Members</li><li>40 Personal Contacts</li><li>4000 Message</li></ul></div></div><div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-46883671-ca5e-4 blockspare-46883671-ca5e-4 blockspare-block-button-wrap"><style>.blockspare-46883671-ca5e-4 .blockspare-block-button{text-align:center}.blockspare-46883671-ca5e-4 .blockspare-pricing-table-button{padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px}.blockspare-46883671-ca5e-4 blocks-button__inline-link{text-align:center}.blockspare-46883671-ca5e-4 .blockspare-block-button span{color:#fff;border-width:1px;font-size:16px}.blockspare-46883671-ca5e-4 .wp-block-blockspare-blockspare-pricing-inner-item .blockspare-block-button .blockspare-button{background-color:#2e947d}.blockspare-46883671-ca5e-4 .wp-block-blockspare-blockspare-pricing-inner-item .blockspare-block-button .blockspare-button:visited{background-color:#2e947d}.blockspare-46883671-ca5e-4 .wp-block-blockspare-blockspare-pricing-inner-item .blockspare-block-button .blockspare-button:focus{background-color:#2e947d}@media screen and (max-width:1025px){.blockspare-46883671-ca5e-4 .blockspare-block-button span{font-size:14px}}@media screen and (max-width:768px){.blockspare-46883671-ca5e-4 .blockspare-block-button span{font-size:14px}}</style><div class="blockspare-pricing-table-button"><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-square blockspare-button-size-small btn-icon-left"><span>Get Started</span></a></div></div></div></div></div></div>
						<!-- /wp:blockspare/blockspare-pricing-inner-item -->
						
						<!-- wp:blockspare/blockspare-pricing-inner-item {"itemborderWidth":1,"uniqueClass":"blockspare-9659a553-744b-4","pricingLayout":"bpl-2","primaryColor":"#ffffff","secondaryColor":"#ffffff","enableIcon":false,"headerTitle":"Corporate Plan","titleFontSize":20,"price":"159","pricePaddingTop":50,"pricePaddingBottom":10,"priceColor":"#2579e3","descriptionpaddingBottom":50,"descriptionFontSize":14,"descriptionIconColor":"#f9805f","buttonBackgroundColor":"#2e947d","buttonShape":"blockspare-button-shape-square"} -->
						<div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-9659a553-744b-4 blockspare-block-pricing-table-center blockspare-block-pricing-table blockspare-icon-size-small layout-item-1 order-2" itemscope itemtype="http://schema.org/Product"><style>.blockspare-9659a553-744b-4 .blockspare-block-pricing-table-inside{border-width:1px;border-style:solid;border-color:#ececec;border-radius:null;background-color:#fff;padding:0px}.blockspare-9659a553-744b-4 .blockspare-badge span{color:#fff;background-color:#8b249c}.blockspare-9659a553-744b-4 .blockspare-badge-image{width:100px}.blockspare-9659a553-744b-4 .blockspare-block-pricing-table-inside .blockspare-pricing-wrap-1:before{background-color:#ffffff}.blockspare-9659a553-744b-4 .blockspare-block-pricing-table-inside .blockspare-pricing-wrap-2:before{background-color:#ffffff}.blockspare-9659a553-744b-4 .blockspare-block-pricing-table-inside .blockspare-pricing-wrap-3:before{background-color:#FFFFFF}</style><div class="blockspare-block-pricing-table-inside has-scale-ratio-0 blockspare-hover-item"><div class="blockspare-pricing-wrap-1"></div><div class="blockspare-pricing-wrap-2"><div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-9659a553-744b-4 blockspare-9659a553-744b-4 blockspare-section-header-wrapper blockspare-blocks"><style>.blockspare-9659a553-744b-4 .blockspare-section-head-wrap{background-color:transparent;text-align:center;margin-top:10px;margin-right:0px;margin-bottom:0px;margin-left:0px}.blockspare-9659a553-744b-4 .blockspare-section-head-wrap .blockspare-title{color:#404040;font-size:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-9659a553-744b-4 .blockspare-section-head-wrap .blockspare-subtitle{color:#6d6d6d;font-size:18px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px}.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style2 .blockspare-title-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style4 .blockspare-title-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style5 .blockspare-title-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style6 .blockspare-title-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style7 .blockspare-title-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style8 .blockspare-title-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style9 .blockspare-title-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style16 .blockspare-title-wrapper .blockspare-upper-dash{color:#8b249c}.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash::before,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style11 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style15 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style15.blockspare-center .blockspare-title-wrapper .blockspare-upper-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-title,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style19 .blockspare-title-wrapper .blockspare-title:before,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style20 .blockspare-title-wrapper .blockspare-lower-dash{background-color:#8b249c}.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-title,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style18 .blockspare-title-wrapper .blockspare-lower-dash{border-bottom-color:#8b249c}.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style17 .blockspare-title-wrapper .blockspare-title:before{border-top-color:#8b249c}.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style10 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style12 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style13 .blockspare-title-wrapper .blockspare-lower-dash,.blockspare-9659a553-744b-4 .blockspare-section-head-wrap.blockspare-style14 .blockspare-title-wrapper .blockspare-upper-dash{background-color:#E5EFE3}@media screen and (max-width:1025px){.blockspare-9659a553-744b-4 .blockspare-section-head-wrap .blockspare-title{font-size:26px}.blockspare-9659a553-744b-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:16px}}@media screen and (max-width:768px){.blockspare-9659a553-744b-4 .blockspare-section-head-wrap .blockspare-title{font-size:20px}.blockspare-9659a553-744b-4 .blockspare-section-head-wrap .blockspare-subtitle{font-size:14px}}</style><div class="blockspare-section-head-wrap blockspare-style1 blockspare-center"><div class="blockspare-title-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><h2 class="blockspare-title">Corporate Plan</h2><span class="blockspare-title-dash blockspare-lower-dash"></span></div><div class="blockspare-subtitle-wrapper"><span class="blockspare-title-dash blockspare-upper-dash"></span><span class="blockspare-title-dash blockspare-lower-dash"></span></div></div></div><div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-9659a553-744b-4 blockspare-9659a553-744b-4 blockpare-priceunit"><style>.blockspare-9659a553-744b-4 .blockspare-pricing-table-price-wrap{text-align:center;padding-top:50px;padding-bottom:10px;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-9659a553-744b-4 .blockspare-pricing-table-price{color:#2579e3;font-size:52px}.blockspare-9659a553-744b-4 .blockspare-pricing-table-currency{color:#2579e3;font-size:20px}.blockspare-9659a553-744b-4 .blockspare-pricing-table-term{color:#2579e3;font-size:20px}@media screen and (max-width:1025px){.blockspare-9659a553-744b-4 .blockspare-pricing-table-price{font-size:42px}.blockspare-9659a553-744b-4 .blockspare-pricing-table-currency{font-size:16px}.blockspare-9659a553-744b-4 .blockspare-pricing-table-term{font-size:6px}}@media screen and (max-width:768px){.blockspare-9659a553-744b-4 .blockspare-pricing-table-price{font-size:32px}.blockspare-9659a553-744b-4 .blockspare-pricing-table-currency{font-size:21px}.blockspare-9659a553-744b-4 .blockspare-pricing-table-term{font-size:14px}}</style><div class="blockspare-pricing-table-price-wrap blockspare-pricing-has-currency"><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span itemprop="priceCurrency" class="blockspare-pricing-table-currency">$</span><div itemprop="price" class="blockspare-pricing-table-price">159</div><span class="blockspare-pricing-table-term">/mo</span></div></div></div></div><div class="blockspare-pricing-wrap-3"><div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-9659a553-744b-4 blockspare-9659a553-744b-4 blockspare-pirce-description"><style>.blockspare-9659a553-744b-4 .blockspare-list-wrap{padding-top:10px;padding-bottom:50px;margin-top:0px;margin-bottom:0px;margin-left:0px;margin-right:0px}.blockspare-9659a553-744b-4 .blockspare-pricing-table-features li{text-align:center;color:#6d6d6d;font-size:14px}.blockspare-9659a553-744b-4 .blockspare-pricing-table-features li:before{font-size:10px;color:#f9805f}@media screen and (max-width:1025px){.blockspare-9659a553-744b-4 .blockspare-pricing-table-features li{font-size:14px}}@media screen and (max-width:768px){.blockspare-9659a553-744b-4 .blockspare-pricing-table-features li{font-size:14px}}</style><div class="blockspare-blocks blockspare-list-wrap"><ul itemprop="description" class="blockspare-pricing-table-features blockspare-list-border-none blockspare-list-border-width-1 blockspare-list-check"><li>40 Team Members</li><li>40 Personal Contacts</li><li>4000 Message</li></ul></div></div><div class="wp-block-blockspare-blockspare-pricing-inner-item blockspare-9659a553-744b-4 blockspare-9659a553-744b-4 blockspare-block-button-wrap"><style>.blockspare-9659a553-744b-4 .blockspare-block-button{text-align:center}.blockspare-9659a553-744b-4 .blockspare-pricing-table-button{padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px}.blockspare-9659a553-744b-4 blocks-button__inline-link{text-align:center}.blockspare-9659a553-744b-4 .blockspare-block-button span{color:#fff;border-width:1px;font-size:16px}.blockspare-9659a553-744b-4 .wp-block-blockspare-blockspare-pricing-inner-item .blockspare-block-button .blockspare-button{background-color:#2e947d}.blockspare-9659a553-744b-4 .wp-block-blockspare-blockspare-pricing-inner-item .blockspare-block-button .blockspare-button:visited{background-color:#2e947d}.blockspare-9659a553-744b-4 .wp-block-blockspare-blockspare-pricing-inner-item .blockspare-block-button .blockspare-button:focus{background-color:#2e947d}@media screen and (max-width:1025px){.blockspare-9659a553-744b-4 .blockspare-block-button span{font-size:14px}}@media screen and (max-width:768px){.blockspare-9659a553-744b-4 .blockspare-block-button span{font-size:14px}}</style><div class="blockspare-pricing-table-button"><div class="blockspare-block-button"><a class="blockspare-button blockspare-button-shape-square blockspare-button-size-small btn-icon-left"><span>Get Started</span></a></div></div></div></div></div></div>
						<!-- /wp:blockspare/blockspare-pricing-inner-item --></div></div></div></div>
						<!-- /wp:blockspare/blockspare-pricing -->',
						'imagePath'    => 'pricing-table',
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Pricing Table'],
						'key'      => 'bs_pricing_table_2',
						'name'     => esc_html__( 'Pricing Table 2', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/app/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'pricing-table',
                    ),
					array(
						'type'     => 'block',
						'item'     => ['Pricing Table'],
						'key'      => 'bs_pricing_table_3',
						'name'     => esc_html__( 'Pricing Table 3', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/medical/price-offer/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'pricing-table',
					),
					array(
						'type'     => 'block',
						'item'     => ['Pricing Table'],
						'key'      => 'bs_pricing_table_4',
						'name'     => esc_html__( 'Pricing Table 4', 'blockspare' ),
						'blockLink'=>"https://blockspare.com/demo/default/medical/price-offer/",
						'content'  => BLOCKSPARE_PRO_PATH,
						'imagePath'    => 'pricing-table',
						)
				);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Pricing_Table_Template_Block::get_instance()->run();