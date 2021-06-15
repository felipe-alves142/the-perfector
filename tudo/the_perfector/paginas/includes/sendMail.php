<?php


 require "../vendor/phpmailer/src/PHPMailer.php";
 require "../vendor/phpmailer/src/SMTP.php";

 
 $mail = new PHPMailer();
 $mail->IsSMTP(); // enable SMTP

 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "smtp.gmail.com";
 $mail->Port = 587; // or 587
 $mail->IsHTML(true);
 $mail->Username = "felipe.alves1990a@gmail.com";
 $mail->Password = "121243kx";
 $mail->SetFrom("felipe.alves1990a@gmail.com");
 $mail->Subject = "Test";
 $mail->Body = "hello";
 $mail->AddAddress("felipe.alves1990a@gmail.com");

  if(!$mail->Send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
     echo "Message has been sent";
  }
//require "../vendor/autoload.php";

//$mail = new PHPMailer();
// $mail = new PHPMailer\PHPMailer\PHPMailer();


// $mail -> IsSMTP();

// //$mail -> SMTPDebug  SMTP::DEBUG_SERVER;
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

// $mail -> Host = gethostbyname('smtp.gmail.com');

// $mail -> Port = 587;

// $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 
// $mail -> SMTPAuth = true;

// $mail -> Username = "felipe.alves1990a@gmail.com";

// $mail -> Password = "121243kx";

// $mail -> setFrom( 'felipe.alves1990a@gmail.com','Felipe');

// $mail -> addReplayTo = ("reply@gmail.com");

// $mail -> Subject = 'PHpmail teste gmail';
// if (!$mail->send()) {
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message sent!';
//     //Section 2: IMAP
//     //Uncomment these to save your message in the 'Sent Mail' folder.
//     #if (save_mail($mail)) {
//     #    echo "Message saved!";
//     #}
// }

// //Section 2: IMAP
// //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
// //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
// //You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
// //be useful if you are trying to get this working on a non-Gmail IMAP server.
// function save_mail($mail)
// {
//     //You can change 'Sent Mail' to any other folder or tag
//     $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

//     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
//     $imapStream = imap_open($path, $mail->Username, $mail->Password);

//     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
//     imap_close($imapStream);

//     return $result;
// }
?>