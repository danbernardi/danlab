<?php 
/*
Template Name: Home
*/
include('header.php')?>

<section class="content row">
	<div class="container">
		<div class="side">
			<!--<div class="date">Aug 21</div>-->
		</div>
		<article class="post hentry">
		  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  
			  <div class="left-column"><?php the_content(); ?></div>
			  <div class="right-column">
			    <div id="homepage-slideshow">
            <div class="gallery-cell"><img class="ipad" src="/img/eyefaster_ipad.png"></div>
            <div class="gallery-cell"><img class="ipad" src="/img/rithm_ipad.png"></div>
            <div class="gallery-cell"><img class="ipad" src="/img/bulo_ipad.png"></div>
            <div class="gallery-cell"><img class="iphone" src="/img/mdprime_iphone.png"></div>
            <div class="gallery-cell"><img class="iphone" src="/img/irmr_iphone.png"></div>
            <div class="gallery-cell"><img class="iphone" src="/img/eyefaster_iphone.png"></div>
          </div>
			  </div>
			
			<?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
		</article>
	</div>

<?php include('footer.php') ?>