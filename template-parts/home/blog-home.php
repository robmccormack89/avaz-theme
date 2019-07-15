<section class="avaz__blog avaz__section avaz__dark section-slider uk-section uk-section-large" id="avaz__blog">
<div class="section-outer">
<div class="section-heading avaz__center">
<div class="uk-container">
<div class="inner">
<div class="center">
<h2 class="title uk-h1">Latest News.</h2>
<span class="subtitle avaz__heading__secondary">Check out some of our thinking</span>
</div>
</div>
</div>
</div> <!-- Heading End -->
<div class="section-inner">
<div class="uk-container uk-container-no">
<div class="blog-listing style-one blog-slider owl-carousel" data-items="2" data-loop="true" data-center="true" data-margin="30" data-autoplay="true" data-dots="true">
<?php query_posts( array(
'post_type' => 'post',
'post_status' => 'publish',							
'orderby' => 'date',
'order' => 'DESC',
)); ?>
<?php if ( have_posts() ) : ?>
<?php 
while ( have_posts() ) : the_post();
$termsArray = get_the_terms( $post->ID, "category" ); 
$termsString = ""; 
foreach ( $termsArray as $term ) { $termsString .= $term->name.' '; }
$termsList = array();
foreach ( $termsArray as $term ) { array_push($termsList, $term->name); }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'type-post' ); ?>>
<div class="outer">
<div class="featured-image">
<div class="image avaz__image__cover" data-src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'block-image' ); } else { echo '/assets/avazimages/works/01.jpg'; } ?>" uk-img="target: !.blog-listing"></div>
</div>
<div class="inner">
<p class="category"><?php echo implode(', ', $termsList); ?></p>
<h3 class="title uk-h5"><a href="home_03.html#"><?php the_title(); ?></a></h3>
<a href="<?php the_permalink(); ?>" class="more icon azmd-arrow-right"></a>
<a href="<?php the_permalink(); ?>" class="link"></a>
</div>
</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
</div>
</div>
</section>