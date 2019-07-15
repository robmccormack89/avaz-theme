<?php
$category = get_the_category();
$first_category = $category[0];
$category_link = get_category_link( $first_category );
?>
<div class="avaz__hero__wrap avaz__dark" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } else { echo '/assets/avaz/images/works/06.jpg'; } ?>');" data-uk-parallax="bgy: -200" id="site-hero">
<header class="avaz__header" data-uk-sticky="top: 443; animation: uk-animation-slide-top;">
<div class="uk-container">
<div class="inner">
<?php get_template_part( 'template-parts/header/header', 'logo' ); ?>
<?php get_template_part( 'template-parts/navigation/navigation', 'main' ); ?>
</div>
</div>
</header>
<section class="avaz__hero uk-section" id="avaz__hero">
<div class="uk-container">
<div class="section-inner">
<div class="hero-content">
<a class="category" href="<?php echo $category_link ?>"><?php echo $first_category->name ?></a>
<h2 class="page-title post-title uk-h1"><?php the_title(); ?></h2>
</div>
</div>
</div>
</section>
</div>