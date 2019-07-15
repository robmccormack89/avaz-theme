<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up til <div class="avaz__wrapper" id="site-wrapper">. Nav menu parts + heros in template-parts/header/
 *
 * @package AVAZ
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="apple-touch-icon" sizes="57x57" href="/assets/avaz/meta/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/assets/avaz/meta/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/assets/avaz/meta/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/assets/avaz/meta/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/assets/avaz/meta/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/assets/avaz/meta/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/assets/avaz/meta/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/assets/avaz/meta/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/avaz/meta/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/assets/avaz/meta/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/avaz/meta/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/assets/avaz/meta/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/avaz/meta/favicon-16x16.png">
<link rel="manifest" href="/assets/avaz/meta/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/assets/avaz/meta/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php wp_head(); ?>
</head>
<body <?php if(basename(get_page_template()) === 'page.php' || is_page_template( array( 'page-templates/full-width-page-header.php', 'page-templates/standard-page-centered-content.php', 'page-templates/full-width-no-header.php', 'page-templates/standard-page-centered-content-no-header.php', 'page-templates/standard-page-no-header.php' ) ) || is_page( array( 'contact', 'our-team', 'about' ) )) {  body_class( 'minimal-header' ); } else { body_class(); } ?>>
<?php get_template_part( 'template-parts/header/header', 'preloader' ); ?>
<?php get_template_part( 'template-parts/navigation/navigation', 'mobile' ); ?>
<div class="avaz__wrapper" id="site-wrapper">