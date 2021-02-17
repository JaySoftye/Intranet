<?php
/**
 * Template Name: Support Requests Contact Support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title support-contact-header">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="small-6 medium-4 medium-offset-6 columns">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teq_support_logo.svg" alt-="contact Teq Support" /></h1>
      </div>
    </div>
  </section>
</div>

<div class="header-title grid-container-fluid">
  <section class="container">
    <div class="row">
      <div class="medium-10 medium-offset-1 columns">
        <h5 class="margin-bottom white-text">To Contact Teq Support and Services simply fill out the form below with a detailed desciption of the issue and a Service Technician will reach out to your customer directly.</h5>
      </div>
    </div>
    <div class="row">
      <div class="medium-10 medium-offset-1 columns">
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
	         portalId: "182596",
	         formId: "c9f073d6-27f5-4ef2-83a0-5b50c6d918f7",
	         css: ""
          });
        </script>
      </div>
    </div>
  </section>
</div>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
