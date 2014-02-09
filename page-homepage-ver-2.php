<?php
/*
Template Name: Homepage Template
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
									
						<header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>
							
						
				
							</div>
						
						</header>
						<!--  // Add Image Carousel - Daniel -->
						    <?php echo do_action('insert_bootstrapslider');  ?>
						 
						<!--<section class="row post_content">
						
							<div class="col-sm-8">
						
								<?php // the_content(); ?>
								
							</div>
							
							<?php // get_sidebar('sidebar2'); // sidebar 2 ?>
													
						</section> <!-- end article header --*>-->
						 
					
						
									
						 	<h1>Heading 1</h1>
						 	<?php the_content(); ?>
						 
						 	
						 	
						 <!-- START THE FEATURETTES -->
			
<!-- <hr class="featurette-divider">-->



      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo get_the_title(1); ?>  </h2>
          <p class="lead">
          
          <?php
$post_id = 1;
$queried_post = get_post($post_id);
$title = $queried_post->post_title;

echo $queried_post->post_content;
?>
          
         </p>
        </div>
        <div class="col-md-5">
        
        <?php $post_id = 1; echo get_the_post_thumbnail($post_id, 'full', array('class' => 'featurette-image img-responsive')); ?>
         
                    
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
         <?php $post_id = 30; echo get_the_post_thumbnail($post_id, 'full', array('class' => 'featurette-image img-responsive')); ?>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo get_the_title(30); ?></span></h2>
          <p class="lead">
          
            <?php
$post_id = 30;
$queried_post = get_post($post_id);
$title = $queried_post->post_title;
//echo $title;
echo $queried_post->post_content;
?>
          
          </p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php echo get_the_title(42); ?></h2>
          <p class="lead">
          
            <?php
			$post_id = 42;
			$queried_post = get_post($post_id);
			$title = $queried_post->post_title;
			//echo $title;
			echo $queried_post->post_content;
			?>
          
          </p>
        </div>
        <div class="col-md-5">
          <?php $post_id = 42; echo get_the_post_thumbnail($post_id, 'full', array('class' => 'featurette-image img-responsive')); ?>
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