<?php
    // Only process POST reqeusts.
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // Get the form fields and remove whitespace.
    //     $name = strip_tags(trim($_POST["name"]));
    //     $name = str_replace(array("\r","\n"),array(" "," "),$name);
    //     $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    //     $tel = filter_var(trim($_POST["tel"]), FILTER_SANITIZE_NUMBER_INT);
    //     // $subject = trim($_POST["subject"]);
    //     $content = trim($_POST["content"]);

    //     // Check that data was sent to the mailer.
    //     if ( empty($name) OR empty($subject) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         // Set a 400 (bad request) response code and exit.
    //         http_response_code(400);
    //         echo "Please complete the form and try again.";
    //         exit;
    //     }

    //     // Set the recipient email address.
    //     // Note:  Update this to your desired email address.
    //     $recipient = "s.danish0827@gmail.com";

    //     // Set the email subject.
    //     $subjectname = "New Contact $subject";

        
    //     // Build the email headers.
    //     $email_headers = "From: $name <$email>";
        
    //     // Build the email content.
    //     $email_content = "Name: $name  \r\n\n";
    //     $email_content .= "Email: $email \r\n\n";
    //     $email_content .= "Phone: $tel \r\n\n";
    //     // $email_content .= "Subject: $subject \r\n\n";
    //     $email_content .= "Message: $content \r\n\n";


    //     // Send the email.
    //     if (mail($recipient, $email_headers,$email_content)) {
    //           echo "1";
    //       } else {
    //           echo "0";
    //       }

    // } 
    
    if (isset($_POST['name'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $content = $_POST['content'];
  $subject = "Enquiry from " . $name;
  $mailFrom = "prashna.yoguesh@eleve.egd.mg";
  $headers = "From:mail.s.danish0827@gmail.com";
  $to = "$mailFrom";
  $txt = "Name: $name
\nEmail: $email
\nPhone: $tel
\nMessage: $content";

  if (mail($to, $subject, $txt))   
  {
      echo "1";
  } else {
      echo "0";
  }
}

?>