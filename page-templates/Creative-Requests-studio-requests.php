<?php
/**
 * Template Name: Creative Requests Studio Requests
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title studioRequests">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="small columns">
        <h1 class="white-text"><strong>INTERNAL Studio</strong> Request Form</h1>
        <h3 class="green-text">This form is for <u>Teq Employees</u> to request studio recording time.</h5>
        <h3 class="green-text">For all Virtual Direct Customer Facing Requests visit: <a class="green-text" href="/marketing/event-requests/"><strong>Virtual/In Person Event Requests</strong></a></h5>
      </div>
    </div>
  </section>
</div>

<div class="header-title grid-container-fluid">
  <section class="container">
    <div class="row">
      <div class="large columns">
        <p class="white-text"><strong>The Studio is available by appointment only and is subject to availability.</strong> Please be aware that submission of this form is NOT confirmation of a reservation. The information provided will be sent to <span class="blue-text">Brian Hueter</span> and <span class="blue-text">Marcello Carnevali</span>. If you do not receive a confirmation within 1 business day of form submission please contact <span class="blue-text">Paul Principato</span> with any concerns.</p>
      </div>
    </div>
    <div class="row">
      <div class="large columns">
        <h4 class="blue-text margin-bottom"><strong>Please fill out this form in its entirety.</strong></h4>
      </div>
    </div>

<div class="row">

<div class="large-6 medium-6 columns">
<form action="<?php echo get_template_directory_uri(); ?>/studiorequest.php" name="studioRequests" method="post" class="hs-form">

  <label for="department_name">Department</label>
  <input type="text" name="department_name" placeholder="Department">

  <label for="contact_name">Contact Name</label>
  <input type="text" name="contact_name" placeholder="Contact name">

  <label for="email">Email Address</label>
  <input type="text" name="email" placeholder="Email address">

  <label for="production_type">Type of Production</label>
  <input type="text" name="production_type" placeholder="Type of production">

  <div class="row">
    <div class="large-7 medium-7 columns">
      <label for="preferred_date">preferred date</label>
      <input type="date" name="preferred_date" placeholder="Preferred date">
    </div>
    <div class="large-5 medium-5 columns">
      <label for="preferred_time">preferred time</label>
      <input type="time" name="preferred_time" placeholder="Time">
    </div>
  </div>

  <div class="row">
    <div class="large-7 medium-7 columns">
      <label for="alternative_date">alternative date</label>
      <input type="date" name="alternative_date" placeholder="Alternative date">
    </div>
    <div class="large-5 medium-5 columns">
      <label for="alternative_time">alternative time</label>
      <input type="time" name="alternative_time" placeholder="Time">
    </div>
  </div>

  <label for="description">Description of Production</label>
  <textarea name="description" placeholder="Description of production" rows="4" cols="50"></textarea>

  <label for="additional_equip">Additional Equipment?</label>
  <input type="text" name="additional_equip" placeholder="List any additional equipment needed">

  <div class="row">
    <div class="large-4 medium-4 columns">
      <label for="editing">Video need editing?</label>
      <input type="text" name="editing" placeholder="Does this video need editing?">
    </div>
    <div class="large-4 medium-4 columns">
      <label for="people">Number of People</label>
      <input type="text" name="people" placeholder="--">
    </div>
    <div class="large-4 medium-4 columns">
      <label for="duration">Approximate Duration</label>
      <input type="text" name="duration" placeholder="--">
    </div>
  </div>

  <div class="row margin-top">
    <button name="submit" type="submit" class="button margin-top" value="submit">Request Studio Time</button>
  </div>

</form>
</div>

      <div class="large-6 medium-6 columns hs-form padding-left">
        <label>-</label>
        <p class="white-text">Please allow for (3) business days advanced notice when requesting studio time. *Time sensitive recordings reviewed.</p>
        <p class="white-text">We will respond within (1) business day of the form submission.</p>
        <p class="white-text">Any cancellations must be submitted at least 24 hours prior to production.</p>
        <p class="white-text">Normal Studio operating hours are 8:30am to 5:30pm Monday thru Friday. *Subject to change.</p>
        <p class="white-text">Teq Studio A and B are intended to be used for educational purposes and the legitimate business of Teq and/or it’s channel partners. Video Department Staff have priority in the use and allocation of the studio's resources, services, and facilities. The Creative Team retains the right to decline, modify or cancel any Studio reservation.</p>
        <p class="white-text">For Studio/Video availability, Teq employees can view the current Studio schedule by accessing the "Green Room" schedule in Microsoft Outlook.</p>
        <p class="white-text" onclick="toggle_visibility('studio-policy');"><u><strong>Click Here</strong></u> For a Full list of Studio Policies and Responsibilities</p>
        <script type="text/javascript">
          function toggle_visibility(id) {
            var e = document.getElementById(id);
              if(e.style.display == 'block')
                e.style.display = 'none';
              else
                e.style.display = 'block';
              }
        </script>
        <div id="studio-policy" style="display:none;">
          <p class="white-text">The Video Studio <strong>must be</strong> reserved in order to use the space.</p>
          <p class="white-text">Reservations must be made at least <strong>three (3) Business Days</strong> prior to the scheduled event.  Last minute or Emergency Events are subject to the Studio schedule and Video Department review.</p>
          <p class="white-text">Equipment can only be used in the Video Studio by Department personnel, there is no check out policy.</p>
          <p class="white-text">Equipment can only be used in the Video Studio by Department personnel, there is no check out policy.</p>
          <p class="white-text">Equipment can only be used in the Video Studio by Department personnel, there is no check out policy.</p>
          <p class="white-text">Be respectful of others and conduct yourself in a professional manner while using the studio.</p>
          <p class="white-text">Appropriate attire and hygiene are required.</p>
          <p class="white-text">Food and drink are not permitted in the studio. </p>
          <p class="white-text">Any persons, including public visitors, must observe all Teq Studio Policies and Responsibilities.</p>
          <p class="white-text">Please dispose of wrappers, containers, and tissues in the proper trash receptacles.</p>
          <p class="white-text">If there is a conflict with your reservation or an issue with the space, contact the Video Department. For technology-related issues, contact the IT Department.</p>
          <p class="white-text">Anyone whose reservations or behaviors violate these policies, may be subject to report to their respective department head, their reservation(s) may be subject to cancellation, and/or their access to the space removed.</p>
          <p class="white-text">Room capacities must be observed.</p>
          <p class="white-text">Any and all cancellations, other than client-made cancellations,  must be made a minimum of 24 hours prior to scheduled event start.</p>
          <p class="white-text">Any modifications to your event start or end times, please contact Video Department as soon as you are made aware of them.</p>
          <p class="white-text">Studio reservations will be held for up to 20 minutes past scheduled start time without prior notification.  All reservations will be considered canceled there-after.</p>
          <p class="white-text">Employees are responsible for ensuring functionality and accessibility of all external equipment, web sites and software needed for their production.  Please contact Video Team prior to scheduled event to setup any tests and/or configuration procedures.</p>
          <p class="white-text">Any promotional material, scripts, graphics and/or media pertaining to your production must be submitted at least 24 hours prior to your scheduled start time.</p>
          <p class="white-text">All reservations will be scheduled with a 1-hour lead-in time prior to your actual start time to allow for additional setup, testing and/or rehearsal procedures.  It is recommended that you arrive at least 30 min prior to your actual start time.</p>
          <p class="white-text">All reservations will be scheduled with a 30-minute lead-out time after to your actual end time to allow for additional filming and wrap-up. </p>
          <p class="white-text">Employees are responsible for arriving to the Studio prepared and ready to begin production.  Employees that are not/ill-prepared to commence upon arrival are subject to cancellation and/or re-scheduling.   </p>
        </div>
      </div>

    </div>
  </section>
</div>


<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<?php get_footer();
