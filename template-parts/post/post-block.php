<div class="item">
<article id="<?php the_ID(); ?>" <?php post_class( 'uk-article post type-post' ); ?>>
<div class="outer uk-card">
<div class="featured-image uk-card-media-right uk-cover-container">
<div class="image avaz__image__cover avaz__ratio__square" data-src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'block-image' ); } else { echo '/assets/avaz/images/hero_03.jpg'; } ?>" data-uk-img=""></div>
<a href="<?php the_permalink(); ?>" class="link"></a>
</div>
<div class="inner uk-card-body">
<div class="top">
<!--- <a class="category" href="#">Careers</a> --->
<h3 class="title uk-h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p class="description"><?php the_excerpt(); ?></p>
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