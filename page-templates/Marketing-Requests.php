<?php
/**
 * Template Name: Marketing Requests Main Template
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-bar marketingRequests">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large columns padding">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-submission-success-icon.svg" alt="Marketing and Strategy" /></h1>
        <h1 class="white-text text-centered"><strong>Marketing and PD</strong>,<br />thanks you for submitting your event.</h1>
        <h4 class="blue-text text-centered">Your submission request has been sent to their<br /><em>associated team(s)</em> and they will be reaching out shortly.</h4>
      </div>
    </div>
    <div class="row">
      <!--
      <div class="small-6 medium-2  columns">
        <h6 class="white text-center"><a class="bold white" href="/marketing/vendor-leads" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vendor-lead-icon.svg" /></a> Vendor Leads</h6>
      </div>
      <div class="small-6 medium-3 medium-offset-3 columns">
        <h6 class="white text-center"><a class="bold white" href="/marketing/event-requests" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-request-icon.svg" /></a> Event Request</h6>
      </div>
      <div class="small-6 medium-3 columns">
        <h6 class="white text-center"><a class="bold white" href="/marketing/campaign-requests" target="_top"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/campaign-request-icon.svg" /></a> Campaign Request</h6>
      </div>
      -->
    </div>
  </section>
</div>

<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
