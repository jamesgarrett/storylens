<?php
/*
 * Template Name: About
 * Description: A Blog Template with a darker design.
 */
get_header();
?>
<!-- Header - PAGE.PHP -->

<!-- The Loop -->
<?php while (have_posts()) : the_post(); ?>
		<?php $pid = get_the_id(); ?>
		<?php if($post->post_content=="") : ?>

		<?php else : ?>
		


	<div class="container-fluid" style="min-height:100vh;">
		<style>.card{min-height:100vh;padding:10vh;}.card.alt{background-color:#222;color:white;}</style>

		
<!-- 		     	<li class="tab"><a href="#mission">Mission</a></li>
		     	<li class="tab"><a href="#leadership">Leadership</a></li>
		     	<li class="tab"><a href="#fellows">Fellows</a></li> -->


		<!-- Build Array of Homepage Post (3 posts in category 'About') -->
	    <?
	    $ap = array(
	        'post_type'      => 'post',
	        'posts_per_page' => '5',
	        'orderby'        => 'date',
	        'order'          => 'ASC',
	        'category_name'  => 'About' 
	    );
	    $apposts = get_posts( $ap );
	    ?>
		
		<div class="row">
		     <ul class="subnav">
		     	<?php $counter = 0; ?>
			    <?php foreach ($apposts as $post ): ?>
			    <?php $counter++; ?>

			    <? echo $title = str_replace(' ', '', $title); ?>
			    	<li class="tab"><a href="#<? echo $counter;?>"><? the_title(); ?></a></li>
			    <?php endforeach ?>
		     </ul>
		</div><!-- /row -->

	    <!-- Get Templates for About Posts - alternates Between two template for odd and even posts -->
	    <?
	    $counter = 0;
	    foreach($apposts as $post) :
	    $counter++;

	    if ( in_category('About') ):
	    setup_postdata($post); 
				?>
		<a name="<? echo $counter; ?>" style="padding-top:75px;"></a>
		<?
	        if( $counter % 2 == 0 ) : //It's even
	            get_template_part('single-about-alt', 'About-alt');
	        else:
	        	get_template_part('single-about', 'About'); 
	        endif;
	    else:
	    endif;
	    
	    endforeach;
	    ?>

	</div>


		<?php endif; ?>

	<?php wp_reset_postdata(); ?>

<?php endwhile; ?>  

<?
get_footer();
?>