<?php
include "../includes/header.php";
?>

<!-- edit video page -->
<main class="container">
    <!-- introduction -->
    <div class="intro d-flex flex-column flex-sm-row justify-content-between align-items-top mb-4 mt-sm-4 mt-3 text-sm-end text-center">
        <div class="row flex-column col-sm-6 col-12 m-0">
            <!-- page title -->
            <div class="intro-title">
                <h1>
                    ادیت ویدیو
                </h1>
            </div>
            <!-- page description -->
            <div class="intro-text fs-5">
                <p>
                    یک ادیت اصولی به ویدیو روح و جان می‌بخشد. امگرافی با مهارت خود، ویدیوی شما را به یک تجربۀ بی‌نظیر تبدیل می‌کند.
                </p>
            </div>
        </div>
        <!-- introduction video -->
        <div class="intro-img col-sm-6 col-12 d-flex justify-content-sm-end justify-content-center">
            <video class="video-play-control rounded-3" muted loop>
                <source data-src="../assets/videos/portfolio/edit-video-7.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <!-- levels of video editting service -->
    <div class="service-cards-container mb-4">
        <!-- title -->
        <h2>
            سطوح خدمات
        </h2>
        <!-- levels -->
        <div class="service-cards d-flex justify-content-between">
            <!-- level 1 -->
            <div class="card d-flex align-items-center justify-content-center p-2 text-center">
                <!-- level title -->
                <h3 class="card-title mb-1">
                    ساده
                </h3>
                <!-- level description -->
                <p class="m-0">
                    بهبودهای ابتدایی و کوتاه
                </p>
            </div>
            <!-- level 2 -->
            <div class="card d-flex align-items-center justify-content-center p-2 text-center">
                <h3 class="card-title mb-1">
                    متوسط
                </h3>
                <p class="m-0">
                    بهبودهای پیشرفته و کات‌های ویژه
                </p>
            </div>
            <!-- level 3 -->
            <div class="card d-flex align-items-center justify-content-center p-2 text-center">
                <h3 class="card-title mb-1">
                    حرفه‌ای
                </h3>
                <p class="m-0">
                    ادیت کامل با افکت‌های پیشرفته
                </p>
            </div>
        </div>
    </div>
    <!-- video editting service process -->
    <div class="accordion mb-sm-4 mb-3">
        <!-- title -->
        <h2>
            فرایند ادیت ویدیو
        </h2>
        <!-- process list -->
        <ul class="accordion-list list-unstyled p-0">
            <li class="py-1 px-2 mb-1 rounded-2">
                <p class="accordion-item d-flex justify-content-between align-items-center gap-1 m-0">
                    بهبود کیفیت رنگ و نور
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </p>
                <div class="accordion-sample justify-content-around align-items-center mt-2 mb-1">
                    <video class="video-play-control rounded-3" muted loop>
                        <source data-src="../assets/videos/before-light-setting.mp4" type="video/mp4">
                    </video>
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="64" fill="#FFF" viewBox="0 0 400 256">
                        <path d="M360 88H120a8 8 0 01-8-8V51.31L35.31 128 112 204.69V176a8 8 0 018-8H360Zm0-16a16 16 0 0116 17v79a16 16 0 01-16 16H128v40a8 8 0 01-13.66 5.66l-96-96a8 8 0 010-11.32l96-96A8 8 0 01128 32V72h80Z"></path>
                    </svg>
                    <video class="video-play-control rounded-3" muted loop>
                        <source data-src="../assets/videos/after-light-setting.mp4" type="video/mp4">
                    </video>
                </div>
            </li>
            <li class="py-1 px-2 mb-1 rounded-2">
                <p class="accordion-item d-flex justify-content-between align-items-center gap-1 m-0">
                    تنظیم و نویزگیری صدا
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </p>
                <div class="accordion-sample justify-content-around align-items-center mt-2 mb-1">
                    <audio controls controlslist="noplaybackrate nodownload">
                        <source src="../assets/videos/before-sound-setting.mp3" type="audio/mpeg">
                    </audio>
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="64" fill="#FFF" viewBox="0 0 400 256">
                        <path d="M360 88H120a8 8 0 01-8-8V51.31L35.31 128 112 204.69V176a8 8 0 018-8H360Zm0-16a16 16 0 0116 17v79a16 16 0 01-16 16H128v40a8 8 0 01-13.66 5.66l-96-96a8 8 0 010-11.32l96-96A8 8 0 01128 32V72h80Z"></path>
                    </svg>
                    <video class="video-play-control rounded-3" loop controls controlslist="nofullscreen nodownload noremoteplayback noplaybackrate foobar">
                        <source data-src="../assets/videos/after-sound-setting.mp4" type="video/mp4">
                    </video>
                </div>
            </li>
            <li class="py-1 px-2 mb-1 rounded-2">
                <p class="accordion-item d-flex justify-content-between align-items-center gap-1 m-0">
                    کات‌های اصولی تصویر و صدا
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </p>
                <div class="accordion-sample justify-content-around align-items-center mt-2 mb-1">
                    <video class="video-play-control rounded-3" loop muted controls controlslist="nofullscreen nodownload noremoteplayback noplaybackrate foobar">
                        <source data-src="../assets/videos/before-cut.mp4" type="video/mp4">
                    </video>
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="64" fill="#FFF" viewBox="0 0 400 256">
                        <path d="M360 88H120a8 8 0 01-8-8V51.31L35.31 128 112 204.69V176a8 8 0 018-8H360Zm0-16a16 16 0 0116 17v79a16 16 0 01-16 16H128v40a8 8 0 01-13.66 5.66l-96-96a8 8 0 010-11.32l96-96A8 8 0 01128 32V72h80Z"></path>
                    </svg>
                    <video class="video-play-control rounded-3" loop muted controls controlslist="nofullscreen nodownload noremoteplayback noplaybackrate foobar">
                        <source data-src="../assets/videos/after-cut.mp4" type="video/mp4">
                    </video>
                </div>
            </li>
            <li class="py-1 px-2 rounded-2">
                <p class="accordion-item d-flex justify-content-between align-items-center gap-1 m-0">
                    اضافه کردن اوورلی و المان‌های تصویری و صوتی
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </p>
                <div class="accordion-sample justify-content-around align-items-center mt-2 mb-1">
                    <svg xmlns='http://www.w3.org/2000/svg' width='64' height='64' fill='#FFF' viewBox='0 0 256 256'>
                        <path d='M56,96v64a8,8,0,0,1-16,0V96a8,8,0,0,1,16,0ZM88,24a8,8,0,0,0-8,8V224a8,8,0,0,0,16,0V32A8,8,0,0,0,88,24Zm40,32a8,8,0,0,0-8,8V192a8,8,0,0,0,16,0V64A8,8,0,0,0,128,56Zm40,32a8,8,0,0,0-8,8v64a8,8,0,0,0,16,0V96A8,8,0,0,0,168,88Zm40-16a8,8,0,0,0-8,8v96a8,8,0,0,0,16,0V80A8,8,0,0,0,208,72Z'></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="64" fill="#FFF" viewBox="0 0 400 256">
                        <path d="M360 88H120a8 8 0 01-8-8V51.31L35.31 128 112 204.69V176a8 8 0 018-8H360Zm0-16a16 16 0 0116 17v79a16 16 0 01-16 16H128v40a8 8 0 01-13.66 5.66l-96-96a8 8 0 010-11.32l96-96A8 8 0 01128 32V72h80Z"></path>
                    </svg>
                    <video class="video-play-control rounded-3" loop muted controls controlslist="nofullscreen nodownload noremoteplayback noplaybackrate foobar">
                        <source data-src="../assets/videos/elements-overlay.mp4" type="video/mp4">
                    </video>
                </div>
            </li>
        </ul>
    </div>
    <!-- start working together button -->
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

<script src="../js/accordion.js"></script>
<script>
    accordionBehavior();
</script>
<script src="../js/order.js"></script>