<?php 
/**
 * Template for displaying services archive
 *
 * @package AVAZ
 */
 get_header(); ?>
<?php get_template_part( 'template-parts/header/header', 'archive' ); ?>
<div class="avaz__content" id="site-content">
	<section class="avaz__services avaz__section uk-section" id="avaz__services">
		<div class="section-outer">
			<div class="section-heading">
				<div class="uk-container">
					<div class="inner">
						<div class="left">
							<hr class="line avaz__hr__secondary">
							<h2 class="title uk-h1">Avaz Media & Development Services.</h2>
							<span class="subtitle avaz__heading__secondary">We work with you, Not for you</span>
						</div>
					</div>
				</div>
			</div>
			<div class="section-inner">
				<div class="uk-container">
					<div class="items-listing services-boxes uk-grid uk-grid-match uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid="">
					
					<?php get_template_part( 'template-parts/service/service', 'block' ); ?>
					
					</div>
				</div>
			</div>
		</div>
	</section>
</div><!-- Site Content End -->
<?php get_footer();