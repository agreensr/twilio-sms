<?php
  
// ==== Control Vars =======
$strFromNumber = "+17089720347";
$phoneNum = $_POST['phonenum'];
$message = $_POST['message']; 
$aryResponse = array();
 

    // include the Twilio PHP library - download from 
    // http://www.twilio.com/docs/libraries/
    require_once ("inc/Services/Twilio.php");
 
    // set our AccountSid and AuthToken - from www.twilio.com/user/account
    $AccountSid = "AC6df44d33912c30f2ef3aa946caa698fc";
    $AuthToken = "b79727de706a84a6428a4306104cea4d";
 
    // ini a new Twilio Rest Client
    $objConnection = new Services_Twilio($AccountSid, $AuthToken);


    // Send a new outgoinging SMS by POSTing to the SMS resource */
    $bSuccess = $objConnection->account->sms_messages->create(
        
        $strFromNumber, 	// number we are sending From 
        $phoneNum,           // number we are sending To
        $message			// the sms body
    );		
    //$aryResponse["SentMsg"] = $message;
    //$aryResponse["Success"] = true;
    
    
    //echo json_encode($aryResponse);
     
        if($_POST){
          $errors = array();
           
           if(count($errors) == 0){
             //redirect page
             header("Location: message_sent.html");
             exit();
           }
         }
       ?>
       