<?php
/*
* custom page template for about page
*
* @package AVAZ
*/
get_header(); ?>

<?php get_template_part( 'template-parts/header/header', 'center' ); ?>
<div class="avaz__content" id="site-content">
<div class="avaz__primary" id="site-primary">
<div class="outer">
<main class="avaz__main" id="site-main">
<article id="post-<?php the_ID(); ?>" <?php post_class( 'uk-article page type-page' ); ?>>
<section class="uk-section uk-article">
<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/general/content', 'editor' ); endwhile;  ?>
</section>
</article>
</main>
</div>
</div>
</div>
<?php get_footer();