<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "mnavracruz@jhancock.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received a message from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}
