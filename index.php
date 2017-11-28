<?php get_header(); ?>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php 
            if (have_posts()) : while (have_posts()) : the_post();
                get_template_part('content', get_post_format());
            endwhile; endif; 
            ?>
            <div class="pagination clearfix">
                <div class="nav-previous right"><?php next_posts_link( 'Older posts »' ); ?></div>
                <div class="nav-next left"><?php previous_posts_link( '« Newer posts' ); ?></div>
            </div> 
            <hr />
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>