<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $location = $_POST["location"];
    $contactInfo = $_POST["contactInfo"];
    $serviceOption = $_POST["serviceOption"];
    $message = $_POST["message"];

    // Add your email sending code here
    $to = "abdulrazak.jmus@gmail.com";
    $subject = "New Form Submission";
    $emailBody = "Name: $name\nLocation: $location\nContact Info: $contactInfo\nService Option: $serviceOption\nMessage: $message";

    mail($to, $subject, $emailBody);

    // You can add additional logic or error handling as needed
}
?>
