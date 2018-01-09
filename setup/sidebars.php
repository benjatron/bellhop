<?php

// Creates sidebar
function bellhop_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'News Sidebar', 'bellhop' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on news posts and pages.', 'bellhop' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bellhop_widgets_init' );
