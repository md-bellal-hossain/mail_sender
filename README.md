PHPMailer Email Sending System

This project is a simple PHP-based email sending system using PHPMailer and Bootstrap. It allows users to send emails with attachments via an SMTP server.

Features

Send emails using PHPMailer

Bootstrap-powered form UI

Supports attachments

Displays success/error messages using Bootstrap alerts

Installation

1. Clone the Repository

git clone https://github.com/your-repo/email-sender.git
cd email-sender

2. Install Dependencies

Ensure you have Composer installed, then run:

composer require phpmailer/phpmailer

3. Configure SMTP Credentials

Edit send_mail.php and replace the placeholders with your SMTP credentials:

$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'your-email@gmail.com'; // Change this
$mail->Password   = 'your-app-password';   // Change this
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;

Tip: Use environment variables to store credentials securely.

4. Start a Local Server

Run the following command to start a local PHP server:

php -S localhost:8000

Then, open http://localhost:8000/index.php in your browser.

Usage

Fill in the recipient's email, subject, and message.

Attach a file (optional).

Click "Send Email" and wait for confirmation.

Troubleshooting

Ensure you have enabled Less Secure Apps or App Passwords in your email provider's settings.

Check your SMTP server details if emails fail to send.

Inspect browser console/log files for errors.

License

This project is open-source and available under the MIT License.
