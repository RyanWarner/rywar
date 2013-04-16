	</span>
	</div>
	<footer></footer>
	</div>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-cleaninput.js"></script>
	<script type="text/javascript">

		$(window).load(function(){

			//$.cleanClick(['#author', '#email']);

			$('input').cleanClick();
		});
	</script>
	<?php wp_footer(); ?>
</body>
</html>