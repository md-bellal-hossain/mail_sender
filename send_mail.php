<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rabelisback@gmail.com';
        $mail->Password   = 'eijkafjpbxjxbiue';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email Details
        $mail->setFrom('rabelisback@gmail.com', 'Bellal Hossain');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = nl2br($body);

        // Handle File Attachment
        if (!empty($_FILES['attachment']['name'])) {
            $uploadfile = $_FILES['attachment']['tmp_name'];
            $filename = $_FILES['attachment']['name'];
            $mail->addAttachment($uploadfile, $filename);
        }

        // Send Email
        $mail->send();
        $_SESSION['message'] = "Email sent successfully!";
        $_SESSION['alert_type'] = "success";
    } catch (Exception $e) {
        $_SESSION['message'] = "Error: " . $mail->ErrorInfo;
        $_SESSION['alert_type'] = "danger";
    }

    header("Location: index.php");
    exit();
}
