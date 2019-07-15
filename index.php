<?php 
/**
 * The main template file
 * It puts together the home page if no home.php file exists.
 *
 * @package AVAZ
 */
get_header(); ?>
<?php get_template_part( 'template-parts/header/header', 'archive' ); ?>
<div class="avaz__content" id="site-content">
<hr class="avaz__vr__section">
<div class="avaz__primary uk-section uk-section-large full-width" id="site-primary">
<div class="outer">
<div class="uk-container uk-position-relative">
<div class="inner uk-grid uk-grid-large uk-grid-match" data-uk-grid="">
<div class="uk-width-expand">
<main class="avaz__main" id="site-main">
<section class="blog-listing chess-layout outer" id="avaz__blog__chess">
<div class="inner uk-grid uk-grid-collapse uk-child-width-1-3@l" data-uk-grid="">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/post/post', 'block' ); endwhile; endif; ?>
</div>
</section>
<?php if (  $wp_query->max_num_pages > 1 )
echo '<a class="button uk-button uk-button-large uk-button-default avaz_loadmore">load more posts</a>'; ?>
</main>
</div>
</div>
</div>
</div>
</div>
<hr class="avaz__vr__section">
</div>
<?php get_footer();