<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];
  
  $mailTo = "info@ajaxpropertymaintenance.com";
  $headers = "From: ".$email;
  $txt = "New inquiry from".$name.".\n\n".$msg;

  mail($mailTo, $txt, $headers);
  header("Location: index.html?mailsend")
}