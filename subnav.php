<div class="subnav">
	<ul class="">
        <li class="story-item"><a href="/stories">All Stories</a></li>
        <?php
        global $id;
        wp_list_categories( array(
            'hierarchical' => false,
            'title_li' => '',
            'hide_empty' => '0',
            'exclude' => '1',
            'show_date'   => 'modified',
            'date_format' => $date_format
        ) );
        ?>
	</ul>
</div>