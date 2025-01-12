<?php
session_start();
require "db.php";

if (isset($_POST["senderName"]) && isset($_POST["senderSubject"]) && isset($_POST["senderMessage"])) {
    $senderName = $_POST["senderName"];
    $senderSubject = $_POST["senderSubject"];
    $subjectForEmail = "پیغام از بخش ارتباط با ما: " . $senderSubject;
    $senderMessage = $_POST["senderMessage"];
    $body = "نام: " . $senderName . "\n\n" . "پیغام: " . $senderMessage;
    $to = "emgraaphy@gmail.com";
    $headers = "از: " . $senderName . "\r\n";

    if (mail($to, $subjectForEmail, $body, $headers)) {
        echo "پیام شما با موفقیت ارسال شد.";
    } else {
        echo "پیام ارسال نشد. لطفاً دوباره تلاش کنید.";
    }
} else {
    $_SESSION["messageError"] = "خطایی رخ داد. لطفاً دوباره امتحان کنید.";
    exit();
}
$link = getDbConnection();
$query = "INSERT INTO messages (senderName, senderSubject, senderMessage) VALUES ('$senderName', '$senderSubject', '$senderMessage')";
mysqli_query($link, $query);
