<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
</head>
<body>
  <h1>Contact Us</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" cols="33" required></textarea><br>

    <input type="submit" value="Submit">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

      $to = "dawoodkhan5218@gmail.com;
      $subject = "New Contact Form Submission";
      $headers = "From: $email";
      $message = "From: $name\nMessage:\n$message";

      if (mail($to, $subject, $message, $headers)) {
        echo "<p>Your message has been sent successfully!</p>";
      } else {
        echo "<p>There was an error sending your message. Please try again later.</p>";
      }
    }
  ?>
</body>
</html>
