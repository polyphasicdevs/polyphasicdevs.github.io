<?php
require '../vendor/autoload.php';
use Mailgun\Mailgun;

/**
 * EDIT THE VALUES BELOW THIS LINE TO ADJUST THE CONFIGURATION
 * EACH OPTION HAS A COMMENT ABOVE IT WITH A DESCRIPTION
 */
/**
 * Specify the email address to which all mail messages are sent.
 * The script will try to use PHP's mail() function,
 * so if it is not properly configured it will fail silently (no error).
 */
$mailTo     = 'info@polyphasicdevs.com';

/**
 * Set the message that will be shown on success
 */
$successMsg = 'Thank you, mail sent successfuly!';

/**
 * Set the message that will be shown if not all fields are filled
 */
$fillMsg    = 'Please fill all fields!';

/**
 * Set the message that will be shown on error
 */
$errorMsg   = 'Hm.. seems there is a problem, sorry!';

/**
 * DO NOT EDIT ANYTHING BELOW THIS LINE, UNLESS YOU'RE SURE WHAT YOU'RE DOING
 */

# Include the Autoloader
if (!isset($_POST['contact-name']) ||
!isset($_POST['contact-company-name']) ||
!isset($_POST['contact-email']) ||
!isset($_POST['contact-phone']) ||
!isset($_POST['contact-budget']) ||
!isset($_POST['contact-type']) ||
!isset($_POST['contact-message']) ||
empty($_POST['contact-name']) ||
empty($_POST['contact-company-name']) ||
empty($_POST['contact-email']) ||
empty($_POST['contact-phone']) ||
empty($_POST['contact-budget']) ||
empty($_POST['contact-type']) ||
empty($_POST['contact-message'])
) {
  echo '<script type="text/javascript">window.parent.$("#contact #alert-msg").html("' . $fillMsg . '");window.parent.$("#contact #alert-msg").show();</script>';
}else{
  # Instantiate the client.
  $mgClient = new Mailgun('key-e30e42960109b9f39b1cb373cbbd838d');
  $domain = "brianphillips.tech";

  # Make the call to the client.
  $result = $mgClient->sendMessage($domain, array(
      'from'    => $_POST['contact-name'].'<'.$_POST['contact-email'].'>',
      'to'      => 'Polyphasic Developers <'.$mailTo.'>',
      'subject' => $_POST['contact-type'],
      'text'    => "Budget: ".$_POST['contact-budget']."\r\n"."Type: ".$_POST['contact-type']."\r\n"."Objectives: ".$_POST['contact-message']."\r\n"
  ));
}

?>
