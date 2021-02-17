<?php
/**
 * Template Name: PD Requests PD Team Bios
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title pd-bio-header">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large-5 large-offset-7 columns">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pd-bios-icon-text.svg" alt-="PD Team Bios" /></h1>
      </div>
    </div>
  </section>
</div>

<section class="padding-bottom">
  <div class="container archive-content">
 	 <div class="row archives">
     <p class="padding">We provide you with access to a dedicated team of State Certified Educators with skills and expertise in every subject and content area – English, Math, Science, Social Studies, STEM, ENL and Special Education. Teq’s PD Specialists and Curriculum Specialists who facilitate both our Onsite PD and Online PD sessions are all SMART Certified Trainers, Google Certified Educators, and possess various certifications including, but not limited to: Microsoft Office 365; Adobe Acrobat; STEM, Robotics and Coding; and Apple.</p>
 		<?php if ( have_posts() ) :
       $args = array(
         'post_type' => 'salesassistance',
         'posts_per_page' => -1,
 	      'orderby' => 'title',
 	      'order'   => 'ASC',
         'category_name' => 'pd-bio',
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
</section>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
