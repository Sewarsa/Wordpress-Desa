/* global evf_setup_params */
jQuery( function( $ ) {

    $('.aftc_btn_import').on('click',function(){
					
        $(this).parent('.aftaftc__gl-item-btn-wrap').find('.aftc_modal').css('display','block');
        })
        $('.aftc_close').on('click',function(){
            $(this).parents('.aftc_modal').css('display','none');
        })


    jQuery('.aftc-activate-plugin').on('click', function(e){
        e.preventDefault();

        $(this).hide(); 
        $('.aftc-final-msg').html();
        var plugins =  $(this).attr('data-slugs');

        var plugin_slugs = JSON.parse(plugins);
        

        //the ajax begins now
        jQuery.ajax({
            type: 'POST',
            url: aftc.ajax_url,
            data: {action: 'aftc_install_activate_plugins',btnData:plugin_slugs,security:aftc.ajax_nonce},
            beforeSend: function(){
                $(".af-spiner-loader").show();
            },
            success: function(response){
                if(response == 'success'){

                    $(".af-spiner-loader").hide();
                    $('.aftc_require_plugins').hide();
                    $('.af-final-message').show();
                    $('.js-aftc-gl-import-data').show();
                }
            },
            error: function(MLHttpRequest, textStatus, errorThrown){
                console.log(errorThrown);
            }
        });

    });
});
