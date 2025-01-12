<?php
$page = basename($_SERVER['PHP_SELF'], ".php");
?>

<!-- message form for ordering -->
<section class="order container d-flex flex-column justify-content-center align-items-center pb-sm-5 pb-4 pt-sm-4 pt-3">
    <!-- title -->
    <h3 class="fw-bolder">
        سفارش
    </h3>
    <!-- description -->
    <p class="mb-3 text-center">
        فرم زیر را پر کنید تا درخواست
        <?php
        switch ($page) {
            case "edit-video":
        ?>
                ادیت ویدیوی
            <?php
                break;
            case "post-cover":
            ?>
                طراحی کاور
            <?php
                break;
            case "story-banner":
            ?>
                طراحی بنر استوری
            <?php
                break;
            case "story-motion":
            ?>
                طراحی استوری موشن
        <?php
        }
        ?>
        شما ثبت و با شما تماس گرفته شود.
    </p>
    <!-- order form -->
    <form action="order_action.php" method="POST"
        class="needs-validation contact-form d-flex flex-column justify-content-center align-items-center w-100" id="editVideoForm" novalidate>
        <div class="row justify-content-center w-100 mb-3">
            <input type="text" name="editVideoName" id="editVideoName"
                class="form-control ms-lg-3 ms-sm-2 mb-sm-0 mb-3" placeholder="نام و نام خانوادگی" required>
            <input type="text" name="editVideoPhone" id="editVideoPhone"
                class="form-control mb-sm-0 mb-3" placeholder="تلفن تماس یا آیدی تلگرام" required>
            <?php
            if ($page == "edit-video") {
            ?>
                <select name="editVideoLevel" id="editVideoLevel" class="form-control mt-sm-3" required>
                    <option value="" hidden selected>
                        انتخاب سطح ادیت
                    </option>
                    <option value="simple">
                        ساده
                    </option>
                    <option value="medium">
                        متوسط
                    </option>
                    <option value="pro">
                        حرفه‌ای
                    </option>
                </select>
            <?php
            }
            ?>
        </div>
        <textarea name="orderDetail" id="orderDetail" class="form-control mb-3" cols="30" rows="10"
            wrap="hard" placeholder="توضیحات سفارش..." required></textarea>
        <button type="submit" class="btn btn-purple" id="order-submit">
            ارسال
        </button>
    </form>
    <!-- server response -->
    <p class="response-holder m-0 mt-2"></p>
</section>