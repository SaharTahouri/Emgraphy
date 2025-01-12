<?php
session_start();

// Redirect from profile to home page if not logged in
if ((!isset($_SESSION["login_state"]) && (basename($_SERVER["PHP_SELF"], ".php") == "user-profile" || basename($_SERVER["PHP_SELF"], ".php") == "admin-profile")) || (isset($_SESSION["user_type"]) && $_SESSION["user_type"] !== "admin" && basename($_SERVER["PHP_SELF"], ".php") == "admin-profile")) {
    header("Location: ../index.php");
}

// Get current page url and store it for redirection after login/logout/sign in
if (!in_array(basename($_SERVER["PHP_SELF"]), ["login.php", "logout.php"])) {
    $_SESSION["last_page"] = $_SERVER["REQUEST_URI"];
}

// Determine the relative path to the root
$basePath = "";
if (strpos($_SERVER["SCRIPT_NAME"], "/pages/") !== false || strpos($_SERVER["SCRIPT_NAME"], "/courses/") !== false) {
    $basePath = "../";
}

// Include the required files
include $basePath . "config.php";
require $basePath . "pages/db.php";

// Establish database connection
$connection = getDbConnection();

$page = basename($_SERVER["PHP_SELF"], ".php");
$course = isset($_GET["course"]) ? $_GET["course"] : null;

?>

