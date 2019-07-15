<section class="avaz__blog avaz__section section-slider uk-section uk-section-large uk-section-default" id="avaz__blog">
<div class="section-outer">
<div class="section-heading">
<div class="uk-container">
<div class="inner">
<div>
<hr class="line avaz__hr__secondary">
<h2 class="title uk-h3 avaz__heading__secondary">Recent Posts Posts.</h2>
</div>
</div>
</div>
</div>
<div class="section-inner">
<div class="uk-container">
<?php global $wp_query; $current_id = $wp_query->get_queried_object_id(); ?>
<div class="blog-listing style-two blog-slider uk-grid uk-grid-collapse uk-child-width-1-3@m" data-uk-grid="">
<?php
$currentID = get_the_ID();
$args = array(
'post_type' => 'post',
'posts_per_page' => 3,
'orderby' => 'date',
'order' => 'DESC',
'post__not_in' => array($currentID),
);
$loop = new WP_Query( $args ); while( $loop->have_posts() ) : $loop->the_post();
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'block-image' );
$url = $thumb['0'];
$termsArray = get_the_terms( $post->ID, "category" ); 
$termsString = ""; 
$thecategory = get_the_category();
$first_category = $thecategory[0];
$category_link = get_category_link( $first_category );
foreach ( $termsArray as $term ) { $termsString .= $term->slug.' '; }
$termsList = array();
foreach ( $termsArray as $term ) { array_push($termsList, $term->name); }
if( $current_id == get_the_ID() ) { $active = 'active-post'; }
else { $active = ''; }
$first = false;
if( $loop->current_post == 0 ) { $first = true; }
?>
<div class="item">
<article class="post type-post <?php echo $active ?> <?= ($first ? 'active' : ''); ?>">
<div class="outer">
<div class="featured-image">
<div class="image avaz__image__cover" data-src="<?php echo $url;?>" data-uk-img=""></div>
</div>
<div class="inner">
<div class="top">
<a class="category" href="<?php echo $category_link ?>"><?php echo $first_category->name ?></a>
<h3 class="title uk-h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p class="description"><?php the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>" class="link"></a>
</div>
<div class="bottom">
<ul class="meta">
<li class="meta-date"><?php echo get_the_date(); ?></li>
</ul>
</div>
</div>
</div>
</article>
</div>
<?php endwhile; wp_reset_postdata();?>
</div>
</div>
</div>
</div>
</section>