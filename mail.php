<?php
require 'vendor/autoload.php';
use vendor\mailjet\src\Mailjet\Resources;

$apikey = "8b5e08be883414528e87a85d336c4cfd";
$apisecret = "4c7dd1a3ceae77b351a5fd781d85cecf";

/**
* This call sends an email to one recipient, using a validated sender address
* Do not forget to update the sender address used in the sample
*/
$mj = new \Mailjet\Client($apikey, $apisecret);
$body = [
     'FromEmail' => $_POST['contact-email'],
     'FromName' => $_POST['contact-name'],
     'Subject' => "Contact Form",
     'Text-part' => $_POST['contact-message'] + "Company: " + $_POST['contact-company-name'],
     'Recipients' => [
         [
             'Email' => "info@polyphasicdevs.com"
         ]
     ]
 ];
 $response = $mj->post(Resources::$Email, ['body' => $body]);
 $response->success() && var_dump($response->getData());
?>
