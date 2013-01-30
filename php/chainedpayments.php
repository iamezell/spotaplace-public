<?php

//-------------------------------------------------
// When you integrate this code,
// look for TODO as an indication
// that you may need to provide a value or take 
// action before executing this code.
//-------------------------------------------------

require_once ("paypalplatform.php");


// ==================================
// PayPal Platform Chained Payment Module
// ==================================

// Request specific required fields
$actionType = "PAY";
$cancelUrl = "https://mycancelurl"; // TODO - If you are not executing the Pay call 
                                    // for a preapproval, then you must set a valid
                                    //  cancelUrl for the web approval flow that 
                                    // immediately follows this Pay call
$returnUrl = "https://myreturnurl"; // TODO - If you are not executing the Pay call 
                                    // for a preapproval, then you must set a valid 
                                    // returnUrl for the web approval flow that 
                                    // immediately follows this Pay call
$currencyCode = "USD";

// A chained payment can be made with 1 primary receiver and between 1 and 5 secondary 
// receivers
// TODO - Specify the receiver emails
//        Remove or set to an empty string the array entries for receivers that you 
//        do not have
$receiverEmailArray = array(
  'receiver0email',
  'receiver1email',
  'receiver2email',
  'receiver3email',
  'receiver4email',
  'receiver5email'
  );

// TODO - Specify the receiver amounts as the amount of money, for example, '5' or '5.55'
//        Remove or set to an empty string the array entries for receivers that you 
//        do not have
$receiverAmountArray = array(
  'receiver0amount',
  'receiver1amount',
  'receiver2amount',
  'receiver3amount',
  'receiver4amount',
  'receiver5amount'
  );

// TODO - Set ONLY 1 receiver in the array to 'true' as the primary receiver, and set the
//        other receivers corresponding to those indicated in receiverEmailArray to
//        'false'. Make sure that you do NOT specify more values in this array than 
//        in the receiverEmailArray.
$receiverPrimaryArray = array(
  '',
  '',
  '',
  '',
  '',
  ''
  );

// TODO - Set invoiceId to uniquely identify the transaction associated with each receiver
//        Set the array entries with value for receivers that you have each of the array 
//        Values must be unique across all Pay calls made by the caller's API credentials
$receiverInvoiceIdArray = array(
  '',
  '',
  '',
  '',
  '',
  ''
  );

// Request specific optional fields
//   Provide a value for each field that you want to include in the request;
//   if left as an empty string, the field will not be passed in the request
$senderEmail = ""; // TODO - If you are executing the Pay call against a preapprovalKey, 
                   // you should set senderEmail
                   // It is not required if the web approval flow immediately 
                   // follows this Pay call
$feesPayer = "";
$ipnNotificationUrl = "";
$memo = ""; // maxlength is 1000 characters
$pin = ""; // TODO - If you are executing the Pay call against an existing preapproval
           // that requires a pin, then you must set this
$preapprovalKey = ""; // TODO - If you are executing the Pay call against an existing 
                      // preapproval, set the preapprovalKey here
$reverseAllParallelPaymentsOnError = ""; // TODO - Do not specify for chained payment
$trackingId = generateTrackingID(); // generateTrackingID function is found 
                                    // in paypalplatform.php

//-------------------------------------------------
// Make the Pay API call
//
// The CallPay function is defined in the paypalplatform.php file,
// which is included at the top of this file.
//-------------------------------------------------
$resArray = CallPay ($actionType, $cancelUrl, $returnUrl, $currencyCode, 
      $receiverEmailArray, $receiverAmountArray, $receiverPrimaryArray, 
      $receiverInvoiceIdArray, $feesPayer, $ipnNotificationUrl, $memo, 
      $pin, $preapprovalKey, $reverseAllParallelPaymentsOnError, 
      $senderEmail, $trackingId
);

$ack = strtoupper($resArray["responseEnvelope.ack"]);
if($ack=="SUCCESS")
{
 if ("" == $preapprovalKey)
 {
  // redirect for web approval flow
  $cmd = "cmd=_ap-payment&paykey=" . urldecode($resArray["payKey"]);
  RedirectToPayPal ( $cmd );
 }
 else
 {
  // The Pay API call was made for an existing preapproval agreement, so no approval  
  // flow follows.
  // payKey is the key that you can use to identify the result from this Pay call.
  $payKey = urldecode($resArray["payKey"]);
  // paymentExecStatus is the status of the payment
  $paymentExecStatus = urldecode($resArray["paymentExecStatus"]);
  // Note that in order to get the exact status of the transactions resulting from
  // a Pay API call, you should make the PaymentDetails API call for the payKey
 }
} 
else  
{
 //Display a user-friendly Error on the page using any of the following error information 
 //returned by PayPal.
 //TODO - There can be more than 1 error, so check for "error(1).errorId", 
 //       then "error(2).errorId", and so on until you find no more errors.
 $ErrorCode = urldecode($resArray["error(0).errorId"]);
 $ErrorMsg = urldecode($resArray["error(0).message"]);
 $ErrorDomain = urldecode($resArray["error(0).domain"]);
 $ErrorSeverity = urldecode($resArray["error(0).severity"]);
 $ErrorCategory = urldecode($resArray["error(0).category"]);
 
 echo "Pay API call failed. ";
 echo "Detailed Error Message: " . $ErrorMsg;
 echo "Error Code: " . $ErrorCode;
 echo "Error Severity: " . $ErrorSeverity;
 echo "Error Domain: " . $ErrorDomain;
 echo "Error Category: " . $ErrorCategory;
}
?>