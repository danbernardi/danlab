<?php include('header.php'); ?>
	
	<section class="pagetitle"></section>
	
	<section class="blog">
    <div class="anchor" id="blog"></div>
    <div class="row700">      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        $f_cta_enable = get_post_meta( get_the_ID(), '_zd_add_footer_cta', true );
        $f_cta_text = get_post_meta( get_the_ID(), '_zd_footer_cta_text', true );
        $job_title = get_post_meta( get_the_ID(), '_zd_job_title', true );
        $current_post_type = get_post_type();
        
        switch ($current_post_type) {
          case 'services':
            $f_cta_text = of_get_option( 'zd_f_cta_services');
            break;
          case 'solutions':
            $f_cta_text = of_get_option( 'zd_f_cta_solutions');
            break;
          case 'jobs':
            $f_cta_text = of_get_option( 'zd_f_cta_jobs');
            break;
          default:
            $f_cta_text = of_get_option( 'zd_f_cta_post');
        }
      ?>

      <article class="leader">
        <h4><?php the_title(); ?></h4>
        <?php if( strlen($job_title) != 0) { ?>
          <h6><?php echo $job_title; ?></h6>
        <?php } ?>
        <div class="bio">
          <div class="boxscroll">
            <?php the_content(); ?>
          </div>
        </div>
      </article>
      
      <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      
    </div>
    <div class="clear"></div>
  </section>

<?php if( strlen($f_cta_text) != 0 ) { ?>
  <!-- contact cta section -->
  <section class="contact-cta">
    <h4><?php echo $f_cta_text; ?></h4>
    <a class="btn contactscroll" href="<?php echo get_site_url(); ?>/#connect"><?php _e('Contact Us', 'zd'); ?></a>
  </section>
<?php } ?>
<?php include('footer.php'); ?>