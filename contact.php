<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'akagi01freestyle@gmail.com';
    $subject = '新しいお問い合わせ';
    $body = "名前: {$name}\nメールアドレス: {$email}\nメッセージ: {$message}";
    $headers = "From: {$email}";

    if (mail($to, $subject, $body, $headers)) {
        echo 'お問い合わせありがとうございます。';
    } else {
        echo 'メールの送信に失敗しました。';
    }
}
?>
