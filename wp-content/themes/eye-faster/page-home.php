<?php
/*
Template Name: Home
*/
include('header.php'); ?>

	<?php
		while ( have_posts() ) : the_post();
    $disablePageTitle = get_post_meta( get_the_ID(), '_zd_disable_page_title', true );
    $addTopNav = get_post_meta( get_the_ID(), '_zd_add_topnav', true ); 
    $f_cta_disable = get_post_meta( get_the_ID(), '_zd_disable_footer_cta', true );
    $f_cta_text = get_post_meta( get_the_ID(), '_zd_footer_cta_text', true );
    $f_cta_text_default = of_get_option( 'zd_f_cta_post');
  ?>
    
    <div class="flag home"></div>
    <!-- hero section -->
    <section class="hero">
      <h1><span class="smaller">We use mobile <span class="blue">eye-tracking</span><br class="hideDesk"> to analyze the world from</span><br>
      <span class="larger"><strong>the shoppers</strong> point of view</span></h1>
      <span class="video"><a class="lb-btn" href="#" data-target="youtube"><i class="fa fa-play"></i></a><br>
      How it works</span>
      <div class="left">
        <a href="#">Market Research Companies<br>
        <span>Click Here</span></a>
      </div>
      <div class="right">
        <a href="#">Brands &amp; Retailers<br>
        <span>Click Here</span></a>
      </div>
    </section>
    
    <?php if( $addTopNav == 'on' ) { ?>
        <section class="subnav">
            <?php dynamic_sidebar('top_subnav'); ?>
        </section>
    <?php } ?>
    
    <?php if( !$disablePageTitle == 'on' ) { ?>
        <section class="pagetitle"></section>
    <?php } ?>
    
        <section class="services">
          <div class="anchor" id="services"></div>
          <h3 class="label"><?php _e('Our Services', 'zd'); ?></h3>
          <div class="row700">
            <?php echo do_shortcode('[list_services]'); ?>
          </div>
        </section>

        <section class="showcase">
          <div class="anchor" id="showcase"></div>
          <?php echo do_shortcode('[list_projects]'); ?>
          <?php echo do_shortcode('[list_clients]'); ?>
        </section>
        
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
        
        <section class="testimonials">
          <div class="anchor" id="testimonials"></div>
          <h3 class="label"><?php _e('We value our relationships', 'zd'); ?></h3>
          <?php echo do_shortcode('[list_testimonials]'); ?>
        </section>

        <section class="contact">
          <div class="contactus">
            <div class="anchor" id="connect"></div>
            <h5 class="label"><i class="fa fa-mail-forward"></i>Get in Touch</h5>
            <div class="address">
              <?php
                $phoneNumber = of_get_option( 'zd_contact_phone');
                $removeAlpha = preg_replace("/[^A-Za-z0-9 ]/", '', $phoneNumber);
                $trimmedPhone = preg_replace('/\s+/', '', $removeAlpha);
                $email = of_get_option( 'zd_contact_email');
                $contact = of_get_option( 'zd_contact_form' );
              ?>
              <ul>
                <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                <li><i class="fa fa-phone"></i><a href="tel:<?php echo $trimmedPhone; ?>"><?php echo $phoneNumber; ?></a></li>
              </ul>
            </div>
            <?php echo do_shortcode($contact); ?>
          </div>
            
          <div class="recent">
            <h5 class="label"><i class="fa fa-calendar"></i><?php _e('Upcoming Events'); ?></h5>
            <?php echo do_shortcode('[recent_posts type="events"]'); ?>
            <h5 class="label"><i class="fa fa-toggle-left"></i><?php _e('Recent Posts'); ?></h5>
            <?php echo do_shortcode('[recent_posts type="post"]'); ?>
          </div>
        </section>
        
        <?php endwhile; ?>
	

<?php include('footer.php'); ?>