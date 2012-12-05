		</div><!-- End Main row -->
		
		<footer id="content-info" role="contentinfo">
			<div class="row">
				<?php dynamic_sidebar("Footer"); ?>
			</div>
			<div class="row">
				<div class="four columns">
					&copy; 2008-<?php echo date('Y'); ?> All rights reserved.
					<br>
					Powered by <a href="http://themefortress.com/reverie/" title="Reverie Framework">Reverie Framework</a>.
				</div>
				<?php wp_nav_menu(array('theme_location' => 'utility_navigation', 'container' => false, 'menu_class' => 'eight columns footer-nav')); ?>
			</div>
		</footer>
			
	</div><!-- Container End -->
	
	<?php wp_footer(); ?>

<script type="text/javascript" src="http://fast.fonts.com/jsapi/4bc2b60a-f4ee-4f0b-a1dd-26eb6dda8525.js"></script>
</body>
</html>