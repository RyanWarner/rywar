<?php get_header(); ?>

	<div id="inner_content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article class="post_wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		        <div class="post_content">
		            <?php if( the_field('feature_image') ) { ?>
			        <a href="<?php the_permalink() ?>" class="post_image">
			            <img src="<?php the_field('feature_image'); ?>" alt="" />
			        </a>
			        <h1 class="post_title">
			            <?php the_title(); ?>
			        </h1>
			        <?php }else{ ?>
			        <h1 class="post_title no_image">
			            <?php the_title(); ?>
			        </h1>
			        <?php } ?>
		            <div class="post_meta">Posted by <?php echo get_the_author_link(); ?></div>
		            <?php the_content(); ?>
		        </div>
		        <div class="date_wrap">
		            <div class="big_dot"></div>
		            <p class="date"><?php the_date('M d') ?></p>
		        </div>
			</article>

		<?php endwhile; endif; ?>
	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>