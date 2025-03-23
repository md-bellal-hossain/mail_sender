```markdown
# Email Sender with PHPMailer

This project demonstrates how to send an email using PHPMailer with a simple web form built using **PHP** and **Bootstrap**.

## Features

- Send an email via **SMTP** (configured for Gmail).
- Attach files with the email.
- Display feedback messages using **Bootstrap alerts**.
- Simple and responsive design using **Bootstrap 5**.

## Prerequisites

Make sure you have the following installed:

- PHP (v7.4 or higher)
- Composer (for dependency management)
- A Gmail account (or any other SMTP provider)

## Installation

### 1. Clone the repository
Clone this repository to your local machine:

```bash
https://github.com/md-bellal-hossain/mail_sender.git
```

### 2. Install Dependencies
Navigate to the project directory and run the following command to install the necessary PHP libraries via Composer:

```bash
composer install
```

This will install **PHPMailer** via Composer.

### 3. Configure Email
In the `send_mail.php` file, configure your SMTP settings for sending the email.

```php
$mail->Username   = 'your-email@gmail.com'; // Your email
$mail->Password   = 'your-app-password';    // Your Gmail App Password
```

- Generate an **App Password** if you're using Gmail. For security, avoid using your main Gmail password. [Learn more about Gmail App Passwords](https://myaccount.google.com/apppasswords).

### 4. Run the Project
You can start a local server using PHP's built-in server:

```bash
php -S localhost:8000
```

Now you can access the project by navigating to `http://localhost:8000` in your browser.

## Usage

1. Open the web form at `http://localhost:8000/index.php`.
2. Fill out the email form with the following fields:
   - **To**: The recipient's email address.
   - **Subject**: The subject of the email.
   - **Body**: The content of the email.
   - **Attachment**: Optionally attach a file.
3. Click **Send Email** to send the email.

The form will show a success message if the email was sent successfully, or an error message if something went wrong.

## Contributing

Feel free to fork this repository and submit pull requests if you want to contribute to this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any questions, please contact **Md. Bellal Hossain** at [bellalhossain4365@gmail.com](mailto:bellalhossain4365@gmail.com).

```

### Key Sections in the `README.md`:

1. **Project Name**: Describes the project (Email Sender with PHPMailer).
2. **Features**: Lists the key features of the application.
3. **Prerequisites**: Tells users the dependencies required (PHP, Composer, Gmail).
4. **Installation**: Provides installation steps and configuration.
5. **Usage**: Explains how to use the email form.
6. **Contributing**: Encourages contributions and provides a link to contributing.
7. **License**: Adds a standard license reference (MIT in this case).
8. **Contact**: Your email for questions.
