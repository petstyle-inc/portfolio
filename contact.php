<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

if($_POST) {
  $to = 'akagi01freestyle@gmail.com';
  $subject = 'お問い合わせがありました';
  
  $message = "お問い合わせがありました。\n";
  $message .= "\n";
  $message .= "入力された内容は以下の通りです。\n";
  $message .= "---\n";
  $message .= "\n";
  $message .= "お名前：\n";
  $message .= $_POST["name"];
  $message .= "\n";
  $message .= "メールアドレス:\n";
  $message .= $_POST["email"];
  $message .= "\n";
  $message .= "お問い合わせ本文:\n";
  $message .= $_POST["message"];

  if(mb_send_mail($to,$subject,$message)) {
    echo "メールが送信されました";
  } else {
    echo "メールの送信に失敗しました";
  }
} else {
  echo "HTMLからのPOST送信受信に失敗しました";
}
