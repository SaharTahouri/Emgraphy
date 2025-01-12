<?php
include "../includes/header.php";
?>

<!-- motion story page -->
<main class="container">
    <!-- introduction -->
    <div class="intro d-flex flex-column flex-sm-row justify-content-between align-items-top mb-4 mt-sm-4 mt-3 text-sm-end text-center">
        <div class="row flex-column col-sm-6 col-12 m-0">
            <!-- page title -->
            <div class="intro-title">
                <h1>استوری موشن</h1>
            </div>
            <!-- page description -->
            <div class="intro-text fs-5">
                <p>
                    استوری موشن همین طور که از نامش پیداست یعنی حرکت.
                    <br>
                    و می‌‌تواند سطح هیجان مخاطب را بالا برده و احتمال خرید را افزایش دهد.
                    <br>
                    اگر می‌خواهید کمپین فروش منحصر به فردی داشته باشید، امگرافی در کنار شماست تا معجزه را به شما نشان دهد.
                </p>
            </div>
        </div>
        <!-- introduction image -->
        <div class="intro-img col-sm-6 col-12 d-flex justify-content-sm-end justify-content-center">
            <video class="video-play-control rounded-3" muted loop>
                <source data-src="../assets/videos/portfolio/story-motion-4.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <!-- benefits of motion story -->
    <div class="service-cards-container mb-4">
        <!-- title -->
        <h2>چرا استوری موشن؟</h2>
        <!-- benefits -->
        <div class="service-cards d-flex justify-content-between">
            <!-- benefit 1 -->
            <div class="card d-flex align-items-center justify-content-center p-2">
                <p class="m-0 text-center">افزایش هیجان مخاطب</p>
            </div>
            <!-- benefit 2 -->
            <div class="card d-flex align-items-center justify-content-center p-2">
                <p class="m-0 text-center">افزایش احتمال خرید</p>
            </div>
            <!-- benefit 3 -->
            <div class="card d-flex align-items-center justify-content-center p-2">
                <p class="m-0 text-center">کمپین فروش منحصر به فرد</p>
            </div>
        </div>
    </div>

    <!-- motion story samples -->
    <div class="samples mb-4">
        <!-- title -->
        <h2>نمونه‌های استوری موشن</h2>
        <!-- samples grid -->
        <div class="samples-grid d-flex flex-wrap justify-content-md-between justify-content-around align-items-center gap-2">
            <video class="video-play-control rounded-3" muted loop>
                <source data-src="../assets/videos/portfolio/story-motion-2.mp4" type="video/mp4">
            </video>
            <video class="video-play-control rounded-3" muted loop>
                <source data-src="../assets/videos/portfolio/story-motion-3.mp4" type="video/mp4">
            </video>
            <video class="video-play-control rounded-3" muted loop>
                <source data-src="../assets/videos/portfolio/story-motion-1.mp4" type="video/mp4">
            </video>
            <video class="video-play-control rounded-3" muted loop>
                <source data-src="../assets/videos/portfolio/story-motion-4.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <!-- call-to-action -->
    <div class="cta-container d-flex justify-content-center mb-4">
        <button class="btn btn-yellow btn-cta fw-bold" id="start-work">
            شروع به همکاری
        </button>
    </div>

    <!-- message form for ordering -->
    <?php
    include "../includes/order.php";
    ?>
</main>

<?php
include "../includes/footer.php";
?>

<script src="../js/order.js"></script>