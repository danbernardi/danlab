<?php include('header.php')?>

<section class="content row">
	<div class="container">
		<div class="side">
			<!--<div class="date">Aug 21</div>-->
		</div>
		<article class="post hentry">
		  <div class="portfolio-list">
		  <?php
		    $query = new WP_Query( array(
          'post_type' => 'portfolio',
          'posts_per_page' => 8,
          'order' => 'ASC'
        ) );
		  
		    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		    
		      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
          $thumb_url = $thumb['0'];
          $site_logo = get_post_meta( get_the_ID(), '_danlab_port_logo', 1 );
          $livesite = get_post_meta( get_the_ID(), '_danlab_livesite', 1 );
        ?>
		  
          <div class="item">
            <div class="holder">
              <?php if ( has_post_thumbnail() ) { ?>
                <div class="thumb" style="background-image: url(<?php echo $thumb_url; ?>);"></div>
              <?php } ?>
              <?php if ( strlen($site_logo) !=0 ) { ?>
                <img class="logo" src="<?php echo $site_logo; ?>" alt="<?php the_title(); ?>">
              <?php } else { ?>
                <h4><?php the_title(); ?></h4>
              <?php } ?>
              <div class="reveal">
                <a href="<?php the_permalink(); ?>" class="btn viewproject">
                  <?php _e('View Project', 'danlab'); ?>
                </a>
                <?php if ( strlen($livesite) != 0 ) { ?>
                  <a href="<?php echo $livesite; ?>" class="btn viewsite" target="_blank">
                    <?php _e( 'View Live Site', 'danlab' ); ?>
                  </a>
                <?php } ?>
              </div>
            </div>
          </div>
        
		      <?php endwhile; wp_reset_postdata(); ?>
		    <?php endif; ?>
      </div>
		</article>
	</div>

<?php include('footer.php') ?>