<html>
<body>

<?php

$valid = isset($_REQUEST['email']) && $_REQUEST['email'] != "";

if ($valid)
  {
	  $email = $_REQUEST['email'] ;
	  $subject = $_REQUEST['subject'] ;
	  $message = $_REQUEST['message'] ;
	  mail("info@natashagunaratne.com", $subject,
	  $message, "From:" . $email);
  }

  echo "<form method='post' action='mailform.php'>
  <font size='2' color='blue'>Please send in your inquiries...</font><br>
  Email:<br><input name='email' type='text' size='38'><br>
  Subject:<br><input name='subject' type='text' size='38'><br>
  Message:<br><textarea name='message' rows='3' cols='30'></textarea>
  <br><input type='submit'>";
  if($valid)
  {
  	echo "<font size='2' color='green'>Email Sent. Thank You!</font>";
  }
  else if ($_REQUEST['submitted']== "true")
  {
  	echo "<font size='2' color='red'>Please fill the form before submitting!</font>";
  }
  echo " <input type='hidden' name='submitted' value='true'></form>";

?>

</body>
</html>