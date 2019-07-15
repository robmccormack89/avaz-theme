<?php query_posts( array(
'post_type' => 'services',
'post_status' => 'publish',								
'posts_per_page' => -1,
'orderby' => 'title',
'order' => 'ASC',
)); ?>
<?php if ( have_posts() ) : ?>
<?php 
while ( have_posts() ) : the_post(); 
$countee++;
if( $countee == 1 ) {
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