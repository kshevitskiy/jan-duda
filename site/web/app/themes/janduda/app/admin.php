<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

/**
 * Disable editor on specific page templates
 */
add_action( 'admin_init', function () {
    global $pagenow;
    if ($pagenow != 'post.php') return;
    
    $post_id = $_GET['post']
        ? $_GET['post']
        : $_POST['post_ID'];

    if( !isset( $post_id ) ) return;

    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    $templates = [
        'views/template-bio.blade.php',
        'views/template-home.blade.php',
        'views/template-media.blade.php',
        'views/template-events.blade.php',
        'views/template-sponsors.blade.php'
    ];

    foreach($templates as $template) {
        if($template_file == $template) {
            remove_post_type_support('page', 'editor');
        }
    }
});
