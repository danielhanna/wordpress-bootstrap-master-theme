<?php
/*
Template Name: Homepage v2
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>

								<!--  // Add Image Carousel - Daniel -->
						        <?php echo do_action('insert_bootstrapslider');  ?>
							 
							 
							 <!--  // Add Image Carousel - Daniel 
						        <?php echo do_shortcode('[image-carousel]'); ?>
						        <?php echo do_shortcode('[promoslider width="100%"  height="500px" display_excerpt="excerpt"]'); ?>
						        -->
						        
						        
								<!--  <div class="jumbotron" style="background-image: url('<?php echo $featured_src[0]; ?>'); background-repeat: no-repeat; background-position: 0 0;">
				 -->
								<div class="page-header">
									<h1><?php bloginfo('title'); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
								</div>				
								
							</div>
						
						</header>
						
						<section class="row post_content">
						
							<div class="col-sm-8">
						        
								
								
							</div>
							
						
													
						</section> <!-- end article header -->
						
						
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

   

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
         <?php query_posts('p=featurette-24'); ?>
	<?php while (have_posts()) : the_post(); ?>
		
          <h2 class="featurette-heading">
          		<?php the_title(); ?></h2>
          <p class="lead"><?php the_content(); ?></p>
        </div>
        
        <?php endwhile;?>
        
        
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
						
						
						
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>