<?php

/***************************************************************
* Function pxjn_register_widgets()
* Register the defined widget areas for this theme
***************************************************************/
function pxjn_register_widgets() {
	
	/* repeat for each sidebar to be registered */
	register_sidebar(
		array(
			'id' => 'pxjn_posts_sidebar',
			'name' => __( 'Posts Widget Area' ),
			'description' => __( 'This widget area shows on the posts pages.' ),
			'before_widget' => '<div id="%1$s" class="widget pxjn_widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget_title pxjn_widget_title">',
			'after_title' => '</h3>'
		)
	);
	
}