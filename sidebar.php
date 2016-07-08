<div class="col-md-12">
    <div class="subnav">
        <ul class="col-lg-6 col-md-6">
            <li><a href="<?php get_the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
            global $id;
            wp_list_pages( array(
                'title_li'    => '',
                'child_of'    => $id,
                'show_date'   => 'modified',
                'date_format' => $date_format
            ) );
            ?>
        </ul>
    </div>
</div><!-- /col-lg-8 -->