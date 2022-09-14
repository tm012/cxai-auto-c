<?php
// the message
echo "tm";
 $userAnswer = $_POST['name'];
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
echo $userAnswer ;
// send email
try {

	ini_set("SMTP", "aspmx.l.google.com");
	ini_set("sendmail_from", "tauseefmamun@gmail.com");
	$success = mail("tauseefmamun@gmail.com","My subject",wordwrap($userAnswer));
	echo 'If you see this, the number is 1 or below';
	echo $success;
	if (!$success) {
   		print_r(error_get_last()['message']);
	}
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>