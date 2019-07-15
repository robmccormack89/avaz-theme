<?php 
/**
 * Custom page template for page with slug 'home'
 *
 * @package AVAZ
 */
 get_header(); ?>
 
<?php get_template_part( 'template-parts/header/header', 'darkhome' ); ?>

<?php get_template_part( 'template-parts/home/hero', 'home' ); ?>

<?php get_template_part( 'template-parts/home/features', 'home' ); ?>

<div class="avaz__content" id="site-content">

<?php get_template_part( 'template-parts/home/services', 'home' ); ?>
	
<?php get_template_part( 'template-parts/home/portfolio', 'home' ); ?>

<?php get_template_part( 'template-parts/home/about', 'home' ); ?>

<?php get_template_part( 'template-parts/home/client', 'home' ); ?>

<?php get_template_part( 'template-parts/home/blog', 'home' ); ?> 

</div><!-- Site Content End -->

<?php get_footer(); ?>