<!doctype html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo( 'charset' )?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
  
  <header id="masthead" class="site-header">
    <div class="container">

	<?php if ( get_header_image() && ('blank' == get_header_textcolor()) ) { ?>
    <figure class="header-image">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="< ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
        </a>
    </figure>
<?php } // End header image check. ?>
<?php 
    if ( get_header_image() && !('blank' == get_header_textcolor()) ) { 
        echo '<div class="site-branding header-background-image" style="background-image: url(' . get_header_image() . ')">'; 
    } else {
        echo '<div class="site-branding">';
    }
?>

      <h1 class="school-logo-text float-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><strong><?php bloginfo( 'name' ); ?></strong></a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
       <nav id="site-navigation" class="main-navigation">
       <h1 class="menu-toggle"><?php _e( 'Menu', 'university' ); ?></h1>
       <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'university' ); ?></a>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
          'menu_class'     => 'main-navigation'
				) );
			?>
    </nav><!-- #site-navigation -->
    
    
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>
 
  <div class="page-banner">