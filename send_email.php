<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Шлях до автозавантаженого файлу PHPMailer

// Створюємо об'єкт PHPMailer
$mail = new PHPMailer(true);

try {
    // Налаштовуємо параметри сервера
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'markvladosgg@gmail.com'; // Ваша адреса електронної пошти Gmail
    $mail->Password = 'bxyl kush xwjo sygn'; // Ваш пароль від облікового запису Gmail
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Налаштовуємо відправника і отримувача
    $mail->setFrom('markvladosgg@gmail.com', 'Владислав');
    $mail->addAddress($_POST['user-email']); // Адреса, куди буде відправлено повідомлення

    // Встановлюємо тему та тіло повідомлення
    $mail->Subject = 'Shop Bakery';
    $mail->Body = "Дякуємо за звернення!, наш спеціаліст невдовзі зв'яжеться з вами";

    // Відправляємо лист
    $mail->send();
    echo 'Повідомлення надіслано!';
} catch (Exception $e) {
    echo "Повідомлення не вдалося надіслати. Помилка: {$mail->ErrorInfo}";
}
?>
