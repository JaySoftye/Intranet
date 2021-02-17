<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Teq Print Request Form Submitted</title>

    <style>
      img { border: none; -ms-interpolation-mode: bicubic; max-width: 100%; }
      body { background-color: #3c4852; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; }
      table { border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; }
      table td { font-family: sans-serif; font-size: 14px; vertical-align: top; }
      .body { background-color: #3c4852; width: 100%; }
      .container { display: block; margin: 0 auto !important; max-width: 860px; padding: 10px; width: 860px; }
      .content { box-sizing: border-box; display: block; margin: 0 auto; max-width: 860px; padding: 10px; }
      .main { background: #eceeef; border-radius: 3px; width: 100%; -webkit-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.5); -moz-box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.5); box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.5); }
      .wrapper { box-sizing: border-box; padding: 20px; }
      .content-block { padding-bottom: 10px; padding-top: 10px; }
      .preheader { padding-top: 10%; font-size: 57px; font-weight: bold; color: #eceeef; }
      .footer { clear: both; margin-top: 10px;text-align: center; width: 100%; }
      .footer td, .footer p, .footer span, .footer a { color: #999999; font-size: 12px; text-align: center; }
      h1, h2, h3, h4 { color: #000000; font-family: sans-serif; font-weight: 400; line-height: 1.4; margin: 0; Margin-bottom: 30px; }
      h1 { font-size: 35px; font-weight: 300; text-align: center; text-transform: capitalize; }
      p, ul, ol { font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px; padding: 0 0; }
      p li, ul li, ol li { list-style-position: inside; margin-left: 5px; }
      a { color: rgb (0, 180, 228); text-decoration: underline; }
      .btn { box-sizing: border-box; width: 100%; }
      .btn > tbody > tr > td { padding-bottom: 15px; }
      .btn table { width: auto; }
      .btn table td { background-color: #ffffff; border-radius: 5px; text-align: center; }
      .btn a { background-color: #ffffff; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; color: #3498db; cursor: pointer; display: inline-block; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-decoration: none; text-transform: capitalize; }
      .btn-primary table td { background-color: #3498db; }
      .btn-primary a { background-color: #3498db; border-color: #3498db; color: #ffffff; }
      .last { margin-bottom: 0; }
      .first { margin-top: 0; }
      .align-center { text-align: center; }
      .align-right { text-align: right; }
      .align-left { text-align: left; }
      .clear { clear: both; }
      .mt0 { margin-top: 0; }
      .mb0 { margin-bottom: 0; }
      hr { border: 0; border-bottom: 1px solid #f6f6f6; Margin: 20px 0; }
      @media only screen and (max-width: 620px) {
        table[class=body] h1 { font-size: 28px !important; margin-bottom: 10px !important; }
        table[class=body] p, table[class=body] ul, table[class=body] ol, table[class=body] td, table[class=body] span, table[class=body] a { font-size: 16px !important; }
        table[class=body] .wrapper, table[class=body] .article { padding: 10px !important; }
        table[class=body] .content { padding: 0 !important; }
        table[class=body] .container { padding: 0 !important; width: 100% !important; }
        table[class=body] .main { border-left-width: 0 !important; border-radius: 0 !important; border-right-width: 0 !important; }
        table[class=body] .btn table { width: 100% !important; }
        table[class=body] .btn a { width: 100% !important; }
        table[class=body] .img-responsive { height: auto !important; max-width: 100% !important; width: auto !important; }}
      @media all {
        .ExternalClass { width: 100%; }
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td,
        .ExternalClass div { line-height: 100%; }
        .apple-link a { color: inherit !important; font-family: inherit !important; font-size: inherit !important; font-weight: inherit !important; line-height: inherit !important; text-decoration: none !important; }
        .btn-primary table td:hover { background-color: #34495e !important; }
        .btn-primary a:hover { background-color: #34495e !important; border-color: #34495e !important; } }
      </style>

    </head>

    <body>
      <script>
        function goBack() {
          window.history.back();
        }
      </script>

<?php

if(isset($_POST['email'])) {

  $email_to = "paulprincipato@teq.com";
  $email_subject = "New Print Request";

  function died($error) {

      print'
<table border="0" cellpadding="0" cellspacing="0" class="body">
  <tr>
    <td class="container">
      <div class="content">
        <h1 class="preheader">There were error(s) found with your submission.</h1>
          <table class="main">
            <tr>
              <td class="wrapper">
                <table border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                      <ol>';
      echo $error;
      print'
                      </ol>
                      <h3><strong>Please go back and fix these errors.</strong></h3>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr><td> <a onclick="goBack()">Back to Event Request</a> </td></tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <div class="footer">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr><td class="content-block"><a href="http://www.teq.com">Teq.com</a> | <a href="http://onlinepd.teq.com/">OnlinePD.teq.com</a> | <a href="http://now.teq.com/">nOw.teq.com</a></td></tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </body>
</html>';

  die();
  }

  // validation
  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }

  $employee_name = $_POST['employee_name']; // required
  $department_name = $_POST['department_name']; // required
  $email_from = $_POST['email']; // required
  $reason_needed = $_POST['reason_needed']; // required
  $date_needed = $_POST['date_needed']; // required
  $shipped = $_POST['shipped']; // required
  $description = $_POST['description'];

  // DEFINED MATERIAL Variables
  if(!empty($_POST["quantity_businesscards"])) {
    $businessCards = $_POST['quantity_businesscards'] . " Business cards (Temporary or Ordered) \n";
  }
  if(!empty($_POST["quantity_saelabels"])) {
    $saelabels = $_POST['quantity_saelabels'] . " SAE Circle Labels (name listed in description) \n";
  }
  if(!empty($_POST["quantity_singlesheetstem"])) {
    $singlesheetstem = $_POST['quantity_singlesheetstem'] . " Single Sheet STEM Classroom Solutions (SAE listed in description) \n";
  }
  if(!empty($_POST["quantity_pdCatalog"])) {
    $pdCatalog = $_POST['quantity_pdCatalog'] . " copies of the PD Catalog \n";
  }
  if(!empty($_POST["quantity_otis"])) {
    $otisDatasheet = $_POST['quantity_otis'] . " copies of the OTIS Datasheet \n";
  }
  if(!empty($_POST["quantity_techCatalog"])) {
    $techCatalog = $_POST['quantity_techCatalog'] . " copies of the Technology Catalog \n";
  }
  if(!empty($_POST["quantity_techCatalogNy"])) {
    $techCatalogNy = $_POST['quantity_techCatalogNy'] . " copies of the (NY) Technology Catalog \n";
  }
  if(!empty($_POST["quantity_nextCatalog"])) {
    $steamCatalog = $_POST['quantity_nextCatalog'] . " copies of the NEXT Catalog \n";
  }
  if(!empty($_POST["quantity_otisForEducatorsFullBooklet"])) {
    $otisForEducatorsFullBooklet = $_POST['quantity_otisForEducatorsFullBooklet'] . " copies of the OTIS for educators full Booklet \n";
  }
  if(!empty($_POST["quantity_chainReactionContraptionIblock"])) {
    $chainReactionContraptionIblock = $_POST['quantity_chainReactionContraptionIblock'] . " copies of the Chain-Reaction Contraption 5hr iBlock \n";
  }
  if(!empty($_POST["quantity_prostheticHandIblock"])) {
    $prostheticHandIblock = $_POST['quantity_prostheticHandIblock'] . " copies of the Prosthetic Hand 5hr iBlock \n";
  }
  if(!empty($_POST["quantity_stembundlescdwdistricts"])) {
    $stemSolutionsCdwDistricts = $_POST['quantity_stembundlescdwdistricts'] . " copies of the STEM Bundles CDW Districts Catalog \n";
  }
  if(!empty($_POST["quantity_stembundlescdwnyc"])) {
    $stemSolutionsCdwNyc = $_POST['quantity_stembundlescdwnyc'] . " copies of the STEM Bundles CDW NYC Catalog \n";
  }
  if(!empty($_POST["quantity_classroomPlan"])) {
    $classroomPlan = $_POST['quantity_classroomPlan'] . " copies of the Classroom Plan \n";
  }
  if(!empty($_POST["quantity_iblockspathways"])) {
    $iblockspathways = $_POST['quantity_iblockspathways'] . " copies of the iBlocks pathwayss \n";
  }
  if(!empty($_POST["quantity_iblocksfivehour"])) {
    $iblocksFiveHour = $_POST['quantity_iblocksfivehour'] . " copies of the iBlocks 5-hr iBlock Brochure \n";
  }
  if(!empty($_POST["quantity_iblocksnycdoepricing"])) {
    $iblocksNycoePricing = $_POST['quantity_iblocksnycdoepricing'] . " copies of the iBlocks NYCDOE Pricing \n";
  }
  if(!empty($_POST["quantity_iblockscdwpricing"])) {
    $iblocksCdwPricing = $_POST['quantity_iblockscdwpricing'] . " copies of the iBlocks CDW Pricing \n";
  }
  if(!empty($_POST["quantity_iblocksnyspricing"])) {
    $iblocksNysPricing = $_POST['quantity_iblocksnyspricing'] . " copies of the iBlocks NYS Pricing \n";
  }
  if(!empty($_POST["quantity_iblockspeppmpricing"])) {
    $iblocksPeppmPricing = $_POST['quantity_iblockspeppmpricing'] . " copies of the iBlocks PEPPM Pricing \n";
  }
  if(!empty($_POST["quantity_smart6000series"])) {
    $smart6000series = $_POST['quantity_smart6000series'] . " copies of the SMART 6000 Series Datasheet \n";
  }
  if(!empty($_POST["quantity_smart7000series"])) {
    $smart7000series = $_POST['quantity_smart7000series'] . " copies of the SMART 7000 Series Datasheet \n";
  }
  if(!empty($_POST["quantity_smartmxseries"])) {
    $smartmxseries = $_POST['quantity_smartmxseries'] . " copies of the SMART MX Series Datasheet \n";
  }
  if(!empty($_POST["quantity_smartlearningsuite"])) {
    $smartlearningsuite = $_POST['quantity_smartlearningsuite'] . " copies of the SMART Learning Suite Datasheet \n";
  }
  if(!empty($_POST["quantity_gradeBandCompatibilityChart"])) {
    $gradeBandCompatibilityChart = $_POST['quantity_gradeBandCompatibilityChart'] . " copies of the STEM Grade Band Compatibility Chart \n";
  }
  if(!empty($_POST["quantity_evospacesDatasheet"])) {
    $evospacesDatasheet = $_POST['quantity_evospacesDatasheet'] . " copies of the Evospaces Datasheet \n";
  }

  $requested_materials = array($businessCards, $pdCatalog , $otisDatasheet, $techCatalog, $techCatalogNy, $steamCatalog, $stemSolutionsCdwDistricts, $stemSolutionsCdwNyc,  $classroomPlan, $iblockspathways, $iblocksNycoePricing, $iblocksCdwPricing, $iblocksNysPricing, $iblocksPeppmPricing, $gradeBandCompatibilityChart, $smart6000series, $smart7000series, $smartmxseries, $smartlearningsuite, $prostheticHandIblock, $chainReactionContraptionIblock, $otisForEducatorsFullBooklet, $evospacesDatasheet, $saelabels, $singlesheetstem );
  $requested_printed = "";
    foreach( $requested_materials as $value ) {
      $requested_printed .= $value;
    }

  // validation
  $error_message = "";
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email_from)) {
  $error_message .= '<p>The email address you entered does not appear to be valid.</p>';
}
if(empty($_POST["employee_name"])) {
  $error_message .= '<p>You forgot to enter your name?</p>';
}
if(empty($_POST["department_name"])) {
  $error_message .= '<p>You forgot to enter your Department?</p>';
}
if(empty($_POST["reason_needed"])) {
  $error_message .= '<p>You forgot to tell us why you need this print request.</p>';
}
if(empty($_POST["date_needed"])) {
  $error_message .= '<p>You forgot to tell us the date you need this by.</p>';
}
if(empty($_POST["shipped"])) {
  $error_message .= '<p>You forgot to select if this needs to be shipped or not.</p>';
}
if($_POST["shipped"] == "yes this is being shipped" && empty($_POST["description"])) {
  $error_message .= '<p>You forgot to fill in the shipping information.</p>';
}

if(strlen($error_message) > 0) {
  died($error_message);
}

  $email_message = "Form details below.\n\n";
  $email_message .= "Contact name: ".clean_string($employee_name)."\n";
  $email_message .= "Contact email: ".clean_string($email_from)."\n";
  $email_message .= "Department name: ".clean_string($department_name)."\n";
  $email_message .= "Reason Needed: ".clean_string($reason_needed)."\n";
  $email_message .= "Date Needed by: ".clean_string($date_needed)."\n";
  $email_message .= "Does this need to be shipped: ".clean_string($shipped)."\n";
  $email_message .= "Other Instructions including shipping address: ".clean_string($description)."\n\n";
  $email_message .= "Materials Requested.\n\n";
  // Print Materials
  $email_message .= $requested_printed;

  $from_add = "creative@teq.com";
  $headers = "From: $from_add \r\n";
  $headers .= "Cc: $email_from \r\n";
  $headers .= "Cc: jay@teq.com \r\n";
  $headers .= "Reply-To: $from_add \r\n";
  $headers .= "Return-Path: $from_add\r\n";
  $headers .= "X-Mailer: PHP \r\n";

  if(mail($email_to,$email_subject,$email_message,$headers))
  {
      $msg = "Mail sent OK";
  }
  else
  {
     $msg = "Error sending email!";
  }
?>

<table border="0" cellpadding="0" cellspacing="0" class="body">
  <tr>
    <td class="container">
      <div class="content">
        <h1 class="preheader">Thanks for your submission!</h1>
        <table class="main">
          <tr>
            <td class="wrapper">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr><td><h2>Your request has been sent to the Creative Team. <strong> If you do not get an email receipt within the next few minutes please contact the Creative Team regarding your submission. </h2></td></tr>
              </table>
            </td>
          </tr>
        </table>
        <div class="footer">
          <table border="0" cellpadding="0" cellspacing="0">
            <tr><td class="content-block"><a href="http://www.teq.com">Teq.com</a> | <a href="http://onlinepd.teq.com/">OnlinePD.teq.com</a> | <a href="http://now.teq.com/">nOw.teq.com</a></td></tr>
          </table>
        </div>
      </div>
    </td>
  </tr>
</table>
</body>
</html>

<?php } ?>
