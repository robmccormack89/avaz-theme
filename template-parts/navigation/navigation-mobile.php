<div class="avaz__mobile__nav" id="navbar-mobile" data-uk-offcanvas="overlay: true; flip: true; mode: none">
<div class="uk-offcanvas-bar">
<button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 2;"></button>
<?php wp_nav_menu( array (
'menu'              => 'mobile',
'container'         => '',
'theme_location'    => 'mobile',
'depth'             => '5',
'menu_class'        => 'uk-nav uk-nav-offcanvas uk-nav-parent-icon',
'items_wrap'		=> '<nav class="menu"><ul id="%1$s" class="%2$s" data-uk-nav="">%3$s</ul></nav>',
'walker'            => new avaz_offcanvas_menu()
) ); ?>
</div>
</div>