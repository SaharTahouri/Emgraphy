<?php
function getDbConnection()
{
    static $connection = null; 

    // Database configuration
    $dbConfig = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "dbname" => "emgraphy",
        "charset" => "utf8mb4" // Ensures proper encoding
    ];

    if ($connection === null) {
        // Create a new connection using OO style
        $connection = new mysqli(
            $dbConfig["host"],
            $dbConfig["user"],
            $dbConfig["password"],
            $dbConfig["dbname"]
        );

        // Check for connection errors
        if ($connection->connect_error) {
            die("خطایی رخ داده است: " . $connection->connect_error);
        }

        // Set the character set
        if (!$connection->set_charset($dbConfig["charset"])) {
            die("خطا در تنظیم کدگذاری: " . $connection->error);
        }
    }

    return $connection;
}
