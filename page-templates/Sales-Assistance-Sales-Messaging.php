<?php
/*
Template Name: Sales Assistance Sales Messaging
*/

 get_header(); do_action( 'foundationpress_before_content' ); ?>

<main id="sales-assistance-portal">
<?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

 <div class="container archive-content">
	 <div class="row">
		 <div class="column">
			 <h1><strong>Sales Messaging</strong></h1>
		 </div>
	 </div>
	 <div class="row">

		<?php if ( have_posts() ) :
      $args = array(
        'post_type' => 'salesassistance',
        'posts_per_page' => -1,
        'category_name' => 'sales-messaging',
      );
      $the_query = new WP_Query( $args );
        while ($the_query -> have_posts()) : $the_query -> the_post();

          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
      ?>

			<div class="column small-12 medium-6">
				<div class="card sales-message">
          <div class="sales-message-title row">
            <div class="column small-3">
              <p><?php the_time('d'); ?></p>
              <h5><?php the_time('F'); ?></h5>
            </div>
            <div class="column small-9">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </div>
          <div class="sales-message-content row">
            <div class="column">
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/more-info-icon.svg" /></a>
            </div>
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
