<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user-name'];
    $email = $_POST['user-email'];
    $tel = $_POST['user-tel'];
    
    // Адреса електронної пошти, на яку буде відправлено повідомлення
    $to = $_POST['user-email'];
    $subject = "Нове повідомлення від $name";
    $headers = "From: mechaniklegion@gmail.com";
    
    // Формуємо тіло повідомлення
    $email_body = "Ім'я: $name\n\nЕлектронна пошта: $email\n\nТелефон:\n$tel";
    
    // Відправляємо повідомлення
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Дякуємо за ваше повідомлення, $name. Ми зв'яжемося з вами найближчим часом!";
    } else {
        echo "Помилка під час відправки повідомлення.";
    }
}
?>
