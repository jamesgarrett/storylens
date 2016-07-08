<?php
/*
 * Template Name: Page
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
		
  <!-- +++++ Welcome Section +++++ -->
  <div class="container" style="height:100vh;">

      <div class="row">
         <?php $children = get_pages('child_of='.$post->ID);?>
         <?php $ancestors = get_pages( 'ancestor_of='.$post->ID); ?> 

		 <?php if( count( $children ) !== 0 OR  count( $ancestors ) !== 0) : ?>
      		<?php get_sidebar();  ?> 
		<?php endif; ?>
      </div><!-- /row -->
      <div class="row">
        <div class="col-md-12">
        <?php the_content(); ?>                   
        </div>
      </div><!-- /row -->
  </div> <!-- /container -->

		<?php endif; ?>

	<?php wp_reset_postdata(); ?>

<?php endwhile; ?>  

<?
get_footer();
?>