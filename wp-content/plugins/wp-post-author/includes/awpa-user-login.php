<?php
if (!function_exists('awpa_render_block_user_login')) {
    function awpa_render_block_user_login($attributes)
    {
        $blockuniqueclass = '';
        $unq_class = mt_rand(100000, 999999);
        if (!empty($attributes['uniqueClass'])) {
            $blockuniqueclass = $attributes['uniqueClass'] . ' ';
        } else {
            $blockuniqueclass = 'awpa-' . $unq_class . ' ';
        }
        ob_start(); ?>
        <div class=<?php echo esc_attr($blockuniqueclass); ?>>

            <div class='awpa-loginfrom-wrap'>
                <?php if (isset($attributes['enableBgImage']) && $attributes['enableBgImage'] && $attributes['imgURL']) { ?>
                    <div class="awpa-block-img" style="background-image: url(<?php echo esc_url($attributes['imgURL']) ?>);">
                    </div>
                <?php } ?>
                <h4><?php echo esc_html($attributes['formTitle']); ?></h4>
                <?php echo awpa_login_form_common($attributes);
                echo awpa_login_form_styles($blockuniqueclass, $attributes);
                ?>
            </div>
        </div>
    <?php

        return   ob_get_clean();
    }
}

if (!function_exists('awpa_register_block_user_login')) {
    function awpa_register_block_user_login()
    {
        if (!function_exists('register_block_type')) {
            return;
        }
        ob_start();
        include AWPA_PLUGIN_DIR . 'assets/user-login-block.json';
        $metadata = json_decode(ob_get_clean(), true);
        /* Block attributes */
        register_block_type(
            'awpa/user-login',
            array(
                'attributes' => $metadata['attributes'],
                'render_callback' => 'awpa_render_block_user_login',
            )
        );
    }
    add_action('init', 'awpa_register_block_user_login');
}
if (!function_exists('awpa_login_form_styles')) {
    function awpa_login_form_styles($blockuniqueclass, $attributes)
    {

        $block_content = '';
        $block_content .= '<style type="text/css">';

        //Title
        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap h4{
                color:' . awpa_esc_custom_style($attributes['formTitleColor']) . ';

                }';
        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap{
                background-color:' . awpa_esc_custom_style($attributes['formBgColor']) . ';
                text-align:' . awpa_esc_custom_style($attributes['sectionAlignment']) . ';
                border-radius:' . awpa_esc_custom_style($attributes['borderRadius']) . "px" . ';
                padding-top:' . awpa_esc_custom_style($attributes['paddingTop']) . 'px;
                padding-right:' . awpa_esc_custom_style($attributes['paddingRight']) . 'px;
                padding-bottom:' . awpa_esc_custom_style($attributes['paddingBottom']) . 'px;
                padding-left:' . awpa_esc_custom_style($attributes['paddingLeft']) . 'px;

                }';

        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap label{
                color:' . awpa_esc_custom_style($attributes['labelColor']) . ';
                }';

        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap .input{
                    border-radius:' . awpa_esc_custom_style($attributes['inputBorderRadius']) . "px" . ';
                    }';
        //Input Shadow

        if ($attributes['inputBoxShadow']) {
            $block_content .= ' .' . $blockuniqueclass . '  .awpa-loginfrom-wrap .input{
                        box-shadow: ' . awpa_esc_custom_style($attributes['inputxOffset']) . 'px ' . awpa_esc_custom_style($attributes['inputyOffset']) . 'px ' . awpa_esc_custom_style($attributes['inputblur']) . 'px ' . awpa_esc_custom_style($attributes['inputspread']) . 'px ' . awpa_esc_custom_style($attributes['inputshadowColor']) . ';
                        }';
        }

        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap form input[type="submit"].button{
                background-color:' . awpa_esc_custom_style($attributes['btnBgcolor']) . ';
                border-radius:' . awpa_esc_custom_style($attributes['btnRadius']) . "px" . ';
                color:' . awpa_esc_custom_style($attributes['btnTextColor']) . ';
                }';

        //Fonts
        //Title
        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap h4{
                font-size: ' . awpa_esc_custom_style($attributes['titleFontSize']) . awpa_esc_custom_style($attributes['titleFontSizeType']) . ';
                ' . awpacheckFontfamily($attributes['titleFontFamily']) . ';
                font-weight: ' . awpa_esc_custom_style($attributes['titleFontWeight']) . ';
                 }';

        $block_content .= '@media (max-width: 1025px) { ';
        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap h4{
                font-size: ' . awpa_esc_custom_style($attributes['titleTabletForntSize']) . awpa_esc_custom_style($attributes['titleFontSizeType']) . ';
                }';

        $block_content .= '}';
        $block_content .= '@media (max-width: 768px) { ';
        $block_content .= ' .' . $blockuniqueclass . '.awpa-loginfrom-wrap h4{
                font-size: ' . awpa_esc_custom_style($attributes['titleMobileForntSize']) . awpa_esc_custom_style($attributes['titleFontSizeType']) . ';
                }';

        $block_content .= '}';
        //End Title

        //lable
        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap label{
                font-size: ' . awpa_esc_custom_style($attributes['labelFontSize']) . awpa_esc_custom_style($attributes['labelFontSizeType']) . ';
                ' . awpacheckFontfamily($attributes['labelFontFamily']) . ';
                font-weight: ' . awpa_esc_custom_style($attributes['labelFontWeight']) . ';
                 }';

        $block_content .= '@media (max-width: 1025px) { ';
        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap label{
                font-size: ' . awpa_esc_custom_style($attributes['labelTabletForntSize']) . awpa_esc_custom_style($attributes['labelFontSizeType']) . ';
                }';

        $block_content .= '}';
        $block_content .= '@media (max-width: 768px) { ';
        $block_content .= ' .' . $blockuniqueclass . '.awpa-loginfrom-wrap label{
                font-size: ' . awpa_esc_custom_style($attributes['labelMobileForntSize']) . awpa_esc_custom_style($attributes['labelFontSizeType']) . ';
                }';

        $block_content .= '}';
        //End label

        //btn
        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap form input[type="submit"].button{
                font-size: ' . awpa_esc_custom_style($attributes['btnFontSize']) . awpa_esc_custom_style($attributes['btnFontSizeType']) . ';
                ' . awpacheckFontfamily($attributes['btnFontFamily']) . ';
                font-weight: ' . awpa_esc_custom_style($attributes['btnFontWeight']) . ';
                 }';

        $block_content .= '@media (max-width: 1025px) { ';
        $block_content .= ' .' . $blockuniqueclass . ' .awpa-loginfrom-wrap form input[type="submit"].button{
                font-size: ' . awpa_esc_custom_style($attributes['btnTabletForntSize']) . awpa_esc_custom_style($attributes['btnFontSizeType']) . ';
                }';

        $block_content .= '}';
        $block_content .= '@media (max-width: 768px) { ';
        $block_content .= ' .' . $blockuniqueclass . '.awpa-loginfrom-wrap form input[type="submit"].button{
                font-size: ' . awpa_esc_custom_style($attributes['btnMobileForntSize']) . awpa_esc_custom_style($attributes['btnFontSizeType']) . ';
                }';

        $block_content .= '}';
        //End btn

        //Box Shadow
        if ($attributes['enableBoxShadow']) {
            $block_content .= ' .' . $blockuniqueclass . '  .awpa-loginfrom-wrap{
                    box-shadow: ' . awpa_esc_custom_style($attributes['xOffset']) . 'px ' . awpa_esc_custom_style($attributes['yOffset']) . 'px ' . awpa_esc_custom_style($attributes['blur']) . 'px ' . awpa_esc_custom_style($attributes['spread']) . 'px ' . awpa_esc_custom_style($attributes['shadowColor']) . ';
                    }';
        }
        $block_content .= '</style>';
        return $block_content;
    }
}
if (!function_exists('awpacheckFontfamily')) {
    function awpacheckFontfamily($fontFamily)
    {

        $fonts = '';
        if ($fontFamily != 'Default' && $fontFamily != "undefined") {
            $fonts =  'font-family:' . awpa_esc_custom_style($fontFamily);
        }
        return $fonts;
    }
}


