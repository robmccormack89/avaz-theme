<ul id="filters">
    <li><a href="#" data-filter="*" class="selected">Everything</a></li>
 <?php 
 $terms = get_terms("project-type");
 $count = count($terms);
 if ( $count > 0 ){ 
 foreach ( $terms as $term ) {  
 echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
 //create a list item with the current term slug for sorting, and name for label
 }
 } 
 ?>
</ul>

<?php
$args = array(
  'post_type'   => 'project',
  'post_status' => 'publish',
  'tax_query'   => array(
  	array(
  		'taxonomy' => 'project-type',
  		'field'    => 'slug',
  		'terms'    => 'web'
  	)
  )
 );
 
$portfolio= new WP_Query( $args );
if( $portfolio->have_posts() ) :
?>

<div id="isotope-list">

<?php
	while( $portfolio->have_posts() ) :
		$portfolio->the_post();
		$termsArray = get_the_terms( $post->ID, "project-type" ); 
		$termsString = ""; 
	foreach ( $termsArray as $term ) { 
		$termsString .= $term->slug.' '; 
	}
	$termsList = array();
	foreach ( $termsArray as $term ) {
		array_push($termsList, $term->name);
	}
?>
		
		
<?php
	$classes = array(
		'item',
		$termsString,
		'hello'
	);
?>
		
 <div id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
 <h3><?php the_title(); ?></h3>
 <p><?php echo implode(', ', $termsList); ?></p>
         <?php if ( has_post_thumbnail() ) { 
                      the_post_thumbnail();
                } ?>
 </div> <!-- end item -->
    <?php endwhile;
      wp_reset_postdata();	?>
    </div> <!-- end isotope-list -->
<?php endif; ?>	

