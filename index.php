<?php get_header(); ?>

<div id="inner_content">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<div id="navigation"><?php posts_nav_link(); ?></div>
<?php get_footer(); ?>