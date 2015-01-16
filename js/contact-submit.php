<?php
   
  $email = $_POST['emailAddress'];
  $mailto = "brianevans91@gmail.com";
  $mailsubj = "Website Contact: " . $email . " - " . $_POST['fullName'];
  $mailhead = "From: " . $_POST['fullName'];

  $mailbody = "Message from Website\n";
  
    if ($email == NULL || $email == "" || $mailbody == NULL || $mailbody == ""){
		echo '<div id="no_email">You are missing required fields.</div>';
	}
	
  while (list ($key, $val) = each ($_POST)) {
        if($key != 'submit') 
        $mailbody .= "$key : $val\n"; }
      
  ini_set("SMTP",mail.highlanderthon.com);
  ini_set("smtp_port",2525);
  ini_set("sendmail_from",$email);  
  
  
  if (mail($mailto,$mailsubj,$mailbody,$mailhead)) {
    echo '<div id="yes_email">Your email was sent successfully.  Our committee will respond as soon as possible</div>';
} else {
    echo '<div id="no_email">Your email failed.  Contact form broken please email pr@highlanderthon.com</div>';
}  
    
   
?>