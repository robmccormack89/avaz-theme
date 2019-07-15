<?php
/**
 * Template part for displaying page content
 *
 * @package AVAZ
 */

?>
<article id="<?php the_ID(); ?>" <?php post_class( 'uk-article page type-page' ); ?>>
<div class="outer">
<div class="inner">
<div class="entry-body">
<?php the_content(); ?>
</div>
</div>
</div>
</article>