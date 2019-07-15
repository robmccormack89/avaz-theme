<section class="avaz__works avaz__section section-slider uk-section uk-section-medium uk-section-default" id="avaz__works">
<div class="section-outer">
<div class="section-heading">
<div class="uk-container">
<div class="inner">
<div>
<hr class="line avaz__hr__secondary">
<h2 class="title uk-h3 avaz__heading__secondary">Some of our Projects.</h2>
</div>
</div>
</div>
</div>
<div class="section-inner">
<div class="uk-container">
<div class="items-listing works-boxes works-slider owl-carousel" data-items="3" data-margin="30" data-loop="true" data-center="true" data-autoplay="true" data-dots="true">
<?php
$args = array(
'post_type' => 'portfolio',
'posts_per_page' => 4,
'orderby' => 'title',
'order' => 'ASC', );
$loop = new WP_Query( $args ); while( $loop->have_posts() ) : $loop->the_post();
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$url = $thumb['0'];
$termsArray = get_the_terms( $post->ID, "project-category" ); 
$termsString = ""; 
foreach ( $termsArray as $term ) { $termsString .= $term->slug.' '; }
$termsList = array();
foreach ( $termsArray as $term ) { array_push($termsList, $term->name); }
?>
<div class="item work-box">
<div class="outer">
<div class="image avaz__image__cover avaz__ratio__square" data-src="<?php echo $url;?>" data-uk-img=""></div>
<div class="inner">
<h3 class="title uk-h4"><?php the_title(); ?></h3>
<p class="category"><?php echo implode(' / ', $termsList); ?></p>
<a href="<?php the_permalink(); ?>" class="link uk-position-cover"></a>
</div>
</div>
</div>			
<?php endwhile; wp_reset_postdata();?>
</div>
</div>
</div>
</div>
</section>