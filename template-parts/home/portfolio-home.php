<section class="avaz__works avaz__section avaz__dark section-slider uk-section" id="avaz__works">
<div class="section-outer">
<div class="section-heading">
<div class="uk-container">
<div class="inner">
<div class="left">
<hr class="line avaz__hr__secondary">
<h2 class="title uk-h1">Our Portfolio.</h2>
<span class="subtitle avaz__heading__secondary">Work we've done</span>
</div>
<div class="right">
<a class="button uk-button uk-button-default" href="/portfolio" target="_blank">View all</a>
</div>
</div>
</div>
</div>
<div class="section-inner">
<div class="uk-container uk-container-no">
<div class="items-listing works-boxes works-slider owl-carousel" data-items="2" data-margin="30" data-loop="true" data-center="true" data-autoplay="false" data-dots="true">
<?php query_posts( array(
'post_type' => 'portfolio',
'post_status' => 'publish',								
'orderby' => 'date',
'order' => 'DESC',
)); ?>
<?php if ( have_posts() ) : ?>
<?php 
while ( have_posts() ) : the_post(); 
$termsArray = get_the_terms( $post->ID, "project-category" ); 
$termsString = ""; 
foreach ( $termsArray as $term ) { $termsString .= $term->name.' '; }
$termsList = array();
foreach ( $termsArray as $term ) { array_push($termsList, $term->name); }
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="item work-box">
<div class="outer">
<div class="image avaz__image__cover avaz__ratio__square" data-src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'block-image' ); } else { echo '/assets/avaz/images/works/01.jpg'; } ?>" uk-img="target: !.items-listing"></div>
<div class="inner">
<h3 class="title uk-h4"><?php the_title(); ?></h3>
<p class="category"><?php echo implode(', ', $termsList); ?></p>
<a href="<?php the_permalink(); ?>" class="link uk-position-cover"></a>
</div>
</div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
</div>
</div>
</section><!-- Section: Works End -->