<?php
session_start();
require "db.php";

$connection = getDbConnection(); //Connect to the database

// Function to sanitize the table name (basic example, extend as needed)
function sanitizeTableName($email)
{
    return preg_replace("/[^a-zA-Z0-9_]/", "_", $email); // Replace special characters with "_"
}

// If logged in
if (isset($_SESSION["login_state"]) && isset($_SESSION["email"]) && isset($_SESSION["course"])) {
    $email = $_SESSION["email"];
    $course = $_SESSION["course"];
    $tableName = sanitizeTableName($email);

    // Check if the table exists
    $checkUserTable = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ?";
    $stmt = $connection->prepare($checkUserTable);
    $stmt->bind_param("s", $tableName);
    $stmt->execute();
    $stmt->bind_result($tableCount);
    $stmt->fetch();
    $stmt->close();
    
    // If hasn't enrolled yet
    if (isset($_POST["enrollBtn"])) {
        if ($tableCount == 0) {
            // Create the table if it doesn't exist
            $createTableQuery = "CREATE TABLE $tableName (
                    courseName VARCHAR(30) PRIMARY KEY,
                    dateEnrolled DATE
                )";
            if (!$connection->query($createTableQuery)) {
                $_SESSION["error"] = "خطایی در ایجاد جدول رخ داد.";
                $redirectTo = $_SESSION["last_page"] ?? "../index.php";
                header("Location: $redirectTo");
                exit();
            }
        }

        // Check if the user has already enrolled in this course
        $checkEnrollment = "SELECT COUNT(*) FROM $tableName WHERE courseName = ?";
        $stmt = $connection->prepare($checkEnrollment);
        $stmt->bind_param("s", $course);
        $stmt->execute();
        $stmt->bind_result($courseCount);
        $stmt->fetch();
        $stmt->close();

        // If not enrolled previously
        if ($courseCount == 0) {
            // Enroll the user
            $enrollDate = date("Y-m-d"); // Use full year format (Y-m-d)
            // Insert data into the user's table
            $insertQuery = "INSERT INTO $tableName (courseName, dateEnrolled) VALUES (?, ?)";
            $stmt = $connection->prepare($insertQuery);
            $stmt->bind_param("ss", $course, $enrollDate);

            // Check if the enrollment was successful
            if ($stmt->execute()) {
                $_SESSION["enroll$course"] = true;
                $stmt->close();
                $redirectTo = $_SESSION["last_page"] ?? "../index.php";
                header("Location: $redirectTo");
                exit();
            } else {
                $_SESSION["error"] = "خطایی رخ داد. لطفاً دوباره امتحان کنید.";
                $stmt->close();
                $redirectTo = $_SESSION["last_page"] ?? "../index.php";
                header("Location: $redirectTo");
                exit();
            }
        }
    }
    // If not logged in
} else {
    header("Location: login.php");
    exit();
}
