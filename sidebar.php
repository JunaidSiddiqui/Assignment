<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hajujo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<div id="sidebar">
    	<h2>Today's Specials</h2>

        <p><h4>Chicken Shawarma - $7.99</h4>Grilled chicken breast shawarma wrap or plate.</p>
        <p>Chicken Shawarma - $7.99</p>
        <p>Chicken Shawarma - $7.99</p>
        <p>Chicken Shawarma - $7.99</p>
        
    </div>
    
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
