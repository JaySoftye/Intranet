<?php
/**
 * Template Name: Marketing Requests Event Requests
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title marketing-event-requets-header ">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="large-8 columns">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-requests.svg" alt-="Teq Events" /></h1>
      </div>
    </div>
  </section>
</div>

<div class="header-title grid-container-fluid">
  <section class="container">
    <div class="row">
      <div class="medium columns">
        <p class="margin-bottom white-text">To help us better assess the event, please use the links below to submit your event request. The information provided will be sent to the <strong>Teq Events Team</strong>, and will be vital in helping us determine if we can accommodate the request. Please, try to complete the form to the best of your ability. If you do not receive a confirmation within 2 business days of the form submission, please contact <a class="blue-text" href="mailto:ninasclafani@teq.com"><u>Nina Sclafani</u></a> with any concerns.</p>
      </div>
    </div>
    <div class="row">
      <div class="medium-8 medium-offset-2 columns">
        <p class="white-text h5"><strong>For best results please click the form reset before getting started.  <button id="configreset" class="button small">Reset Form</button></strong></p>
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script>
          hbspt.forms.create({
	           portalId: "182596",
	           formId: "6b4cce46-60c7-4861-8bf5-eefd1f74ef94",
             onFormReady: function($form, ctx){

               $('#configreset').click(function(){
                 $('#hsForm_6b4cce46-60c7-4861-8bf5-eefd1f74ef94').trigger("reset");
               });

               var $hiddenFigures = $('.pd-section, .hs_name_and_title_of_person_requesting, .hs_pd_focus_objective_expectation, .hs_technology_and_resource, .teq-squad-section, .hs_teq_squad_does_the_school_have, .hs_blank, .hs_teq_squad_version_of_smart_notebook_being_used, .hs_teq_squad_what_type_of_display_does_the_customer_currently_have, .hs_teq_squad_has_the_customer_received_a_trial_ifp_, .hs_teq_squad_are_there_any_open_tech_support_issues_at_the_location_where_you_are_requesting_the_teq_s, .hs_does_the_school_have_an_elevator_if_not_please_insure_that_the_meeting_is_on_the_first_floor');
                 $hiddenFigures.hide();

               $('select#institution_type-6b4cce46-60c7-4861-8bf5-eefd1f74ef94').change(function(){

                 var $pdSection = $('.pd-section, .hs_name_and_title_of_person_requesting, .hs_pd_focus_objective_expectation, .hs_technology_and_resource');
                 var $teqSquad = $('.teq-squad-section, .hs_teq_squad_does_the_school_have, .hs_blank, .hs_teq_squad_version_of_smart_notebook_being_used, .hs_teq_squad_what_type_of_display_does_the_customer_currently_have, .hs_teq_squad_has_the_customer_received_a_trial_ifp_, .hs_teq_squad_are_there_any_open_tech_support_issues_at_the_location_where_you_are_requesting_the_teq_s, .hs_does_the_school_have_an_elevator_if_not_please_insure_that_the_meeting_is_on_the_first_floor')

               	if($(this).val() == 'Onsite PD Session'){
                   $pdSection.show();
                   $teqSquad.hide();
                } else if($(this).val() == 'Online/Virtual PD'){
                   $pdSection.show();
                   $teqSquad.hide();
                } else if($(this).val() == 'Online Product Demo'){
                   $pdSection.show();
                   $teqSquad.hide();
                } else if($(this).val() == 'Teq Squad'){
                   $teqSquad.show();
                   $pdSection.hide();
                } else if($(this).val() == 'Teq Squad (Online/Virtual)'){
                   $teqSquad.show();
                   $pdSection.hide();
                } else if($(this).val() == 'EdTech in Focus'){
                   $teqSquad.show();
                   $pdSection.show();
                } else {
                   $teqSquad.hide();
                   $pdSection.hide();
                }
               });
   	         }
           });
         </script>
       </div>
     </div>
  </section>
</div>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<script type="text/javascript">


</script>


<?php get_footer();
