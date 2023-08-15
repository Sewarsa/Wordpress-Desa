<?php
    
    //Exit if directly acess
    defined('ABSPATH') or die('No script kiddies please!');

    
    function magic_content_box_lite_block_assets()
    {
        
       
        wp_enqueue_style(
            'magic-content-box-blocks-fontawesome-front',
            plugins_url('src/assets/fontawesome/css/all.css', dirname(__FILE__)),
            array(),
            filemtime(plugin_dir_path(__FILE__) . 'assets/fontawesome/css/all.css')
        );
        // Load the compiled styles.
        wp_enqueue_style(
            'magic-content-box-frontend-block-style-css',
            plugins_url('dist/blocks.style.build.css', dirname(__FILE__)),
            array()
        );
        
        
        
    }
    
    add_action('init', 'magic_content_box_lite_block_assets');
    
    if (!function_exists('magic_content_box_lite_create_block')) {
        
        
        function magic_content_box_lite_create_block()
        {
            
            // Register our block script with WordPress
            wp_enqueue_script(
                'magic-content-box-lite-blocks-block-js',
                MAGIC_CONTENT_BOX_LITE_PLUGIN_URL . 'dist/blocks.build.js',
                array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor')
            );
            
            
            // Register our block's editor-specific CSS
            if (is_admin()) :
                wp_enqueue_style(
                    'magic-content-box-lite-block-edit-style',
                    MAGIC_CONTENT_BOX_LITE_PLUGIN_URL . 'dist/blocks.editor.build.css',
                    array('wp-edit-blocks')
                );
            endif;
    
    
            wp_enqueue_style(
                'magic-content-box-lite-blocks-fontawesome',
                plugins_url('src/assets/fontawesome/css/all.css', dirname(__FILE__)),
                array(),
                filemtime(plugin_dir_path(__FILE__) . 'assets/fontawesome/css/all.css')
            );
            
            
            
            wp_localize_script(
                'magic-content-box-lite-blocks-block-js',
                'magic_content_box_lite_globals',
                array(
                    'srcUrl' => untrailingslashit(plugins_url('/', MAGIC_CONTENT_BOX_LITE_BASE_DIR . '/dist/')),
                    'rest_url' => esc_url(rest_url()),
                )
            );
        }
        
        add_action('enqueue_block_editor_assets', 'magic_content_box_lite_create_block');
        
    }
    
    
    add_filter( 'block_categories', 'magic_content_box_lite_blocks_add_custom_block_category' );
    /**
     * Adds the Magic content  Blocks block category.
     *
     * @param array $categories Existing block categories.
     *
     * @return array Updated block categories.
     */
    function magic_content_box_lite_blocks_add_custom_block_category( $categories ) {
        return array_merge(
            $categories,
            array(
                array(
                    'slug'  => 'magic-content-box',
                    'title' => esc_html__( 'Magic Content Box lite', 'magic-content-box-lite' ),
                ),
            )
        );
    }

   