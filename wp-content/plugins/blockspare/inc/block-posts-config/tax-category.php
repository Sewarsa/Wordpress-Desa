<?php
if(!function_exists('blockspare_get_cat_tax_tags')){
    function blockspare_get_cat_tax_tags ($taxType,$post_id){
        
        
                $categories_list = get_the_category_list(' ', '', $post_id);
                    if ( $categories_list ) {
                                    /* translators: 1: list of categories. */
                            printf(  esc_html__( '%1$s', 'blockspare' ), $categories_list ); // WPCS: XSS OK.
                        }
        
        
        // if($taxType =='post_tag'){
        //     $tag_lists = get_the_tag_list(' ', '', $post_id);
        //         if ( $tag_lists ) {
        //                         /* translators: 1: list of categories. */
        //                 printf(  esc_html__( '%1$s', 'blockspare' ), $tag_lists ); // WPCS: XSS OK.
        //             }
        // }
        
        /*
            $terms = get_the_terms($post_id , $taxType );
                if($terms){
                    foreach($terms  as $trem){ ?>
                        <a herf="" ><?php echo $trem->name; ?></a> 
                      <?php 
                    }
                }
                */
        
    }
}