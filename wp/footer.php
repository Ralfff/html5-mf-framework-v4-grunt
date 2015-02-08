		<footer>
			<div class="frame">
					&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> 

					<nav class="footer-nav clear">
						<?php wp_nav_menu( array('theme-location' => 'footer-nav' )); ?>
					</nav>

			</div> <!--END FRAME-->
		</footer> <!--END FOOTER-->

	
	</div> <!--END Container--> 

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
