<div id="side">

    <?php get_search_form(); ?>

    <div id="tags" class="side_module">

        <h1>Tags</h1>
        <?php
        $tags = get_tags();

        if ($tags) {
            foreach ($tags as $tag) {
                echo '<a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '><div class="tag">' . $tag->name.'</div></a> ';
            }
        }
        ?>

    </div>
</div>

