<div class="avaz__hero__wrap avaz__dark" style="background-image: url('/assets/avaz/images/hero_03.jpg');" data-uk-parallax="bgy: -200" id="site-hero">
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
<hr class="line avaz__hr__secondary">
<?php the_archive_title( '<h2 class="page-title  uk-heading-primary">', '</h2>' ); ?>
<?php the_breadcrumb(); ?>
</div>
</div>
</div>
</section>
</div>