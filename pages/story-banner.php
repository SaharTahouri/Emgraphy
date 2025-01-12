<?php
include "../includes/header.php";
?>

<!-- story banner page -->
<main class="container">
    <!-- introduction -->
    <div class="intro d-flex flex-column flex-sm-row justify-content-between align-items-top mb-4 mt-sm-4 mt-3 text-sm-end text-center">
        <div class="row flex-column col-sm-6 col-12 m-0">
            <!-- page title -->
            <div class="intro-title">
                <h1>
                    بنر استوری
                </h1>
            </div>
            <!-- page description -->
            <div class="intro-text fs-5">
                <p>
                    برای تبلیغات مجازی‌ خود روی امگرافی حساب کنید. برای معرفی خود، دوره‌ها یا محصولاتتان ساده استوری نگذارید.
                    <br>
                    امگرافی در یک قالب اصولی و حرفه‌ای، معرفی را خلاصه و مفید انجام می‌دهد و این یعنی جذب مخاطب بیشتر و در نتیجه فروش بیشتر.
                </p>
            </div>
        </div>
        <!-- introduction image -->
        <div class="intro-img col-sm-6 col-12 d-flex justify-content-sm-end justify-content-center">
            <img src="../assets/images/portfolio/story-banner-7.png" alt="بنر استوری" class="rounded-3">
        </div>
    </div>
    <!-- benefits of story banner -->
    <div class="service-cards-container mb-4">
        <!-- title -->
        <h2>
            چرا بنر استوری؟
        </h2>
        <!-- benefits -->
        <div class="service-cards d-flex justify-content-between">
            <!-- benefit 1 -->
            <div class="card d-flex align-items-center justify-content-center p-2">
                <p class="m-0 text-center">افزایش تعامل با مخاطب</p>

            </div>
            <!-- benefit 2 -->
            <div class="card d-flex align-items-center justify-content-center p-2">
                <p class="m-0 text-center">جلب توجه بیشتر در پلتفرم‌های اجتماعی</p>

            </div>
            <!-- benefit 3 -->
            <div class="card d-flex align-items-center justify-content-center p-2">
                <p class="m-0 text-center">تقویت هویت برند</p>

            </div>
        </div>
    </div>
    <!-- story banner samples -->
    <div class="samples mb-4">
        <!-- title -->
        <h2>
            نمونه بنرها
        </h2>
        <!-- samples grid -->
        <div class="samples-grid d-flex flex-wrap justify-content-md-between justify-content-around align-items-center gap-2">
            <img src="../assets/images/portfolio/story-banner-1.jpg" alt="نمونه بنر 1" class="rounded-3 img-fluid">
            <img src="../assets/images/portfolio/story-banner-5.jpg" alt="نمونه بنر 2" class="rounded-3 img-fluid">
            <img src="../assets/images/portfolio/story-banner-3.jpg" alt="نمونه بنر 3" class="rounded-3 img-fluid">
            <img src="../assets/images/portfolio/story-banner-4.jpg" alt="نمونه بنر 4" class="rounded-3 img-fluid">
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