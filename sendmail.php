<?php
    if ($_POST['capcha'] != 56) {
        header('location: index.html');
        exit;
    }
    if ($_POST['subject'] == 1{
        $subject = 'Вопрос по продукту';
    }) else if ($_POST['subject'] == 2{
        $subject = 'Личный вопрос';
    }) else if ($_POST['subject'] == 3{
        $subject = 'Благодарность';
    }) else {
        $subject = 'Вопрос по продукту';
    }

    $to = "zaboev04@mail.ru"
    $from = trim($_POST['email'])

    $message = htmlspecialchars($_POST['message'])
    $message = urldecode($message)
    $message = trim($message)

    $headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $message, $headers)){
        echo 'Письмо отправлено';
    }   else {
        echo 'Письмо не отправлено';
    }
?>