if (!function_exists('awpa_login_form_common')) {
    function awpa_login_form_common($attributes)
    {


        $obj_id = get_queried_object_id();
        $current_url = get_permalink($obj_id);

        $form_data = '';

        if (is_user_logged_in()) {
            $current_user = wp_get_current_user();
            $user_name = $current_user->display_name;
            $form_data .= '<div class="awap-logout">
            <p>' . __('Hello ', 'wp-post-author') . $user_name . '<div class="logout_user"> ' . __('You are already logged in', "wp-post-author") . ' 
            </div></p>
            <p><a id="wp-submit" class="logout" href="' . wp_logout_url($current_url) . '" title="Logout">' . __('Logout', "wp-post-author") . '</a>
            </p>
            </div>';
        } else {
            $args = array(
                'echo'           => false,
                'redirect'       =>  $current_url,
                'label_log_in'   => $attributes['btnText'],
                'form_id'        => 'awpa-user-login',
                'label_username' => __('Username', 'wp-post-author'),
                'label_password' => __('Password', 'wp-post-author'),
                'label_remember' => __('Remember Me', 'wp-post-author'),
                'id_username'    => 'user_login',
                'id_password'    => 'user_pass',
                'id_submit'      => 'wp-submit',
                'remember'       => true,
                'value_username' => NULL,
                'value_remember' => true
            );

            $form_data .=  wp_login_form($args);
        }
        return $form_data;
    }
}



