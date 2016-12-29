<?php
// require 'vendor/autoload.php';
// use vendor\mailjet\src\Mailjet\Resources;
//
// $apikey = "8b5e08be883414528e87a85d336c4cfd";
// $apisecret = "4c7dd1a3ceae77b351a5fd781d85cecf";

if (!isset($_POST['contact-name']) ||
  !isset($_POST['contact-company-name']) ||
  !isset($_POST['contact-email']) ||
  !isset($_POST['contact-message']) ||
  empty($_POST['contact-name']) ||
  empty($_POST['contact-company-name']) ||
  empty($_POST['contact-email']) ||
  empty($_POST['contact-message'])
) {
  echo '<script type="text/javascript">window.parent.$("#contact #alert-msg").html("' . "Please fill all fields!" . '");window.parent.$("#contact #alert-msg").show();</script>';
}
//else{
//   /**
// * This call sends an email to one recipient, using a validated sender address
// * Do not forget to update the sender address used in the sample
// */
// $mj = new \Mailjet\Client($apikey, $apisecret);
// $body = [
//     'FromEmail' => $_POST['contact-email'],
//     'FromName' => $_POST['contact-name'],
//     'Subject' => "Contact Form",
//     'Text-part' => $_POST['contact-message'] + "Company: " + $_POST['contact-company-name'],
//     'Recipients' => [
//         [
//             'Email' => "info@polyphasicdevs.com"
//         ]
//     ]
// ];
// $response = $mj->post(Resources::$Email, ['body' => $body]);
// $response->success() && var_dump($response->getData());
// }
//
// // if ($success) {
//     echo '<script type="text/javascript">window.parent.$("#contact #alert-msg").html("' . "Your email has been sent!" . '");
//       window.parent.$("#input_name").val("");
//       window.parent.$("#input_compnay_name").val("");
//       window.parent.$("#input_email").val("");
//       window.parent.$("#textarea_message").val("");
//       window.parent.$("#contact #alert-msg").show();</script>';
// }
// else {
//     echo '<script type="text/javascript">window.parent.$("#contact #alert-msg").html("' . $errorMsg . '");window.parent.$("#contact #alert-msg").show();</script>';
// }
?>
