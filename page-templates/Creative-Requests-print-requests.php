<?php
/**
 * Template Name: Creative Requests Print Requests
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="header-title printRequests">
  <?php get_template_part( 'template-parts/sales-header', 'none' ); ?>

  <section class="container">
    <div class="row">
      <div class="small columns">
        <h1 class="white-text"><strong>PRINT</strong> Request Form</h1>
        <h3 class="green-text">All print request <strong>MUST</strong> be made here <strong>first</strong>.</h5>
        <h3 class="green-text">Print Production is subject to availability.</h5>
      </div>
    </div>
  </section>
</div>

<div class="header-title grid-container-fluid">
  <section class="container">
    <div class="row paddingTop">
  		<div class="large-12 medium-12 columns">
  			<p class="white-text">Please be aware that submission of this form is NOT confirmation of a reservation. The information provided will be sent to <span class="green-text">the Creative Department</span>. If you do not receive a confirmation within 1-2 business days of form submission please contact <span class="blue-text">Paul Principato</span> with any concerns.</p>
      </div>
    </div>
    <div class="row">
  		<div class="large-8 medium-8 columns">
  			<p class="white-text">We will respond within (1) business day of the form submission. Any cancellations must be submitted at least 24 hours prior to production.</p>
  			<p class="white-text">Normal print production operating hours are 8:30am to 4:30pm Monday thru Friday.  We will do our best to meet your <span class="bold">Date needed</span> time frame, please allow at least 2-3 days production for larger orders over 500. <span class="bold">FOR ALL ORDERS REQUIRING PERSONALIZED ITEMS, PLEASE ALLOW AN ADDITIONAL 1-2 PRODUCTION. These terms are subject to change.</span></p>
      </div>
      <div class="large-4 medium-4 columns">
  			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/print-request-marketing-collateral-image.jpg" />
      </div>
    </div>
    <div class="row">
  		<div class="large medium columns">
  			<h5 class="white-text">ONLY fill in the quantity of all the marketing collateral you need. Leave any unnecessary collateral fields empty. <span class="green-text">Catalogs are listed Green</span> and <span class="blue-text">Datasheets are listed blue</span>. <strong>Any other specific items not listed can be requested in the "Special Instructions" field.</strong></h5>
      </div>
    </div>
    <div class="row">
      <div class="large columns">
        <h4 class="blue-text margin-bottom"><strong>Please fill out this form in its entirety.</strong></h4>
      </div>
    </div>

<form action="<?php echo get_template_directory_uri(); ?>/printrequest.php" name="printRequests" method="post" class="hs-form">
  <div class="row">
    <div class="large-4 medium-4 columns">
      <label for="employee_name">Employee</label>
      <input type="text" name="employee_name" placeholder="Employee">

      <label for="department_name">Department</label>
      <input type="text" name="department_name" placeholder="Department">

      <label for="email">email address</label>
      <input type="text" name="email" placeholder="Email address">

      <label for="reason_needed">Needed for (if an event please list)</label>
      <input type="text" name="reason_needed" placeholder="Needed for (if an event please list)">

      <label for="date_needed">Date Needed</label>
      <input type="date" name="date_needed" placeholder="Date Needed">

      <br /><br /><br />
      <label for="submit"></label>
      <input name="submit" type="submit" value="Submit My Print Request">

    </div>

    <div class="large-4 medium-4 columns">

      <label for="shipped">Is this being shipping?</label>
      <select name="shipped">
        <option selected disabled>Is this being shipped?</option>
        <option value="yes this is being shipped">Yes, this needs shipping</option>
        <option value="no shipping">No, I'll pick up the request</option>
      </select>

      <label for="description"><strong>* Please specify your request in the field below. If your request requires any personalized items, please list your name, title, and contact info here. Please note all personalized items will add to print production time.</strong></label>
      <textarea name="description" placeholder="Special instructions, address of shipment, additional Classroom Plan titles and any relevant information regarding the request. If you do not see the item in which you need listed, please state your request here." rows="15" cols="50"></textarea>
    </div>

    <div class="large-4 medium-4 columns">
      <label>Items Needed</label>
      <table class="qr-table">
        <tbody id="collateral"></tbody>
      </table>
    </div>

  </div>

  <div class="row">
    <div class="large medium columns">

    </div>
  </div>

</form>

  </section>
</div>

<script type="text/javascript" src="<?php echo esc_url( home_url('wp-content/themes/FoundationPress-master/assets/javascript/fileinput_jquery.js') ); ?>"></script>

<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<script typ="text/javascript">
var collateralOneArray = [];
  collateralOneArray[0] = {
    title : "Business Cards *",
    value : "businesscards",
    color : "blue",
  };
  collateralOneArray[1] = {
    title : "Personalized SAE circle labels *",
    value : "saelabels",
    color : "blue",
  };
  collateralOneArray[2] = {
    title : "Single Sheet STEM Solutions *",
    value : "singlesheetstem",
    color : "blue",
  };
  collateralOneArray[3] = {
    title : "OTIS for educators (full) Booklet",
    value : "otisForEducatorsFullBooklet",
    color : "green",
  };
  collateralOneArray[4] = {
    title : "OTIS Datasheet",
    value : "otis",
    color : "blue",
  };
  collateralOneArray[5] = {
    title : "NEXT Catalog",
    value : "nextCatalog",
    color : "green",
  };
  collateralOneArray[6] = {
    title : "STEM Bundles (NYC)",
    value : "stembundlescdwnyc",
    color : "green",
  };
  collateralOneArray[7] = {
    title : "STEM Bundles (Districts)",
    value : "stembundlescdwdistricts",
    color : "green",
  };
  collateralOneArray[8] = {
    title : "STEM Grade Band Compatibility Chart",
    value : "gradeBandCompatibilityChart",
    color : "blue",
  };
  collateralOneArray[9] = {
    title : "Evospaces Datasheet",
    value : "evospacesDatasheet",
    color : "blue",
  };
  collateralOneArray[10] = {
    title : "SMART 6000 Series",
    value : "smart6000series",
    color : "blue",
  };
  collateralOneArray[11] = {
    title : "SMART 7000 Series",
    value : "smart7000series",
    color : "blue",
  };
  collateralOneArray[12] = {
    title : "SMART MX Series",
    value : "smartmxseries",
    color : "blue",
  };
  collateralOneArray[13] = {
    title : "SMART Learning Suite",
    value : "smartlearningsuite",
    color : "blue",
  };
  collateralOneArray[14] = {
    title : "iBlocks pathways",
    value : "iblockspathways",
    color : "green",
  };
  collateralOneArray[15] = {
    title : "Rube Goldberg Sample iBlock",
    value : "rubeGoldbergSampleIblock",
    color : "green",
  };
  collateralOneArray[16] = {
    title : "Prosthetics Sample iBlock",
    value : "prostheticsSampleIblock",
    color : "green",
  };
  collateralOneArray[17] = {
    title : "Design a Comic Book Sample iBlock",
    value : "designComicBookSampleIblock",
    color : "green",
  };
  collateralOneArray[18] = {
    title : "iBlocks NYCDOE Pricing",
    value : "iblocksnycdoepricing",
    color : "blue",
  };
  collateralOneArray[19] = {
    title : "iBlocks CDW Pricing",
    value : "iblockscdwpricing",
    color : "blue",
  };
  collateralOneArray[20] = {
    title : "iBlocks NYS Pricing",
    value : "iblocksnyspricing",
    color : "blue",
  };
  collateralOneArray[21] = {
    title : "iBlocks PEPPM Pricing",
    value : "iblockspeppmpricing",
    color : "blue",
  };

  var containerOne = document.getElementById('collateral');

  for (x = 0; x < 30; x++) {
    var rowCheckbox = document.createElement('tr');
        rowCheckbox.innerHTML = '<td><label class="detail-check ' + collateralOneArray[x].color + '" for="quantity_' + collateralOneArray[x].value + '">' + collateralOneArray[x].title + '</label></td><td><input type="text" placeholder="--" name="quantity_' + collateralOneArray[x].value + '"></td></tr>';

      containerOne.appendChild(rowCheckbox);
  }

</script>

<?php get_footer();
