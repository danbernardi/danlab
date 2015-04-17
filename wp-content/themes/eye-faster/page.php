<?php include('header.php'); ?>

	<?php
		while ( have_posts() ) : the_post();
    $disablePageTitle = get_post_meta( get_the_ID(), '_zd_disable_page_title', true );
    $addTopNav = get_post_meta( get_the_ID(), '_zd_add_topnav', true ); 
    $f_cta_disable = get_post_meta( get_the_ID(), '_zd_disable_footer_cta', true );
    $f_cta_text = get_post_meta( get_the_ID(), '_zd_footer_cta_text', true );
    $f_cta_text_default = of_get_option( 'zd_f_cta_post');
  ?>
    
    <?php if( $addTopNav == 'on' ) { ?>
        <section class="subnav">
            <?php dynamic_sidebar('top_subnav'); ?>
        </section>
    <?php } ?>
    
    <?php if( !$disablePageTitle == 'on' ) { ?>
        <section class="pagetitle"></section>
    <?php }			
    
				the_content();
        endwhile; 
    ?>
	
<?php if( $f_cta_disable != 'on' ) { ?>
  <!-- contact cta section -->
  <section class="contact-cta">
    <?php if( strlen($f_cta_text) != 0 ) { ?>
      <h4><?php echo $f_cta_text; ?></h4>
    <?php } else { ?>
      <h4><?php echo $f_cta_text_default; ?></h4>
    <?php } ?>

    <a class="btn contactscroll" href="<?php echo get_site_url(); ?>/#connect"><?php _e('Contact Us', 'zd'); ?></a>
  </section>
<?php } ?>

<?php include('footer.php'); ?>