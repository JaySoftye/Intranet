<?php
/**
 * Template Name: Marketing Requests Vendor Leads
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title marketing-vendor-leads-header">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large-8 columns">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vendor-leads.svg" alt-="Vendor Leads" /></h1>
      </div>
    </div>
  </section>
</div>

<div class="header-title grid-container-fluid">
  <section class="container">
    <div class="row">
      <div class="large columns">
        <h5 class="margin-bottom white-text">As part of the Marketing Team’s continuing goal to suppor the Sales Team, we would like  to know when a new prospect is in the pipeline. This will help us better evaluate successful marketing strategies, campaigns, product information, etc. Using the form below, please fill out the Vendor Lead information. <strong>Please note all required fields are marked with an  <span class="green-text">Asterisk *</span></strong></h5>
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
            css: '',
            portalId: '182596',
            formId: '65d53e71-f5b9-471c-9bcf-d0287cb905a5'
          });
        </script>
      </div>
    </div>
  </section>
</div>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
