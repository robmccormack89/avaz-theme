<?php
/*
* custom page template for team page
*
* @package AVAZ
*/
get_header(); ?>

<?php get_template_part( 'template-parts/header/header', 'single' ); ?>
<div class="avaz__content" id="site-content">
<div class="avaz__primary" id="site-primary">
<div class="outer">
<main class="avaz__main" id="site-main">
<article id="post-<?php the_ID(); ?>" <?php post_class( 'uk-article page type-page' ); ?>>
<div class="uk-section uk-section-default uk-section">
<div class="uk-container">
<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/general/content', 'editor' ); endwhile;  ?>
</div>
</div>
</article>
</main>
</div>
</div>
</div>
<?php get_footer();