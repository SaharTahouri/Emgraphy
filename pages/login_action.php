<?php
session_start();
require "db.php";

if (isset($_POST["email"]) && isset($_POST["userPassword"])) {
    $_SESSION["email"] = trim($_POST["email"]);
    $userPassword = trim($_POST["userPassword"]);  // Trim right after getting the user password
} else {
    $_SESSION["error"] = "خطایی رخ داد. لطفاً دوباره امتحان کنید.";
    header("Location: ../pages/login.php");
    exit();
}

$connection = getDbConnection(); // Connect to the database

// Prepare and execute query to fetch user data
$query = "SELECT firstName, showedName, userPassword, type FROM users WHERE email = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("s", $_SESSION["email"]);
$stmt->execute();
$stmt->bind_result($_SESSION["firstName"], $_SESSION["showedName"], $hashedPassword, $userType);
$stmt->fetch();
$stmt->close();

// Check if user exists and verify password
if ($_SESSION["firstName"] && password_verify($userPassword, $hashedPassword)) {
    if ($userType == 1) {
        $_SESSION["user_type"] = "admin";
    } else {
        $_SESSION["user_type"] = "normal";
    }
    $_SESSION["success"] = !empty($_SESSION["showedName"]) ? $_SESSION["showedName"] : $_SESSION["firstName"];
    $_SESSION["login_state"] = true;
    // Redirect to last visited page or default to index.php
    $redirectTo = $_SESSION["last_page"] ?? "../index.php";
    header("Location: $redirectTo");
    exit();
} else {
    $_SESSION["error"] = "ایمیل یا رمز عبور اشتباه است.";
    header("Location: ../pages/login.php");
    exit();
}
