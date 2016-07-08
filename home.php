<?php
/*
Template Name: home
*/
?>

	<?php get_header(); ?>
    <!-- home.php -->
    
    <!-- Get the Filter Navigation Box -->
    <? get_template_part('subnav'); ?>


    
    <div class="container">     
        <div class="col-md-12">
            <div class="row">
                <!-- The Loop -->
                <?
                $hp = array(
                    'post_type'      => 'post',
                    'posts_per_page' => '8',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                $hpposts = get_posts( $hp );
                ?>

                <!-- Get Templates for Archive Posts -->
                <?
                foreach($hpposts as $post) :
                setup_postdata($post); 
                ?>

                <!-- Build Categories Array for Program Area -->
                 <? 
                    $taxonomy = 'category';
                     
                    // Get the term IDs assigned to post.
                    $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
                     
                    // Separator between links.
                    $separator = ', ';
                     
                    if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
                     
                        $term_ids = implode( ',' , $post_terms );
                     
                        $terms = wp_list_categories( array(
                            'title_li' => '',
                            'exclude' => '10',
                            'echo'     => false,
                            'taxonomy' => $taxonomy,
                            'include'  => $term_ids
                        ) );
                     
                        $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
                             
                    }  ?>
        
                    <!-- Use This Template for Each Post Displayed -->
                    <div class="col-md-6">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <div class="panel-upper"  style="height:300px;background-position:center;background-size:cover;background-image: url('<?php echo $image[0]; ?>')">
                        <ul class="thumb-cat"><? echo $terms; ?></ul>
                        </div>
                        <?php endif; ?>
                        <div class="panel-lower">
                            <h4 class=""><strong><a href="<? the_permalink(); ?>"><? the_title(); ?></a></strong></h4>
                            <h4 class="byline"><? echo $author = get_field('author'); ?> - <? echo get_the_date(); ?></h4>
                        </div>
                    </div>      

                <?
                endforeach;
                ?> 
            </div>
        </div>
    </div>

    <?
    wp_reset_postdata();
    ?>

<?php get_footer(); ?>

