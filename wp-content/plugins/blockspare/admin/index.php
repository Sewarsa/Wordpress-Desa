<?php
/**
 * Welcome screen.
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('Blockspare_Admin_Dashboard')) {
    class Blockspare_Admin_Dashboard
    {
        function __construct()
        {
            add_action('admin_menu', array($this, 'add_dashboard_page'));

            add_action('admin_enqueue_scripts', array($this, 'enqueue_dashboard_script'));

            add_action('admin_init', array($this, 'redirect_to_blockspare_page'));
        }

        public function add_dashboard_page()
        {

            // @see images/blockspare-icon.svg
            $svg = <<< SVG
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
<g>
	<g>
		<path class="st0" d="M1.6,9.2v21.4l18.3-9.2L20.2,0L1.6,9.2z M16.9,19.8L4.9,26V10.9l12-6.1V19.8z"/>
		<polygon id="XMLID_3_" class="st1" points="19.9,21.4 16.9,23 26,27.7 13.8,33.8 4.9,29 1.6,30.7 13.9,36.9 32.4,27.7 		"/>
	</g>
	<g>
		<polygon id="XMLID_2_" class="st0" points="23,1.5 23,19.8 32.4,24.6 32.4,9.4 35.3,10.9 35.3,29 38.4,30.7 38.4,9.2 29.4,4.8 
			29.2,19.7 26,18.4 26,3.1 		"/>
		<polygon id="XMLID_1_" class="st1" points="17,38.4 19.9,40 38.4,30.7 35.3,29 		"/>
	</g>
</g>
</svg>
SVG;

            add_menu_page(
                __('Blockspare', 'blockspare'), // Page Title.
                __('Blockspare', 'blockspare'), // Menu Title.
                'edit_posts', // Capability.
                'blockspare', // Menu slug.
                array($this, 'blockspare_admin_dashboard'), // Action.
                'data:image/svg+xml;base64,' . base64_encode($svg) // Blockspare icon.
            );

            // Our getting started page.
            add_submenu_page(
                'blockspare', // Parent slug.
                __( 'Getting Started', 'blockspare' ), // Page title.
                __( 'Getting Started', 'blockspare' ), // Menu title.
                'manage_options', // Capability.
                'blockspare', // Menu slug.
                array( $this, 'blockspare_admin_dashboard' ), // Callback function.
                1 // Position
            );
        }

        public function enqueue_dashboard_script($hook) {
            wp_enqueue_style('blockspare-admin', BLOCKSPARE_PLUGIN_URL .'admin/assets/css/style.css','','');
        }

        public function blockspare_admin_dashboard()
        {
            ?>
<div class="wrap blockspare-wrap">
    <header class="blockspare-header">
        <img src="<?php echo esc_url(plugins_url('assets/blockspare-logo.png', __FILE__)) ?>"
            alt="<?php esc_attr_e('Blockspare', 'blockspare') ?>" />

        <h1><?php _e('Blockspare', 'blockspare') ?></h1>
        <h2><?php _e('Beautiful Page Building Blocks for WordPress', 'blockspare') ?></h2>

        <div class="blockspare-separator">
            <svg class="blockspare-separator-double-wave" preserveAspectRatio="none" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1946 175">
                <path class="st0"
                    d="M-.5 27.7v146.8h1946V10.7s-170.6 20.4-265 57.2c0 0-374.1 116.7-794.2 24.7 0 0-414.1-100.9-673.1-92-.1 0-102.9 5.2-213.7 27.1z">
                </path>
                <path class="st1"
                    d="M1945.5 69.9s-425.5-100-888 20.5c0 0-342.6 63.3-611.4 43.8 0 0-224.9-40.3-446.6-84.4V174h1946V69.9z">
                </path>
                <path d="M-.5 88s425.5-100 888 20.5c0 0 342.6 63.3 611.4 43.8 0 0 224.9-20.2 446.6-64.3v87H-.5V88z">
                </path>
            </svg>
        </div>
    </header>
    <section class="blockspare-main-container">
        <article class="blockspare-intro blockspare-section">

            <div class="blockspare-intro-col blockspare-intro-desc">
                <div class="blockspare-common-header-wrapper">
                    <span class="blockspare-subtitle"><?php _e('Amazing Blocks', 'blockspare') ?></span>
                    <h2><?php _e('Envision Amazing Layouts with Blockspare', 'blockspare') ?></h2>
                </div>

                <p><?php _e('Now you have Blockspare for your WordPress editor', 'blockspare') ?></p>
                <ol>
                    <li>
                        <?php _e('Create a new page', 'blockspare') ?>
                    </li>
                    <li>
                        <?php _e('Click on the <span class="plus-btn-svg"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="#222"><path d="M10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm0 16c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7zm1-11H9v3H6v2h3v3h2v-3h3V9h-3V6z"></path></svg></span> button to add a block', 'blockspare') ?>
                    </li>
                    <li>
                        <?php _e('Expand Blockspare panel!', 'blockspare') ?>
                    </li>
                    <li>
                        <?php _e('Select to add and customize a block!', 'blockspare') ?>
                    </li>
                </ol>

                <a href="<?php echo esc_url(admin_url('post-new.php?post_type=page&blockspare_show_intro=true')) ?>"
                    class="blockspare-button"
                    title="<?php esc_attr_e('Try it on New Page', 'blockspare') ?>"><?php _e('Try it on New Page', 'blockspare') ?></a>
                </p>
            </div>
            <div class="blockspare-intro-col blockspare-intro-img">
                <p><img src="<?php echo esc_url(plugins_url('assets/blockspare-adding-blocks.gif', __FILE__)) ?>"
                        alt="<?php esc_attr_e('Adding Blockspare', 'blockspare') ?>" class="blockspare-gif" /></p>
                <p>
            </div>
        </article>
    </section>
    <section class="blockspare-body-container">
        <div class="blockspare-body">

            <article class="blockspare-section blockspare-block-intro">

                <div class="blockspare-common-header-wrapper">
                    <span class="blockspare-subtitle"><?php _e('Enhanced set of Blocks', 'blockspare') ?></span>
                    <h3><?php _e('Start Creating Page using Enhanced set of Blocks in Minutes!', 'blockspare') ?></h3>
                </div>

                <p><?php _e('We design an elegant series of WordPress blocks to help you create the website you always wanted with ease.', 'blockspare') ?>
                </p>
                <!-- We put all the block controls here. -->
                <div class="blockspare-available-blocks-wrapper">
                    <?php
                                $blockspare_blocks = blockspare_admin_blocks_list();
                                if (isset($blockspare_blocks) && !empty($blockspare_blocks)):
                                    foreach ($blockspare_blocks as $block):
                                        $blocks_name = $block['name'];
                                        $icon_url = plugins_url("assets/" .$block['slug'] . "-image.png", __FILE__);
                                        $demo_url = 'https://blockspare.com/block/'.$block['slug'];

                                        ?>
                    <a class="blockspare-explore-btn" href="<?php echo esc_url($demo_url) ?>" target="_blank">
                        <div class="blockspare-available-blocks">

                            <img src="<?php echo esc_attr($icon_url); ?>" alt="<?php echo esc_attr($blocks_name) ?>">
                            <h4>
                                <?php echo esc_attr($blocks_name) ?>
                            </h4>



                        </div>
                    </a>
                    <?php
                                    endforeach;
                                endif;

                                ?>
                </div>
                <div class="blocksparea-all-blocks-button"><a href="https://blockspare.com/" class="blockspare-button"
                        target="_blank"
                        title="<?php esc_attr_e('Explore All Blocks', 'blockspare') ?>"><?php _e('Explore All Blocks', 'blockspare') ?></a>
                </div>
            </article>
            <aside class="blockspare-backward-compatibility-control-wrapper"></aside>
            <?php if (BLOCKSPARE_SHOW_PRO_NOTICES): ?>
            <aside class="blockspare-pro-control-wrapper"></aside>
            <?php endif; ?>
        </div>
        <div class="blockspare-side">

            <div class="blockspare-side-sticky">
                <?php
                        $blockspare_pro = true;
                        if ($blockspare_pro == false ) : ?>
                <aside class="blockspare-section blockspare-premium-section">
                    <h3><?php _e('Blockspare Pro', 'blockspare') ?></h3>
                    <p><?php _e('Want to use Blockspare to build an awesome site with more options and controls? Upgrade to Pro and get:', 'blockspare') ?>
                    </p>
                    <ul class="blockspare-premium-features">
                        <li><?php _e('30+ Custom WordPress Blocks', 'blockspare') ?></li>
                        <li><?php _e('110+ Pre-designed Blocks Layouts', 'blockspare') ?></li>
                        <li><?php _e('Gradient Colors Effects', 'blockspare') ?></li>
                        <li><?php _e('Additional Block Options', 'blockspare') ?></li>
                        <li><?php _e('Rearrangeable Inner Blocks', 'blockspare') ?></li>
                        <li><?php _e('Image Masking Colors Effects and Filters ', 'blockspare') ?></li>
                        <li><?php _e('All Premium Effects', 'blockspare') ?></li>
                        <li><?php _e('Customer Email Support', 'blockspare') ?></li>
                        <li><?php _e('Regular Updates & Premium Support', 'blockspare') ?></li>
                    </ul>
                    </p>
                    <p>
                        <a href="https://blockspare.com/" class="blockspare-button"
                            title="<?php esc_attr_e('Get Blockspare Pro', 'blockspare') ?>"><?php esc_attr_e('Get Blockspare Pro', 'blockspare') ?></a>
                    </p>

                </aside>
                <?php endif; ?>

                <aside class="blockspare-section">
                    <h3><?php _e('Knowledge Base', 'blockspare') ?></h3>
                    <ul class="blockspare-list blockspare-knowledge-base">
                        <li>
                            <h4 class="blockspare-sub-headings">
                                <a href="https://blockspare.com/docs/"><?php esc_html_e('Documentations', 'blockspare') ?>
                                    →</a>
                            </h4>
                            <p><?php esc_html_e('Do you have any difficulties regarding plugin setup and uses? Please visit Documentations page.', 'blockspare') ?>
                            </p>
                        </li>
                        <li>
                            <h4 class="blockspare-sub-headings">
                                <a href="https://blockspare.com/block/"><?php esc_html_e('Demos', 'blockspare') ?> →</a>
                            </h4>
                            <p><?php esc_html_e('We have also designed and displayed multiple type of layouts with Blockspare. For more details please visit our site.', 'blockspare') ?>
                            </p>
                        </li>
                        <li>
                            <h4 class="blockspare-sub-headings">
                                <a href="https://afthemes.com/supports/"><?php esc_html_e('Support', 'blockspare') ?>
                                    →</a>
                            </h4>
                            <p><?php esc_html_e('You directly come upon to our support guys with your valuable queries.', 'blockspare') ?>
                            </p>
                        </li>
                        <li>
                            <h4 class="blockspare-sub-headings">
                                <a href="https://wordpress.org/plugins/blockspare/"><?php esc_html_e('WordPress Support Forum', 'blockspare') ?>
                                    →</a>
                            </h4>
                            <p><?php esc_html_e('You can also go to our .org forum for any kind of support enquiries.', 'blockspare') ?>
                            </p>
                        </li>
                        <li>
                            <h4 class="blockspare-sub-headings">
                                <a href="https://blockspare.com/blog/"><?php esc_html_e('Latest Blog', 'blockspare') ?>
                                    →</a>
                            </h4>
                            <p><?php esc_html_e('Get latest articles about WordPress.', 'blockspare') ?></p>
                        </li>
                    </ul>

                    </p>
                </aside>
            </div>

        </div>
    </section>
</div>
<?php
        }

        /**
         * Adds a marker to remember to redirect after activation.
         * Redirecting right away will not work.
         */
        public static function start_redirect_to_blockspare_page()
        {
            update_option('blockspare_redirect_to_welcome', '1');
        }

        /**
         * Redirect to the welcome screen if our marker exists.
         */
        public function redirect_to_blockspare_page()
        {
            if (get_option('blockspare_redirect_to_welcome')) {
                delete_option('blockspare_redirect_to_welcome');
                wp_redirect(esc_url(admin_url('admin.php?page=blockspare')));
                die();
            }
        }
    }

    new Blockspare_Admin_Dashboard();
}

// Redirect to the welcome screen.
register_activation_hook(BLOCKSPARE_BASE_FILE, array('Blockspare_Admin_Dashboard', 'start_redirect_to_blockspare_page'));