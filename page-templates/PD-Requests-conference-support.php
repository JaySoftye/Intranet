<?php
/**
 * Template Name: PD Requests Conference Support Request
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title pd-conference-header">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large-5 large-offset-7 columns">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/conference-support-request-icon-text.svg" alt-="PD Conference Support Request" /></h1>
      </div>
    </div>
  </section>
</div>

<div class="header-title grid-container-fluid">
  <section class="container">
    <div class="row">
      <div class="large columns">
        <h5 class="margin-bottom white-text">Please be aware that submission of this form is NOT confirmation of a reservation. The information provided will be sent to <span class="blue-text">PD Department for review.</span></h5>
      </div>
    </div>
    <div class="row">
      <div class="large columns">
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
        hbspt.forms.create({
          portalId: "182596",
	        formId: "fa514ff9-da3b-4667-a835-3cd4fd4c0916"
        });
        </script>
      </div>
    </div>
  </section>
</div>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
