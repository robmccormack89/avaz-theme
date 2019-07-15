<?php
/*
* custom page template for contact page
*
* @package AVAZ
*/
get_header(); ?>
<?php get_template_part( 'template-parts/header/header', 'single' ); ?>
<div class="avaz__content" id="site-content">
<div class="avaz__primary uk-section" id="site-primary">
<div class="outer">
<div class="uk-container uk-position-relative">
<div class="inner uk-grid uk-grid-large uk-grid-match">
<div class="uk-width-expand">
<main class="avaz__main" id="site-main">
<article id="post-<?php the_ID(); ?>" <?php post_class( 'uk-article page type-page' ); ?>>
<div class="outer uk-grid uk-grid-large">
<div class="inner uk-width-expand">
<h2 class="title uk-h1 contact-title">Lets work together</h2>
<span class="subtitle avaz__heading__secondary">We work with you, Not for you</span>
</div>
</div>
<div class="outer uk-grid uk-grid-large">
<div class="uk-width-1-2@l">
<?php echo do_shortcode("[contact-form-7 id='1683' title='Contact Form']"); ?>
</div>
<div class="uk-width-1-2@l">
<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/contact/content', 'contact' ); endwhile;  ?>
</div>
</div>
</article>
</main>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="outer uk-grid uk-grid-large">
<div class="inner uk-width-1-1">
<?php get_template_part( 'template-parts/contact/google', 'map' ); ?>
</div>
</div>
<?php get_footer();