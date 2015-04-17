<?php include('header.php'); ?>
	
	<section class="pagetitle"></section>
	
	<section class="blogroll">
    <div class="anchor" id="blog"></div>
    <div class="post">
      <h5 class="label"><i class="fa fa-trophy"></i>Blog</h5>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        $f_cta_enable = get_post_meta( get_the_ID(), '_zd_add_footer_cta', true );
        $f_cta_text = get_post_meta( get_the_ID(), '_zd_footer_cta_text', true );
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

      <article>
        <div class="index-meta">
          <span class="author"><?php _e('Posted by ', 'zd') . the_author(); ?></span>
          <?php _e('on ', 'zd'); ?>
          <span class="date"><?php echo get_the_date(); ?></span>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php the_excerpt(); ?>
        <?php echo get_the_tag_list('<p class="index-taglist"><strong>Tags: </strong>',', ','</p>'); ?>
        <a class="btn" href="<?php the_permalink(); ?>"><i class="fa fa-play"></i><?php _e('Read More', 'zd'); ?></a>
      </article>
      
      <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      
      <div class="pagination">
        <?php zd_numeric_posts_nav(); ?>
      </div>

    </div>

    <aside class="sidebar">
      <?php dynamic_sidebar('blog_sidebar'); ?>
    </aside>
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