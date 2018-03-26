<?php 
//Sending Messages using sender id/short code
require_once('AfricasTalkingGateway.php');// this a dependacy which connect you to sms aggregator  make sure is well located 
//$username   = "mergims_notify_point";
$username   = "akokanya";
$apikey     = "api_key_from";// this api key which helps to authenticate user
$recipients = "phone_number_with_country_code";
$message    = "Hi geeks, sms is working";
// Specify your AfricasTalking shortCode or sender id
$from = "akokanya";
$gateway    = new AfricasTalkingGateway($username, $apikey);
try 
{
   
   $results = $gateway->sendMessage($recipients, $message, $from);
            
  foreach($results as $result) {
    echo " Number: " .$result->number;
    echo " Status: " .$result->status;
    echo " MessageId: " .$result->messageId;
    echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
// DONE!!! 

