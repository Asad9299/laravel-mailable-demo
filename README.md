### Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/Asad9299/laravel-mailable-demo.git

2. cd laravel-mailable-demo

3. composer install

4. cp .env.example .env

5. Configure your .env file with your database and mail settings.

6.  Make sure to set the following email-related variables in your `.env` file. Replace the placeholder values with your own email credentials.
   
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=your_email@gmail.com
    MAIL_PASSWORD=your_app_password
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=your_email@gmail.com
    MAIL_FROM_NAME="${APP_NAME}"

7. **Set the recipient's email address:**

    Additionally, specify the recipient's name and email address by setting the following variables:

    MAIL_TO_NAME="Recipient's Name"
    MAIL_TO_ADDRESS="recipient@example.com"

    **Note:** Update `MAIL_TO_NAME` with the recipient's name and `MAIL_TO_ADDRESS` with their email address. This is the address that will receive the test email when hitting the `/send-email` route.

8. php artisan migrate --seed

9. php artisan serve

10. Visit http://localhost:8000/send-email in your browser.
