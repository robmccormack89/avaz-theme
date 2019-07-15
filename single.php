<?php
/**
 * The template for displaying all single posts
 *
 * @package AVAZ
 */
get_header(); ?>
<?php get_template_part( 'template-parts/header/header', 'post' ); ?>
<div class="avaz__content" id="site-content">
<div class="avaz__primary uk-section uk-section-medium" id="site-primary">
<div class="outer">
<div class="uk-container uk-position-relative">
<div class="inner uk-grid uk-grid-large uk-grid-match" data-uk-grid="">
<div class="uk-width-expand">
<main class="avaz__main" id="site-main">
<article id="post-<?php the_ID(); ?>" <?php post_class( 'uk-article' ); ?>>
<div class="outer uk-grid uk-grid-large uk-flex" data-uk-grid="">
<div class="inner uk-width-expand">
<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/post/content' ); endwhile; // End of the loop. ?>
</div>
<?php get_template_part( 'template-parts/post/post', 'sidearea' ); ?>
<?php /* get_template_part( 'template-parts/post/social', 'share' ); */ ?>
</div>
</div>
</article>
</main>
</div>
</div>
</div>
</div>
</div>
<?php get_template_part( 'template-parts/post/related', 'posts' ); ?>
</div>
<?php get_footer();
