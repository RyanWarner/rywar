<article class="post_wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post_content">
        <?php if( get_field('feature_image')) { ?>
        <a href="<?php the_permalink() ?>" class="post_image">
            <img src="<?php the_field('feature_image'); ?>" alt="" />
        </a>
        <h1 class="post_title">
            <a class="" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h1>
        <?php }else{ ?>
        <h1 class="post_title no_image">
            <a class="" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h1>
        <?php } ?>
        <div class="post_meta">Posted by <?php echo get_the_author_link(); ?></div>
        <p class="post_excerpt">
            <?php the_excerpt(); ?>
        </p>
    </div>
    <div class="date_wrap">
        <div class="big_dot"></div>
        <p class="date"><?php the_date('M d') ?></p>
    </div>
</article>
    