<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $basePath; ?>assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="screen"
        href="<?= $basePath; ?>css/main.css">
    <?php
    // Get the current URL
    $protocol = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off") ? "https://" : "http://";
    $host = $_SERVER["HTTP_HOST"];
    $requestUri = $_SERVER["REQUEST_URI"];

    // Build the canonical URL
    $canonicalUrl = $protocol . $host . rtrim($requestUri, "/"); // Remove trailing slash

    // Ensure it always points to emgraphy.ir
    $canonicalUrl = str_replace("www.emgraphy.ir", "emgraphy.ir", $canonicalUrl);
    
    // Output the canonical tag
    ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
    <title>
        <?php
        switch ($page) {
            case "index":
                echo "امگرافی | ادیت ویدیو، بنر استوری، کاور پست";
                break;
            case "edit-video":
                echo "امگرافی | سفارش ادیت ویدیو اختصاصی";
                break;
            case "post-cover":
                echo "امگرافی | سفارش کاور پست و ریلز اختصاصی";
                break;
            case "story-banner":
                echo "امگرافی | سفارش بنر استوری اختصاصی";
                break;
            case "story-motion":
                echo "امگرافی | سفارش استوری موشن اختصاصی";
                break;
            case "courses":
                switch ($course) {
                    case "reels-cover":
                        echo "امگرافی | آموزش رایگان ساخت کاور ریلز در پیکسلب";
                        break;
                    case "reels-cover-template":
                        echo "امگرافی | آموزش رایگان استفاده از قالب پست آماده در پیکسلب";
                        break;
                    case "set-cover-size":
                        echo "امگرافی | آموزش رایگان تنظیم سایز کاور پست";
                        break;
                    case "story-banner":
                        echo "امگرافی | آموزش رایگان ساخت بنر استوری کفش";
                        break;
                    default:
                        echo "امگرافی | دوره‌های آموزشی پیکسلب";
                        break;
                }
                break;
            case "books":
                echo "کتاب‌های معصومه بهرامی";
                break;
            default:
                echo "امگرافی | ادیت ویدیو، بنر استوری، کاور پست";
                break;
        }
        ?>
    </title>
    <!-- Hotjar Tracking Code for https://emgraphy.ir -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 5231439,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-md position-sticky top-0 pb-md-2 pb-0">
        <div class="container">
            <!-- logo -->
            <a href="<?= $basePath; ?>index.php" class="navbar-brand p-0">
                <img src="<?= $basePath; ?>assets/images/logo.png" alt="امگرافی">
            </a>
            <!-- navbar buttons (tablet & mobile) -->
            <div class="navbar-btn-group d-flex justify-content-center align-items-center gap-2">
                <!-- logged in user -->
                <?php
                if (isset($_SESSION["success"])) {
                ?>
                    <div class="dropdown d-inline-block d-md-none">
                        <button class="btn btn-yellow dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#333" viewBox="0 0 256 256">
                                <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z">
                                </path>
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-center" href="#">
                                    <?php
                                    echo $_SESSION["success"];
                                    ?>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item text-center" href="<?= $basePath; ?>pages/<?php if ($_SESSION["user_type"] == "admin") { ?>admin-profile.php<?php } else { ?>user-profile.php<?php } ?>">پروفایل</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item text-center" href="<?= $basePath; ?>pages/logout.php">خروج</a>
                            </li>
                        </ul>
                    </div>
                <?php
                } else {
                ?>
                    <!-- log in/sign in button (tablet & mobile) -->
                    <a href="<?= $basePath; ?>pages/login.php" class="btn btn-yellow d-none login-btn-mobile">
                        <!-- user icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#333" viewBox="0 0 256 256">
                            <path
                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z">
                            </path>
                        </svg>
                    </a>
                <?php
                }
                ?>
                <!-- checkbox for burger toggler animation -->
                <input type="checkbox" id="burger-toggler" class="position-absolute" hidden>
                <!-- burger menu toggler button -->
                <button class="navbar-toggler btn btn-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#nav-burger-menu" aria-controls="nav-burger-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- label for checkbox - burger toggler animation -->
                    <label for="burger-toggler" class="navbar-burger-icon">
                        <!-- burger menu toggler button icon -->
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </label>
                </button>
            </div>
            <!-- navbar menu -->
            <div class="collapse navbar-collapse justify-content-lg-start justify-content-center" id="nav-burger-menu">
                <ul class="navbar-nav">
                    <!-- navbar menu item -->
                    <li class="nav-item">
                        <!-- navbar menu link -->
                        <a href="<?php if (basename($_SERVER["PHP_SELF"], ".php") !== "index") {
                                        echo BASE_URL;
                                    } ?>#hero" class="nav-link <?= ($page == 'index') ? 'active' : ''; ?>">
                            خانه
                        </a>
                    </li>
                    <li class="nav-item dropdown-center d-flex flex-md-row flex-column justify-content-between align-items-center">
                        <a href="<?php if (basename($_SERVER["PHP_SELF"], ".php") !== "index") {
                                        echo BASE_URL;
                                    } ?>#services-divider" class="nav-link <?= (in_array($page, ['edit-video', 'post-cover', 'story-banner', 'story-motion'])) ? 'active' : ''; ?>">
                            خدمات
                        </a>
                        <button class="btn dropdown-toggle dropdown-toggle-split p-0 py-1" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu text-center">
                            <li>
                                <a class="dropdown-item" href="<?= $basePath; ?>pages/edit-video.php">
                                    ادیت ویدیو
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= $basePath; ?>pages/post-cover.php">
                                    کاور پست و ریلز
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= $basePath; ?>pages/story-banner.php">
                                    بنر استوری
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= $basePath; ?>pages/story-motion.php">
                                    استوری موشن
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php if (basename($_SERVER["PHP_SELF"], ".php") !== "index") {
                                        echo BASE_URL;
                                    } ?>#courses-divider" class="nav-link <?= ($page == 'courses') ? 'active' : ''; ?>">
                            دوره‌های آموزشی
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php if (basename($_SERVER["PHP_SELF"], ".php") !== "index") {
                                        echo BASE_URL;
                                    } ?>pages/books.php" class="nav-link <?= ($page == 'books') ? 'active' : ''; ?>">
                            کتاب‌های من
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php if (basename($_SERVER["PHP_SELF"], ".php") !== "index") {
                                        echo BASE_URL;
                                    } ?>#contact-divider" class="nav-link">
                            ارتباط با ما
                        </a>
                    </li>
                </ul>
            </div>
            <!-- profile button -->
            <?php
            if (isset($_SESSION["success"])) {
            ?>
                <div class="dropdown-center d-none d-md-inline-block">
                    <button class="btn btn-yellow login-btn-desktop dropdown-toggle gap-1" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#333" viewBox="0 0 256 256">
                            <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z">
                            </path>
                        </svg>
                        <?php
                        echo $_SESSION["success"];
                        ?>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item text-center" href="<?= $basePath; ?>pages/<?php if ($_SESSION["user_type"] == "admin") { ?>admin-profile.php<?php } else { ?>user-profile.php<?php } ?>">پروفایل</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item text-center" href="<?= $basePath; ?>pages/logout.php">خروج</a>
                        </li>
                    </ul>
                </div>
            <?php
            } else {
            ?>
                <!-- log in/sign in button (desktop) -->
                <a href="<?= $basePath; ?>pages/login.php" class="btn btn-yellow login-btn-desktop">
                    <span>ورود</span>
                    <span>یا</span>
                    <span>عضویت</span>
                </a>
            <?php
            }
            ?>
        </div>
        <!-- divider line -->
        <div class="divider"></div>
    </nav>