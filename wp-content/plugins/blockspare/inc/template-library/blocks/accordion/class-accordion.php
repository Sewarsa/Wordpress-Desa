<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Blockspare_Accordion_Template_Block' ) ) {

	class Blockspare_Accordion_Template_Block extends Blockspare_Import_Block_Base{
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
						'item'     => ['Accordion'],
						'key'      => 'bs_accrodion_1',
						'name'     => esc_html__( 'Accordion 1', 'blockspare' ),
						'blockLink'=> "https://blockspare.com/demo/default/agency/about-us/",
						'content'  => '<!-- wp:blockspare/blockspare-accordion {"uniqueClass":"blockspare-00ad95aa-120b-4","className":"blockspare-block blockspare-block-34a78d","uniqueId":"00ad95"} -->
						<div class="blockspare-block-accordion wp-block-blockspare-blockspare-accordion blockspare-block blockspare-block-34a78d blockspare-00ad95aa-120b-4" data-item-toggle="true" blockspare-animation=""><div class=" blockspare-block-accordion-wraps blockspare-block-00ad95"><style>.blockspare-00ad95aa-120b-4 .blockspare-block-accordion-wraps{padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px;margin-top:30px;margin-bottom:30px}.blockspare-00ad95aa-120b-4 .blockspare-accordion-item .blockspare-accordion-panel span.blockspare-accordion-panel-handler-label{font-size:18px}@media screen and (max-width:1025px){.blockspare-00ad95aa-120b-4 .blockspare-accordion-item .blockspare-accordion-panel span.blockspare-accordion-panel-handler-label{font-size:16px}}@media screen and (max-width:768px){.blockspare-00ad95aa-120b-4 .blockspare-accordion-item .blockspare-accordion-panel span.blockspare-accordion-panel-handler-label{font-size:14px}}</style><!-- wp:blockspare/accordion-item {"uniqueId":"dfd3ad","itemNumber":0,"heading":"Collect Ideas","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#cffbf1","panelActiveColor":"#cffbf1","textColor":"#2e947d","marginBottom":15,"activeTextColor":"#2e947d"} -->
						<div class="wp-block-blockspare-accordion-item blockspare-block-dfd3ad"><div class="blockspare-accordion-item blockspare-hover-item blockspare-type-fill " data-act-color="#2e947d" data-txt-color="#2e947d" data-active="#cffbf1" data-pan="#cffbf1" style="margin-bottom:15px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#cffbf1"><span class="blockspare-accordion-panel-handler" role="button" style="color:#2e947d"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Collect Ideas</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
						<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
						<!-- /wp:paragraph --></div></div></div>
						<!-- /wp:blockspare/accordion-item -->
						
						<!-- wp:blockspare/accordion-item {"uniqueId":"761dfd","itemNumber":1,"heading":"Data Analysis","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#cffbf1","panelActiveColor":"#cffbf1","textColor":"#2e947d","marginBottom":15,"activeTextColor":"#2e947d"} -->
						<div class="wp-block-blockspare-accordion-item blockspare-block-761dfd"><div class="blockspare-accordion-item blockspare-hover-item blockspare-type-fill " data-act-color="#2e947d" data-txt-color="#2e947d" data-active="#cffbf1" data-pan="#cffbf1" style="margin-bottom:15px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#cffbf1"><span class="blockspare-accordion-panel-handler" role="button" style="color:#2e947d"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Data Analysis</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
						<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
						<!-- /wp:paragraph --></div></div></div>
						<!-- /wp:blockspare/accordion-item -->
						
						<!-- wp:blockspare/accordion-item {"uniqueId":"7aa994","itemNumber":2,"heading":"Finalize Product","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#cffbf1","panelActiveColor":"#cffbf1","textColor":"#2e947d","marginBottom":15,"activeTextColor":"#2e947d"} -->
						<div class="wp-block-blockspare-accordion-item blockspare-block-7aa994"><div class="blockspare-accordion-item blockspare-hover-item blockspare-type-fill " data-act-color="#2e947d" data-txt-color="#2e947d" data-active="#cffbf1" data-pan="#cffbf1" style="margin-bottom:15px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#cffbf1"><span class="blockspare-accordion-panel-handler" role="button" style="color:#2e947d"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Finalize Product</span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
						<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
						<!-- /wp:paragraph --></div></div></div>
						<!-- /wp:blockspare/accordion-item -->
						
						<!-- wp:blockspare/accordion-item {"uniqueId":"ea89ba","itemNumber":2,"heading":"Submit Product ","defaultText":"Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.","panelColor":"#cffbf1","panelActiveColor":"#cffbf1","textColor":"#2e947d","marginBottom":15,"activeTextColor":"#2e947d"} -->
						<div class="wp-block-blockspare-accordion-item blockspare-block-ea89ba"><div class="blockspare-accordion-item blockspare-hover-item blockspare-type-fill " data-act-color="#2e947d" data-txt-color="#2e947d" data-active="#cffbf1" data-pan="#cffbf1" style="margin-bottom:15px"><div class="blockspare-accordion-panel  blockspare-right" style="background-color:#cffbf1"><span class="blockspare-accordion-panel-handler" role="button" style="color:#2e947d"><span class="blockspare-accordion-icon fa fa-plus"></span><span class="blockspare-accordion-panel-handler-label">Submit Product </span></span></div><div class="blockspare-accordion-body" style="background-color:#fff" data-bg="#fff"><!-- wp:paragraph -->
						<p>Ipsam per dolores minus natoque? Rutrum dolorem voluptates euismod pharetra! Rhoncus distinctio cupiditate accusantium. Cillum aliquid.</p>
						<!-- /wp:paragraph --></div></div></div>
						<!-- /wp:blockspare/accordion-item --></div></div>
						<!-- /wp:blockspare/blockspare-accordion -->',
						'imagePath'    => 'accordions',
				),
				array(
					'type'     => 'block',
					'item'     => ['Accordion'],
					'key'      => 'bs_accrodion_2',
					'name'     => esc_html__( 'Accordion 2', 'blockspare' ),
					'blockLink'=> "https://blockspare.com/demo/default/lawyer/about-us-2/",
					'content'  => BLOCKSPARE_PRO_PATH,
					'imagePath'    => 'accordions',
				)	
			);

            return array_merge_recursive( $blocks_lists, $block_library_list );
        }
	}
}
Blockspare_Accordion_Template_Block::get_instance()->run();