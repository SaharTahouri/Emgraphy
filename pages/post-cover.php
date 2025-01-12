<?php
include "../includes/header.php";
?>

<!-- post cover page -->
<main class="container">
    <!-- introduction -->
    <div class="intro d-flex flex-column flex-sm-row justify-content-between align-items-top mb-4 mt-sm-4 mt-3 text-sm-end text-center">
        <div class="row flex-column col-sm-6 col-12 m-0">
            <!-- page title -->
            <div class="intro-title">
                <h1>
                    کاور پست
                </h1>
            </div>
            <!-- page description -->
            <div class="intro-text fs-5">
                <p>
                    کاور پست حکمِ لباس پست یا ویترین پیج را دارد. هر چه مرتب‌تر و خاص‌تر، جذاب‌تر.
                    <br>
                    امگرافی در کنار شماست تا هنرش را با سلیقه شما ترکیب و یک کاور پست جذاب برای شما طراحی کند.
                </p>
            </div>
        </div>
        <!-- introduction image -->
        <div class="intro-img col-sm-6 col-12 d-flex justify-content-sm-end justify-content-center">
            <img src="../assets/images/portfolio//post-cover-4.jpg" alt="کاور پست" class="rounded-3">
        </div>
    </div>
    <!-- benefits of post cover -->
    <div class="service-cards-container mb-4">
        <!-- title -->
        <h2>
            چرا کاور پست؟
        </h2>
        <!-- benefits -->
        <div class="service-cards d-flex justify-content-between">
            <!-- level 1 -->
            <div class="card d-flex align-items-center justify-content-center p-2">
                <p class="m-0 text-center">افزایش جذابیت بصری صفحۀ شما</p>

            </div>
            <!-- level 2 -->
            <div class="card d-flex align-items-center justify-content-center p-2">
                <p class="m-0 text-center">ترغیب مخاطبان به مشاهدۀ پست‌ها</p>

            </div>
            <!-- level 3 -->
            <div class="card d-flex align-items-center justify-content-center p-2">
                <p class="m-0 text-center">افزایش تعامل و فروش بیشتر</p>

            </div>
        </div>
    </div>
    <!-- post cover samples -->
    <div class="post-cover-samples mb-4">
        <!-- title -->
        <h2>
            نمونه کاورها
        </h2>
        <!-- samples grid -->
        <div class="post-cover-samples-grid d-flex flex-wrap justify-content-md-between justify-content-around align-items-center gap-2">
            <img src="../assets/images/portfolio/post-cover-1.jpg" alt="نمونه کاور 1" class="rounded-3 img-fluid">
            <img src="../assets/images/portfolio/post-cover-6.png" alt="نمونه کاور 2" class="rounded-3 img-fluid">
            <img src="../assets/images/portfolio/product-cover-1.jpg" alt="نمونه کاور 3" class="rounded-3 img-fluid">
            <img src="../assets/images/portfolio/post-cover-9.jpg" alt="نمونه کاور 4" class="rounded-3 img-fluid">
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