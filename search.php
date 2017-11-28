<?php get_header(); ?>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php 
            if (have_posts()) : while (have_posts()) : the_post();
                get_template_part('content', get_post_format());
            endwhile;
            ?>
            <div class="pagination clearfix">
                <div class="nav-previous right"><?php next_posts_link( 'Older posts »' ); ?></div>
                <div class="nav-next left"><?php previous_posts_link( '« Newer posts' ); ?></div>
            </div> 
            <hr />
            <?php else : ?>
                <p class="no-search-results"><b>No results found for your search term. <a href="http://blog.climatecolab.org">Return to our blog.</a></b></p>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>