<?php
/**
 * Template part for displaying project content
 *
 * @package AVAZ
 */

?>
<article id="<?php the_ID(); ?>" <?php post_class( 'uk-article post type-project' ); ?>>
<div class="outer uk-grid uk-grid-large" data-uk-grid="">
<div class="inner uk-width-expand">
<div class="entry-body">
<?php the_content(); ?>
</div>
</div>
<div class="avaz__entry__sidebar uk-width-1-5@l">
<div class="avaz__entry__meta avaz__vr">
<h2 class="title">Project Details</h2>
<ul class="content uk-list uk-list-divider">
<li class="author"><strong>Client</strong><span><?php echo get_post_meta(get_the_ID(), 'project_client', TRUE); ?></span></li>
<li class="date"><strong>Date</strong><span><?php echo get_the_date(); ?></span></li>
<li class="category"><strong>Category</strong><span><?php the_terms( $post->ID, 'project-category' ); ?></span></li>
</ul>
</div>
<div class="avaz__entry__footer">
<a href="<?php echo get_post_meta(get_the_ID(), 'project_url', TRUE); ?>" target="_blank" class="button uk-button uk-button-default uk-width-1-1">Visit site</a>
</div>
</div>
</div>
</article>