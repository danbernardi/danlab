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
        $embed_url = get_post_meta( get_the_ID(), '_zd_embed_url', true );
        
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

      <article class="video">
        <div class="video-content">
          <div class="boxscroll">
            <?php 
              if( strlen($embed_url) != 0 ) {
                $youtube_id = str_replace( 'https://youtu.be/', '', strstr($embed_url, 'https://youtu.be/') ); 
            ?>
              <span class="share">Click the<i class="fa fa-share-alt"></i>icon to share <i class="fa fa-caret-down"></i></span>
              <div class="embed_wrapper"><iframe id="youtube_player" width="624" height="380" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?enablejsapi=1&version=3&playerapiid=ytplayer" allowfullscreen></iframe></div>
            <?php } else { ?>
              <div class="novid"><p>There is no video here.</p></div>
            <?php } ?>
            <div class="text-content">
              <h4><?php the_title(); ?></h4>
              <?php the_content(); ?>
            </div>
        
          </div>
        </div>
      </article>
      
      
        <span class="share">Click the<i class="fa fa-share-alt"></i>icon to share <i class="fa fa-caret-down"></i></span>
        <iframe width="624" height="380" src="https://www.youtube.com/embed/rOZL8y_zvG8" allowfullscreen></iframe>
        <h5>Make Your Signs Work</h5>
        <p>Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
      
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