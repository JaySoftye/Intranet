<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Teq Studio Request Form Submitted</title>

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
  $email_subject = "New Studio Request";

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

    if(!isset($_POST['department_name']) ||
        !isset($_POST['contact_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['production_type']) ||
        !isset($_POST['preferred_date']) ||
        !isset($_POST['preferred_time']) ||
        !isset($_POST['alternative_date']) ||
        !isset($_POST['alternative_time']) ||
        !isset($_POST['description']) ||
        !isset($_POST['additional_equip']) ||
        !isset($_POST['editing'])) {

        died('Oops, there appears to be a problem with the information you submitted.');
    }



    $department_name = $_POST['department_name']; // required
    $contact_name = $_POST['contact_name']; // required
    $email_from = $_POST['email']; // required
    $production_type = $_POST['production_type']; // not required
    $preferred_date = $_POST['preferred_date']; // not required
    $preferred_time = $_POST['preferred_time']; // not required
    $alternative_date = $_POST['alternative_date']; // not required
    $alternative_time = $_POST['alternative_time']; // not required
    $description = $_POST['description']; // not required
    $additional_equip = $_POST['additional_equip']; // required
    $editing = $_POST['editing']; // required
    $people = $_POST['people']; // required
    $duration = $_POST['duration']; // required


    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '<p>The email address you entered does not appear to be valid.</p>';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$department_name)) {
    $error_message .= '<p>The department name you entered does not appear to be valid.</p>';
  }

  if(!preg_match($string_exp,$contact_name)) {
    $error_message .= '<p>The contact name you entered does not appear to be valid.</p>';
  }

  if(empty($_POST['additional_equip'])) {
    $error_message .= '<p>Let us know if you need any additional equipment. If no additinal equipment is necessary please write <strong>none</strong>.</p>';
  }

  if(!preg_match($string_exp,$editing)) {
    $error_message .= '<p>Does this request need to be edited?</p>';
  }

  if(empty($_POST["people"])) {
    $error_message .= '<p>How many people will be attending this request?</p>';
  }

  if(empty($_POST["duration"])) {
    $error_message .= '<p>How long do you think this will take?</p>';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);
    }



    $email_message .= "Department name: ".clean_string($department_name)."\n";
    $email_message .= "Contact name: ".clean_string($contact_name)."\n";
    $email_message .= "Contact email: ".clean_string($email_from)."\n";
    $email_message .= "Production type: ".clean_string($production_type)."\n";
    $email_message .= "Preferred date: ".clean_string($preferred_date)."\n";
    $email_message .= "Preferred time: ".clean_string($preferred_time)."\n";
    $email_message .= "Alternative date: ".clean_string($alternative_date)."\n";
    $email_message .= "Alternative time: " .clean_string($alternative_time)."\n";
    $email_message .= "Description: ".clean_string($description)."\n";
    $email_message .= "Additional equipment needed: ".clean_string($additional_equip)."\n";
    $email_message .= "Does this video need editing: ".clean_string($editing)."\n";
    $email_message .= "Number of people: ".clean_string($people)."\n";
    $email_message .= "Estimated duration in hours: ".clean_string($duration)."\n";

	$from_add = "creative@teq.com";
    $headers = "From: $from_add \r\n";
    $headers .= 'Cc: BrianHueter@teq.com, MarcelloCarnevali@teq.com, jonathansoftye@teq.com' . "\r\n";
    $headers .= "Reply-To: $from_add \r\n";
    $headers .= "Return-Path: $from_add\r\n";
    $headers .= "X-Mailer: PHP \r\n";

// create email headers
//'Reply-To: '.$email_from."\r\n" .
//'X-Mailer: PHP/' . phpversion();
//@mail($email_to, $email_subject, $email_message);

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
                <tr><td><p>Your request has been sent to the Creative Team.</p></td></tr>
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
