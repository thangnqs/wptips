<?php
if ( ! function_exists( 'wp_restrict_cf7' ) ) {
    add_action( 'wp_enqueue_scripts', 'wp_restrict_cf7' );
    function wp_restrict_cf7() {
        // List page has CF7
        $page_not_hasform =  [
            'page-templates/contact.php',
            'page-templates/sales.php'
        ];

        if ( ! is_page_template( $page_not_hasform ) ) {
            wp_dequeue_style( 'contact-form-7' );
            wp_dequeue_style( 'wpcf7-recaptcha' );
            wp_dequeue_script( 'contact-form-7' );
            // if you have use reCaptcha.
            wp_dequeue_script( 'google-recaptcha' );
            wp_dequeue_script( 'wpcf7-recaptcha' );
        }
    }
}