<?php
/**
 * Template Name: PD Requests Main Template
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-bar pdRequests">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large columns">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teq-professional-development.svg" alt="Teq Professional Development, Online, Onsite, nOw" /></h1>
        <h5 class="padding white-text text-centered">From certifications and mentoring days to our state-of-the-art online professional development, we’ve designed our offerings to drive growth in four performance areas. When you purchase Teq’s Professional Development, you purchase a <span class="teqBlue">team of subject and grade level experts</span> that won't offer you a “canned” PD approach.</h5>
      </div>
    </div>
    <div class="row">
      <div class="small-6 medium-3 medium-offset-3 columns">
        <h6 class="text-center"><a href="http://www.surveygizmo.com/s3/3870375/pre-sales-survey" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/presales-survey-icon.svg" /></a> Pre-Sales Survey</h6>
      </div>
      <div class="small-6 medium-3 columns">
        <h6 class="text-center"><a href="https://www.teq.com/pd-bios/" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pd-bios-icon.svg" /></a> PD Team Bios</h6>
      </div>
    </div>
  </section>
</div>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
