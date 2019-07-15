<?php 
/**
 * Template for displaying projects archive
 *
 * @package AVAZ
 */
 get_header(); ?>
<?php get_template_part( 'template-parts/header/header', 'archive' ); ?>
<div class="avaz__content" id="site-content">
<div class="avaz__primary" id="site-primary">
<main class="avaz__main" id="site-main">
<section class="portfolio-listing" id="avaz__portfolio">
<?php get_template_part( 'template-parts/project/project', 'block' ); ?>				
</section>
</main>
</div>
</div>
<?php get_footer();