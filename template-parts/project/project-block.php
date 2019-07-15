<div class="uk-container uk-margin-large-top uk-margin-large-bottom avaz-portfolio-uk">
	<div uk-filter="target: .js-filter; animation: 2000">
	
		<div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
		
			<div>
				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<li uk-filter-control><a href="#">All</a></li>
				</ul>
			</div>
			<div>

				<ul class="uk-subnav uk-subnav-pill" uk-margin>
					<?php
					$terms = get_terms("project-category");
					$count = count($terms);
					if ( $count > 0 ){ foreach ( $terms as $term ) { echo "<li uk-filter-control=\"[category*='" . $term->slug . "']\"><a href='#'>" . $term->name . "</a></li>\n"; } } 
					?>
				</ul>
			</div>
		</div>
		
		<?php 
		query_posts( array(
		'post_type' => 'portfolio',
		'post_status' => 'publish',								
		'posts_per_page' => -1,
		));
		?>
		<?php if ( have_posts() ) : ?>
		<div class="js-filter uk-child-width-1-3@m" uk-grid="masonry: true">
		<?php while ( have_posts() ) : the_post();
		$termsArray = get_the_terms( $post->ID, "project-category" ); 
		$termsString = ""; 
		foreach ( $termsArray as $term ) { $termsString .= $term->slug.' '; }
		$termsList = array();
		foreach ( $termsArray as $term ) { array_push($termsList, $term->slug); }
		// An attachment/image ID is all that's needed to retrieve its alt and title attributes.
		$image_id = get_post_thumbnail_id();
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
		$image_caption = wp_get_attachment_caption();
		$image_title = get_the_title($image_id);
		?>
		
				<div id="<?php the_ID(); ?>" category="<?php echo implode(', ', $termsList); ?>" <?php post_class(); ?>>
					<div class="uk-card uk-card-default uk-card-small">
						<div class="uk-card-media-top">
							<div class="image-wrapper-avaz">
								<img id="<?php echo $image_id; ?>" title="<?php echo $image_title; ?>" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'portfolio-block-thumb-3cols' ); } else { echo '/assets/avaz/images/07.jpg'; } ?>" alt="<?php echo $image_alt; ?>">
							</div>
						</div>
						<div class="uk-card-body">
							<h3 class="uk-card-title"><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<a class="uk-button uk-button-primary avaz-portfolio-button" href="<?php the_permalink (); ?>">Read more</a>
						</div>
					</div>
				</div>
			
		<?php endwhile; ?>
		</div>
		
		<?php the_posts_pagination(); ?>
		
		<?php endif; ?>

	</div>
</div>