<div class="navbar azmd-font-second">	
<?php wp_nav_menu( array (
'menu'              => 'main',
'menu_class'        => 'uk-navbar-nav',
'container'         => '',
'theme_location'    => 'main',
'depth'             => '0',
'items_wrap' 		=> '<nav class="menu" data-uk-scrollspy-nav="offset: 0; closest: li; scroll: true" uk-navbar><ul id="%1$s" class="%2$s">%3$s</ul></nav>',
'walker'            => new avaz_primary_menu()
) ); ?>
</div>
<div class="navbar-tigger" data-uk-toggle="target: #navbar-mobile">
<span></span>
<span></span>
<span></span>
</div>