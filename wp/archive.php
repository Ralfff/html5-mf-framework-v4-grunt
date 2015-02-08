<?php get_header(); ?> 
	
	<div class="content clear">  
		<section>
			<div class="frame clear"> 


					<?php if (have_posts()) : ?>
			
 						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			
						<?php /* If this is a category archive */ if (is_category()) { ?>
							<h2>Archiv f&uuml;r die &#8216;<?php single_cat_title(); ?>&#8217; Kategorie</h2>
			
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
							<h2>Beitr&auml;ge mit dem Schlagwort &#8216;<?php single_tag_title(); ?>&#8217;</h2>
			
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<h2>Archiv f&uuml;r<?php the_time('F jS, Y'); ?></h2>
			
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<h2>Archiv f&uuml;r <?php the_time('F, Y'); ?></h2>
			
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<h2>Archiv f&uuml;r <?php the_time('Y'); ?></h2>
			
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
							<h2>Autor Archiv </h2>
			
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<h2>Blog Archiv</h2>
						
						<?php } ?>
			
						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
						<?php while (have_posts()) : the_post(); ?>
						
							<div <?php post_class() ?>>
							
								<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								
								<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			
								<div class="entry">
									<?php the_content(); ?>
								</div>
			
							</div>
			
						<?php endwhile; ?>
			
						<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
					
						<?php else : ?>
					
							<h2>Nichts gefunden</h2>
					
					<?php endif; ?> 

			</div> <!--END FRAME-->
		</section>
	</div> <!--END CONTENT--> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>