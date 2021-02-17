<?php
/**
 * The template for displaying custom post type Sales Assistance
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); do_action( 'foundationpress_before_content' );
  while (have_posts()) : the_post();
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  ?>

<main id="sales-assistance-portal">
<?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <div class="container post-content">
    <div class="row post-title">
      <div class="columns small-12 medium-10 large-centered">
        <button class="back-button" onclick="history.back();">&larr; Back </button>
        <?php if(metadata_exists('post', $post->ID,'location_expire')) { ?>
          <div class="alert-box alert">
            EXPIRES ON <?php echo get_post_meta( $post->ID, 'location_expire', true ); ?>
          </div>
        <?php } ?>
        <h1><strong><?php the_title();?></strong></h1>
        <p><small><?php the_time('F jS Y') ?></small></p>
        <?php if ( has_post_thumbnail() ) { ?>
          <p><img src="<?php echo $thumb_url[0]; ?>" /></p>
        <?php } else { ?>
          <hr />
        <?php } ?>
      </div>
    </div>
    <div class="row content">
      <div class="columns small-12 medium-10 large-centered">
        <article class="text-left">
          <?php wp_reset_query(); the_content(); ?>
          <h5><a href="<?php echo get_post_meta( $post->ID, 'location', true ); ?>"><?php echo get_post_meta( $post->ID, 'location', true ); ?></a></h5>
        </article>
      </div>
    </div>
  </div>

</main>

<?php endwhile; do_action( 'foundationpress_after_content' );  get_footer();
