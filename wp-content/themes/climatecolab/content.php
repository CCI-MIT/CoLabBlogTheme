<div class="blog-post">
    <a href="<?php the_permalink(); ?>"><h2 class="blog-post-title"><?php the_title(); ?></h2></a>
    <div class="post-date">
        <?php the_date(); ?>
    </div>
    <div class="post-share clearfix">
        <a href="http://www.addthis.com/bookmark.php?v=250&amp;username=climatecolab" class="addthis_button_compact" addthis:url="<?php the_permalink(); ?>" addthis:title="<?php the_title(); ?>" addthis:description=""> <img src="<?php bloginfo('template_directory');?>/images/icon_share.png" height="23" alt="Share"> </a>
        <script type="text/javascript">var addthis_config={data_track_clickback:true};</script>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=climatecolab"></script>
    </div>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">
        <span>Read more about:  <?php the_title(); ?> </span>
    </a>
    <br/>
    <div class="post-author">
        By <a href="#"><?php the_author(); ?></a>
    </div>
    <hr />
</div>