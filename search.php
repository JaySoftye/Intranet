<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); do_action( 'foundationpress_before_content' ); ?>

<main id="sales-assistance-portal">
<?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

 	<div class="container archive-content">

    <div class="title row">
 		 <div class="column small-12 medium-9">
       <h1><?php _e( 'Search Results for', 'foundationpress' ); ?> <strong>"<?php echo get_search_query(); ?>"</strong></h1>
 		 </div>
      <div class="column small-12 medium-3">
        <div class="search-field-container">
          <form role="search" method="get" id="search-field" action="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.svg" id="search-icon" alt="Search" />
            <input type="hidden" value="salesassistance" name="post_type" />
            <input class="search-input" value="" name="s" id="s" placeholder="search..." type="text">
          </form>
        </div>
      </div>
 	 </div>
   <div class="row archives">
     <div class="columns">
       <p class="text-right"><small><strong>(<?php $allsearch = new WP_Query("s=$s&showposts=-1"); $count = $allsearch->post_count; echo $count . ' '; wp_reset_query(); ?>)</strong> Result(s) Found</small></p>
     </div>
   </div>

 		<div class="row archives">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

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

			 		<h4><?php _e('<em>No Results Found for:</em> ' . get_search_query() ); ?></h4>

				<?php endif;?>

		</div>

    <div class="row">
      <div class="column">
        <?php do_action( 'foundationpress_before_pagination' ); ?>
      	<?php /* Display navigation to next/previous pages when applicable */ ?>
      	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
      		<nav id="post-nav">
      			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
      			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
      		</nav>
      	<?php } ?>
      </div>
    </div>

	</div>

</main>
<?php do_action( 'foundationpress_after_content' );  get_footer();
