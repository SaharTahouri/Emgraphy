<?php
include "includes/header.php";
?>

<!-- main section -->
<main class="main">
    <!-- hero section -->
    <section class="hero pb-lg-4 py-5" id="hero" data-scroll-id="hero">
        <div class="container d-flex flex-sm-row flex-column justify-content-between align-items-center">
            <div class="hero-title-container">
                <!-- title -->
                <h1 class="hero-title fw-bolder">
                    خدمات حرفه‌ای
                    <span>
                        ادیت ویدیو
                    </span>
                    <!-- خدمات حرفه‌ای و خلاقانه ادیت ویدیو -->
                </h1>
                <!-- subtitle -->
                <h2 class="hero-subtitle mb-4">
                    ساخت
                    <strong>
                        کاور
                    </strong>
                    ریلز و پست،
                    <strong>
                        بنر
                    </strong>
                    استوری،
                    استوری
                    <strong>
                        موشن
                    </strong>
                    و
                    <strong>
                        آموزش
                    </strong>
                    تخصصی به شما
                </h2>
                <!-- hero button - order -->
                <a href="index.php#services-divider" class="btn btn-lg btn-purple btn-order">
                    ثبت سفارش
                </a>
            </div>
            <img src="assets/images/banner.png" alt="عکس بنر" class="hero-img" loading="lazy">
        </div>
    </section>
    <!-- divider line -->
    <div class="divider" id="services-divider"></div>

    <!-- services section -->
    <section class="services container py-sm-5 py-4 mt-3" data-scroll-id="services-divider">
        <!-- services cards -->
        <div class="card-group row justify-content-center gap-lg-3 gap-3">
            <!-- card 1 -->
            <div
                class="card col-lg-5 col-sm-5 col-11 justify-content-around align-items-center text-center p-2 pt-4 mb-lg-5 m-xl-0 mb-5">
                <!-- card video -->
                <video class="video-play-control card-img rounded-circle" muted loop>
                    <source data-src="assets/videos/services-edit-video.mp4" type="video/mp4">
                </video>
                <!-- card title -->
                <h1 class="card-title">
                    ادیت ویدیو
                </h1>
                <!-- card description -->
                <p class="card-text text-truncate w-100">
                    یک ادیت اصولی به ویدیو روح و جان می‌بخشد. امگرافی با مهارت خود، ویدیوی شما را به یک تجربه بی‌نظیر تبدیل می‌کند.
                </p>
                <!-- card button - order -->
                <a href="pages/edit-video.php" class="btn btn-purple btn-cta">
                    همین حالا سفارش بده
                </a>
            </div>
            <!-- card 2 -->
            <div
                class="card col-lg-5 col-sm-5 col-11 justify-content-around align-items-center text-center p-2 pt-4 mb-lg-5 m-xl-0 mb-5">
                <img src="assets/images/services-post-cover.jpg" alt="کاور پست و ریلز" loading="lazy"
                    class="card-img rounded-circle">
                <h1 class="card-title">
                    کاور پست و ریلز
                </h1>
                <p class="card-text text-truncate w-100">
                    کاور پست حکمِ لباس پست یا ویترین پیج را دارد. هر چه مرتب‌تر و خاص‌تر، جذاب‌تر.
                </p>
                <a href="pages/post-cover.php" class="btn btn-purple btn-cta">
                    همین حالا سفارش بده
                </a>
            </div>
            <!-- card 3 -->
            <div
                class="card col-lg-5 col-sm-5 col-11 p-2 pt-4 justify-content-around align-items-center text-center">
                <img src="assets/images/services-story-banner.jpg" alt="بنر استوری" loading="lazy"
                    class="card-img rounded-circle">
                <h1 class="card-title">
                    بنر استوری
                </h1>
                <p class="card-text text-truncate w-100">
                    برای تبلیغات مجازی‌تون روی امگرافی حساب کنید. برای معرفی خودتون، دوره‌هایا محصولاتتون ساده استوری نگذارید
                </p>
                <a href="pages/story-banner.php" class="btn btn-purple btn-cta">
                    همین حالا سفارش بده
                </a>
            </div>
            <!-- card 4 -->
            <div
                class="card col-lg-5 col-sm-5 col-11 p-2 pt-4 justify-content-around align-items-center text-center">
                <video class="video-play-control card-img rounded-circle" muted loop>
                    <source data-src="assets/videos/services-story-motion.mp4" type="video/mp4">
                </video>
                <h1 class="card-title">
                    استوری موشن
                </h1>
                <p class="card-text text-truncate w-100">
                    استوری موشن همین طور که از نامش پیداست یعنی حرکت.
                    و می‌‌تواند سطح هیجان مخاطب را بالا برده و احتمال خرید را افزایش دهد.
                </p>
                <a href="pages/story-motion.php" class="btn btn-purple btn-cta">
                    همین حالا سفارش بده
                </a>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="divider" id="courses-divider"></div>

    <!-- courses section -->
    <section class="courses container py-sm-5 py-4" data-scroll-id="courses-divider">
        <!-- courses title -->
        <h3 class="fw-bolder">
            دوره‌های آموزشی
        </h3>
        <!-- courses subtitle -->
        <h6 class="mb-4">
            با آموزش‌های تخصصی، مسیر حرفه‌ای خود را در ادیت ویدیو شروع کنید.
        </h6>
        <!-- courses cards -->
        <!-- courses cards -->
        <div class="row justify-content-around flex-lg-wrap flex-nowrap gap-lg-0 gap-3 px-lg-0 p-2">
            <!-- card 1 -->
            <div class="card justify-content-around align-items-center text-center p-2">
                <!-- card image -->
                <img src="assets/images/pixellab-banner.jpg" alt="مینی دورۀ پیکسلب" loading="lazy" class="card-img">
                <!-- card title -->
                <h1 class="card-title mt-2">
                    ساخت کاور ریلز در پیکسلب
                </h1>
                <!-- card description -->
                <p class="card-text text-truncate w-100">
                    مزیت طراحی کاور ریلز در پیکسلب این است که کاور شما در این برنامه به صورت لایه plp ذخیره می‌شود و برای ساخت کاور ریلز جدید کار شما راحت تر شده و فقط عکس و متن را ویرایش می‌کنید.
                </p>
                <!-- card button - enroll -->
                <a href="pages/courses.php?course=reels-cover" class="btn btn-purple btn-cta">
                    رایگان ثبت‌نام کن!
                </a>
            </div>
            <!-- card 2 -->
            <div class="card justify-content-around align-items-center text-center p-2">
                <img src="assets/images/pixellab-banner.jpg" alt="مینی دورۀ کپ‌کات" loading="lazy" class="card-img">
                <h1 class="card-title mt-2">
                    استفاده از قالب پست آماده در پیکسلب
                </h1>
                <p class="card-text text-truncate w-100">
                    این آموزش بسیار کاربردی است و کار شما را برای کاور پست بسیار راحت کرده و در وقت شما صرفه‌جویی می‌شود.
                </p>
                <a href="pages/courses.php?course=reels-cover-template" class="btn btn-purple btn-cta">
                    رایگان ثبت‌نام کن!
                </a>
            </div>
            <!-- card 3 -->
            <div class="card justify-content-around align-items-center text-center p-2">
                <img src="assets/images/inshot-banner.jpg" alt="بنر استوری" loading="lazy" class="card-img">
                <h1 class="card-title mt-2">
                    تنظیم سایز کاور پست
                </h1>
                <p class="card-text text-truncate w-100">
                    اگر سایز کاور پست را به درستی تنظیم نکنید، عکس و متن کاور در صفحه اینستاگرام به صورت کامل نمایش داده نمی‌شود. احتمالاً در صفحه اصلی برخی از پیج های اینستاگرام مواردی را مشاهده کردید که یک عکس کامل نیست یا متنی نیمه نمایش داده شده است. تنها علت آن، تنظیم نبودن کاور ریلز یا پست می‌باشد که ما این مشکل را با یک آموزش بسیار ساده برای همیشه حل کردیم.
                </p>
                <a href="pages/courses.php?course=set-cover-size" class="btn btn-purple btn-cta">
                    رایگان ثبت‌نام کن!
                </a>
            </div>
            <!-- card 4 -->
            <div class="card justify-content-around align-items-center text-center p-2">
                <img src="assets/images/pixellab-banner.jpg" alt="بنر استوری" loading="lazy" class="card-img">
                <h1 class="card-title mt-2">
                    ساخت بنر استوری کفش
                </h1>
                <p class="card-text text-truncate w-100">
                    می‌توانیم بگوییم با این آموزش شما علاوه بر آموزش طراحی یک بنر استوری، یک آشنایی بسیار خوب با برنامه پیکسلب پیدا می‌کنید که به صورت رایگان در جایی دسترس نمی‌باشد.
                    ولی امگرافی این امکان را برای افرادی که توان هزینه کردن برای آموزش ندارند را فراهم کرده تا شما هم بتوانید با این آموزش‌های مفید، کسب درآمد خود را شروع کنید.
                </p>
                <a href="pages/courses.php?course=story-banner" class="btn btn-purple btn-cta">
                    رایگان ثبت‌نام کن!
                </a>
            </div>
        </div>
    </section>
    <!-- divider line -->
    <div class="divider" id="portfolio-divider"></div>

    <!-- portfolio section -->
    <section class="portfolio pt-sm-5 pt-4" data-scroll-id="portfolio-divider">
        <!-- portfolio title -->
        <div class="container">
            <h3 class="fw-bolder mb-3">
                نمونه کارها
            </h3>
        </div>
        <!-- portfolio grid -->
        <div class="portfolio-masonry">
            <!-- portfolio overlay -->
            <div class="portfolio-overlay"></div>
            <!-- masonry items dynamically appended by JS -->
        </div>
    </section>
    <!-- divider line -->
    <div class="divider" id="about-divider"></div>

    <!-- about section -->
    <section
        class="about container d-flex flex-md-row flex-column justify-content-center align-items-center gap-2 py-sm-5 py-4" data-scroll-id="about-divider">
        <!-- profile image -->
        <img src="assets/images/profile.png" alt="عکس من"
            class="rounded-circle img-fluid">
        <!-- about text -->
        <div class="about-text d-grid">
            <!-- title -->
            <h3 class="fw-bolder">
                دربارۀ من
            </h3>
            <!-- text -->
            <p class="lead">
                معصومه بهرامی هستم، مدیریتِ سایت امگرافی.
                <br>
                از چندین سال پیش خلاقیت را در وجود خود احساس کردم و انواع کارهای هنری را امتحان کردم؛ ولی آن چیزی که مرا اقناع کند، نبود. قبل از هنرِ
                <strong class="fw-bold">ادیت و طراحی</strong>
                به سراغ نویسندگی رفتم و دو تا
                <strong class="fw-bold">کتاب داستان</strong>
                هم نوشتم که می‌توانید در منوی سایت آن‌ها را مشاهده کنید.
                اما کاری که مرا مجذوب خود کرد، ادیت و طراحی بود. کاری که با انجام آن متوجه گذر زمان نبودم و شب و روزم را صرف آن می‌کردم. با علاقه و اشتیاق فراوانی آن را انجام می‌دادم و توانستم خیلی زود در آن مهارت پیدا کنم و کارفرماهای خوبی جذب کنم. سفارش‌های این سایت با عشق و شور و اشتیاق انجام می‌شود. پس با دلی آرام سفارش‌های خود را به امگرافی بسپارید و معجزۀ آن را در پیج خود ببینید.
            </p>
        </div>
    </section>
    <!-- divider line -->
    <div class="divider" id="contact-divider"></div>

    <!-- contact section -->
    <section class="contact container d-flex flex-column justify-content-center align-items-center py-sm-5 py-4" id="contact" data-scroll-id="contact-divider">
        <h3 class="fw-bolder mb-4">
            ارتباط با ما
        </h3>
        <form action="pages/mail.php" method="POST"
            class="contact-form d-flex flex-column justify-content-center align-items-center w-100" id="messageForm" novalidate>
            <div class="row justify-content-center w-100 mb-3">
                <input type="text" name="senderName" id="senderName"
                    class="form-control ms-lg-3 ms-sm-2 mb-sm-0 mb-3" placeholder="نام" required>
                <input type="text" name="senderSubject" id="senderSubject"
                    class="form-control" placeholder="موضوع پیام" required>
            </div>
            <textarea name="senderMessage" id="senderMessage" class="form-control mb-3" cols="30" rows="10"
                wrap="hard" placeholder="متن پیام..." required></textarea>
            <button type="submit" class="btn btn-purple" id="message-submit">
                ارسال پیام
            </button>
        </form>
        <p class="response-holder m-0 mt-2"></p>
        <div class="d-flex flex-sm-row flex-column align-items-center mt-4 contact-other">
            <span class="mb-sm-0 mb-1">
                سایر راه‌های ارتباطی:
            </span>
            <ul class="list-unstyled d-flex p-0 m-0">
                <li>
                    <a href="https://www.instagram.com/emgraaphy" target="_blank" class="px-1">
                        اینستاگرام
                    </a>
                </li>
                <li>
                    <a href="https://t.me/emgraaphy" target="_blank" class="px-1">
                        تلگرام
                    </a>
                </li>
                <li>
                    <a href="mailto:emgraaphy@gmail.com" target="_blank" class="px-1">
                    ایمیل
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php
include "includes/footer.php";
?>
<script src="js/data-fetch.js"></script>
<script src="js/mail.js"></script>