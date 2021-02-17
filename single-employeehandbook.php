<?php
/**
 * The template for displaying custom post type Sales Entry
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>

<div class="container">
    <div class="row padding-top padding-bottom">
      <div class="col-md">
        <h1 class="display-4 text-center"><strong><?php the_title();?></strong></h1>
        <small class="d-block text-center">Post in <?php the_category(', ') ?> by <span class="bold"><?php the_author(); ?></span> on <?php the_time('jS F Y') ?></small>
        <?php the_content(); ?>

        <div class="padding-top">
          <?php // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() ) {
            comments_template();
          } ?>
        </div>
      </div>
    </div>
  </div>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>
<?php get_footer();
