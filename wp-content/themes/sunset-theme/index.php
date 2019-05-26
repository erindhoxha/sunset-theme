<?php get_header(); ?>
<h1>Hello World</h1>
<?php if ( is_active_sidebar( 'my_cal_1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'my_cal_1' ); ?>
        <img src="<?php echo esc_url( get_theme_mod( 'customizer_setting_one' ) ); ?>" alt="Product 1">
	</div><!-- #primary-sidebar -->
<?php endif; ?>
<?php get_footer(); ?>