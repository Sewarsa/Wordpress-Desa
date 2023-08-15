<?php 


    function blockspare_banner_two_render_block($attributes){
        ob_start();
        $unq_class = mt_rand(100000,999999);
        $blockuniqueclass = '';
        
        if(!empty($attributes['uniqueClass'])){
            $blockuniqueclass = $attributes['uniqueClass'];
        }else{
            $blockuniqueclass = 'blockspare-posts-block-list-'.$unq_class;
        }

        $desingParmeter = $attributes['bannerTwoLayout'];
        
        // $numOfSlides = 1;
        // if ($attributes['align'] == 'center' || $attributes['align'] == '') {
        //     $numOfSlides = 1;
        // }
        // else if ($attributes['align'] == 'full') {
        //     $numOfSlides = 2;
        // }
        $numOfSlides = $attributes['numberofSlideTrending'];

        $animation_class  = '';
            if( $attributes['animation']){
                $animation_class='blockspare-block-animation';
            }
        $alignclass = blockspare_checkalignment($attributes['align']);

        ?>
        <div class='<?php  echo esc_attr($blockuniqueclass);?> align<?php echo esc_attr($alignclass) ?>'>
            <div class='<?php echo esc_attr( $animation_class ) ?> blockspare-banner-wrapper blockspare-banner-2-main-wrapper <?php echo esc_attr($attributes['bannerTwoLayout']) ?> <?php echo esc_attr($attributes['blockHoverEffect']) ?>' blockspare-animation=<?php echo esc_attr( $attributes['animation'] )?>>
                <div class='blockspare-banner-col-wrap'>

                    
                    <div class="blockspare-banner-trending-wrap">
                        <?php
                                    blockspare_get_slider_template($attributes);
                                    // blocspare_get_trending_template($attributes,$desingParmeter,$numOfSlides);
                                    ?>
                    </div>
                    <?php blocspare_get_editor_template($attributes, '4', 'banner-2');?>
                    
                </div>
            </div>
        </div>
            <?php   
            $blockName = 'blockspare-banner-2'; 
            $data_content =  banner_control_slider($attributes,$blockuniqueclass ,$blockName );
            $data_content .= ob_get_clean();
            return $data_content;     
    }
    /**
     * Registers banner one on server
     */
    function blockspare_banner_two_register_block()
    {
    
        if (!function_exists('register_block_type')) {
            return;
        }
    
    
        ob_start();
         include BLOCKSPARE_PLUGIN_DIR . 'inc/post-banner/block.json';
         
        $metadata = json_decode(ob_get_clean(), true);

        $new_attributes['trendingDisplayPostCategory'] = array(
            "type"=>"boolean",
            "default"=>true
        );

        $new_attributes['numberofSlideTrending'] = array(
            "type"=>"number",
            "default"=>1
        );

        $attributes = array_merge($metadata['attributes'],$new_attributes);
       

        
        /* Block attributes */
        register_block_type(
            'blockspare/blockspare-banner-2',
            array(
                'attributes' =>$attributes,
                'render_callback' => 'blockspare_banner_two_render_block',
            )
        );
    }
    
    add_action('init', 'blockspare_banner_two_register_block');


    