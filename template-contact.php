<?php
/*
 * Template Name: Contact
 * Description: A Contact Template with a darker design.
 */
get_header();
?>
<!-- Header - PAGE.PHP -->

<!-- The Loop -->
<?php while (have_posts()) : the_post(); ?>
		<?php $pid = get_the_id(); ?>
		<?php if($post->post_content=="") : ?>

		<?php else : ?>

		<style>
		input {
	    border: 2px solid rgba(51, 51, 51, 0.19);
	    border-bottom: 2px solid #999999;
	    padding: 5px;
		}
		label {
	    text-align: left;
	    font-size: 18px;
	    font-family: 'Open sans';
		}
		input.wpcf7-form-control.wpcf7-submit {
	    width: 50%;
	    font-family: 'open sans';
	    font-weight: 600;
	    text-transform: uppercase;
		background-color: white;
	    color: darkgreen;
	    border:1px solid darkgreen;
	    border-bottom: 4px solid darkgreen;
		}
		input.wpcf7-form-control.wpcf7-submit:hover {
		background-color: darkgreen;
		color:white;
		border-bottom: 4px solid black;
		}

		</style>
		
  <!-- +++++ Welcome Section +++++ -->
  <div class="container">
      <div class="row">
      		<div class="col-md-6 col-md-offset-3">
      			<h2>Get in Touch!</h2><hr>
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