<?php
/**
 * Title: search
 * Slug: sprinkler/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"border":{"color":null,"style":null,"width":null,"top":{"style":"none","width":"0px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="border-top-style:none;border-top-width:0px;padding-top:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query-title {"type":"search","style":{"spacing":{"padding":{"bottom":"1rem"}}}} /-->

<!-- wp:search {"showLabel":false,"placeholder":"Search...","width":null,"widthUnit":"%","buttonUseIcon":true,"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"border":{"color":null,"style":null,"width":null,"top":{"color":"var:preset|color|primary","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--primary);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":8,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","align":"wide"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.4rem"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sprinkler');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->