<?php include('header.php')?>

<section class="content row">
	<div class="container">
		<div class="side">
			<!--<div class="date">Aug 21</div>-->
		</div>
		<article class="post hentry">
			<div class="posttitle">
				<span class="tags">
					<?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
					
					<a href="#">Web Design</a>
					<a href="#">Tutorial</a>
					<a href="#">Development</a>
					<a href="#">Development</a>
					<a href="#">Development</a>
				</span>
				<div class="pagetitle">
          <h2><?php the_title(); ?></h2>
          <em class="meta">Posted by <?php echo get_the_author(); ?> | <?php echo get_the_date(); ?></em>
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