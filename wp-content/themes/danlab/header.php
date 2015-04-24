<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php include_once("analyticstracking.php") ?>
	<section id="pagewrap">
	<div class="loader"><div><i class="fa fa-spinner fa-spin"></i></div></div>
	<div class="mob-menu">
	  <div class="logo">
	    <a href="<?php echo home_url(); ?>/">
        <img src="<?php echo of_get_option( 'danlab_logo'); ?>" alt="<?php bloginfo( 'name' ) ?>"><span>Daniel Bernardi</span>
      </a>
	  </div>
	  <div class="mob-menu-trigger"><span><i class="fa fa-fw fa-bars"></i></span></div>
	</div>
	<div class="fixed-header">
    <header>
      <div>
        <div class="logo">
          <a href="<?php echo home_url(); ?>/">
            <img src="<?php echo of_get_option( 'danlab_logo'); ?>" alt="<?php bloginfo( 'name' ) ?>"><span>Daniel Bernardi</span>
          </a>
        </div>
        <nav id="on-canvas-menu">
          <?php wp_nav_menu( array('theme_location'  => 'primary' ) ); ?>
        </nav>
        <div class="hdr-footer">
          <?php
            $facebook =   of_get_option( 'danlab_facebook'   );
            $linkedin =   of_get_option( 'danlab_linkedin'   );
            $googleplus = of_get_option( 'danlab_googleplus' );
            $twitter =    of_get_option( 'danlab_twitter'    );
            $github =     of_get_option( 'danlab_github'     );
            
            if( strlen($facebook) != 0 && strlen($linkedin) != 0 && strlen($googleplus) != 0 && strlen($twitter) != 0 && strlen($github) != 0 ) { ?>
              <ul class="socialmedia">
                <?php
                  if( strlen($facebook) != 0 ) { ?>
                    <li><a target="_blank" href="<?php echo $facebook; ?>"><i class="fa fa-facebook-square"></i></a></li>
                  <?php }
                  if( strlen($linkedin) != 0 ) { ?>
                    <li><a target="_blank" href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin-square"></i></a></li>
                  <?php }
                  if( strlen($googleplus) != 0 ) { ?>
                    <li><a target="_blank" href="<?php echo $googleplus; ?>"><i class="fa fa-google-plus-square"></i></a></li>
                  <?php }
                  if( strlen($twitter) != 0 ) { ?>
                    <li><a target="_blank" href="<?php echo $twitter; ?>"><i class="fa fa-twitter-square"></i></a></li>
                  <?php }
                  if( strlen($github) != 0 ) { ?>
                    <li><a target="_blank" href="<?php echo $github; ?>"><i class="fa fa-github-square"></i></a></li>
                  <?php } ?>
              </ul>
            <?php } ?>

          <div class="copy"><?php echo of_get_option( 'danlab_copyright'); ?></div>
        </div>
      </div>
      <?php 
        $aboutme_img = of_get_option( 'danlab_about_img');
        $aboutme_text = of_get_option( 'danlab_about_text');
      if (strlen($aboutme_img) != 0 || strlen($aboutme_text) != 0) { ?>
        <div class="aboutme-holder" <?php if (strlen($aboutme_img) != 0) { echo 'data-img="' . $aboutme_img . '"'; } ?>" <?php if (strlen($aboutme_text) != 0) { echo 'data-text="' . $aboutme_text . '"'; } ?></div>
      <?php } ?>
    </header>
	</div>