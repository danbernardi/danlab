<?php

/* ------------------------------------------------
 * Custom Loops Calls
 * ------------------------------------------------*/

// list testimonials
function zd_testimonials( $atts ) {
    $output = '';
    
    extract( shortcode_atts( array(
		'category' => '',
	), $atts ) );
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
        <div class="slick">

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            
            <?php $testeeTitle = get_post_meta( get_the_ID(), '_zd_jobtitle', true ); ?>
            
            <div id="post-<?php the_ID(); ?>" class="testimonial">
                	<?php the_content(); ?>
                	<h6>&mdash; <?php the_title(); ?></h6>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_testimonials', 'zd_testimonials' );


// list team members
function zd_team_members( $atts ) {
    $output = '';
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'team_members',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
        <section class="leadership">
          <div class="anchor" id="leadership"></div>
          <h3 class="label">The Leadership</h3>

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            
            <?php $jobTitle = get_post_meta( get_the_ID(), '_zd_jobtitle', true ); ?>
            
            <div id="post-<?php the_ID(); ?>" <?php post_class('leader'); ?>>
              <a href="<?php the_permalink(); ?>" data-target="team-member">
                <?php if( has_post_thumbnail() ) {
                		echo the_post_thumbnail();
                    } else { ?>
                      <img src="/img/team-standin.png"> 
                <?php } ?>
                <h5><?php the_title(); ?></h5>
                <?php if( $jobTitle != 0 ) { ?>
                  <h6><?php echo $jobTitle; ?></h6>
                <?php } ?>
              </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </section>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_team_members', 'zd_team_members' );


// list services & solutions
function zd_list_services( $atts ) {
    $output = '';
    
    extract( shortcode_atts( array(
      'category' => 'services',
    ), $atts ) );
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => $category,
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
            
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php $icon = get_post_meta( get_the_ID(), '_zd_icon', true ); ?>
            
            <div id="post-<?php the_ID(); ?>" <?php post_class('col'); ?>>
                <a href="<?php the_permalink(); ?>">
                  <i class="fa <?php echo $icon; ?>"></i>
                  <h6><?php the_title(); ?></h6>
                  <?php the_excerpt(); ?>
                  <span class="link">Learn More</span>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_services', 'zd_list_services' );


// list videos
function zd_list_videos( $atts ) {
    $output = '';
    
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'videos',
        'posts_per_page' => -1,
        'order' => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
            <div class="cols3">
            
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php $embedURL = get_post_meta( get_the_ID(), '_zd_embed_url', true ); ?>
            
            <div id="post-<?php the_ID(); ?>" <?php post_class('col lb'); ?>>
                <a href="<?php the_permalink(); ?>" data-target="vgallery">
                  <?php if( ( $video_thumbnail = get_video_thumbnail() ) != null ) { 
                    echo "<div class='thumb'><img src='" . $video_thumbnail . "' alt='" . get_the_title() . "' /></div>"; 
                  } ?>
                  <h6><?php the_title(); ?></h6>
                  <p><?php echo excerpt(22); ?></p>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
add_shortcode( 'list_videos', 'zd_list_videos' );


// list_clients
function zd_list_clients( $atts ) {
    
    extract( shortcode_atts( array(
		  'title' => 'Companies we work with',
    ), $atts ) );
    ?>
    
    <?php
      ob_start();
      $query = new WP_Query( array(
          'post_type' => 'clients',
          'posts_per_page' => -1,
          'order' => 'ASC',
      ) );
      if ( $query->have_posts() ) { ?>
        
        <div class="clear"></div>
        <div class="clients">
          <h5><?php echo $title; ?></h5>
          <div class="slick">
          <?php 
            while ( $query->have_posts() ) : $query->the_post();
            $image = get_post_meta( get_the_ID(), '_zd_client_img', true );
          ?>

          <div><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"></div>
          
          <?php endwhile; wp_reset_postdata(); ?>

          </div>
        </div>
        <?php $myvariable = ob_get_clean();
        return $myvariable;
      }
    ?>

<?php }
add_shortcode( 'list_clients', 'zd_list_clients' );


// list_projects
function zd_list_projects( $atts ) {

      ob_start();
      $query = new WP_Query( array(
          'post_type' => 'projects',
          'posts_per_page' => 5,
          'order' => 'ASC',
      ) );
      if ( $query->have_posts() ) { ?>
        
        <div class="featured row700">
          <h5 class="label center"><i class="fa fa-star"></i><?php _e('Project Showcase', 'zd'); ?></h5>
          <div class="slick">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="project">
              <h3 class="post-title"><?php the_title(); ?></h3>
              <span class="meta"></span>
              </span>
              <span class="post-content"><?php the_excerpt(); ?></span>
              <a class="btn" href="<?php the_permalink(); ?>"><?php _e('Learn More', 'zd'); ?></a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
        </div>
        <?php 
          $myvariable = ob_get_clean();
          return $myvariable;
      }
}
add_shortcode( 'list_projects', 'zd_list_projects' );


// list_past_projects
function zd_list_past_projects( $atts ) {

      ob_start();
      $sidequery = new WP_Query( array(
          'post_type' => 'projects',
          'posts_per_page' => 4,
          'order' => 'ASC',
      ) );
      if ( $sidequery->have_posts() ) { ?>
        
        <div class="past">
          <h5 class="label"><i class="fa fa-toggle-left"></i><?php _e('Past Projects', 'zd'); ?></h5>
          <ul class="pprojects">
          <?php 
            while ( $sidequery->have_posts() ) : $sidequery->the_post();
          ?>
          
            <li>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php if(has_post_thumnail) {
                the_post_thumbnail();
              } ?>
              <span><?php the_title(); ?></span>
            </a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>
        </div>
        <?php
          $myvariable = ob_get_clean();
          return $myvariable;
      }
}
add_shortcode( 'list_past_projects', 'zd_list_past_projects' );


// recent posts
function zd_recent_posts( $atts ) {
    
    extract( shortcode_atts( array(
		  'type' => 'posts',
		  'number' => 3
    ), $atts ) );
    ?>
    
    <?php
      ob_start();
      $query = new WP_Query( array(
          'post_type' => $type,
          'posts_per_page' => $num,
          'order' => 'ASC',
      ) );
      if ( $query->have_posts() ) { ?>
        
        <ul class="<?php echo $type; ?>">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          
          <?php if( $type == 'events' ) { ?>
            <?php $dateTime = get_post_meta( get_the_ID(), '_zd_date_time', true ); ?>
            <li>
              <a>
                <span class="event-title"><?php the_title(); ?></span>
                <span class="event-time"><?php echo $dateTime; ?></span>
              </a>
            </li>
          <?php } else { ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <span class="date"><?php echo get_the_date('M j'); ?></span>
                <span class="title"><?php the_title(); ?></span>
              </a>
            </li>
          <?php } ?>
          
          <?php endwhile; wp_reset_postdata(); ?>

        </ul>
        <?php $myvariable = ob_get_clean();
        return $myvariable;
      } else { ?>
        <?php if( $type == 'events' ) { ?>
          <ul>
            <li><span class="noposts"><?php _e('There are currently no upcoming events', 'zd'); ?></span></li>
          </ul>
        <?php } else { ?>
          <ul>
            <li><span class="noposts"><?php _e('There are currently no posts in this category', 'zd'); ?></span></li>
          </ul>
        <?php } ?>
      <?php }
    ?>

<?php }
add_shortcode( 'recent_posts', 'zd_recent_posts' );


// recent blog posts
function zd_recent_blog_posts( $atts ) {

      ob_start();
      $query = new WP_Query( array(
          'post_type' => 'post',
          'posts_per_page' => 5,
          'order' => 'ASC',
      ) );
      if ( $query->have_posts() ) { ?>
        
        <ul class="pprojects">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>

          <li>
            <a href="<?php the_permalink(); ?>">
              <?php if( has_post_thumbnail() ) { the_post_thumbnail( 'tiny' ); } ?>
              <span><?php the_title(); ?></span>
            </a>
          </li>
          
          <?php endwhile; wp_reset_postdata(); ?>

          </div>
        </div>
        <?php $myvariable = ob_get_clean();
        return $myvariable;
      } else { ?>
        <ul>
          <li><span class="noposts">There are currently no posts in this category.</span></li>
        </ul>
      <?php }
    ?>

<?php }
add_shortcode( 'recent_blog_posts', 'zd_recent_blog_posts' );


/* ------------------------------------------------
 * Layout
 * ------------------------------------------------*/
 
// full width sections
function zd_section( $atts, $content = null ) {
    $output = '';
    
    extract( shortcode_atts( array(
		  'id' => '',
		  'thinrow' => 'no'
    ), $atts ) );
    
    if($thinrow == 'yes') {
      $row = 'row700';
    } else {
      $row = 'row';
    }
    
    $output .= '<section class="'.$id.'">';
    $output .= '<div class="'.$row.'">';
    $output .= do_shortcode( $content );
    $output .= '</div></section>';
    
    return $output;
}
add_shortcode( 'section', 'zd_section' );

// title labels
function zd_label( $atts ) {
    $output = '';
    
    extract( shortcode_atts( array(
		  'id' => '',
		  'title' => '',
    ), $atts ) );
    
    $output .= '<div class="anchor" id="'.$id.'"></div>';
    if(strlen($title) != 0) {
      $output .= '<h3 class="label">'.$title.'</h3>';
    }
    
    return $output;
}
add_shortcode( 'label', 'zd_label' );

// divider
function zd_divider( $atts ) {
    $output = '';
    
    $output .= '<div class="divider"></div>';
    
    return $output;
}
add_shortcode( 'divider', 'zd_divider' );


/* ------------------------------------------------
 * Misc Functions
 * ------------------------------------------------*/
 
 function zd_footer_cta( $atts, $content = null ) {
    $output = '';
    
    $output .= '<section class="contact-cta">';
    $output .= '<h4>'.$content.'</h4>';
    $output .= '<a class="btn contactscroll" href="'.home_url().'#contact">Contact Us</a></section>';
    
    return $output;
}
add_shortcode( 'call_to_action', 'zd_footer_cta' );


// disables automatic spacing & p tags inside selected shortcodes. Add shortcode name to array inside $block
function the_content_filter($content) {
	$block = join("|",array( 'list_testimonials', 'section', 'list_team_members', 'list_services', 'label', 'divider', 'call_to_action', 'list_clients', 'list_projects', 'list_past_projects', 'recent_posts', 'recent_blog_posts' ));
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");

?>