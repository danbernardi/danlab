<?php include('header.php'); ?>
	
	<section class="pagetitle"></section>
	
	<section class="blog">
    <div class="anchor" id="blog"></div>
    <div class="row700">      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        $f_cta_enable = get_post_meta( get_the_ID(), '_zd_add_footer_cta', true );
        $f_cta_text = get_post_meta( get_the_ID(), '_zd_footer_cta_text', true );
        $icon = get_post_meta( get_the_ID(), '_zd_icon', true );
        $post_type = get_post_type();
        
        switch ($post_type) {
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
        <?php if( $post_type == 'services' || $post_type == 'solutions' || $post_type == 'jobs' ) { 
          
          $prev_post = get_previous_post();
          $prev_post_icon = get_post_meta( $prev_post->ID, '_zd_icon', true );
          $next_post = get_next_post();
          $next_post_icon = get_post_meta( $next_post->ID, '_zd_icon', true ); 
          
          if (!empty( $prev_post )) { ?>
            <div class="prevlink post-navigation">
              <i class="fa fa-fw fa-angle-left nav-arrow"></i>
              <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                <div>
                  <i class="fa <?php echo $prev_post_icon; ?> post-icon"></i>
                  <h6><?php echo $prev_post->post_title; ?></h6>
                </div>
              </a>
            </div>
          <?php }
            
          if (!empty( $next_post )) { ?>
            <div class="nextlink post-navigation">
              <i class="fa fa-fw fa-angle-right nav-arrow"></i>
              <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                <div>
                  <i class="fa <?php echo $next_post_icon; ?> post-icon"></i>
                  <h6><?php echo $next_post->post_title; ?></h6>
                </div>
              </a>
            </div>
          <?php } 
            
            
          
          if( strlen($icon) != 0 ) { ?>
            <div class="post-icon">
              <i class="fa <?php echo $icon; ?>"></i>
            </div>
          <?php } ?>
        <?php } ?>
        <h2 class="post-title"><?php the_title(); ?></h2>
        <div class="meta">
          <span class="author"><?php _e('Posted by ', 'zd') . the_author(); ?></span> <?php _e('on ', 'zd') . '<span class="date">' .  the_date() . '</span>'; ?>
        </div>
        
        <div class="post-content">
          <div class="socialshare desk">
            <strong><?php _e('Share', 'zd'); ?></strong>
            <ul>
              <li><a class="facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="twitter" target="_blank" href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source="><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <?php the_content(); ?>
          <div class="socialshare mob">
            <strong><?php _e('Share this post:', 'zd'); ?></strong>
            <ul>
              <li><a class="facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="twitter" target="_blank" href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source="><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <?php echo get_the_tag_list('<p class="taglist"><strong>Tags:</strong> ','','</p>'); ?>
          
          <?php if( $post_type == 'services' || $post_type == 'solutions' ) { ?>
            <div class="backto">
              <a href="<?php echo get_permalink(12); ?>">
                <i class="fa fa-caret-left"></i>
                <?php _e('Back to Services Page', 'zd'); ?>
              </a>
            </div>
          <?php } ?>
          
          <?php if( $post_type == 'jobs' ) { ?>
            <div class="backto">
              <a href="<?php echo get_permalink(20); ?>">
                <i class="fa fa-caret-left"></i>
                <?php _e('Back to Job Listings', 'zd'); ?>
              </a>
            </div>
          <?php } ?>
          
          <?php if( $post_type == 'projects' ) { ?>
            <div class="backto">
              <a href="<?php echo get_home_url(); ?>#showcase">
                <i class="fa fa-caret-left"></i>
                <?php _e('Back to Projects', 'zd'); ?>
              </a>
            </div>
          <?php } ?>
          
          <?php if( $post_type == 'post' ) { ?>
            <div class="backto">
              <a href="<?php echo get_permalink(16); ?>">
                <i class="fa fa-caret-left"></i>
                <?php _e('Back to Blog', 'zd'); ?>
              </a>
            </div>
          <?php } ?>
          
        </div>
      </article>
      
      <?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      
      <?php if( comments_open() ) { ?> 
        <div class="divider"></div>
        <?php comments_template('comments.php'); ?>
      <?php } ?>
      
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