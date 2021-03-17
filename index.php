<?php
// echo "<pre>";
//    print_r($_POST);
// echo "</pre>";
  $message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '')
{
    if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
    {
      // Submit The form
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phno = $_POST['phno'];
      $msgs = $_POST['msg'];
      $subject = "Feedback Form";
      $to = "saylikul1@gmail.com";
      $body ="";

      $body .= "From:". $name."\r\n";
      $body .= "Email:". $email."\r\n";
      $body .= "Phone Number:". $phno."\r\n";
      $body .= "Message:". $msgs."\r\n";

      mail($to,$subject,$body);

    //  $message_sent = true;
    }

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AutoReplay | Mail</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style media="screen">
      .container
      {
        margin-top: 100px;
          width: 50%;
          height: auto;
          padding: 5px;
      }

      #status
      {

          text-align: center;
          padding: 10px;
          margin: 5px;
          border-radious:8px;

      }

      #status.success
      {
        background-color: #ccff99;
        color: green;
      }

      #status.error
      {
        background-color: #ff4000;
        color: white
      }

    </style>
  </head>

  <body>
<?php
if ($message_sent):
?>
<h3> Thanks, we will get back to you soon</h3>

<?php
    
else :
 ?>

    <div class="container">
  <!-- <h2>Vertical (basic) form</h2> -->
  <h1 class="text-center">Feedback Form</h1>
  <!-- <form action="https://formspree.io/f/mvovelwk" method="post" id="my-form"> -->
  <form action="#" method="post" id="my-form">


    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phno">Phone:</label>
      <input type="text" class="form-control" id="phno" placeholder="Enter Phone No." name="phno" required>
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea name="msg" id="msg" class="form-control" rows="8" cols="80" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
  <!-- <div id="status" class="success">
    Successfuly sent...
  </div>

  <div id="status1" class="error">
    Message Faild..
  </div> -->
</div>

<?php
endif;
 ?>
  <h3> There is problem..</h3>
  </body>
</html>
