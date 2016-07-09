<div class="col-md-12 col-lg-10">
	<div class="subnav">
		<div class="col-lg-4 col-md-4 featured-title">
			<h2><?php wp_title(''); ?></h2>
		</div>
		<ul class="">
            <li><a href="/archive">Articles</a></li>
            <li><a href="/archive">Videos</a></li>
            <li><a href="/archive">Podcasts</a></li><br>
            <?php
            global $id;
            wp_list_categories( array(
                'hierarchical' => false,
                'title_li' => '',
                'exclude' => '10',
                'show_date'   => 'modified',
                'date_format' => $date_format
            ) );
            ?>
		</ul>
	</div>
</div><!-- /col-lg-8 -->