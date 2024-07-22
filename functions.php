<?php

    // Custom Logo
    function nd_dosth_theme_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true,
        );
        // Add custom-logo support
        add_theme_support( 'custom-logo' ,$defaults);

    }
    add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

    function loadCss()
    {
        //bootstrap
        wp_register_style("bootstrap",get_template_directory_uri()."/assets/css/bootstrap.min.css",array(),false,"all");
        wp_enqueue_style("bootstrap");

        //global css
        wp_register_style("global",get_template_directory_uri()."/assets/css/global.css",array(),false,"all");
        wp_enqueue_style("global");
    }
    add_action("wp_enqueue_scripts","loadCss");

    function loadJs()
    {
        wp_enqueue_script("jquery");
        //BootstrapJS
        wp_register_script("bootstrap",get_template_directory_uri()."/assets/js/bootstrap.min.js",'jquery',false,true);
        wp_enqueue_script("bootstrap");
        //Global JS
        wp_register_script("globalJS",get_template_directory_uri()."/assets/js/global.js",'jquery',false,true);
        wp_enqueue_script("globalJS");
    }
    add_action("wp_enqueue_scripts","loadJs");

    // LOAD THEME OPTION
    add_theme_support("menus");
    add_theme_support("post-thumbnails");
    add_theme_support("widgets");
    // Menus
    register_nav_menus(
      array(
          'top-menu'    => 'Top Menu Location',
          'mobile-menu' => 'Mobile Menu Location',
          'footer-menu' => 'Footer Menu Location',
          'footer-right-menu' => 'Footer Right Menu Location',
      )
    );
    // Custom Image Sizes
add_image_size("blog-large",800,300,true);
add_image_size("blog-small",300,200,true);

//Registers Sidebars
function my_sidebar()
{
    register_sidebar(
        array(
            "name" => "Page SideBar",
            "id" => "page-sidebar",
            "before_title" => "<h3 class='widget-title'>",
            "after_title" => "</h3>",
        )
    );
}
add_action("widgets_init","my_sidebar");

// add short codes
function my_shortcode()
{
    ob_start();
    get_template_part("includes/latest","posts");
    return ob_get_clean();
}
add_shortcode('lasts_posts', 'my_shortcode');
function joinUs($atts)
{
    $default = array(
        'link' => '#',
    );
    $a = shortcode_atts($default, $atts);
    $html  = "<div class='join_us'>";
    $html .= "<a href='". $a["link"] ."' target='_blank'>Join in our community</a></div>";

    return $html;
}
add_shortcode('joinUs', 'joinUs');
// SEARCH ONLY TITLE
function search_by_title_and_content($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('search_columns', array('post_title', 'post_content'));
    }
    return $query;
}
add_filter('pre_get_posts', 'search_by_title_and_content');

