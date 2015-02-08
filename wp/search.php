<?php get_header(); ?>

	<div class="content clear">  
		<section>
			<div class="frame clear"> 

					<?php if (have_posts()) : ?>
				
						<h2>Suchergebnisse</h2>
				
						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
				
						<?php while (have_posts()) : the_post(); ?>
				
							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
								<h2><?php the_title(); ?></h2>
				
								<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				
								<div class="entry">
									<?php the_excerpt(); ?>
								</div>
				
							</div>
				
						<?php endwhile; ?>
				
						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
				
					<?php else : ?>
				
						<h2>Nichts gefunden.</h2>
				
					<?php endif; ?> 
		
					<?php get_sidebar(); ?>


			</div> <!--END FRAME-->
		</section>
	</div> <!--END CONTENT--> 

<?php get_footer(); ?>