if (!function_exists('awpa_user_login_shortcodes')) {
    add_shortcode('awpa-user-login', 'awpa_user_login_shortcodes');

    function awpa_user_login_shortcodes($atts)
    {

        $awpa = shortcode_atts(array(
            'title' => __('User Login Form', 'wp-post-author'),
            'button_text' => __('Submit', 'wp-post-author')
        ), $atts);
        $btnText = !empty($awpa['button_text']) ? esc_attr($awpa['button_text']) : '';
        $title = isset($awpa['title']) ? esc_attr($awpa['title']) : '';
        $obj_id = get_the_ID();
        $current_url = get_permalink($obj_id);
        $args = array(
            'echo'           => true,
            'remember'       => true,
            'redirect'       => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
            'form_id'        => 'awpa-user-login',
            'label_log_in' => $btnText,
            'label_username' => __('Username', 'wp-post-author'),
            'label_password' => __('Password', 'wp-post-author'),
            'label_remember' => __('Remember Me', 'wp-post-author'),
            'id_username'    => 'user_login',
            'id_password'    => 'user_pass',
            'id_submit'      => 'wp-submit',            
            'value_username' => NULL,
            'value_remember' => true
        );

        ob_start();
    ?>
        <div class='awpa-loginfrom-wrap'>
            <?php
            if (is_user_logged_in()) {
                $current_user = wp_get_current_user();
                $user_name = $current_user->display_name; ?>
                <div class="awap-logout">
                    <p><?php _e('Hello ', 'wp-post-author'); ?>
                        <?php echo esc_html($user_name); ?>
                    <div class="logout_user">
                        <?php _e('You are already logged in', "wp-post-author"); ?>
                    </div>
                    </p>
                    <p>
                        <a id="wp-submit" class="logout" href="<?php echo esc_url(wp_logout_url($current_url)) ?>" title="Logout"><?php _e('Logout', 'wp-post-author'); ?></a>
                    </p>
                </div>
            <?php
            } else { ?>
                <h2><?php echo esc_html($title); ?></h2>
            <?php wp_login_form($args);
            } ?>
        </div>
<?php
        return ob_get_clean();
    }
}

add_action('login_form_bottom', 'awpa_add_lost_password_link');
function awpa_add_lost_password_link()
{
    $form_data = '<p class="login-forget-password"><a href="' . esc_url(wp_lostpassword_url(get_home_url())) . '">' . __('Forget Password', 'wp-post-author') . '</a></p>';
    return $form_data;
}

if (!function_exists('awpa_esc_custom_style(')) {

    function awpa_esc_custom_style($props)
    {
        return wp_kses($props, array("\'", '\"'));
    }
}