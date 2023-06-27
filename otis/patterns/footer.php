<?php
/**
 * Title: Default footer
 * Slug: otis/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--60)","bottom":"var(--wp--preset--spacing--60)"}}}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
			<?php
				$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'otis' ) ) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					/* Translators: WordPress link. */
					esc_html__( 'Designed with %1$s', 'otis' ),
					$wordpress_link
				);
				?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
