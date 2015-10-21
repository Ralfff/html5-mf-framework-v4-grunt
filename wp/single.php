<?php get_header(); ?> 

	<div class="content clear">  
		<section>
			<div class="frame clear"> 

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							
							<h2><?php the_title(); ?></h2>
							
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				
							<div class="entry">
								
								<?php the_content(); ?>
				
								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
								
								<?php the_tags( 'Tags: ', ', ', ''); ?>
				
							</div>
							
							<div class="clear prev-next-container">
								<div class="half"><?php previous_post_link(); ?></div>
								<div class="half align-right"><?php next_post_link(); ?></div>
							</div>
							
							<?php edit_post_link('Seite bearbeiten.', '<p>', '</p>'); ?>
							
						</div>
				
					<?php comments_template(); ?>
				
					<?php endwhile; endif; ?> 
		
					<?php get_sidebar(); ?>


			</div> <!--END FRAME-->
		</section>
	</div> <!--END CONTENT--> 
	
<?php get_footer(); ?>