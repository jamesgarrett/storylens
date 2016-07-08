<?php
/*
 * Template Name: single
 * Description: A single template with bg image.
 */
get_header();
?>

<div class="container single">
    <style>.intro-header{display:none;}</style>
    <script src="<? bloginfo('stylesheet_directory'); ?>/js/project-list.js"></script>
    <!-- HEADER - SINGLE.PHP -->
    <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
    <div class="col-md-12" <?php if ( has_post_thumbnail() ): ?>style="height:450px;background-size:cover;background-position:top;background-image:url('<? echo $large_image_url[0] ?>');"<?php endif; ?>>
         <h1 class="col-md-10 col-md-offset-1"><? the_title(); ?></h1>
         <h4 class="col-md-4 col-md-offset-4 byline"><?php echo get_field('author'); ?> - <?php echo get_the_date(); ?></h4>
         <ul class="thumb-cat"><? echo $terms; ?></ul>
    </div>
    <div class="spacer" style="margin-top:50px;"></div>
    <div id="sticky-anchor"></div>
    <aside class="project-list col-md-3" id="sticky">
        <h4>PROGRAM AREAS</h4>
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
            <?php echo wpautop($post->post_content); ?>
        </div>
    </div>
</div>


<?
    get_footer();
?>