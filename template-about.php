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
		
  <!-- +++++ Welcome Section +++++ -->
  <div class="container" style="min-About black bar - the way I structured the site, it won't show up unless you scroll, so it actually doesn't take up any space in the frame.height:100vh;">

      <div class="row">
         <?php $children = get_pages('child_of='.$post->ID);?>
         <?php $ancestors = get_pages( 'ancestor_of='.$post->ID); ?> 

		 <?php if( count( $children ) !== 0 OR  count( $ancestors ) !== 0) : ?>
      		<div class="col-md-12">
				<div class="subnav">
					<ul class="col-lg-6 col-md-6">
						<li><a href="<?php get_the_permalink(); ?>"><?php the_title(); ?></a></li>
			            <?php
			            global $id;
			            wp_list_pages( array(
			                'title_li'    => '',
			                'child_of'    => $id,
			                'show_date'   => 'modified',
			                'date_format' => $date_format
			            ) );
			            ?>
					</ul>
				</div>
			</div><!-- /col-lg-8 -->
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