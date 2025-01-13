<?php
/**
 * Title: Calendar
 * Slug: patterns-bakery/calendar
 * Categories: posts
 * Description: Display a calendar showing your site’s posts, commonly placed in sidebars, footers, or site maps.
 *
 * @package    Patterns_Bakery
 * @subpackage Patterns_Bakery/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:40px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"30px"}},"typography":{"fontSize":"24px"}}} -->
<h4 class="wp-block-heading" style="margin-bottom:30px;font-size:24px"><?php esc_html_e( 'Calendar', 'patterns-bakery' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:calendar /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
