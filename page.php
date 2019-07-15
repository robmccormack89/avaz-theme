<?php 
/**
 * Template for displaying pages
 *
 * @package AVAZ
 */
get_header(); ?>
<?php get_template_part( 'template-parts/header/header', 'single' ); ?>
<div class="avaz__content" id="site-content">
<div class="avaz__primary uk-section uk-section-large has-sidebar" id="site-primary">
<div class="outer">
<div class="uk-container uk-position-relative">
<div class="inner uk-grid uk-grid-large uk-grid-match" data-uk-grid="">
<div class="uk-width-expand">
<main class="avaz__main" id="site-main">
<article id="post-<?php the_ID(); ?>" <?php post_class( 'uk-article page type-page' ); ?>>
<div class="outer">
<div class="inner">
<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/page/content', 'page' ); endwhile;  ?>		
</div>
</div>
</article>
</main>
</div>
<?php get_template_part( 'template-parts/sidebars/sidebar', 'page' ); ?>
</div>
</div>
</div>
</div>
<?php /* get_template_part( 'template-parts/page/our', 'projects' ); */ ?>
</div>
<?php get_footer();