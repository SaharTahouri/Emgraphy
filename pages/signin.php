<?php
session_start();

// Redirect to home page if already logged in
if (isset($_SESSION["login_state"]) && $_SESSION["login_state"]) {
    header("Location: ../index.php");
}

// Establish database connection

// Check if we're in the 'pages' folder or the root
if (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) {
    // We're inside the 'pages' folder, so just include relative to 'pages'
    include "../config.php";
    require "db.php";  // Assuming db.php is in the same directory as the page
} else {
    // We're in the root folder (index.php), so include relative to root
    include "config.php";
    require "pages/db.php";  // Go to the 'pages' folder
}

$link = getDbConnection();
?>

<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $basePath; ?>assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    <title>امگرافی | عضویت</title>
</head>

<body>
    <section class="container d-flex justify-content-center align-items-center w-100 min-vh-100">
        <div class="login-card d-flex flex-column justify-content-center align-items-center py-3 px-1 rounded-1">
            <img src="../assets/images/logo.png" alt="اِم‌گرافی" class="w-50 mb-2">
            <form action="signin_action.php" method="POST"
                class="needs-validation login-form d-flex flex-column justify-content-center align-items-center w-100" novalidate>
                <div class="signin-step-1 d-flex flex-column justify-content-center align-items-center w-100">
                    <input type="text" name="firstName" id="firstName" class="form-control col-11 mb-2"
                        placeholder="نام" required autocomplete="name">
                    <input type="text" name="lastName" id="lastName" class="form-control col-11 mb-2"
                        placeholder="نام خانوادگی" required autocomplete="family-name">
                    <input type="email" name="email" id="email" class="form-control col-11 mb-2" placeholder="ایمیل"
                        required autocomplete="email">
                    <button type="button" id="nextBtn" class="btn btn-purple col-11 mb-1 gap-1">
                        ادامه
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF"
                            viewBox="0 0 256 256">
                            <path
                                d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="signin-step-2 d-flex flex-column justify-content-center align-items-center w-100">
                    <input type="text" name="showedName" id="showedName" class="form-control col-11 mb-2"
                        placeholder="نام نمایشی (اختیاری)" autocomplete="username">
                    <input type="password" name="userPassword" id="userPassword" class="form-control col-11 mb-2"
                        placeholder="رمز عبور" autocomplete="new-password" required>
                    <input type="password" name="reUserPassword" id="reUserPassword" class="form-control col-11 mb-1"
                        placeholder="تکرار رمز عبور" onpaste="return false;" autocomplete="off" required>
                    <div class="invalid-feedback col-11">رمز عبور و تکرار آن هم‌خوانی ندارند.</div>
                    <button type="submit" class="btn btn-purple col-11 mt-2 mb-1">
                        عضویت
                    </button>
                </div>
            </form>
            <?php
            // Show error message
            if (isset($_SESSION["error"])) {
            ?>
                <p class="mt-1 mb-0 text-danger">
                    <?php
                    echo htmlspecialchars($_SESSION["error"]);
                    ?>
                </p>
            <?php
                unset($_SESSION["error"]);
            }

            // Close database connection
            mysqli_close($link);
            ?>
        </div>
    </section>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/signin.js"></script>
</body>

</html>