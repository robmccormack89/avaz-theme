<section class="avaz__services avaz__section avaz__dark uk-section" id="avaz__services">
<div class="section-outer">
<div class="section-heading">
<div class="uk-container">
<div class="inner">
<div class="left">
<hr class="line avaz__hr__secondary">
<h2 class="title uk-h1">What we do.</h2>
<span class="subtitle avaz__heading__secondary">We work with you, Not for you</span>
</div>
</div>
</div>
</div>
<div class="section-inner">
<div class="uk-container">
<div class="items-listing services-boxes uk-grid uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid="">
<?php query_posts( array(
'post_type' => 'services',
'post_status' => 'publish',								
'showposts' => 16, 
'posts_per_page' => 16,
'orderby' => 'title',
'order' => 'ASC',
)); ?>
<?php if ( have_posts() ) : ?>
<?php 
while ( have_posts() ) : the_post(); ?>
<?php
$counter++;
if( $counter == 1 ) {
$firstService = 'uk-active';
}
else {
$firstService = '';
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="item service-box style-one <?php echo $firstService ?>">
<div class="inner">
<i class="overlay-icon icon <?php echo get_post_meta(get_the_ID(), 'service_icon', TRUE); ?>"></i>
<h5 class="title uk-h5"><?php the_title(); ?></h5>
<i class="icon azmd-arrow-right"></i>
<a href="<?php the_permalink(); ?>" class="link uk-position-cover"></a>
</div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
</div>
</div>
</section> 