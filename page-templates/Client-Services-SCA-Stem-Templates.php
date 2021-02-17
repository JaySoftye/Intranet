<?php
/*
Template Name: Client Services SCA STEM Templates
*/

 get_header(); do_action( 'foundationpress_before_content' ); ?>

<main id="sales-assistance-portal">
<?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

 <div class="container archive-content">
   <div class="title row">
		 <div class="column small-12">
       <?php
          $args = array (
            'post_type' => 'salesassistance',
            'category_name' => 'sca-stem-templates'
          );
          $the_query = new WP_Query( $args );
        ?>
			 <h1><strong>Client Service SCA STEM Templates</strong></h1>
		 </div>
     <div class="column small-12">
       <p><small>Showing <strong>(<?php echo $the_query -> found_posts; ?>)</strong>  Result(s)</small></p>
     </div>
	 </div>
	 <div class="row archives">

		<?php if ( have_posts() ) :
      $args = array(
        'post_type' => 'salesassistance',
        'posts_per_page' => -1,
	      'orderby' => 'title',
	      'order'   => 'ASC',
        'category_name' => 'sca-stem-templates',
      );
      $the_query = new WP_Query( $args );
        while ($the_query -> have_posts()) : $the_query -> the_post();

          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
      ?>

			<div class="column small-6 medium-3">
				<div class="card <?php echo get_post_meta( $post->ID, 'location_type', true ); ?>">
  				<a href="<?php if(metadata_exists('post', $post->ID,'location')) { echo get_post_meta( $post->ID, 'location', true ); } else { the_permalink(); }; ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<img class="header-image" src="<?php echo $thumb_url[0]; ?>" />
						<?php } else { ?>
							<img class="header-image" src="<?php echo get_template_directory_uri(); ?>/images/default-image.svg" alt="<?php the_title(); ?>" />
						<?php } ?>
					</a>
  				<div class="card-section">
						<p>
              <?php
                foreach((get_the_category()) as $category) {
                  echo $category->cat_name . ' ';
                }
              ?>
            </p>
    				<h4><a href="<?php if(metadata_exists('post', $post->ID,'location')) { echo get_post_meta( $post->ID, 'location', true ); } else { the_permalink(); }; ?>"><?php the_title(); ?></a></h4>
  				</div>
				</div>
			</div>

		<?php endwhile; else : ?>

			<h3>No posts found</h3>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

 	</div>
 </div>

</main>
<?php do_action( 'foundationpress_after_content' );  get_footer();
