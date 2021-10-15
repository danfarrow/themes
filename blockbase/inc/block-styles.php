<?php
/**
 * Blockbase Theme: Block Styles
 *
 * @package Blockbase 
 * @since 1.2.8
 */

if ( ! function_exists( 'blockbase_register_block_styles' ) ) :

	function blockbase_register_block_styles() {

		if ( function_exists( 'register_block_style' ) ) {

			/**
			 * Register block styles
			 */
			register_block_style(
				'core/navigation',
				array(
					'name'         => 'blockbase-navigation-improved-responsive',
					'label'        => __( 'Improved Responsive Navigation', 'blockbase' ),
					'style_handle' => 'blockbase-navigation-improved-responsive',
				)
			);

		}
	}
endif;

add_action( 'after_setup_theme', 'blockbase_register_block_styles' );