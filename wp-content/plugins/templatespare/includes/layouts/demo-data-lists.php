<?php
function  templatespare_templates_demo_list($single_demo = ''){

    $demos = array();
   
    $demos['covernews'] = array(
        'free' => 'covernews',
        'premium' => 'covernews-pro',
        'demodata' => array(
            array(
                'slug' => 'covernews',
                'title' => 'CoverNews',
                'subtitle' => 'CoverNews',
                'url' => 'https://demos.afthemes.com/covernews/',
                'tags' => array('free', 'magazine', 'news'),
               
            ),
            array(
                'slug' => 'sport',
                'title' => 'CoverNews',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/covernews/sport/',
                'tags' => array('free', 'magazine', 'sport'),
               
            ),
            array(
                'slug' => 'fashion',
                'title' => 'CoverNews',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/covernews/fashion/',
                'tags' => array('free', 'magazine', 'fashion'),
            ),
            array(
                'slug' => 'general',
                'title' => 'CoverNews',
                'subtitle' => 'General',
                'url' => 'https://demos.afthemes.com/covernews/general/',
                'tags' => array('free', 'magazine', 'general', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'music',
                'title' => 'CoverNews',
                'subtitle' => 'Music',
                'url' => 'https://demos.afthemes.com/covernews/music/',
                'tags' => array('free', 'magazine', 'blog', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'vegetables',
                'title' => 'CoverNews',
                'subtitle' => 'Vegetables',
                'url' => 'https://demos.afthemes.com/covernews/vegetables/',
                'tags' => array('free', 'magazine', 'blog', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'ornament',
                'title' => 'CoverNews',
                'subtitle' => 'Ornament',
                'url' => 'https://demos.afthemes.com/covernews/ornament/',
                'tags' => array('free', 'magazine', 'blog', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'covid',
                'title' => 'CoverNews',
                'subtitle' => 'Covid',
                'url' => 'https://demos.afthemes.com/covernews/covid/',
                'tags' => array('free', 'magazine', 'covid', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'CoverNews',
                'subtitle' => 'Crypto News',
                'url' => 'https://demos.afthemes.com/covernews/crypto-news/',
                'tags' => array('free', 'magazine', 'crypto',)
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'CoverNews',
                'subtitle' => 'Arabic News',
                'url' => 'https://demos.afthemes.com/covernews/arabic-news/',
                'tags' => array('free', 'magazine', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'CoverNews',
                'subtitle' => 'China News',
                'url' => 'https://demos.afthemes.com/covernews/china-news/',
                'tags' => array('free', 'magazine', 'chinense')
            ),
            array(
                'slug' => 'newsment',
                'title' => 'CoverNews',
                'subtitle' => 'Newsment',
                'url' => 'https://demos.afthemes.com/covernews/newsment/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'newscover',
                'title' => 'CoverNews',
                'subtitle' => 'NewsCover',
                'url' => 'https://demos.afthemes.com/covernews/newscover/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'coverstory',
                'title' => 'CoverNews',
                'subtitle' => 'CoverStory',
                'url' => 'https://demos.afthemes.com/covernews/coverstory/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'hardnews',
                'title' => 'CoverNews',
                'subtitle' => 'HardNews',
                'url' => 'https://demos.afthemes.com/covernews/hardnews/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'newsquare',
                'title' => 'CoverNews',
                'subtitle' => 'NewsQuare',
                'url' => 'https://demos.afthemes.com/covernews/newsquare/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'newswords',
                'title' => 'CoverNews',
                'subtitle' => 'NewsWords',
                'url' => 'https://demos.afthemes.com/covernews/newswords/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'daily-newscast',
                'title' => 'CoverNews',
                'subtitle' => 'Daily Newscast',
                'url' => 'https://demos.afthemes.com/covernews/daily-newscast/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'newsport',
                'title' => 'CoverNews',
                'subtitle' => 'Newsport',
                'url' => 'https://demos.afthemes.com/covernews/newsport/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'covermag',
                'title' => 'CoverNews',
                'subtitle' => 'Covermag',
                'url' => 'https://demos.afthemes.com/covernews/covermag/',
                'tags' => array('free', 'magazine', 'child')
            )


        )
    );

    $demos['covernews-pro'] = array(
        'free' => 'covernews',
        'premium' => 'covernews-pro',
        'demodata' => array(
            array(
                'slug' => 'covernews',
                'title' => 'CoverNews Pro',
                'subtitle' => 'CoverNews Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/',
                'tags' => array('pro', 'magazine', 'general')
            ),
            array(
                'slug' => 'sport',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/sport/',
                'tags' => array('pro', 'magazine', 'sport')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),

            array(
                'slug' => 'classic',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Classic Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/classic/',
                'tags' => array('pro', 'magazine', 'news')
            ),


            array(
                'slug' => 'travel',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Travel Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/travel/',
                'tags' => array('pro', 'magazine', 'travel')
            ),

            array(
                'slug' => 'wedding',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Wedding Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/wedding/',
                'tags' => array('pro', 'magazine', 'blog')
            ),


            array(
                'slug' => 'minimal',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Minimal Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/minimal/',
                'tags' => array('pro', 'magazine', 'minimal')
            ),
            array(
                'slug' => 'gadgets',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Gadgets Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/gadgets/',
                'tags' => array('pro', 'gadget', 'tech')
            ),

            array(
                'slug' => 'business',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Business Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/business/',
                'tags' => array('pro', 'magazine', 'business')
            ),

            array(
                'slug' => 'top-news',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Top News Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/top-news/',
                'tags' => array('pro', 'magazine', 'news')
            ),

            array(
                'slug' => 'online-news',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Online News Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/online-news/',
                'tags' => array('pro', 'magazine', 'news')
            ),

            array(
                'slug' => 'general-news',
                'title' => 'CoverNews Pro',
                'subtitle' => 'General News Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/general-news/',
                'tags' => array('pro', 'magazine', 'general')
            ),

            array(
                'slug' => 'beauty-mag',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Beauty Mag Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/beauty-mag/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),

            array(
                'slug' => 'athletics-mag',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Athletics Mag Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/athletics-mag/',
                'tags' => array('pro', 'magazine', 'sport')
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Crypto News Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/crypto-news/',
                'tags' => array('pro', 'magazine', 'crypto')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'CoverNews Pro',
                'subtitle' => 'Arabic News Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/arabic-news/',
                'tags' => array('pro', 'magazine', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'CoverNews Pro',
                'subtitle' => 'China News Pro',
                'url' => 'https://demos.afthemes.com/covernews-pro/china-news/',
                'tags' => array('pro', 'magazine', 'chinense')
            )

        )
    );

    $demos['darknews'] = array(
        'free' => 'darknews',
        'premium' => 'darknews-pro',
        'demodata' => array(
            array(
                'slug' => 'darknews',
                'title' => 'DarkNews',
                'subtitle' => 'DarkNews',
                'url' => 'https://demos.afthemes.com/darknews/',
                'tags' => array('free', 'news', 'dark')
            ),

            array(
                'slug' => 'light',
                'title' => 'DarkNews',
                'subtitle' => 'Light',
                'url' => 'https://demos.afthemes.com/darknews/light/',
                'tags' => array('free', 'magazine', 'light')
            ),

            array(
                'slug' => 'sport',
                'title' => 'DarkNews',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/darknews/sport/',
                'tags' => array('free', 'news', 'sport')
            ),

            array(
                'slug' => 'fashion',
                'title' => 'DarkNews',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/darknews/fashion/',
                'tags' => array('free', 'magazine', 'fashion')
            ),

            array(
                'slug' => 'gaming',
                'title' => 'DarkNews',
                'subtitle' => 'Gaming',
                'url' => 'https://demos.afthemes.com/darknews/gaming/',
                'tags' => array('free', 'game', 'tech')
            ),

            array(
                'slug' => 'classic',
                'title' => 'DarkNews',
                'subtitle' => 'Classic',
                'url' => 'https://demos.afthemes.com/darknews/classic/',
                'tags' => array('free', 'classic', 'general')
            ),
            array(
                'slug' => 'gym',
                'title' => 'DarkNews',
                'subtitle' => 'Gym',
                'url' => 'https://demos.afthemes.com/darknews/gym/',
                'tags' => array('free', 'elementor', 'blog'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'business',
                'title' => 'DarkNews',
                'subtitle' => 'Business',
                'url' => 'https://demos.afthemes.com/darknews/business/',
                'tags' => array('free', 'elementor', 'business'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'retro-blog',
                'title' => 'DarkNews',
                'subtitle' => 'Retro Blog',
                'url' => 'https://demos.afthemes.com/darknews/retro-blog/',
                'tags' => array('free', 'elementor', 'blog'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'tech-blog',
                'title' => 'DarkNews',
                'subtitle' => 'Tech Blog',
                'url' => 'https://demos.afthemes.com/darknews/tech-blog/',
                'tags' => array('free', 'elementor', 'blog'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'restaurant-blog',
                'title' => 'DarkNews',
                'subtitle' => 'Restaurant Blog',
                'url' => 'https://demos.afthemes.com/darknews/restaurant-blog/',
                'tags' => array('free', 'elementor', 'blog', 'food'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'DarkNews',
                'subtitle' => 'Crypto News',
                'url' => 'https://demos.afthemes.com/darknews/crypto-news/',
                'tags' => array('free', 'magazine', 'crypto')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'DarkNews',
                'subtitle' => 'Arabic News',
                'url' => 'https://demos.afthemes.com/darknews/arabic-news/',
                'tags' => array('free', 'news', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'DarkNews',
                'subtitle' => 'China News',
                'url' => 'https://demos.afthemes.com/darknews/china-news/',
                'tags' => array('free', 'news', 'chinense')
            ),
            array(
                'slug' => 'splashnews',
                'title' => 'DarkNews',
                'subtitle' => 'SplashNews',
                'url' => 'https://demos.afthemes.com/darknews/splashnews/',
                'tags' => array('free', 'magazine', 'child')
            )


        )
    );

    $demos['darknews-pro'] = array(
        'free' => 'darknews',
        'premium' => 'darknews-pro',
        'demodata' => array(
            array(
                'slug' => 'darknews',
                'title' => 'DarkNews Pro',
                'subtitle' => 'DarkNews Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/',
                'tags' => array('pro', 'magazine', 'news')
            ),

            array(
                'slug' => 'light',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Light Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/light/',
                'tags' => array('pro', 'magazine', 'light')
            ),


            array(
                'slug' => 'fashion',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),

            array(
                'slug' => 'classic',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Classic Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/classic/',
                'tags' => array('pro', 'classic', 'news')
            ),

            array(
                'slug' => 'fitness',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Fitness Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/fitness/',
                'tags' => array('pro', 'fitness', 'sport')
            ),

            array(
                'slug' => 'sport',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/sport/',
                'tags' => array('pro', 'news', 'sport')
            ),

            array(
                'slug' => 'gaming',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Gaming Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/gaming/',
                'tags' => array('pro', 'game', 'sport')
            ),

            array(
                'slug' => 'travel',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Travel Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/travel/',
                'tags' => array('pro', 'travel', 'blog')
            ),

            array(
                'slug' => 'recipe',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Recipe Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/recipe/',
                'tags' => array('pro', 'food', 'blog')
            ),

            array(
                'slug' => 'gadgets',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Gadgets Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/gadgets/',
                'tags' => array('pro', 'tech', 'gadget', 'business')
            ),

            array(
                'slug' => 'automobile',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Automobile Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/automobile/',
                'tags' => array('pro', 'automobile', 'business')
            ),

            array(
                'slug' => 'business',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Business Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/business/',
                'tags' => array('pro', 'business', 'general')
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Crypto News Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/crypto-news/',
                'tags' => array('pro', 'magazine', 'crypto')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'DarkNews Pro',
                'subtitle' => 'Arabic News Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/arabic-news/',
                'tags' => array('pro', 'news', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'DarkNews Pro',
                'subtitle' => 'China News Pro',
                'url' => 'https://demos.afthemes.com/darknews-pro/china-news/',
                'tags' => array('pro', 'chinense', 'general')
            )
        )
    );

    $demos['elegant-magazine'] = array(
        'free' => 'elegant-magazine',
        'premium' => 'elegant-magazine-pro',
        'demodata' => array(
            array(
                'slug' => 'elegant-magazine',
                'title' => 'Elegant Magazine',
                'subtitle' => 'Elegant Magazine',
                'url' => 'https://demos.afthemes.com/elegant-magazine',
                'tags' => array('free', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'newsportal',
                'title' => 'Elegant Magazine',
                'subtitle' => 'News Portal',
                'url' => 'https://demos.afthemes.com/elegant-magazine/newsportal',
                'tags' => array('free', 'news', 'magazine')
            ),

            array(
                'slug' => 'minimal',
                'title' => 'Elegant Magazine',
                'subtitle' => 'Minimal Magazine',
                'url' => 'https://demos.afthemes.com/elegant-magazine/minimal',
                'tags' => array('free', 'minimal', 'blog')
            ),
            array(
                'slug' => 'architecture-and-interior',
                'title' => 'Elegant Magazine',
                'subtitle' => 'Architecture & Interior',
                'url' => 'https://demos.afthemes.com/elegant-magazine/architecture-and-interior',
                'tags' => array('free', 'interior', 'business')
            ),

            array(
                'slug' => 'travel-blog',
                'title' => 'Elegant Magazine',
                'subtitle' => 'Travel Blog',
                'url' => 'https://demos.afthemes.com/elegant-magazine/travel-blog',
                'tags' => array('free', 'travel', 'blog')
            ),
            array(
                'slug' => 'daily-magazine',
                'title' => 'Elegant Magazine',
                'subtitle' => 'Daily Magazine',
                'url' => 'https://demos.afthemes.com/elegant-magazine/daily-magazine',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'magnificent-blog',
                'title' => 'Elegant Magazine',
                'subtitle' => 'Magnificent Blog',
                'url' => 'https://demos.afthemes.com/elegant-magazine/magnificent-blog',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'vivacious-magazine',
                'title' => 'Elegant Magazine',
                'subtitle' => 'Vivacious Magazine',
                'url' => 'https://demos.afthemes.com/elegant-magazine/vivacious-magazine',
                'tags' => array('free', 'magazine', 'child')
            )


        )
    );

    $demos['elegant-magazine-pro'] = array(
        'free' => 'elegant-magazine',
        'premium' => 'elegant-magazine-pro',
        'demodata' => array(
            array(
                'slug' => 'elegant-magazine',
                'title' => 'Elegant Magazine Pro',
                'subtitle' => 'Elegant Magazine Pro',
                'url' => 'https://demos.afthemes.com/elegant-magazine-pro',
                'tags' => array('pro', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'newsportal',
                'title' => 'Elegant Magazine Pro',
                'subtitle' => 'News Portal Pro',
                'url' => 'https://demos.afthemes.com/elegant-magazine-pro/newsportal',
                'tags' => array('pro', 'general', 'news')
            ),

            array(
                'slug' => 'daily-magazine',
                'title' => 'Elegant Magazine Pro',
                'subtitle' => 'Daily Magazine Pro',
                'url' => 'https://demos.afthemes.com/elegant-magazine-pro/daily-magazine',
                'tags' => array('pro', 'news', 'magazine')
            ),

            array(
                'slug' => 'minimal',
                'title' => 'Elegant Magazine Pro',
                'subtitle' => 'Minimal Magazine Pro',
                'url' => 'https://demos.afthemes.com/elegant-magazine-pro/minimal',
                'tags' => array('pro', 'minimal', 'blog')
            ),
            array(
                'slug' => 'architecture-and-interior',
                'title' => 'Elegant Magazine Pro',
                'subtitle' => 'Architecture & Interior Pro',
                'url' => 'https://demos.afthemes.com/elegant-magazine-pro/architecture-and-interior',
                'tags' => array('pro', 'interior', 'business')
            ),

            array(
                'slug' => 'travel-blog',
                'title' => 'Elegant Magazine Pro',
                'subtitle' => 'Travel Blog Pro',
                'url' => 'https://demos.afthemes.com/elegant-magazine-pro/travel-blog',
                'tags' => array('pro', 'blog', 'travel')
            ),

            array(
                'slug' => 'photography',
                'title' => 'Elegant Magazine Pro',
                'subtitle' => 'Photography Pro',
                'url' => 'https://demos.afthemes.com/elegant-magazine-pro/photography',
                'tags' => array('pro', 'photography', 'blog')
            )


        )
    );

    $demos['enternews'] = array(
        'free' => 'enternews',
        'premium' => 'enternews-pro',
        'demodata' => array(
            array(
                'slug' => 'enternews',
                'title' => 'EnterNews',
                'subtitle' => 'EnterNews',
                'url' => 'https://demos.afthemes.com/enternews/',
                'tags' => array('free', 'magazine', 'news')
            ),

            array(
                'slug' => 'sport',
                'title' => 'EnterNews',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/enternews/sport/',
                'tags' => array('free', 'news', 'sport')
            ),

            array(
                'slug' => 'dark',
                'title' => 'EnterNews',
                'subtitle' => 'Dark',
                'url' => 'https://demos.afthemes.com/enternews/dark/',
                'tags' => array('free', 'dark', 'general')
            ),

            array(
                'slug' => 'recipe',
                'title' => 'EnterNews',
                'subtitle' => 'Recipe',
                'url' => 'https://demos.afthemes.com/enternews/recipe/',
                'tags' => array('free', 'food', 'blog')
            ),

            array(
                'slug' => 'fashion',
                'title' => 'EnterNews',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/enternews/fashion/',
                'tags' => array('free', 'news', 'fashion')
            ),


            array(
                'slug' => 'classic',
                'title' => 'EnterNews',
                'subtitle' => 'Classic',
                'url' => 'https://demos.afthemes.com/enternews/classic/',
                'tags' => array('free', 'classic', 'news')
            ),
            array(
                'slug' => 'beauty',
                'title' => 'EnterNews',
                'subtitle' => 'Beauty',
                'url' => 'https://demos.afthemes.com/enternews/beauty/',
                'tags' => array('free', 'fashion', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'EnterNews',
                'subtitle' => 'Crypto News',
                'url' => 'https://demos.afthemes.com/enternews/crypto-news/',
                'tags' => array('free', 'crypto', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'lifestyle',
                'title' => 'EnterNews',
                'subtitle' => 'Lifestyle',
                'url' => 'https://demos.afthemes.com/enternews/lifestyle/',
                'tags' => array('free', 'blog', 'elementor', 'fitness'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'covid-19',
                'title' => 'EnterNews',
                'subtitle' => 'Covid 19',
                'url' => 'https://demos.afthemes.com/enternews/covid-19/',
                'tags' => array('free', 'covid', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'crypto-currency',
                'title' => 'EnterNews',
                'subtitle' => 'Crypto Currency',
                'url' => 'https://demos.afthemes.com/enternews/crypto-currency/',
                'tags' => array('free', 'crypto', 'magazine')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'EnterNews',
                'subtitle' => 'Arabic News',
                'url' => 'https://demos.afthemes.com/enternews/arabic-news/',
                'tags' => array('free', 'news', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'EnterNews',
                'subtitle' => 'China News',
                'url' => 'https://demos.afthemes.com/enternews/china-news/',
                'tags' => array('free', 'chinense', 'general')
            ),
            array(
                'slug' => 'entermag',
                'title' => 'EnterNews',
                'subtitle' => 'EnterMag',
                'url' => 'https://demos.afthemes.com/enternews/entermag/',
                'tags' => array('free', 'magazine', 'child')
            )

        )
    );

    $demos['enternews-pro'] = array(
        'free' => 'enternews',
        'premium' => 'enternews-pro',
        'demodata' => array(
            array(
                'slug' => 'enternews',
                'title' => 'EnterNews Pro',
                'subtitle' => 'EnterNews Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/',
                'tags' => array('pro', 'magazine', 'news')
            ),

            array(
                'slug' => 'sport',
                'title' => 'EnterNews Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/sport/',
                'tags' => array('pro', 'magazine', 'sport')
            ),

            array(
                'slug' => 'classic',
                'title' => 'EnterNews Pro',
                'subtitle' => 'Classic Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/classic/',
                'tags' => array('pro', 'magazine', 'classic')
            ),

            array(
                'slug' => 'dark',
                'title' => 'EnterNews Pro',
                'subtitle' => 'EnterNews Dark Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/dark/',
                'tags' => array('pro', 'magazine', 'dark')
            ),


            array(
                'slug' => 'light',
                'title' => 'EnterNews Pro',
                'subtitle' => 'EnterNews Light Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/light/',
                'tags' => array('pro', 'magazine', 'light')
            ),


            array(
                'slug' => 'fashion',
                'title' => 'EnterNews Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),


            array(
                'slug' => 'recipe',
                'title' => 'EnterNews Pro',
                'subtitle' => 'Recipe Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/recipe/',
                'tags' => array('pro', 'food', 'blog')
            ),

            array(
                'slug' => 'travel',
                'title' => 'EnterNews Pro',
                'subtitle' => 'Travel Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/travel/',
                'tags' => array('pro', 'blog', 'news', 'travel')
            ),


            array(
                'slug' => 'business',
                'title' => 'EnterNews Pro',
                'subtitle' => 'Business Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/business/',
                'tags' => array('pro', 'magazine', 'business')
            ),

            array(
                'slug' => 'crypto-currency',
                'title' => 'EnterNews Pro',
                'subtitle' => 'Crypto Currency Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/crypto-currency/',
                'tags' => array('pro', 'crypto', 'magazine')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'EnterNews Pro',
                'subtitle' => 'Arabic News Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/arabic-news/',
                'tags' => array('pro', 'news', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'EnterNews Pro',
                'subtitle' => 'China News Pro',
                'url' => 'https://demos.afthemes.com/enternews-pro/china-news/',
                'tags' => array('pro', 'news', 'chinense')
            )


        )
    );

    $demos['kreeti-lite'] = array(
        'free' => 'kreeti-lite',
        'premium' => 'kreeti',
        'demodata' => array(
            array(
                'slug' => 'kreeti-lite',
                'title' => 'Kreeti Lite',
                'subtitle' => 'Kreeti Lite',
                'url' => 'https://demos.afthemes.com/kreeti-lite/',
                'tags' => array('free', 'magazine', 'news')
            ),

            array(
                'slug' => 'sport',
                'title' => 'Kreeti Lite',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/kreeti-lite/sport/',
                'tags' => array('free', 'magazine', 'sport')
            ),

            array(
                'slug' => 'fashion',
                'title' => 'Kreeti Lite',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/kreeti-lite/fashion/',
                'tags' => array('free', 'news', 'fashion')
            ),

            array(
                'slug' => 'gadgets',
                'title' => 'Kreeti Lite',
                'subtitle' => 'Gadgets',
                'url' => 'https://demos.afthemes.com/kreeti-lite/gadgets',
                'tags' => array('free', 'tech', 'gadget', 'business')
            ),
           
            array(
                'slug' => 'wedding',
                'title' => 'Kreeti Lite',
                'subtitle' => 'Wedding',
                'url' => 'https://demos.afthemes.com/kreeti-lite/wedding/',
                'tags' => array('free', 'blog', 'general')
            )

        )
    );

    $demos['kreeti'] = array(
        'free' => 'kreeti-lite',
        'premium' => 'kreeti',
        'demodata' => array(
            array(
                'slug' => 'kreeti',
                'title' => 'Kreeti',
                'subtitle' => 'Kreeti',
                'url' => 'https://demos.afthemes.com/kreeti/',
                'tags' => array('pro', 'magazine', 'news')
            ),

            array(
                'slug' => 'dark',
                'title' => 'Kreeti',
                'subtitle' => 'Dark',
                'url' => 'https://demos.afthemes.com/kreeti/dark/',
                'tags' => array('pro', 'magazine', 'dark')
            ),

            array(
                'slug' => 'fashion',
                'title' => 'Kreeti',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/kreeti/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'sport',
                'title' => 'Kreeti',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/kreeti/sport/',
                'tags' => array('pro', 'magazine', 'sport')
            ),
            

            array(
                'slug' => 'travel',
                'title' => 'Kreeti',
                'subtitle' => 'Travel',
                'url' => 'https://demos.afthemes.com/kreeti/travel/',
                'tags' => array('pro', 'blog', 'travel')
            ),



            array(
                'slug' => 'wedding',
                'title' => 'Kreeti',
                'subtitle' => 'Wedding',
                'url' => 'https://demos.afthemes.com/kreeti/wedding/',
                'tags' => array('pro', 'blog', 'general')
            ),

            array(
                'slug' => 'business-news',
                'title' => 'Kreeti',
                'subtitle' => 'Business News',
                'url' => 'https://demos.afthemes.com/kreeti/business-news',
                'tags' => array('pro', 'news', 'business')
            ),

            array(
                'slug' => 'lifestyle',
                'title' => 'Kreeti',
                'subtitle' => 'Lifestyle',
                'url' => 'https://demos.afthemes.com/kreeti/lifestyle/',
                'tags' => array('pro', 'magazine', 'general')
            ),

            array(
                'slug' => 'recipe',
                'title' => 'Kreeti',
                'subtitle' => 'Recipe',
                'url' => 'https://demos.afthemes.com/kreeti/recipe/',
                'tags' => array('pro', 'food', 'general')
            )


        )
    );


    $demos['magazine-7'] = array(
        'free' => 'magazine-7',
        'premium' => 'magazine-7-plus',
        'demodata' => array(
            array(
                'slug' => 'magazine-7',
                'title' => 'Magazine 7',
                'subtitle' => 'Magazine 7',
                'url' => 'https://demos.afthemes.com/magazine-7',
                'tags' => array('free', 'news', 'fashion')
            ),
            array(
                'slug' => 'restro',
                'title' => 'Magazine 7',
                'subtitle' => 'Restro',
                'url' => 'https://demos.afthemes.com/magazine-7/restro',
                'tags' => array('free', 'magazine', 'food')
            ),

            
            array(
                'slug' => 'beautiful-blog',
                'title' => 'Magazine 7',
                'subtitle' => 'Beautiful Blog',
                'url' => 'https://demos.afthemes.com/magazine-7/beautiful-blog',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'newstorial',
                'title' => 'Magazine 7',
                'subtitle' => 'Newstorial',
                'url' => 'https://demos.afthemes.com/magazine-7/newstorial',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'featured-news',
                'title' => 'Magazine 7',
                'subtitle' => 'Featured News',
                'url' => 'https://demos.afthemes.com/magazine-7/featured-news',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'magaziness',
                'title' => 'Magazine 7',
                'subtitle' => 'Magaziness',
                'url' => 'https://demos.afthemes.com/magazine-7/magaziness',
                'tags' => array('free', 'magazine', 'child')
            )
            


        )
    );

    $demos['magazine-7-plus'] = array(
        'free' => 'magazine-7',
        'premium' => 'magazine-7-plus',
        'demodata' => array(
            array(
                'slug' => 'magazine-7',
                'title' => 'Magazine 7 Plus',
                'subtitle' => 'Magazine 7 Plus',
                'url' => 'https://demos.afthemes.com/magazine-7-plus',
                'tags' => array('pro', 'news', 'fashion')
            ),
            array(
                'slug' => 'restro',
                'title' => 'Magazine 7 Plus',
                'subtitle' => 'Restro Plus',
                'url' => 'https://demos.afthemes.com/magazine-7-plus/restro',
                'tags' => array('pro', 'magazine', 'food')
            ),
            array(
                'slug' => 'photography',
                'title' => 'Magazine 7 Plus',
                'subtitle' => 'Photography Plus',
                'url' => 'https://demos.afthemes.com/magazine-7-plus/photography',
                'tags' => array('pro', 'blog', 'photography')
            ),

            array(
                'slug' => 'minimal-mag',
                'title' => 'Magazine 7 Plus',
                'subtitle' => 'Minimal Mag Plus',
                'url' => 'https://demos.afthemes.com/magazine-7-plus/minimal-mag',
                'tags' => array('pro', 'magazine', 'minimal')
            ),
            array(
                'slug' => 'mag-shop',
                'title' => 'Magazine 7 Plus',
                'subtitle' => 'Mag Shop Plus',
                'url' => 'https://demos.afthemes.com/magazine-7-plus/mag-shop',
                'tags' => array('pro', 'fashion', 'ecommerce')
            )
        )
    );

    $demos['magnitude'] = array(
        'free' => 'magnitude',
        'premium' => 'magnitude-pro',
        'demodata' => array(
            array(
                'slug' => 'magnitude',
                'title' => 'Magnitude',
                'subtitle' => 'Magnitude',
                'url' => 'https://demos.afthemes.com/magnitude/',
                'tags' => array('free', 'magazine', 'fashion')
            ),

            array(
                'slug' => 'newsportal',
                'title' => 'Magnitude',
                'subtitle' => 'Newsportal',
                'url' => 'https://demos.afthemes.com/magnitude/newsportal/',
                'tags' => array('free', 'news', 'general')
            ),
            array(
                'slug' => 'sport',
                'title' => 'Magnitude',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/magnitude/sport/',
                'tags' => array('free', 'news', 'sport')
            )


        )
    );

    $demos['magnitude-pro'] = array(
        'free' => 'magnitude',
        'premium' => 'magnitude-pro',
        'demodata' => array(
            array(
                'slug' => 'magnitude',
                'title' => 'Magnitude Pro',
                'subtitle' => 'Magnitude Pro',
                'url' => 'https://demos.afthemes.com/magnitude-pro/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),

            array(
                'slug' => 'newsportal',
                'title' => 'Magnitude Pro',
                'subtitle' => 'Newsportal Pro',
                'url' => 'https://demos.afthemes.com/magnitude-pro/newsportal/',
                'tags' => array('pro', 'news', 'general')
            ),


            array(
                'slug' => 'sport',
                'title' => 'Magnitude Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/magnitude-pro/sport/',
                'tags' => array('pro', 'magazine', 'sport')
            ),

            array(
                'slug' => 'dark',
                'title' => 'Magnitude Pro',
                'subtitle' => 'Magnitude Dark',
                'url' => 'https://demos.afthemes.com/magnitude-pro/dark/',
                'tags' => array('pro', 'news', 'dark')
            ),
            array(
                'slug' => 'gadgets',
                'title' => 'Magnitude Pro',
                'subtitle' => 'Magnitude Dark',
                'url' => 'https://demos.afthemes.com/magnitude-pro/dark/',
                'tags' => array('pro', 'news', 'gadget', 'tech')
            )


        )
    );

    $demos['morenews'] = array(
        'free' => 'morenews',
        'premium' => 'morenews-pro',
        'demodata' => array(
            array(
                'slug' => 'morenews',
                'title' => 'morenews',
                'subtitle' => 'MoreNews',
                'url' => 'https://demos.afthemes.com/morenews/',
                'tags' => array('free', 'magazine', 'news')
            ),

            array(
                'slug' => 'sport',
                'title' => 'morenews',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/morenews/sport/',
                'tags' => array('free', 'news', 'sport')
            ),
            array(
                'slug' => 'classic',
                'title' => 'morenews',
                'subtitle' => 'Classic',
                'url' => 'https://demos.afthemes.com/morenews/classic/',
                'tags' => array('free', 'news', 'classic')
            ),

            array(
                'slug' => 'food-recipe',
                'title' => 'morenews',
                'subtitle' => 'Food and Recipe',
                'url' => 'https://demos.afthemes.com/morenews/food-recipe/',
                'tags' => array('free', 'magazine', 'food')
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'morenews',
                'subtitle' => 'Crypto News',
                'url' => 'https://demos.afthemes.com/morenews/crypto-news/',
                'tags' => array('free', 'magazine', 'crypto')
            ),
            array(
                'slug' => 'esport',
                'title' => 'morenews',
                'subtitle' => 'Esports',
                'url' => 'https://demos.afthemes.com/morenews/esports/',
                'tags' => array('free', 'blog', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'morenews',
                'subtitle' => 'Arabic News',
                'url' => 'https://demos.afthemes.com/morenews/arabic-news/',
                'tags' => array('free', 'news', 'general', 'rtl')
            ),
            array(
                'slug' => 'local-business',
                'title' => 'morenews',
                'subtitle' => 'Local Business',
                'url' => 'https://demos.afthemes.com/morenews/local-business/',
                'tags' => array('free', 'business', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'china-today',
                'title' => 'morenews',
                'subtitle' => 'China Today',
                'url' => 'https://demos.afthemes.com/morenews/china-today/',
                'tags' => array('free', 'news', 'general')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'morenews',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/morenews/fashion/',
                'tags' => array('free', 'magazine', 'fashion')
            ),

            array(
                'slug' => 'travel',
                'title' => 'morenews',
                'subtitle' => 'Travel',
                'url' => 'https://demos.afthemes.com/morenews/travel/',
                'tags' => array('free', 'blog', 'travel')
            ),
            array(
                'slug' => 'real-estate',
                'title' => 'morenews',
                'subtitle' => 'Real Estate',
                'url' => 'https://demos.afthemes.com/morenews/real-estate/',
                'tags' => array('free', 'blog', 'elementor'),
                'builder' => 'elementor'
            ),

            array(
                'slug' => 'beauty-studio',
                'title' => 'morenews',
                'subtitle' => 'Beauty Studio',
                'url' => 'https://demos.afthemes.com/morenews/beauty-studio/',
                'tags' => array('free', 'fashion', 'elementor'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'architecture-blog',
                'title' => 'morenews',
                'subtitle' => 'Architecture Blog',
                'url' => 'https://demos.afthemes.com/morenews/architecture-blog/',
                'tags' => array('free', 'blog', 'elementor'),
                'builder' => 'elementor'
            )




        )
    );

    $demos['morenews-pro'] = array(
        'free' => 'morenews',
        'premium' => 'morenews-pro',
        'demodata' => array(
            array(
                'slug' => 'morenews',
                'title' => 'MoreNews Pro',
                'subtitle' => 'MoreNews Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/',
                'tags' => array('pro', 'magazine', 'news')
            ),


            array(
                'slug' => 'sport',
                'title' => 'MoreNews Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/sport/',
                'tags' => array('pro', 'sport', 'dark')
            ),


            array(
                'slug' => 'food-recipe',
                'title' => 'MoreNews Pro',
                'subtitle' => 'Food and Recipe Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/food-recipe/',
                'tags' => array('pro', 'magazine', 'food')
            ),

            array(
                'slug' => 'classic',
                'title' => 'MoreNews Pro',
                'subtitle' => 'Classic Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/classic/',
                'tags' => array('pro', 'magazine', 'classic')
            ),


            array(
                'slug' => 'fashion',
                'title' => 'MoreNews Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),


            array(
                'slug' => 'fitness-magazine',
                'title' => 'MoreNews Pro',
                'subtitle' => 'Fitness Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/fitness-magazine/',
                'tags' => array('pro', 'magazine', 'sport')
            ),

            array(
                'slug' => 'travel',
                'title' => 'MoreNews Pro',
                'subtitle' => 'Travel Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/travel/',
                'tags' => array('pro', 'blog', 'travel')
            ),


            array(
                'slug' => 'crypto-news',
                'title' => 'MoreNews Pro',
                'subtitle' => 'Crypto News Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/crypto-news/',
                'tags' => array('pro', 'business', 'crypto')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'MoreNews Pro',
                'subtitle' => 'Arabic News Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/arabic-news/',
                'tags' => array('pro', 'news', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-today',
                'title' => 'MoreNews Pro',
                'subtitle' => 'China Today Pro',
                'url' => 'https://demos.afthemes.com/morenews-pro/china-today/',
                'tags' => array('pro', 'news', 'general')
            )

        )
    );

    $demos['newsium'] = array(
        'free' => 'newsium',
        'premium' => 'newsium-pro',
        'demodata' => array(
            array(
                'slug' => 'newsium',
                'title' => 'Newsium',
                'subtitle' => 'Newsium',
                'url' => 'https://demos.afthemes.com/newsium/',
                'tags' => array('free', 'magazine', 'news')
            ),
            array(
                'slug' => 'sports',
                'title' => 'Newsium',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/newsium/sport/',
                'tags' => array('free', 'magazine', 'sport')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'Newsium',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/newsium/fashion/',
                'tags' => array('free', 'news', 'fashion')
            ),
            array(
                'slug' => 'classic',
                'title' => 'Newsium',
                'subtitle' => 'Classic',
                'url' => 'https://demos.afthemes.com/newsium/classic/',
                'tags' => array('free', 'magazine', 'classic')
            ),

            array(
                'slug' => 'gadgets',
                'title' => 'Newsium',
                'subtitle' => 'Gadgets',
                'url' => 'https://demos.afthemes.com/newsium/gadgets/',
                'tags' => array('free', 'news', 'gadget', 'tech')
            ),

            array(
                'slug' => 'lifestyle',
                'title' => 'Newsium',
                'subtitle' => 'Lifestyle',
                'url' => 'https://demos.afthemes.com/newsium/lifestyle/',
                'tags' => array('free', 'blog', 'lifestyle', 'fitness')
            ),
            array(
                'slug' => 'travel-blog',
                'title' => 'Newsium',
                'subtitle' => 'Travel Blog',
                'url' => 'https://demos.afthemes.com/newsium/travel-blog/',
                'tags' => array('free', 'elementor', 'travel'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'fitness-blog',
                'title' => 'Newsium',
                'subtitle' => 'Fitness Blog',
                'url' => 'https://demos.afthemes.com/newsium/fitness-blog/',
                'tags' => array('free', 'elementor', 'gym'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'food-blog',
                'title' => 'Newsium',
                'subtitle' => 'Food Blog',
                'url' => 'https://demos.afthemes.com/newsium/food-blog/',
                'tags' => array('free', 'elementor', 'food'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'cars-blog',
                'title' => 'Newsium',
                'subtitle' => 'Cars Blog',
                'url' => 'https://demos.afthemes.com/newsium/cars-blog/',
                'tags' => array('free', 'elementor', 'automobile'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'wedding',
                'title' => 'Newsium',
                'subtitle' => 'Wedding',
                'url' => 'https://demos.afthemes.com/newsium/wedding/',
                'tags' => array('free', 'elementor', 'blog'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'Newsium',
                'subtitle' => 'Crypto News',
                'url' => 'https://demos.afthemes.com/newsium/crypto-news/',
                'tags' => array('free', 'magazine', 'crypto')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'Newsium',
                'subtitle' => 'Arabic News',
                'url' => 'https://demos.afthemes.com/newsium/arabic-news/',
                'tags' => array('free', 'news', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'Newsium',
                'subtitle' => 'China News',
                'url' => 'https://demos.afthemes.com/newsium/china-news/',
                'tags' => array('free', 'news', 'chinense')
            )


        )
    );

    $demos['newsium-pro'] = array(
        'free' => 'newsium',
        'premium' => 'newsium-pro',
        'demodata' => array(
            array(
                'slug' => 'newsium',
                'title' => 'Newsium Pro',
                'subtitle' => 'Newsium Pro',
                'url' => 'https://demos.afthemes.com/newsium-pro/',
                'tags' => array('pro', 'magazine', 'news')
            ),

            array(
                'slug' => 'dark',
                'title' => 'Newsium Pro',
                'subtitle' => 'Newsium Dark Pro',
                'url' => 'https://demos.afthemes.com/newsium-pro/dark/',
                'tags' => array('pro', 'news', 'dark')
            ),

            array(
                'slug' => 'light',
                'title' => 'Newsium Pro',
                'subtitle' => 'Newsium Light Pro',
                'url' => 'https://demos.afthemes.com/newsium-pro/light/',
                'tags' => array('pro', 'magazine', 'light')
            ),
            array(
                'slug' => 'sport',
                'title' => 'Newsium Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/newsium-pro/sport/',
                'tags' => array('pro', 'magazine', 'sport')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'Newsium Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/newsium-pro/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),

            array(
                'slug' => 'classic',
                'title' => 'Newsium Pro',
                'subtitle' => 'Classic Pro',
                'url' => 'https://demos.afthemes.com/newsium-pro/classic/',
                'tags' => array('pro', 'news', 'classic')
            ),


            array(
                'slug' => 'gadgets',
                'title' => 'Newsium Pro',
                'subtitle' => 'Gadgets Pro',
                'url' => 'https://demos.afthemes.com/newsium-pro/gadgets/',
                'tags' => array('pro', 'magazine', 'gadget', 'tech')
            ),


            array(
                'slug' => 'lifestyle',
                'title' => 'Newsium Pro',
                'subtitle' => 'Lifestyle Pro',
                'url' => 'https://demos.afthemes.com/newsium-pro/lifestyle/',
                'tags' => array('pro', 'blog', 'lifestyle', 'fitness')
            ),



        )
    );

    $demos['newsever'] = array(
        'free' => 'newsever',
        'premium' => 'newsever-pro',
        'demodata' => array(
            array(
                'slug' => 'newsever',
                'title' => 'newsever',
                'subtitle' => 'Newsever',
                'url' => 'https://demos.afthemes.com/newsever/',
                'tags' => array('free', 'magazine', 'news')
            ),

            array(
                'slug' => 'light',
                'title' => 'newsever',
                'subtitle' => 'Light',
                'url' => 'https://demos.afthemes.com/newsever/light/',
                'tags' => array('free', 'magazine', 'light')
            ),

            array(
                'slug' => 'dark',
                'title' => 'newsever',
                'subtitle' => 'Dark',
                'url' => 'https://demos.afthemes.com/newsever/dark/',
                'tags' => array('free', 'news', 'dark')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'newsever',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/newsever/fashion/',
                'tags' => array('free', 'magazine', 'fashion')
            ),


            array(
                'slug' => 'sport',
                'title' => 'newsever',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/newsever/sport/',
                'tags' => array('free', 'news', 'sport')
            ),


            array(
                'slug' => 'classic',
                'title' => 'newsever',
                'subtitle' => 'Classic',
                'url' => 'https://demos.afthemes.com/newsever/classic/',
                'tags' => array('free', 'magazine', 'classic')
            ),
            array(
                'slug' => 'fitness',
                'title' => 'newsever',
                'subtitle' => 'Fitness',
                'url' => 'https://demos.afthemes.com/newsever/fitness/',
                'tags' => array('free', 'elementor', 'gym'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'vogue',
                'title' => 'newsever',
                'subtitle' => 'Vogue',
                'url' => 'https://demos.afthemes.com/newsever/vogue/',
                'tags' => array('free', 'elementor', 'fashion'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'restaurant',
                'title' => 'newsever',
                'subtitle' => 'Restaurant',
                'url' => 'https://demos.afthemes.com/newsever/restaurant/',
                'tags' => array('free', 'elementor', 'food'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'gadgets',
                'title' => 'newsever',
                'subtitle' => 'Gadgets',
                'url' => 'https://demos.afthemes.com/newsever/gadgets/',
                'tags' => array('free', 'elementor', 'tech', 'gadget'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'bikes',
                'title' => 'newsever',
                'subtitle' => 'Bikes',
                'url' => 'https://demos.afthemes.com/newsever/bikes/',
                'tags' => array('free', 'elementor', 'automobile'),
                'builder' => 'elementor'
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'newsever',
                'subtitle' => 'Crypto News',
                'url' => 'https://demos.afthemes.com/newsever/crypto-news/',
                'tags' => array('free', 'crypto', 'magazine')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'newsever',
                'subtitle' => 'Arabic News',
                'url' => 'https://demos.afthemes.com/newsever/arabic-news/',
                'tags' => array('free', 'news', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'newsever',
                'subtitle' => 'China News',
                'url' => 'https://demos.afthemes.com/newsever/china-news/',
                'tags' => array('free', 'news', 'chinense')
            ),
            array(
                'slug' => 'magever',
                'title' => 'newsever',
                'subtitle' => 'Magever',
                'url' => 'https://demos.afthemes.com/newsever/magever/',
                'tags' => array('free', 'magazine', 'child')
            )



        )
    );

    $demos['newsever-pro'] = array(
        'free' => 'newsever',
        'premium' => 'newsever-pro',
        'demodata' => array(
            array(
                'slug' => 'newsever',
                'title' => 'Newsever Pro',
                'subtitle' => 'Newsever Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/',
                'tags' => array('pro', 'magazine', 'news')
            ),

            array(
                'slug' => 'light',
                'title' => 'Newsever Pro',
                'subtitle' => 'Newsever Light Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/light/',
                'tags' => array('pro', 'magazine', 'light')
            ),

            array(
                'slug' => 'dark',
                'title' => 'Newsever Pro',
                'subtitle' => 'Newsever Dark Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/dark/',
                'tags' => array('pro', 'news', 'dark')
            ),

            array(
                'slug' => 'classic',
                'title' => 'Newsever Pro',
                'subtitle' => 'Classic Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/classic/',
                'tags' => array('pro', 'magazine', 'classic')
            ),


            array(
                'slug' => 'fashion',
                'title' => 'Newsever Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),


            array(
                'slug' => 'sport',
                'title' => 'Newsever Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/sport/',
                'tags' => array('pro', 'news', 'sport')
            ),

            array(
                'slug' => 'gadgets',
                'title' => 'Newsever Pro',
                'subtitle' => 'Gadgets Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/gadgets/',
                'tags' => array('pro', 'magazine', 'gadget', 'tech')
            ),

            array(
                'slug' => 'business',
                'title' => 'Newsever Pro',
                'subtitle' => 'Business Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/business/',
                'tags' => array('pro', 'magazine', 'business')
            ),


            array(
                'slug' => 'masonry',
                'title' => 'Newsever Pro',
                'subtitle' => 'Masonry Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/masonry/',
                'tags' => array('pro', 'blog', 'general')
            ),


            array(
                'slug' => 'recipe',
                'title' => 'Newsever Pro',
                'subtitle' => 'Recipe Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/recipe/',
                'tags' => array('pro', 'food', 'blog')
            ),

            array(
                'slug' => 'lifestyle',
                'title' => 'Newsever Pro',
                'subtitle' => 'Lifestyle Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/lifestyle/',
                'tags' => array('pro', 'magazine', 'lifestyle', 'fitness')
            ),

            array(
                'slug' => 'travel',
                'title' => 'Newsever Pro',
                'subtitle' => 'Travel Pro',
                'url' => 'https://demos.afthemes.com/newsever-pro/travel/',
                'tags' => array('pro', 'magazine', 'travel')
            )
        )
    );

    $demos['newsphere'] = array(
        'free' => 'newsphere',
        'premium' => 'newsphere-pro',
        'demodata' => array(
            array(
                'slug' => 'newsphere',
                'title' => 'Newsphere',
                'subtitle' => 'Newsphere',
                'url' => 'https://demos.afthemes.com/newsphere/',
                'tags' => array('free', 'magazine', 'news')
            ),
            array(
                'slug' => 'sport',
                'title' => 'Newsphere',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/newsphere/sport/',
                'tags' => array('free', 'magazine', 'sport')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'Newsphere',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/newsphere/fashion/',
                'tags' => array('free', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'Newsphere',
                'subtitle' => 'Crypto News',
                'url' => 'https://demos.afthemes.com/newsphere/crypto-news/',
                'tags' => array('free', 'magazine', 'crypto')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'Newsphere',
                'subtitle' => 'Arabic News',
                'url' => 'https://demos.afthemes.com/newsphere/arabic-news/',
                'tags' => array('free', 'news', 'general', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'Newsphere',
                'subtitle' => 'China News',
                'url' => 'https://demos.afthemes.com/newsphere/china-news/',
                'tags' => array('free', 'general', 'chinense')
            ),
            array(
                'slug' => 'newspin',
                'title' => 'Newsphere',
                'subtitle' => 'Newspin',
                'url' => 'https://demos.afthemes.com/newsphere/newspin/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'sportion',
                'title' => 'Newsphere',
                'subtitle' => 'Sportion',
                'url' => 'https://demos.afthemes.com/newsphere/sportion/',
                'tags' => array('free', 'magazine', 'child')
            ),
            array(
                'slug' => 'magcess',
                'title' => 'Newsphere',
                'subtitle' => 'Magcess',
                'url' => 'https://demos.afthemes.com/newsphere/magcess/',
                'tags' => array('free', 'magazine', 'child')
            )


        )
    );

    $demos['newsphere-pro'] = array(
        'free' => 'newsphere',
        'premium' => 'newsphere-pro',
        'demodata' => array(
            array(
                'slug' => 'newsphere',
                'title' => 'Newsphere Pro',
                'subtitle' => 'Newsphere Pro',
                'url' => 'https://demos.afthemes.com/newsphere-pro/',
                'tags' => array('pro', 'magazine', 'news')
            ),

            array(
                'slug' => 'dark',
                'title' => 'Newsphere Pro',
                'subtitle' => 'Dark Pro',
                'url' => 'https://demos.afthemes.com/newsphere-pro/dark/',
                'tags' => array('pro', 'magazine', 'dark')
            ),

            array(
                'slug' => 'light',
                'title' => 'Newsphere Pro',
                'subtitle' => 'Light Pro',
                'url' => 'https://demos.afthemes.com/newsphere-pro/light/',
                'tags' => array('pro', 'news', 'light')
            ),
            array(
                'slug' => 'sport',
                'title' => 'Newsphere Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/newsphere-pro/sport/',
                'tags' => array('pro', 'news', 'sport')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'Newsphere Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/newsphere-pro/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'masonry',
                'title' => 'Newsphere Pro',
                'subtitle' => 'Masonry Pro',
                'url' => 'https://demos.afthemes.com/newsphere-pro/masonry/',
                'tags' => array('pro', 'blog', 'general')
            ),

            array(
                'slug' => 'recipe',
                'title' => 'Newsphere Pro',
                'subtitle' => 'Recipe Pro',
                'url' => 'https://demos.afthemes.com/newsphere-pro/recipe/',
                'tags' => array('pro', 'magazine', 'food')
            ),

            array(
                'slug' => 'travel',
                'title' => 'Newsphere Pro',
                'subtitle' => 'Travel Pro',
                'url' => 'https://demos.afthemes.com/newsphere-pro/travel/',
                'tags' => array('pro', 'blog', 'travel')
            ),
            array(
                'slug' => 'minimal',
                'title' => 'Newsphere Pro',
                'subtitle' => 'Minimal Pro',
                'url' => 'https://demos.afthemes.com/newsphere-pro/minimal/',
                'tags' => array('pro', 'blog', 'minimal')
            )


        )
    );

    $demos['shopical'] = array(
        'free' => 'shopical',
        'premium' => 'shopical-pro',
        'demodata' => array(
            array(
                'slug' => 'shopical',
                'title' => 'Shopical',
                'subtitle' => 'Shopical',
                'url' => 'https://demos.afthemes.com/shopical/',
                'tags' => array('free', 'ecommerce', 'fashion'),
                'builder'=>'woocommerce'
            ),
           
            array(
                'slug' => 'automobile',
                'title' => 'Shopical',
                'subtitle' => 'Automobile',
                'url' => 'https://demos.afthemes.com/shopical/automobile/',
                'tags' => array('free', 'ecommerce', 'automobile'),
                'builder'=>'woocommerce'
            ),
           
            array(
                'slug' => 'shopage',
                'title' => 'Shopical',
                'subtitle' => 'Shopage',
                'url' => 'https://demos.afthemes.com/shopical/shopage/',
                'tags' => array('free', 'ecommerce', 'child')
            )
        )
    );

    $demos['shopical-pro'] = array(
        'free' => 'shopical',
        'premium' => 'shopical-pro',
        'demodata' => array(
            array(
                'slug' => 'shopical',
                'title' => 'Shopical Pro',
                'subtitle' => 'Shopical Pro',
                'url' => 'https://demos.afthemes.com/shopical-pro/',
                'tags' => array('pro', 'ecommerce', 'general'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'gadgets',
                'title' => 'Shopical Pro',
                'subtitle' => 'Gadgets Pro',
                'url' => 'https://demos.afthemes.com/shopical-pro/gadgets/',
                'tags' => array('pro', 'ecommerce', 'gadget', 'tech'),
                'builder'=>'woocommerce'
            )


        )
    );

    $demos['storecommerce'] = array(
        'free' => 'storecommerce',
        'premium' => 'storecommerce-pro',
        'demodata' => array(
            array(
                'slug' => 'storecommerce',
                'title' => 'StoreCommerce',
                'subtitle' => 'StoreCommerce',
                'url' => 'https://demos.afthemes.com/storecommerce/',
                'tags' => array('free', 'ecommerce', 'fashion'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'gadgets',
                'title' => 'StoreCommerce',
                'subtitle' => 'Gadgets',
                'url' => 'https://demos.afthemes.com/storecommerce/gadgets/',
                'tags' => array('free', 'ecommerce', 'gadget', 'tech'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'interior',
                'title' => 'StoreCommerce',
                'subtitle' => 'Interior',
                'url' => 'https://demos.afthemes.com/storecommerce/interior/',
                'tags' => array('free', 'ecommerce', 'interior'),
                'builder'=>'woocommerce'
            ),
          
            array(
                'slug' => 'storekeeper',
                'title' => 'StoreCommerce',
                'subtitle' => 'Storekeeper',
                'url' => 'https://demos.afthemes.com/storecommerce/storekeeper/',
                'tags' => array('free', 'ecommerce', 'child'),
                'builder'=>'woocommerce'
            )


        )
    );

    $demos['storecommerce-pro'] = array(
        'free' => 'storecommerce',
        'premium' => 'storecommerce-pro',
        'demodata' => array(
            array(
                'slug' => 'storecommerce',
                'title' => 'StoreCommerce Pro',
                'subtitle' => 'StoreCommerce Pro',
                'url' => 'https://demos.afthemes.com/storecommerce-pro/',
                'tags' => array('pro', 'ecommerce', 'fashion'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'gadgets',
                'title' => 'StoreCommerce Pro',
                'subtitle' => 'Gadgets Pro',
                'url' => 'https://demos.afthemes.com/storecommerce-pro/gadgets/',
                'tags' => array('pro', 'ecommerce', 'gadget', 'tech'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'automobile',
                'title' => 'StoreCommerce Pro',
                'subtitle' => 'Automobile Pro',
                'url' => 'https://demos.afthemes.com/storecommerce-pro/automobile/',
                'tags' => array('pro', 'ecommerce', 'automobile'),
                'builder'=>'woocommerce'
            ),

            array(
                'slug' => 'interior',
                'title' => 'StoreCommerce Pro',
                'subtitle' => 'Interior Pro',
                'url' => 'https://demos.afthemes.com/storecommerce-pro/interior/',
                'tags' => array('pro', 'ecommerce', 'interior'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'just-food',
                'title' => 'StoreCommerce Pro',
                'subtitle' => 'Just Food Pro',
                'url' => 'https://demos.afthemes.com/storecommerce-pro/just-food/',
                'tags' => array('pro', 'ecommerce', 'food'),
                'builder'=>'woocommerce'
            )


        )
    );

    $demos['storeship'] = array(
        'free' => 'storeship',
        'premium' => 'storeship-pro',
        'demodata' => array(
            array(
                'slug' => 'storeship',
                'title' => 'Storeship',
                'subtitle' => 'Storeship',
                'url' => 'https://demos.afthemes.com/storeship/',
                'tags' => array('free', 'ecommerce', 'tech'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'fashion',
                'title' => 'Storeship',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/storeship/fashion/',
                'tags' => array('free', 'ecommerce', 'fashion'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'furniture',
                'title' => 'Storeship',
                'subtitle' => 'Furniture',
                'url' => 'https://demos.afthemes.com/storeship/furniture/',
                'tags' => array('free', 'ecommerce', 'interior'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'foodshop',
                'title' => 'Storeship',
                'subtitle' => 'FoodShop',
                'url' => 'https://demos.afthemes.com/storeship/foodshop/',
                'tags' => array('free', 'ecommerce', 'child'),
                'builder'=>'woocommerce'
            )


        )
    );

    $demos['storeship-pro'] = array(
        'free' => 'storeship',
        'premium' => 'storeship-pro',
        'demodata' => array(
            array(
                'slug' => 'storeship',
                'title' => 'Storeship Pro',
                'subtitle' => 'Storeship Pro',
                'url' => 'https://demos.afthemes.com/storeship-pro/',
                'tags' => array('pro', 'ecommerce', 'tech'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'fashion',
                'title' => 'Storeship Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/storeship-pro/fashion/',
                'tags' => array('pro', 'ecommerce', 'fashion'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'furniture',
                'title' => 'Storeship Pro',
                'subtitle' => 'Furniture Pro',
                'url' => 'https://demos.afthemes.com/storeship-pro/furniture/',
                'tags' => array('pro', 'ecommerce', 'interior'),
                'builder'=>'woocommerce'
            ),

            array(
                'slug' => 'restaurant',
                'title' => 'Storeship Pro',
                'subtitle' => 'Restaurant Pro',
                'url' => 'https://demos.afthemes.com/storeship-pro/restaurant/',
                'tags' => array('pro', 'ecommerce', 'food'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'liquor',
                'title' => 'Storeship Pro',
                'subtitle' => 'Liquor Pro',
                'url' => 'https://demos.afthemes.com/storeship-pro/liquor/',
                'tags' => array('pro', 'ecommerce', 'food'),
                'builder'=>'woocommerce'
            ),
            array(
                'slug' => 'retailer',
                'title' => 'Storeship Pro',
                'subtitle' => 'Retailer Pro',
                'url' => 'https://demos.afthemes.com/storeship-pro/retailer/',
                'tags' => array('pro', 'ecommerce', 'general'),
                'builder'=>'woocommerce'
            )
        )
    );

    $demos['chromenews'] = array(
        'free' => 'chromenews',
        'premium' => 'chromenews-pro',
        'demodata' => array(
            array(
                'slug' => 'chromenews',
                'title' => 'ChromeNews',
                'subtitle' => 'ChromeNews',
                'url' => 'https://demos.afthemes.com/chromenews/',
                'tags' => array('free', 'news', 'magazine', 'general')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'ChromeNews',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/chromenews/fashion/',
                'tags' => array('free', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'sport',
                'title' => 'ChromeNews',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/chromenews/sport/',
                'tags' => array('free', 'blog', 'sport')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'ChromeNews',
                'subtitle' => 'Arabic News',
                'url' => 'https://demos.afthemes.com/chromenews/arabic-news/',
                'tags' => array('free', 'news', 'rtl')
            ),
            array(
                'slug' => 'china-news',
                'title' => 'ChromeNews',
                'subtitle' => 'China News',
                'url' => 'https://demos.afthemes.com/chromenews/china-news/',
                'tags' => array('free', 'magazine', 'chinense')
            ),
           
            array(
                'slug' => 'gaming',
                'title' => 'ChromeNews',
                'subtitle' => 'Gaming',
                'url' => 'https://demos.afthemes.com/chromenews/gaming/',
                'tags' => array('free', 'blog', 'game')
            ),
            array(
                'slug' => 'automobile',
                'title' => 'ChromeNews',
                'subtitle' => 'Automobile',
                'url' => 'https://demos.afthemes.com/chromenews/automobile/',
                'tags' => array('free', 'blog', 'automobile')
            ),
            
            array(
                'slug' => 'construction-blog',
                'title' => 'ChromeNews',
                'subtitle' => 'Construction Blog',
                'url' => 'https://demos.afthemes.com/chromenews/construction-blog/',
                'tags' => array('free', 'construction', 'blog')
            ),
            array(
                'slug' => 'covid-19',
                'title' => 'ChromeNews',
                'subtitle' => 'Covid 19',
                'url' => 'https://demos.afthemes.com/chromenews/covid-19/',
                'tags' => array('free', 'magazine', 'covid')
            ),
            array(
                'slug' => 'business',
                'title' => 'ChromeNews',
                'subtitle' => 'Business',
                'url' => 'https://demos.afthemes.com/chromenews/business/',
                'tags' => array('free', 'magazine', 'business')
            ),
            array(
                'slug' => 'beauty',
                'title' => 'ChromeNews',
                'subtitle' => 'Beauty',
                'url' => 'https://demos.afthemes.com/chromenews/beauty/',
                'tags' => array('free', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'restaurant',
                'title' => 'ChromeNews',
                'subtitle' => 'Restaurant',
                'url' => 'https://demos.afthemes.com/chromenews/restaurant/',
                'tags' => array('free', 'magazine', 'food')
            )


        )
    );

    $demos['chromenews-pro'] = array(
        'free' => 'chromenews',
        'premium' => 'chromenews-pro',
        'demodata' => array(
            array(
                'slug' => 'chromenews',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'ChromeNews Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/',
                'tags' => array('pro', 'news', 'magazine')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'sport',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/sport/',
                'tags' => array('pro', 'magazine', 'sport')
            ),

            array(
                'slug' => 'china-news',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'China News Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/china-news/',
                'tags' => array('pro', 'magazine', 'chinense')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Arabic News Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/arabic-news/',
                'tags' => array('pro', 'magazine', 'rtl')
            ),
            array(
                'slug' => 'restaurant',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Restaurant Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/recipe/',
                'tags' => array('pro', 'magazine', 'food')
            ),
            array(
                'slug' => 'gaming',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Gaming Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/gaming/',
                'tags' => array('pro', 'blog', 'game')
            ),
            array(
                'slug' => 'automobile',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Automobile Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/automobile/',
                'tags' => array('pro', 'blog', 'automobile')
            ),
           
            array(
                'slug' => 'online-news',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Online News Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/online-news/',
                'tags' => array('pro', 'magazine', 'news')
            ),
            
            array(
                'slug' => 'construction-blog',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Construction Blog Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/construction-blog/',
                'tags' => array('pro', 'magazine', 'construction')
            ),
            array(
                'slug' => 'business',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Businsess News Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/business/',
                'tags' => array('pro', 'news', 'business', 'elementor')
            ),
            array(
                'slug' => 'charity',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Charity Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/charity/',
                'tags' => array('pro', 'blog', 'gutenberg'),
                'builder'=>'gutenberg'
            ),
            array(
                'slug' => 'travel',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Travel Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/travel/',
                'tags' => array('pro', 'magazine', 'travel', 'elementor')
            ),
            array(
                'slug' => 'crypto-news',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Crypto News Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/crypto-news/',
                'tags' => array('pro', 'news', 'business', 'elementor')
            ),
            array(
                'slug' => 'beauty',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Beauty Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/beauty/',
                'tags' => array('pro', 'magazine', 'fashion', 'elementor')
            ),
            array(
                'slug' => 'covid-19',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Covid-19 Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/covid-19/',
                'tags' => array('pro', 'magazine', 'covid', 'elementor')
            ),
            array(
                'slug' => 'gadgets',
                'title' => 'ChromeNews Pro',
                'subtitle' => 'Gadgets Pro',
                'url' => 'https://demos.afthemes.com/chromenews-pro/gadgets/',
                'tags' => array('pro', 'business', 'news', 'elementor')
            )

        )
    );

    $demos['broadnews'] = array(
        'free' => 'broadnews',
        'premium' => 'broadnews-pro',
        'demodata' => array(
            array(
                'slug' => 'broadnews',
                'title' => 'BroadNews',
                'subtitle' => 'BroadNews',
                'url' => 'https://demos.afthemes.com/broadnews/',
                'tags' => array('free', 'news', 'magazine', 'general')
            ),
            array(
                'slug' => 'sport',
                'title' => 'BroadNews',
                'subtitle' => 'Sport',
                'url' => 'https://demos.afthemes.com/broadnews/sport/',
                'tags' => array('free', 'blog', 'sport')
            ),
            array(
                'slug' => 'fashion',
                'title' => 'BroadNews',
                'subtitle' => 'Fashion',
                'url' => 'https://demos.afthemes.com/broadnews/fashion/',
                'tags' => array('free', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'arabic-news',
                'title' => 'BroadNews',
                'subtitle' => 'Arabic News',
                'url' => 'https://demos.afthemes.com/broadnews/arabic-news/',
                'tags' => array('free', 'news', 'rtl')
            ),
            array(
                'slug' => 'classic',
                'title' => 'BroadNews',
                'subtitle' => 'Classic',
                'url' => 'https://demos.afthemes.com/broadnews/classic/',
                'tags' => array('free', 'news', 'blog', 'classic')
            ),
            array(
                'slug' => 'chinese-news',
                
                'title' => 'BroadNews',
                'subtitle' => 'Chinese News',
                'url' => 'https://demos.afthemes.com/broadnews/chinese-news/',
                'tags' => array('free', 'magazine', 'chinense')
            )
        )
    );

    $demos['broadnews-pro'] = array(
        'free' => 'broadnews',
        'premium' => 'broadnews-pro',
        'demodata' => array(
            array(
                'slug' => 'broadnews',                
                'title' => 'BroadNews Pro',
                'subtitle' => 'BroadNews Pro',
                'url' => 'https://demos.afthemes.com/broadnews-pro/',
                'tags' => array('pro', 'news', 'magazine', 'general')
            ),
            array(
                'slug' => 'sport',                
                'title' => 'BroadNews Pro',
                'subtitle' => 'Sport Pro',
                'url' => 'https://demos.afthemes.com/broadnews-pro/sport/',
                'tags' => array('pro', 'blog', 'sport')
            ),  
            array(
                'slug' => 'fashion',                
                'title' => 'BroadNews Pro',
                'subtitle' => 'Fashion Pro',
                'url' => 'https://demos.afthemes.com/broadnews-pro/fashion/',
                'tags' => array('pro', 'magazine', 'fashion')
            ),
            array(
                'slug' => 'arabic-news',                
                'title' => 'BroadNews Pro',
                'subtitle' => 'Arabic News Pro',
                'url' => 'https://demos.afthemes.com/broadnews-pro/arabic-news/',
                'tags' => array('pro', 'news', 'rtl')
            ),
            array(
                'slug' => 'classic',                
                'title' => 'BroadNews Pro',
                'subtitle' => 'Classic Pro',
                'url' => 'https://demos.afthemes.com/broadnews-pro/classic/',
                'tags' => array('pro', 'news', 'blog', 'classic')
            ),
            array(
                'slug' => 'chinese-news',                
                'title' => 'BroadNews Pro',
                'subtitle' => 'Chinese News Pro',
                'url' => 'https://demos.afthemes.com/broadnews-pro/chinese-news/',
                'tags' => array('pro', 'magazine', 'chinense')
            )
        )
    );


    return $demos;
}

function templatespare_get_filtered_data(){
    $all_demos = templatespare_templates_demo_list();
    $final_demodata = array();
    $empty_array = array();
            foreach ($all_demos as $keys=>$demos) {
                if (isset($demos['demodata'])) {
                    foreach ($demos['demodata'] as $demo) {
                        $final_demodata[] = $demo;
                    }
                }
                $empty_array['demos'][]= $keys;
            }
            
        
            
            $final_demotags = array();
            $demodata = array();
            foreach ($final_demodata as $demos) {
                if (isset($demos['tags'])) {
                    foreach ($demos['tags'] as $demo_tags) {
                        $final_demotags[] = $demo_tags;
                    }
                } 
            }
            $unique_demotags= array_count_values($final_demotags);
            ksort($unique_demotags);
            
            $demodata['demos'] =  $unique_demotags;
            $demodata['counts'] =  count($final_demodata);
            $demodata['url'] =  count($final_demodata);
    return  $demodata;
}

function templatespare_get_filtered_pro_themes(){
    $all_demos = templatespare_templates_demo_list();
    $final_demodata = array();
    
            foreach ($all_demos as $keys=>$demos) {
                if (isset($demos['demodata'])) {
                    foreach ($demos['demodata'] as $demo) {
                        if(strpos($demo['title'],'Pro') ||strpos($demo['title'],'Plus')){
                        $final_demodata[$keys] = $demo['title'];
                        }
                    }
                }
                
            }
          
    return $final_demodata;
                
}


        

function templatespare_cheeck_pro_themes(){
        $available_theme = templatespare_get_filtered_pro_themes();
        $theme = wp_get_theme();
        
        foreach($available_theme as $res){
            
                
                // Theme installed but not activate.
            foreach ( (array) wp_get_themes() as $theme_dir => $themes ) {
                
                
                if ( in_array($res,templatespare_available_pro_themes()) && $res == $themes->name  ) {
                    
                    return  $res;
                    
                
                }        
            }
           
            
        }
}



