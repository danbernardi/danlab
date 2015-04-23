<?php include('header.php')?>

<section class="content row">
	<div class="overlay"></div>
	<div class="container">
		<div class="side">
			<!--<div class="date">Aug 21</div>-->
		</div>
		<article class="post hentry">
			<?php 
			  if ( have_posts() ) : while ( have_posts() ) : the_post();
			  $livesite = get_post_meta( get_the_ID(), '_danlab_livesite', 1 );
			  $prev_post = get_previous_post();
        $next_post = get_next_post();
        $mockup_img = get_post_meta( get_the_ID(), '_danlab_port_mockup', 1 );
			?>
			
			<?php if ( strlen($mockup_img) != 0 ) { ?>
        <figure class="title-image">
          <img src="<?php echo $mockup_img; ?>" alt="<?php the_title(); ?>">
        </figure>
      <?php } ?>
			
			<div class="subnav">
			  <ul>
			    <li class="portfolio-nav"><ul>
			      <?php if ( !empty( $prev_post ) ) { ?>
			        <li class="prev"><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="fa fa-fw fa-angle-left"></i></a></li>
            <?php } ?>
            <?php if ( !empty( $next_post ) ) { ?>
			        <li class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><i class="fa fa-fw fa-angle-right"></i></a></li>
            <?php } ?>
			    </ul></li>
			    <li class="back-to-portoflio"><a href="<?php echo get_permalink(8); ?>">
            <i class="fa fa-th"></i> 
            <?php _e('Back to Portfolio', 'danlab'); ?>
			    </a></li>
			    <li class="site-meta"><ul>
			      <li class="site-title"><?php the_title(); ?></li>
			      <?php if ( strlen($livesite) != 0 ) { ?>
              <li class="site-link"><a href="<?php echo $livesite; ?>" target="_blank">
                <?php _e('View live site', 'danlab'); ?>
              </a></li>
            <?php } ?>
			    </ul></li>
			  </ul>
			</div>
			
			
			<div class="content-left">
        <?php the_content(); ?>
      </div>
      <aside class="sidebar">
        <div class="specs">
          <h6><?php _e('Site Specs', 'danlab'); ?></h6>
          <ul>          
          <?php
            $entries = get_post_meta( get_the_ID(), '_danlab_spec_repeat_group', true );
            foreach ( (array) $entries as $key => $entry ) {
                $img = $title = $desc = $caption = '';
                if ( isset( $entry['spec_icon'] ) )
                    $spec_icon = $entry['spec_icon'];

                if ( isset( $entry['spec_text'] ) )
                    $spec_text = $entry['spec_text'];

                if ( isset( $entry['spec_url'] ) )
                    $spec_url = $entry['spec_url']; 
          ?>
            <li>
              <i class="fa fa-fw <?php echo $spec_icon; ?>"></i>
              <?php if ( strlen($spec_url) != 0 ) { ?>
                <a href="<?php echo $spec_url; ?>" target="_blank"><?php echo $spec_text; ?></a>
              <?php } else { ?>
                 <?php echo $spec_text; ?>
               <?php } ?>

            </li>
                
            <?php } ?>
            <?php if ( strlen($livesite) != 0 ) { ?>
              <li><i class="fa fa-fw fa-share-square-o"></i> <a href="<?php echo $livesite; ?>" target="_blank">
                <?php _e('View live site', 'danlab'); ?>
              </a></li>
            <?php } ?>
          </ul>
		    </div>
			</aside>
			
			<?php endwhile; ?>
		  <?php endif; ?>
		</article>
	</div>

<?php include('footer.php') ?>