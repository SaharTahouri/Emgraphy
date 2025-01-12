<?php
session_start();
require "db.php";

if (
    isset($_POST["editVideoName"]) && isset($_POST["editVideoPhone"]) &&
    isset($_POST["editVideoLevel"]) && isset($_POST["orderDetail"])
) {
    $name = htmlspecialchars(trim($_POST["editVideoName"]));
    $phone = htmlspecialchars(trim($_POST["editVideoPhone"]));
    $level = htmlspecialchars(trim($_POST["editVideoLevel"]));
    $detail = htmlspecialchars(trim($_POST["orderDetail"]));
    $subject = "سفارش ادیت ویدیو";
    $body = "نام: " . $name . "\n\n" . "شماره تماس / آیدی تلگرام: " . $phone . "\n\n" . "سطح سفارش: " . $level . "\n\n" . "توضیحات سفارش: " . $detail;
    $to = "emgraaphy@gmail.com";
    $headers = "از: " . $name . "\r\n";
    if (mail($to, $subject, $body, $headers)) {
        echo "پیام شما با موفقیت ارسال شد.";
    } else {
        echo "پیام ارسال نشد. لطفاً دوباره تلاش کنید.";
    }
    $formType = "edit-video"; //Set the form type for tracking
} elseif (isset($_POST["postCoverName"]) && isset($_POST["postCoverPhone"]) && isset($_POST["orderDetail"])) {
    $name = htmlspecialchars(trim($_POST["postCoverName"]));
    $phone = htmlspecialchars(trim($_POST["postCoverPhone"]));
    $detail = htmlspecialchars(trim($_POST["orderDetail"]));
    $subject = "سفارش کاور پست";
    $body = "نام: " . $name . "\n\n" . "شماره تماس / آیدی تلگرام: " . $phone . "\n\n" . "توضیحات سفارش: " . $detail;
    $to = "emgraaphy@gmail.com";
    $headers = "از: " . $name . "\r\n";
    if (mail($to, $subject, $body, $headers)) {
        echo "پیام شما با موفقیت ارسال شد.";
    } else {
        echo "پیام ارسال نشد. لطفاً دوباره تلاش کنید.";
    }
    $formType = "post-cover"; //Set the form type for tracking
} elseif (isset($_POST["storyBannerName"]) && isset($_POST["storyBannerPhone"]) && isset($_POST["orderDetail"])) {
    $name = htmlspecialchars(trim($_POST["storyBannerName"]));
    $phone = htmlspecialchars(trim($_POST["storyBannerPhone"]));
    $detail = htmlspecialchars(trim($_POST["orderDetail"]));
    $subject = "سفارش بنر استوری";
    $body = "نام: " . $name . "\n\n" . "شماره تماس / آیدی تلگرام: " . $phone . "\n\n" . "توضیحات سفارش: " . $detail;
    $to = "emgraaphy@gmail.com";
    $headers = "از: " . $name . "\r\n";
    if (mail($to, $subject, $body, $headers)) {
        echo "پیام شما با موفقیت ارسال شد.";
    } else {
        echo "پیام ارسال نشد. لطفاً دوباره تلاش کنید.";
    }
    $formType = "story-banner"; //Set the form type for tracking
} elseif (isset($_POST["storyMotionName"]) && isset($_POST["storyMotionPhone"]) && isset($_POST["orderDetail"])) {
    $name = htmlspecialchars(trim($_POST["storyMotionName"]));
    $phone = htmlspecialchars(trim($_POST["storyMotionPhone"]));
    $detail = htmlspecialchars(trim($_POST["orderDetail"]));
    $subject = "سفارش استوری موشن";
    $body = "نام: " . $name . "\n\n" . "شماره تماس / آیدی تلگرام: " . $phone . "\n\n" . "توضیحات سفارش: " . $detail;
    $to = "emgraaphy@gmail.com";
    $headers = "از: " . $name . "\r\n";
    if (mail($to, $subject, $body, $headers)) {
        echo "پیام شما با موفقیت ارسال شد.";
    } else {
        echo "پیام ارسال نشد. لطفاً دوباره تلاش کنید.";
    }
    $formType = "story-motion"; //Set the form type for tracking
} else {
    $_SESSION["orderError"] = "خطایی رخ داد. لطفاً دوباره امتحان کنید.";
    // Check in which page we are submitting an order and redirect there
    if ($formType === "edit-video") {
        header("Location: edit-video.php");
    } elseif ($formType === "post-cover") {
        header("Location: post-cover.php");
    } elseif ($formType === "story-banner") {
        header("Location: story-banner.php");
    } elseif ($formType === "story-motion") {
        header("Location: story-motion.php");
    }
    exit();
}

$connection = getDbConnection();

if ($formType === "edit-video") {
    $insertQuery = $connection->prepare("INSERT INTO editvideoorder (personName, numberOrId, editLevel, description) VALUES (?, ?, ?, ?)");
    $insertQuery->bind_param("ssss", $name, $phone, $level, $detail);
} elseif ($formType === "post-cover") {
    $insertQuery = $connection->prepare("INSERT INTO coverorder (personName, numberOrId, description) VALUES (?, ?, ?)");
    $insertQuery->bind_param("sss", $name, $phone, $detail);
} elseif ($formType === "story-banner") {
    $insertQuery = $connection->prepare("INSERT INTO storybannerorder (personName, numberOrId, description) VALUES (?, ?, ?)");
    $insertQuery->bind_param("sss", $name, $phone, $detail);
} elseif ($formType === "story-motion") {
    $insertQuery = $connection->prepare("INSERT INTO storymotionorder (personName, numberOrId, description) VALUES (?, ?, ?)");
    $insertQuery->bind_param("sss", $name, $phone, $detail);
}

if ($insertQuery->execute()) {
    $_SESSION["orderSuccess"] = "سفارش شما با موفقیت ثبت شد. منتظر پیغام ما باشید.";
} else {
    $_SESSION["orderError"] = "خطا در ثبت سفارش. لطفاً دوباره تلاش کنید.";
}

if ($formType === "edit-video") {
    header("Location: edit-video.php");
} elseif ($formType === "post-cover") {
    header("Location: post-cover.php");
} elseif ($formType === "story-banner") {
    header("Location: story-banner.php");
} elseif ($formType === "story-motion") {
    header("Location: story-motion.php");
}
exit();
