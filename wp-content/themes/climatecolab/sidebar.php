<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset archives">
        <hr/>
        <form method="get" id="searchform" action="<?php echo esc_url(home_url( '/' )); ?>" role="search">
            <input type="text" class="field" name="s" value="<?php echo esc_attr(get_search_query()); ?>" id="s" placeholder="<?php esc_attr_e('Search &hellip;', 'shape'); ?>" />
            <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'shape'); ?>" />
        </form>
        <hr/>
        <h4><b>Archives</b></h4>
        <b><?php wp_get_archives(array('type' => 'monthly', 'limit' => 60, 'show_post_count' => true)); ?></b>
        <hr/>
    </div>
</div>