<?php
/*
Template Name: home
*/
?>

	<?php get_header(); ?>
    <!-- home.php -->
    
    <div class="container">     
        <!-- Get the Filter Navigation Box -->
        <? get_template_part('subnav'); ?>

        <div class="col-md-12">

            <div class="row">
                <!-- The Loop -->
                <?
                $hp = array(
                    'post_type'      => 'story',
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
                    <div class="col-md-6" style="background-size:cover;background-position:top center;<?php if ( get_field('thumbnail') == true ): ?>height:250px;background-image:url('<?php echo get_field('thumbnail'); ?>');<? else: ?>height:250px;background:url('http://www.nordff.architects.agency/wp-content/themes/nordff-theme/img/Article.svg');<?php endif; ?>">
                        <h2 class="featured-title"><a href="<? the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
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

