<?php
/*
 * Template Name: Blog
 * Description: A Blog Template with a darker design.
 */
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Header - BLOG.PHP -->
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                    </div>
                </div>
            </div>

        </div>
    </div>


<div class="width-container-1">
 	<div class="body">
		<div class="width-container-2">

			<div class="column-left">

				<div class="content-container-3">

					<h1><? the_title(); ?></h1>
					<hr>

					<?php $content = get_the_content();?>

					<?php the_content(); ?>
				
				</div>

			</div>

			<div class="column-right">

				<?php get_sidebar(); ?>

			</div>

		</div>
	 </div>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?
get_footer();
?>
