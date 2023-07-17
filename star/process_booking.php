<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Validate form data (perform necessary validation checks)

  // Process the booking (e.g., check availability, handle payment)

  // Send email to user
  $to = $email;
  $subject = "Booking Confirmation";
  $message = "
    <html>
    <head>
      <title>Booking Confirmation</title>
    </head>
    <body>
      <h2>Thank you for your booking, $name!</h2>
      <p>Your booking details:</p>
      <p>Name: $name</p>
      <p>Email: $email</p>
      <p>Phone: $phone</p>
      <p>We will send you payment instructions shortly.</p>
      <p>Thank you for choosing our service!</p>
    </body>
    </html>
    ";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "Star Accomodations <abdulnasirudeen5@gmail.com>" . "\r\n"; // Replace with your name and email address

  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    echo "Booking confirmed! Check your email for confirmation details.";
  } else {
    // Error sending email
    echo "There was an error processing your booking. Please try again later.";
  }
}
?>
