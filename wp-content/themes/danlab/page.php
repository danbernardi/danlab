<?php include('header.php')?>

<section class="content row">
	<div class="overlay"></div>
	<div class="container">
		<div class="side">
			<!--<div class="date">Aug 21</div>-->
		</div>
		<article class="post hentry">
			<div class="posttitle">
				<div class="pagetitle">
          <h2><?php the_title(); ?></h2>
				</div>
		  </div>
		  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  
			  <?php the_content(); ?>
			
			<?php endwhile; else : ?>
        
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
		</article>
	</div>

<?php include('footer.php') ?>