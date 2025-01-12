<?php
session_start();

// Redirect to home page if already logged in
if (isset($_SESSION["login_state"]) && $_SESSION["login_state"]) {
    header("Location: ../index.php");
}

// Establish database connection
require "db.php";
$link = getDbConnection();
?>

<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $basePath; ?>assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    <title>اِم‌گرافی | ورود یا عضویت</title>
</head>

<body>
    <section class="container d-flex justify-content-center align-items-center w-100 min-vh-100">
        <div class="login-card d-flex flex-column justify-content-center align-items-center py-3 px-1 rounded-1">
            <img src="../assets/images/logo.png" alt="اِم‌گرافی" class="w-50 mb-2">
            <form action="login_action.php" method="POST"
                class="login-form d-flex flex-column justify-content-center align-items-center w-100">
                <input type="email" name="email" id="email" class="form-control col-11 mb-2" placeholder="ایمیل" autocomplete="email"
                    required>
                <input type="password" name="userPassword" id="userPassword" class="form-control col-11 mb-2"
                    placeholder="رمز عبور" autocomplete="current-password" required>
                <button type="submit" class="btn btn-purple col-11 mb-1">
                    ورود
                </button>
            </form>
            <div class="form-divider d-flex justify-content-center align-items-center w-100">
                <div class="form-divider-line ms-1"></div>
                <span>
                    یا
                </span>
                <div class="form-divider-line me-1"></div>
            </div>
            <a href="signin.php" class="btn btn-purple-outline col-11 mt-1">
                عضویت
            </a>
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
</body>

</html>