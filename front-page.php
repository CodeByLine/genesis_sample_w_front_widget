<?php
// Header.
get_header();


genesis_widget_area( "front-page-1", array(
   'before' => '<div class="front-page-1 front-page-section"><div class="wrap">',
   'after'  => '</div></div>',
) );


genesis_widget_area( "front-page-2", array(
   'before' => '<div class="front-page-2 front-page-section"><div class="wrap">',
   'after'  => '</div></div>',
) );

genesis_widget_area( "front-page-3", array(
   'before' => '<div class="front-page-3 front-page-section"><div class="wrap">',
   'after'  => '</div></div>',
) );



genesis_widget_area( "front-page-4", array(
   'before' => '<div class="front-page-4 front-page-section"><div class="wrap">',
   'after'  => '</div></div>',
) );


genesis_widget_area( "front-page-5", array(
   'before' => '<div class="front-page-5 front-page-section"><div class="wrap">',
   'after'  => '</div></div>',
) );


// Add attributes for site-inner element, since we're removing 'content'.
function be_site_inner_attr( $attributes ) {
    // Add a class of 'full' for styling this .site-inner differently
    $attributes['class'] .= ' full';

    // Add the attributes from .entry, since this replaces the main entry
    $attributes = wp_parse_args( $attributes, genesis_attributes_entry( array() ) );
    return $attributes;
}
add_filter( 'genesis_attr_site-inner', 'be_site_inner_attr' );

// Footer.
get_footer();