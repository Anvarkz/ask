<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["name"]) && isset($_POST["message"])) {
    $name = $_POST["name"];
    $message = $_POST["message"];

    // Store the data or send an email to yourself
    // Depending on your preference and requirements

    echo "Thanks for your feedback. We'll get back to you soon!";
    exit();
  }
}
?>
