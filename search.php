<?php get_header(); ?>
	<div id="inner_content">
		<?php if (have_posts()) : ?>

			<h2>Search Results</h2>

			<?php while (have_posts()) : the_post(); ?>

				<div class="search_result">

					<h1 class="post_title">
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</h1>

					<p class="post_excerpt">
						<?php the_excerpt(); ?>
					</p>

				</div>

			<?php endwhile; ?>

		<?php else : ?>

			<h2>No posts found.</h2>

		<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
