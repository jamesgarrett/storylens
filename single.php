<?php
/*
 * Template Name: single
 * Description: A single template with bg image.
 */
get_header();
?>
<style>
    .intro-header{display:none;}
    .navbar-fixed-top{position:absolute;}
    .logo-main {height: 45px!important;width: 85px!important;background: url('data:image/svg+xml;utf8,<svg version="1.1" id="Layer_1" xmlns="http://www.…6,259.914z"\a />\a </g>\a </g>\a </g>\a</g>\a</svg>');}
    .navbar-default .navbar-brand{height:60px;padding:10px 10px;} 
    .navbar-default{border-color:transparent;background:#222;}
    ul.nav.navbar-nav.navbar-right {padding:10px;}
    .spacer{margin-bottom: 0px!important;height:65px;background:black;}
    .read-more{display:none;}
    </style>

    <script>$(document).ready(function(){
        var logo = $('.logo-main');
        logo.addClass('home'); 
    });</script>

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
</div>
<div class="container">
    <aside class="project-list col-md-3" id="sticky">
        <h4>MORE STORIES</h4>
        <?$menu = array(
            "title_li"    => "",
            "link_before" => '<span class="featured-title">',
            "link_after"  => '</span>',
            "exclude"     => 'Uncategorized',
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