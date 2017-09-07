		<footer>
			<div class="frame">
					&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> 

					<?php wp_nav_menu( array('theme_location' => 'footer-nav', 'container' => 'nav', 'container_class' => 'footer-nav clear', 'menu_class' => 'footer-nav-ul clear', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' )); ?>

			</div> <!--END FRAME-->
		</footer> <!--END FOOTER-->

	
	</div> <!--END Container--> 

	<?php wp_footer(); ?>
	
	<!-- Scripts go here -->
	
</body>

</html>
