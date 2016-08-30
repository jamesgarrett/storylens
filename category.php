<?php
/*
 * Template Name: category
 * Description: A category template with bg image.
 */
get_header();
?>


<?php 
	$args = array(
		'post_type' => 'story',
		'category'  => '$category',
	); 
	$catequery = new WP_Query( $args );
?>
<!-- Header - CATEGORY.PHP -->
<div class="container">
	<div class="col-md-12">
		<? get_template_part('subnav'); ?>
		<div class="row">

		 <?php if ($catequery -> have_posts()) : while (have_posts()) : the_post(); ?>
		 <?php $thumb_url = get_field('thumbnail') ?>

		 	<div class="col-md-6">
		        <div class="panel-upper"  style="height:350px;background-size:cover;background-position:center;background-image:url('<? echo $thumb_url ?>');">
		        </div>
		        <div class="panel-lower">
		            <h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
		            <p><?php the_excerpt(); ?></p>
		        </div>
		    </div>
		    
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		
	</div>
</div>

<?
    get_footer();
?>