<?php

/*
=====================
	ACF Flexible Template Loop
=====================
*/

function the_acf_loop() {
	get_template_part( 'template-parts/loop/acf-blocks', 'loop' );
}


/*
=====================
	ACF options page
=====================
*/

function my_acf_op_init() {

	if ( function_exists( 'acf_add_options_page' ) ) {

		$parent = acf_add_options_page(
			array(
				'page_title' => __( 'Theme Options' ),
				'menu_title' => __( 'Theme Options' ),
				'redirect'   => false,
			)
		);

	}
}

add_action( 'acf/init', 'my_acf_op_init' );
