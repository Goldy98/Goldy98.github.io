<?php
  try {

    $to_email = "sagboaime267@gmail.com";

    $subject = "A message from your website contact form";

    $message = $_POST["message"];

    $headers = 'From: '. $_POST["sender_email"];

    mail($to_email,$subject,$message,$headers);

    echo json_encode(["done" => true]);

  } catch (Exception $error) {
    echo json_encode(["done" => false]);
  }
?>