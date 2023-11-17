<?php
include("init.php");
$response = "";
$feedback = 0;
if(isset($_POST[$_SESSION['form_id']])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message_subject = $_POST['subject'];
  $message = $_POST['message'];
  if(empty($name)){
	  $response = "Please enter your name";
  }else if((empty($email))&&(empty($phone))){
	  $response = "Please enter at least an email address or a phone number";
  }else if((!empty($email))&&(!$fns->validate_email($email))){
	  $response = "Please email address is invalid";
  }else if((!empty($phone))&&(!$fns->validate_phone($phone))){
	  $response = "Please phone number is invalid";
  }else if(empty($message_subject)){
	  $response = "Please enter the subject of your message";
  }else if(empty($message)){
	  $response = "Please enter the your message";
  }else{
	  $subject = "Someone contacted";
	  $content = "<p>Name: ".$name."</p>";
	  if(!empty($email)){
		$content .= "<p>Email: ".$email."</p>";
	  }
	  if(!empty($phone)){
		$content .= "<p>Phone: ".$phone."</p>";
	  }
	  $content .= "<p style='font-weight:bold'>".$message_subject."</p>";
	  $content .= "<p>".$message."</p>";
	  $to = $fns->contact_us_email();
	  if($fns->send_email($content,$to,$subject)){
		  $feedback = 1;
		  $response = "Message received. We will get back to you shortly";
		  unset($_SESSION['form_id']);
	  }else{
		  $response = "Failed sending message. Please try again later";
	  }
  }
}
/* Send json information */
echo json_encode(array("feedback"=>$feedback,"response"=>$response));
?>