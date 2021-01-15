<?php 
if(isset($_POST['submit'])){
    $to = "info@kobmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $your_name = $_POST['your_name'];
    $pass_name = $_POST['pass_name'];
    $subject = "Sign submission";
    $message = $your_name . " " . $pass_name . " wrote the following:" . "\n\n" . $_POST['message'];
  	
	

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
        echo "Mail Sent. Thank you " . $your_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
