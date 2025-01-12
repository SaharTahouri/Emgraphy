<?php
session_start();
require "db.php";

if (
    isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"])
    && isset($_POST["showedName"]) && isset($_POST["userPassword"]) && isset($_POST["reUserPassword"])
) {
    // Apply trim to remove unnecessary spaces from input
    $_SESSION["firstName"] = trim($_POST["firstName"]);
    $_SESSION["lastName"] = trim($_POST["lastName"]);
    $_SESSION["email"] = trim($_POST["email"]);
    $_SESSION["showedName"] = trim($_POST["showedName"]);
    $userPassword = trim($_POST["userPassword"]);
    $reUserPassword = trim($_POST["reUserPassword"]);
} else {
    $_SESSION["error"] = "خطایی رخ داد. لطفاً دوباره امتحان کنید.";
    header("Location: signin.php");
    exit();
}

$connection = getDbConnection(); // Connect to the database

// Check if the email already exists
$checkDupEmail = "SELECT COUNT(*) FROM users WHERE email = ?";
$stmt = $connection->prepare($checkDupEmail);
$stmt->bind_param("s", $_SESSION["email"]);
$stmt->execute();
$stmt->bind_result($emailCount);
$stmt->fetch();
$stmt->close();

if ($emailCount > 0) {
    $_SESSION["error"] = "ایمیل از قبل وجود دارد.";
    header("Location: signin.php");
    exit();
} else {
    // Hash the password before storing it
    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

    // Prepare the insert query
    $insertQuery = "INSERT INTO users (email, firstName, lastName, showedName, userPassword, type) VALUES (?, ?, ?, ?, ?, '0')";
    $stmt = $connection->prepare($insertQuery);
    $stmt->bind_param("sssss", $_SESSION["email"], $_SESSION["firstName"], $_SESSION["lastName"], $_SESSION["showedName"], $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION["success"] = !empty($_SESSION["showedName"]) ? $_SESSION["showedName"] : $_SESSION["firstName"];
        $_SESSION["login_state"] = true;
        $_SESSION["user_type"] = "normal";
        // Redirect to last visited page or default to index.php
        $redirectTo = $_SESSION["last_page"] ?? "../index.php";
        header("Location: $redirectTo");
        exit();
    } else {
        $_SESSION["error"] = "خطایی رخ داد. لطفاً دوباره امتحان کنید.";
        header("Location: signin.php");
        exit();
    }
}
