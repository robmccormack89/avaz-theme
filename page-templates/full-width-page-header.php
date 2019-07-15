<?php
/*
Template Name: Full Width with Standard Page Header
*
* @package AVAZ
*/
get_header(); ?>

<?php get_template_part( 'template-parts/header/header', 'single' ); ?>
<div class="avaz__content" id="site-content">
<div class="avaz__primary" id="site-primary">
<main class="avaz__main" id="site-main">
<article id="post-<?php the_ID(); ?>" <?php post_class( 'uk-article page type-page' ); ?>>
<div class="outer">
<div class="inner">
<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/page/content', 'fullpage' ); endwhile; ?>												
</div>
</div>
</article>
</main>
</div>
</div>

<?php get_footer();