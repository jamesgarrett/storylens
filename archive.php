<?php
/*
 * Template Name: Archive
 * Description: Basic Archive template
 */
get_header();
?>

<!-- Header - Archive.PHP -->
<div class="container">
	<div class="col-md-12">
		<div class="row">

		 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		 	<div class="col-md-6">
		        <?php get_the_title(); ?>
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