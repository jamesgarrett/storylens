<?php
/*
 * Template Name: single
 * Description: A single template with bg image.
 */
get_header();
?>
<style>
    .intro-header{display:none;}
    .spacer{display:none;}
</style>

<div class="container-fluid no-gutter single">
    <script src="<? bloginfo('stylesheet_directory'); ?>/js/menu-hide.js"></script>
    <!-- HEADER - SINGLE.PHP -->
    <?php
    // Get the video URL and put it in the $video variable
    $videoID = get_post_meta($post->ID, 'video_embed', true);
    // Check if there is in fact a video URL
    if ($videoID) {
        echo '<div class="embed-container">';
        // Echo the embed code via oEmbed
        echo wp_oembed_get( $videoID ); 
        echo '</div>';
    }
    ?>
    <aside class="project-list col-md-3" id="sticky">
        <h4>MORE STORIES</h4>
        <?$menu = array(
            "title_li"    => "",
            "link_before" => '<span class="featured-title">',
            "link_after"  => '</span>',
            "depth"       => '1',
            "exclude"     => '10',
        );?>
        <ul>
        <?php  wp_list_categories( $menu ); ?> 
        </ul>
        <span class="previous arrow"><?php next_post_link('%link', '&#8249; Newer'); ?></span>
        <span class="next arrow"><?php previous_post_link('%link', 'Older &#8250;'); ?></span>
    </aside>
    <div class="col-md-6 article--body">
        <h2><?php echo get_the_title(); ?></h2>
        <p><?php echo get_the_excerpt(); ?></p>
    </div>
</div>


<?
    get_footer();
?>