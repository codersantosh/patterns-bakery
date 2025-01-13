<?php
/**
 * Title: Primary Header
 * Slug: patterns-bakery/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
	
<!-- wp:pattern {"slug":"patterns-bakery/site-identity"} /-->

</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"patterns-bakery/navigation-menu"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"30px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"accent","fontSize":"medium"} -->
<h6 class="wp-block-heading has-accent-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Order Now', 'patterns-bakery' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size"><?php esc_html_e( '(808) 555-0111', 'patterns-bakery' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
