<?php

/**
 * 
 * Enqueue the relevant scripts and stylesheets for the child theme
 */

function gmp_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'colormag-style' for the Color Mag Theme.
   
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script( 'addthis', 
                    "//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c4ff3ee78e30c71", 
                    array(), 
                    1.0, 
                    true
    );

    wp_enqueue_style( 'uniquestyles', 
    get_stylesheet_directory_uri(). '/customstyles.css', 
    array(), 
    1.0
    

    );


   }
   
add_action( 'wp_enqueue_scripts', 'gmp_theme_enqueue_styles' );

/**
 *Additional removal of WordPress default options

 */

 function gmp_remove_generator()
 {
     # code...

     return '';

 }

 add_filter( 'the_generator', 'gmp_remove_generator' );

 function gmp_colormagchild_footer()
 {
     # code...

    //  prints the credits Text in the footer

     echo '<span class="awesome-footer"> ReDesign By </span><a href="https://karavic.com" target="_blank" id="brand-footer"> Certified Vic</a>';

 }


/**
 *Additional Admin functional features

 */

 function gmp_colormagchild_admin_footer()
 {
     # code...

     echo '<span id="footer-thankyou">'.gmp_colormagchild_footer().'</span>';


 }

 add_filter( 'admin_footer_text', 'gmp_colormagchild_admin_footer' );