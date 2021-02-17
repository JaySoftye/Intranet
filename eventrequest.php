<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">

  <title>Event Request Made</title>

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

if(isset($_POST['yourEmail'])) {

  $email_to = "jay@teq.com";
  $email_subject = "New Event Request";

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

  $your_name = $_POST['yourName']; // required
  $your_email = $_POST['yourEmail']; // required
  $your_phone = $_POST['yourPhone']; // required
  $event_type = $_POST['eventType']; // required
  $event_duration = $_POST['eventDuration']; // required
  $territory_state = $_POST['territoryState']; // required
  $purpose_event = $_POST['purposeEvent'];
  $core_objective = $_POST['coreObjective'];
  $location = $_POST['location']; // required
  $date_event = $_POST['dateEvent']; // required
  $set_up_time = $_POST['setUpTime']; // required
  $start_time = $_POST['startTime']; // required
  $breakdown_time = $_POST['breakdownTime']; // required
  $hotel = $_POST['hotel']; // required
  $transportation_needed = $_POST['transportation']; // required
  $pd_needed = $_POST['pdSupport']; // required
  $teqSquad = $_POST['teqSquad']; // required
  $contact_name = $_POST['contactName'];
  $contact_title = $_POST['contactTitle'];
  $contact_email = $_POST['contactEmail'];
  $contact_phone = $_POST['contactPhone'];
  $sponsorship = $_POST['sponsorship'];
  $expected_attendees = $_POST['expectedAttendees'];
  $supply = $_POST['supply'];
  $misc_material = $_POST['misc'];
  $printed_material = $_POST['marketingCollateral'];

  if(empty($_POST["smart6000Series"])) {
  } else {
    $smart_6000 = $_POST['smart6000Series']." SMART 6000 Series Board(s)" . "<br />";
  }
  if(empty($_POST["smart7000Series"])) {
  } else {
    $smart_7000 = $_POST['smart7000Series']." SMART 7000 Series Board(s)" . "<br />";
  }
  if(empty($_POST["iRover"])) {
  } else {
    $irover = $_POST['iRover']." iRover(s)" . "<br />";
  }
  if(empty($_POST["conenStand"])) {
  } else {
    $conen_stand = $_POST['conenStand']." Conen Stand(s)" . "<br />";
  }
  if(empty($_POST["labDisc"])) {
  } else {
    $labdisc = $_POST['labDisc']." Labdisc(s)" . "<br />";
  }
  if(empty($_POST["labDiscCart"])) {
  } else {
    $labdisc_cart = $_POST['labDiscCart']." Labdisc Cart(s)" . "<br />";
  }
  if(empty($_POST["ultimaker"])) {
  } else {
    $ultimaker = $_POST['ultimaker']." Ultimaker(s)" . "<br />";
  }
  if(empty($_POST["ultimakerCart"])) {
  } else {
    $ultimaker_cart = $_POST['ultimakerCart']." 3D Printer Cart(s)" . "<br />";
  }
  if(empty($_POST["techTub"])) {
  } else {
    $techtub = $_POST['techTub']." TechTub(s)" . "<br />";
  }
  if(empty($_POST["docCamera"])) {
  } else {
    $doc_camera = $_POST['docCamera']." Document Camera(s)" . "<br />";
  }
  if(empty($_POST["nao"])) {
  } else {
    $nao  = $_POST['nao']." Nao Robot(s)" . "<br />";
  }
  if(isset($_POST["tableCloth"])) {
    $table_cloth = "Table Cloth(s)" . "<br />";
  }
  if(isset($_POST["displayScreen"])) {
    $display_screen = "Display Screen(s)" . "<br />";
  }
  if(isset($_POST["tableStand"])) {
    $table_stand = "Table Magazine Stand(s)" . "<br />";
  }
  if(isset($_POST["tallStand"])) {
    $tall_stand = "Tall Travel Magazine Stand(s)" . "<br />";
  }
  if(isset($_POST["popupTeqOPD"])) {
    $popup_Teq_OPD_banner = "Curved Popup Teq/OPD Banner" . "<br />";
  }
  if(isset($_POST["cloudgenixBanner"])) {
    $cloudgenix_banner = "Cloudgenix Banner" . "<br />";
  }
  if(isset($_POST["ifpBanner"])) {
    $ifp_banner = "Interactive Flat Panel Banner" . "<br />";
  }
  if(isset($_POST["opdBanner"])) {
    $opd_banner = "Online PD Banner" . "<br />";
  }
  if(isset($_POST["stemBanner"])) {
    $stem_banner = "STEM Banner" . "<br />";
  }
  if(isset($_POST["smartBanner"])) {
    $smart_banner = "SMART Banner" . "<br />";
  }
  // validation
  $error_message = "";

if(empty($_POST["yourName"])) {
  $error_message .= '<p>You forgot to enter your name.</p>';
}
if(empty($_POST["yourEmail"])) {
  $error_message .= '<p>You forgot to enter your email.</p>';
}
if(empty($_POST["yourPhone"])) {
  $error_message .= '<p>You forgot to enter your phone number.</p>';
}
if(empty($_POST["eventType"])) {
  $error_message .= '<p>You forgot select an event type.</p>';
}
if(empty($_POST["territoryState"])) {
  $error_message .= '<p>You forgot to enter a territory or state.</p>';
}
if(empty($_POST["location"])) {
  $error_message .= '<p>You forgot to enter a location for the event.</p>';
}
if(empty($_POST["setUpTime"])) {
  $error_message .= '<p>You forgot to enter the event set up time.</p>';
}
if(empty($_POST["startTime"])) {
  $error_message .= '<p>You forgot to enter the event start time.</p>';
}
if(empty($_POST["breakdownTime"])) {
  $error_message .= '<p>You forgot to enter the event breakdown time.</p>';
}
if(empty($_POST["hotel"])) {
  $error_message .= '<p>You forgot to list if you need a hotel booked.</p>';
}
if(strlen($error_message) > 0) {
  died($error_message);
}

  $email_message = "<html><body><table border='0' cellspacing='0' cellpadding='12' rules='all' style='border-color: #666666;'><tr>";
  $email_message .= "<td>Employee name: </td>";
  $email_message .= "<td>".clean_string($your_name)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Employee Email: </td>";
  $email_message .= "<td>".clean_string($your_email)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Employee Phone: </td>";
  $email_message .= "<td>".clean_string($your_phone)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Event Type: </td>";
  $email_message .= "<td>".clean_string($event_type)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Event Duration: </td>";
  $email_message .= "<td>".clean_string($event_duration)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Territory/State: </td>";
  $email_message .= "<td>".clean_string($territory_state)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Purpose of the Event: </td>";
  $email_message .= "<td>".clean_string($purpose_event)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Core Objective for Attending: </td>";
  $email_message .= "<td>".clean_string($core_objective)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Location/Address of the Event: </td>";
  $email_message .= "<td>".clean_string($location)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Date of the Event: </td>";
  $email_message .= "<td>".clean_string($date_event)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Event Set Up Time: </td>";
  $email_message .= "<td>".clean_string($set_up_time)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Event Start Time: </td>";
  $email_message .= "<td>".clean_string($start_time)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Event Breakdown: </td>";
  $email_message .= "<td>".clean_string($breakdown_time)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Hotel Needed: </td>";
  $email_message .= "<td>".clean_string($hotel)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Is Transportation Needed: </td>\r\n";
  $email_message .= "<td>".clean_string($transportation_needed)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>PD Department Support Requested: </td>";
  $email_message .= "<td>".clean_string($pd_needed)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Teq Squad Support Requested: </td>";
  $email_message .= "<td>".clean_string($teqSquad)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Channel Partner/Event Contact Name: </td>";
  $email_message .= "<td>".clean_string($contact_name)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Channel Partner/Event Contact Title: </td>";
  $email_message .= "<td>".clean_string($contact_title)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Channel Partner/Event Contact Email: </td>";
  $email_message .= "<td>".clean_string($contact_email)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Channel Partner/Event Contact Phone </td>";
  $email_message .= "<td>".clean_string($contact_phone)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Sponsorship Options and Costs/Customer Expectation: </td>";
  $email_message .= "<td>".clean_string($sponsorship)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Expected # of Attendees, please include the titles for each amount: </td>";
  $email_message .= "<td>".clean_string($expected_attendees)."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td>Are Channel Partners or the Event Venue Willing to Supply Hardware: </td>";
  $email_message .= "<td>".clean_string($supply)."</td>";
  $email_message .= "</tr></tr>";
  $email_message .= "<td><p><strong>I need the following equipment item(s):</strong><p></td>";
  $email_message .= "<td>".$smart_6000.$smart_7000.$irover.$conen_stand.$labdisc.$labdisc_cart.$ultimaker.$ultimaker_cart.$techtub.$doc_camera.$nao."</td>";
  $email_message .= "</tr><tr>";
  $email_message .= "<td><p><strong>I need the following display item(s):</strong><p></td>";
  $email_message .= "<td>".$table_cloth.$display_screen.$table_stand.$tall_stand.$popup_Teq_OPD_banner. $cloudgenix_banner.$ifp_banner.$opd_banner.$stem_banner.$smart_banner."</td>";
  $email_message .= "</tr></tr>";
  $email_message .= "<td><p><strong>Misc Items and/or Additional Information</strong><p></td>";
  $email_message .= "<td>".clean_string($misc_material)."</td>";
  $email_message .= "</tr></tr>";
  $email_message .= "<td><p><strong>Marketing Collateral Needed:</strong><p></td>";
  $email_message .= "<td>".clean_string($printed_material)."</td>";
  $email_message .= "</tr></table></body</html>";



$from_add = "events@teq.com";
  $headers = "From: $from_add \r\n";
  $headers .= "Cc: $your_email \r\n";
  $headers .= "Reply-To: $from_add \r\n";
  $headers .= "Return-Path: $from_add\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
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
                <tr><td><p>Your request has been sent to the Marketing and Events Team.</p></td></tr>
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
