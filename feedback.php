<?php
if(isset($_POST['submit'])){
    $to = "saylikul1@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phno = $_POST['phno'];
    $subject = "Feedback Form Submission";
    $subject2 = "Copy of your form submission";
    $message = $name  . " wrote the following feedback:" . "\n\n" . $_POST['message'];
    $message2 = "Mobile Number is " . $phno . "\n\n" ;

    $headers = "From:" . $from;
    $headers2 = "To:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
