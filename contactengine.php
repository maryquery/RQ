<?php

$EmailFrom = "mail@maria-ambroselli.de";
$EmailTo = "marc@rooq.productions";
$Subject = "website rooq.productions contact form message";
$Name = Trim(stripslashes($_POST['Name']));
$Tel = Trim(stripslashes($_POST['Tel']));
$Email = Trim(stripslashes($_POST['Email']));
$Message = Trim(stripslashes($_POST['Message']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/Project-ROOQ/public/error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/Project-ROOQ/public/thanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/Project-ROOQ/public/error.html\">";
}
?>
