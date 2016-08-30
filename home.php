<?php
/*
Template Name: home
*/
?>

	<?php get_header(); ?>
    <!-- home.php -->
    <style>
    .navbar-fixed-top{position:absolute;}
    .logo-main {height: 45px!important;width: 85px!important;background: url('data:image/svg+xml;utf8,<svg version="1.1" id="Layer_1" xmlns="http://www.…6,259.914z"\a />\a </g>\a </g>\a </g>\a</g>\a</svg>');}
    .navbar-default .navbar-brand{height:60px;padding:10px 10px;} 
    .navbar-default{border-color:transparent;background:#222;}
    ul.nav.navbar-nav.navbar-right {padding:10px;}
    .spacer{margin-bottom: 65px!important;}
    </style>

    <script>$(document).ready(function(){
        var logo = $('.logo-main');
        logo.addClass('home'); 
    });</script>
    
    <div class="container">     
        <!-- Get the Filter Navigation Box -->
        <!--<? get_template_part('subnav'); ?> -->
        <div class="spacer" style="margin-bottom:2.5vh !important;"></div>
        <div class="col-md-12">

            <div class="row">

                <!-- First Query -->
                <?
                $feature = array(
                    'post_type'      => 'story',
                    'posts_per_page' => '1',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                $featurepost = get_posts( $feature );
                ?>
                
                <?
                foreach($featurepost as $post) :
                setup_postdata($post); 
                ?>

                    <!-- Use This Template for Each Post Displayed -->
                    <div class="col-md-8 embed-container">
                        <?php
                        // get iframe HTML
                        $iframe = get_field('video_embed');
                        // use preg_match to find iframe src
                        preg_match('/src="(.+?)"/', $iframe, $matches);
                        $src = $matches[1];
                        // add extra params to iframe src
                        $params = array(
                            'badge' => 0,
                            'controls'    => 0,
                            'hd'        => 1,
                            'autohide'    => 1
                        );
                        $new_src = add_query_arg($params, $src);
                        $iframe = str_replace($src, $new_src, $iframe);
                        // add extra attributes to iframe html
                        $attributes = 'frameborder="0"';
                        $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
                        // echo $iframe
                        echo $iframe;
                        ?>
                    </div>      
                    <?php $var = get_field('attribution'); ?>
                    <div class="col-md-4">
                        <h2 class="featured-title"><a href="<? the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                        <p class="info-tag"><?php echo get_field('run_time'); ?> (<?php echo str_replace('Storylens Pictures', '', $var) ?>) </p>
                        <p class="body">
                            <?php echo get_the_content(); ?>
                        </p>
                    </div>

                <?
                endforeach;
                ?> 

            </div>

            <!-- Second Query -->
                <?
                $hp = array(
                    'post_type'      => 'story',
                    'posts_per_page' => '5',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );
                $hpposts = get_posts( $hp );
                ?>

            <div class="row">
                <div class="accordion">
                  <ul>

                    <?
                    foreach($hpposts as $post) :
                    setup_postdata($post); 
                    ?>
                    <li style="background-size:cover;background-position: center -50px;background-repeat: no-repeat;padding:0px;<?php if ( get_field('thumbnail') == true ): ?>height:150px;background-image:url('<?php echo get_field('thumbnail'); ?>');<?php endif; ?>">
                      <div> <a href="<? the_permalink(); ?>">
                        <h2><?php echo get_the_title(); ?></h2>
                        <p><?php echo get_field('run_time'); ?> (<?php echo str_replace('Storylens Pictures', '', $var) ?>) </p>
                        </a> </div>
                    </li>   
                    <?
                    endforeach;
                    ?> 

                  </ul>
                </div>
            </div>
        </div>
    </div>

    <?
    wp_reset_postdata();
    ?>

<?php get_footer(); ?>

