# Hello, this is a little tutorial of sending mail with laravel

### first add configurations of mailtrap in your .env file:

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=6452c4047a683f
MAIL_PASSWORD=92526942a4e752
MAIL_ENCRYPTION=null

### dont't forget of add a database configuration in the same file

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mailexample
DB_USERNAME=root
DB_PASSWORD=1234

### Now, generate this class Mailable (this command below, generate a file in folder App\Mail)

php artisan make:mail DemoMail

### and this command:

php artisan make:auth
php artisan make:migrate

### in next step, create a demo.blade.php view, and send email in home controller.

public function index()
{
    $email = Auth::user()->email;
    Mail::to($email)->send(new DemoMail());
    return view('home');
}

All done.

References: https://www.5balloons.info/laravel-send-email-example/