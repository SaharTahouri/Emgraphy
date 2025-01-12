<?php
ob_start();
include "../includes/header.php";
if (isset($_GET["course"])) {
    $_SESSION["course"] = $_GET["course"];
}
?>

<main class="container position-relative my-3">
    <div class="row justify-content-center">
        <section class="accordion col-lg-9 col-12 mb-sm-4 mb-3">
            <!-- title -->
            <h2></h2>
            <!-- description -->
            <p></p>
            <!-- process list -->
            <ul class="accordion-list list-unstyled p-0">
                <!-- accordion items -->
            </ul>
        </section>
        <aside class="sidebar col-lg-3 col-11 order-lg-last order-first mb-lg-0 mb-3">
            <div class="course-info">
                <div class="price-tag d-flex">
                    <p class="price">قیمت:&nbsp;</p>
                    <p class="price-amount"></p>
                </div>
                <form action="courses_action.php" method="POST" class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-yellow col-7" name="enrollBtn">
                        ثبت‌نام دوره
                    </button>
                </form>
            </div>
            <div class="share-course mt-3 text-end">
                <h6>اشتراک‌گذاری دوره</h6>
                <!-- Share Buttons -->
                <div class="d-flex justify-content-between align-items-center gap-lg-1">
                    <a href="" target="_blank" id="telegram-share">
                        <!-- Telegram icon -->
                        <svg width='32px' height='32px' viewBox='0 0 1000 1000' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <defs>
                                <linearGradient x1='50%' y1='0%' x2='50%' y2='99.2583404%' id='linearGradient-1'>
                                    <stop stop-color='#2AABEE' offset='0%'></stop>
                                    <stop stop-color='#229ED9' offset='100%'></stop>
                                </linearGradient>
                            </defs>
                            <g id='Artboard' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                <circle id='Oval' fill='url(#linearGradient-1)' cx='500' cy='500' r='500'></circle>
                                <path d='M226.328419,494.722069 C372.088573,431.216685 469.284839,389.350049 517.917216,369.122161 C656.772535,311.36743 685.625481,301.334815 704.431427,301.003532 C708.567621,300.93067 717.815839,301.955743 723.806446,306.816707 C728.864797,310.92121 730.256552,316.46581 730.922551,320.357329 C731.588551,324.248848 732.417879,333.113828 731.758626,340.040666 C724.234007,419.102486 691.675104,610.964674 675.110982,699.515267 C668.10208,736.984342 654.301336,749.547532 640.940618,750.777006 C611.904684,753.448938 589.856115,731.588035 561.733393,713.153237 C517.726886,684.306416 492.866009,666.349181 450.150074,638.200013 C400.78442,605.66878 432.786119,587.789048 460.919462,558.568563 C468.282091,550.921423 596.21508,434.556479 598.691227,424.000355 C599.00091,422.680135 599.288312,417.758981 596.36474,415.160431 C593.441168,412.561881 589.126229,413.450484 586.012448,414.157198 C581.598758,415.158943 511.297793,461.625274 375.109553,553.556189 C355.154858,567.258623 337.080515,573.934908 320.886524,573.585046 C303.033948,573.199351 268.692754,563.490928 243.163606,555.192408 C211.851067,545.013936 186.964484,539.632504 189.131547,522.346309 C190.260287,513.342589 202.659244,504.134509 226.328419,494.722069 Z' id='Path-3' fill='#FFFFFF'></path>
                            </g>
                        </svg>
                    </a>
                    <a href="" target="_blank" id="whatsapp-share">
                        <!-- WhatsApp icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='38' height='38' viewBox='0 0 1219.547 1225.016' id='whatsapp'>
                            <path fill='#E0E0E0' d='M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z'></path>
                            <linearGradient id='a' x1='609.77' x2='609.77' y1='1190.114' y2='21.084' gradientUnits='userSpaceOnUse'>
                                <stop offset='0' stop-color='#20b038'></stop>
                                <stop offset='1' stop-color='#60d66a'></stop>
                            </linearGradient>
                            <path fill='url(#a)' d='M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z'></path>
                            <path fill='#FFF' fill-rule='evenodd' d='M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z' clip-rule='evenodd'></path>
                            <path fill='#FFF' d='M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z'></path>
                        </svg>
                    </a>
                    <a href="" target="_blank" id="instagram-share">
                        <!-- Instagram icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 102 102' id='instagram'>
                            <defs>
                                <radialGradient id='c' cx='6.601' cy='99.766' r='129.502' gradientUnits='userSpaceOnUse'>
                                    <stop offset='.09' stop-color='#fa8f21'></stop>
                                    <stop offset='.78' stop-color='#d82d7e'></stop>
                                </radialGradient>
                                <radialGradient id='d' cx='70.652' cy='96.49' r='113.963' gradientUnits='userSpaceOnUse'>
                                    <stop offset='.64' stop-color='#8c3aaa' stop-opacity='0'></stop>
                                    <stop offset='1' stop-color='#8c3aaa'></stop>
                                </radialGradient>
                            </defs>
                            <path fill='url(#c)' d='M25.865,101.639A34.341,34.341,0,0,1,14.312,99.5a19.329,19.329,0,0,1-7.154-4.653A19.181,19.181,0,0,1,2.5,87.694,34.341,34.341,0,0,1,.364,76.142C.061,69.584,0,67.617,0,51s.067-18.577.361-25.14A34.534,34.534,0,0,1,2.5,14.312,19.4,19.4,0,0,1,7.154,7.154,19.206,19.206,0,0,1,14.309,2.5,34.341,34.341,0,0,1,25.862.361C32.422.061,34.392,0,51,0s18.577.067,25.14.361A34.534,34.534,0,0,1,87.691,2.5a19.254,19.254,0,0,1,7.154,4.653A19.267,19.267,0,0,1,99.5,14.309a34.341,34.341,0,0,1,2.14,11.553c.3,6.563.361,8.528.361,25.14s-.061,18.577-.361,25.14A34.5,34.5,0,0,1,99.5,87.694,20.6,20.6,0,0,1,87.691,99.5a34.342,34.342,0,0,1-11.553,2.14c-6.557.3-8.528.361-25.14.361s-18.577-.058-25.134-.361'></path>
                            <path fill='url(#d)' d='M25.865,101.639A34.341,34.341,0,0,1,14.312,99.5a19.329,19.329,0,0,1-7.154-4.653A19.181,19.181,0,0,1,2.5,87.694,34.341,34.341,0,0,1,.364,76.142C.061,69.584,0,67.617,0,51s.067-18.577.361-25.14A34.534,34.534,0,0,1,2.5,14.312,19.4,19.4,0,0,1,7.154,7.154,19.206,19.206,0,0,1,14.309,2.5,34.341,34.341,0,0,1,25.862.361C32.422.061,34.392,0,51,0s18.577.067,25.14.361A34.534,34.534,0,0,1,87.691,2.5a19.254,19.254,0,0,1,7.154,4.653A19.267,19.267,0,0,1,99.5,14.309a34.341,34.341,0,0,1,2.14,11.553c.3,6.563.361,8.528.361,25.14s-.061,18.577-.361,25.14A34.5,34.5,0,0,1,99.5,87.694,20.6,20.6,0,0,1,87.691,99.5a34.342,34.342,0,0,1-11.553,2.14c-6.557.3-8.528.361-25.14.361s-18.577-.058-25.134-.361'></path>
                            <path fill='#fff' d='M461.114,477.413a12.631,12.631,0,1,1,12.629,12.632,12.631,12.631,0,0,1-12.629-12.632m-6.829,0a19.458,19.458,0,1,0,19.458-19.458,19.457,19.457,0,0,0-19.458,19.458m35.139-20.229a4.547,4.547,0,1,0,4.549-4.545h0a4.549,4.549,0,0,0-4.547,4.545m-30.99,51.074a20.943,20.943,0,0,1-7.037-1.3,12.547,12.547,0,0,1-7.193-7.19,20.923,20.923,0,0,1-1.3-7.037c-.184-3.994-.22-5.194-.22-15.313s.04-11.316.22-15.314a21.082,21.082,0,0,1,1.3-7.037,12.54,12.54,0,0,1,7.193-7.193,20.924,20.924,0,0,1,7.037-1.3c3.994-.184,5.194-.22,15.309-.22s11.316.039,15.314.221a21.082,21.082,0,0,1,7.037,1.3,12.541,12.541,0,0,1,7.193,7.193,20.926,20.926,0,0,1,1.3,7.037c.184,4,.22,5.194.22,15.314s-.037,11.316-.22,15.314a21.023,21.023,0,0,1-1.3,7.037,12.547,12.547,0,0,1-7.193,7.19,20.925,20.925,0,0,1-7.037,1.3c-3.994.184-5.194.22-15.314.22s-11.316-.037-15.309-.22m-.314-68.509a27.786,27.786,0,0,0-9.2,1.76,19.373,19.373,0,0,0-11.083,11.083,27.794,27.794,0,0,0-1.76,9.2c-.187,4.04-.229,5.332-.229,15.623s.043,11.582.229,15.623a27.793,27.793,0,0,0,1.76,9.2,19.374,19.374,0,0,0,11.083,11.083,27.813,27.813,0,0,0,9.2,1.76c4.042.184,5.332.229,15.623.229s11.582-.043,15.623-.229a27.8,27.8,0,0,0,9.2-1.76,19.374,19.374,0,0,0,11.083-11.083,27.716,27.716,0,0,0,1.76-9.2c.184-4.043.226-5.332.226-15.623s-.043-11.582-.226-15.623a27.786,27.786,0,0,0-1.76-9.2,19.379,19.379,0,0,0-11.08-11.083,27.748,27.748,0,0,0-9.2-1.76c-4.041-.185-5.332-.229-15.621-.229s-11.583.043-15.626.229' transform='translate(-422.637 -426.196)'></path>
                        </svg>
                    </a>
                    <a href="" target="_blank" id="eitaa-share">
                        <!-- Eitaa icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 3584.55 3673.6'>
                            <g id='Isolation_Mode' data-name='Isolation Mode'>
                                <path d='M1071.43,2.75H2607.66C3171,2.75,3631.82,462.91,3631.82,1026.2v493.93c-505,227-1014.43,1348.12-1756.93,1104.51-61.16,43.46-202.11,222.55-212,358.43-257.11-34.24-553.52-328.88-517.95-646.62C717,2026.91,1070.39,1455.5,1409.74,1225.51c727.32-492.94,1737.05-69,1175.39,283.45-341.52,214.31-1071.84,355.88-995.91-170.24-200.34,57.78-328.58,431.34-87.37,626-223.45,219.53-180.49,623.07,58.36,755.57,241.56-625.87,1082.31-544.08,1422-1291.2,255.57-562-123.34-1202.37-880.91-1104C1529.56,399.34,993.64,881.63,725.62,1453.64,453.68,2034,494.15,2811.15,1052.55,3202.82c657.15,460.92,1356.78,34.13,1780.52-523.68,249.77-328.78,468-693,798.75-903.37v875.72c0,563.28-460.88,1024.86-1024.16,1024.86H1071.43c-563.29,0-1024.16-460.87-1024.16-1024.16V1026.9C47.27,463.61,508.14,2.74,1071.43,2.74Z' transform='translate(-47.27 -2.74)' fill='#ee7f22' fill-rule='evenodd' />
                            </g>
                        </svg>
                    </a>
                    <a href="" target="_blank" id="bale-share">
                        <!-- Bale icon -->
                        <svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 1000 999.72'>
                            <defs>
                                <linearGradient id='linear-gradient' x1='800.4' y1='93.39' x2='93.57' y2='800.23' gradientUnits='userSpaceOnUse'>
                                    <stop offset='0' stop-color='#4cebb4' />
                                    <stop offset='1' stop-color='#2e2e74' />
                                </linearGradient>
                            </defs>
                            <g id='File'>
                                <g>
                                    <path d='M1010.36,547.36c-.73,17.77-2.6,36-6.85,53.41-1.54,16.48-6.36,32.54-10.76,48.52-5.14,19.5-12.48,38.33-19.9,57.17-6.77,15.66-14.35,30.91-22.26,46.08C942.92,766,934.93,779.2,926.29,792q-14.32,21-30.5,40.45c-11.18,13.13-22.68,26.09-35.15,37.92a503.68,503.68,0,0,1-51.3,43.55,453.44,453.44,0,0,1-48.44,31.56C742.06,956.74,722.16,966,702,974.6a548,548,0,0,1-65.89,21.86c-19.49,4.32-39,9.21-58.88,10.76-37,5.71-74.86,5.79-112.13,2.2-33.6-2.61-66.87-9.78-99.25-19.32l-.08-.58C210.19,944.18,82.32,816.07,34.94,661.2c-10.36-33.35-17.62-67.93-20.31-102.83-3.83-33.85-2-68-2.2-102q-.37-40.74-.08-81.64-.26-41.83,0-83.83c-.17-24-.08-47.95-.08-71.93s-.17-48.19.16-72.25c-.33-23.82-.08-47.63-.16-71.44-1.64-17.94,4.24-36.7,17.86-48.85C44.48,13.44,65.68,8.55,84,14.91c11.09,3.75,20.71,10.6,30.58,16.72,36,23.4,70.54,48.85,104.71,74.78a86.74,86.74,0,0,0,10.68-6.77A426.86,426.86,0,0,1,272.58,73.3a483.59,483.59,0,0,1,45.75-22.1c16.39-6.85,33.19-12.8,50.15-18.1,18.1-5,36.29-10.11,55-12.72a392.65,392.65,0,0,1,61.82-7.26,451.46,451.46,0,0,1,76.41,1.71A413.36,413.36,0,0,1,619,24c128.53,27,244.08,108.3,314.46,219a493,493,0,0,1,66.47,159.76c4.73,20.95,8.48,42.32,9.7,63.77A411.89,411.89,0,0,1,1010.36,547.36Z' transform='translate(-12 -12.14)' fill='url(#linear-gradient)' />
                                    <path d='M705.69,273.2a107.59,107.59,0,0,1,62.37,1.3c25.62,9.82,46.29,29.94,57.5,54.9,8.34,22.86,9.31,48.42.91,71.44-6.06,16.2-16.76,30.09-29.4,41.74q-16.7,16.49-33.21,33.14c-11.79,11.79-23.64,23.5-35.33,35.35-11.3,11.28-22.62,22.49-33.85,33.81-12.32,12.34-24.68,24.61-36.95,37-14,14-28.06,27.94-42,42-13.24,13.29-26.55,26.49-39.8,39.78s-26.77,26.71-40.1,40.11c-12.27,11.85-23.51,24.94-37.35,35.06a106.69,106.69,0,0,1-57.95,16C417,753.28,393.79,744,376.87,727.33q-78.53-78.44-157-156.94c-12.82-12.66-21.38-29.07-26-46.38-4.75-23.86-1.94-49.51,10.31-70.75,9.37-16.54,23.79-29.65,40.19-39a107.52,107.52,0,0,1,57.86-9.73c21.38,3.21,42,13,56.91,28.76Q401.7,476,444.37,518.5c8.63-8.18,16.9-16.73,25.19-25.27q18-17.31,35.24-35.35c11.36-10.68,22.33-21.82,33.07-33.12,7.74-6.88,14.75-14.51,22.07-21.8,12-11.68,23.75-23.59,35.49-35.51,11.21-10.83,22.11-21.95,33.07-33,11.79-11.5,23.28-23.28,35-34.87a105.75,105.75,0,0,1,42.21-26.37Z' transform='translate(-12 -12.14)' fill='#fff' />
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </aside>
    </div>
</main>

<?php
include "../includes/footer.php";

// If logged in and already enrolled
// Function to sanitize the table name (basic example, extend as needed)
function sanitizeTableName($email)
{
    return preg_replace("/[^a-zA-Z0-9_]/", "_", $email); // Replace special characters with "_"
}
if (isset($_SESSION["login_state"]) && isset($_SESSION["email"]) && isset($_SESSION["course"]) && !isset($_SESSION["enroll$course"])) {
    $email = $_SESSION["email"];
    $course = $_SESSION["course"];
    $tableName = sanitizeTableName($email);

    // Check if the table exists
    $checkUserTable = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ?";
    $stmt = $connection->prepare($checkUserTable);
    $stmt->bind_param("s", $tableName);
    $stmt->execute();
    $stmt->bind_result($tableCount);
    $stmt->fetch();
    $stmt->close();

    if ($tableCount > 0) {
        // Check if the user has already enrolled in this course
        $checkEnrollment = "SELECT COUNT(*) FROM $tableName WHERE courseName = ?";
        $stmt = $connection->prepare($checkEnrollment);
        $stmt->bind_param("s", $course);
        $stmt->execute();
        $stmt->bind_result($courseCount);
        $stmt->fetch();
        $stmt->close();

        // If already enrolled
        if ($courseCount > 0) {
            $_SESSION["enroll$course"] = true;
            $redirectTo = $_SESSION["last_page"] ?? "../index.php";
            header("Location: $redirectTo");
        }
    }
}

// If logged in and clicked on enroll
if (isset($_SESSION["login_state"]) && isset($_SESSION["enroll$course"])) {
?>
    <script>
        function sessionContent(parent, sessionName) {
            // Create video tags for videos
            if (sessionName.endsWith("mp4")) {
                let videoTag = createAppendElement("video", {
                    className: "rounded-3",
                    attributes: {
                        "muted": "",
                        "controls": "",
                        "controlslist": "nodownload",
                        "autoplay": "none",
                        "preload": "metadata"
                    }
                });
                createAppendElement("source", {
                    attributes: {
                        "src": `${sessionName}`,
                        "type": "video/mp4"
                    },
                    appendTo: videoTag
                });
                parent.append(videoTag);
                videoTag.pause();
            }

            // Show they've enrolled
            let courseInfo = document.querySelector(".course-info");
            courseInfo.classList.add("d-flex");
            courseInfo.classList.add("justify-content-center");
            courseInfo.innerHTML = "";
            createAppendElement("div", {
                className: "btn btn-yellow col-10",
                textContent: "دانشجوی این دوره هستید",
                appendTo: courseInfo
            });
        }

        function attachmentContent(parent, attachmentName) {
            // Create video tags for videos
            if (attachmentName.endsWith("mp4")) {
                let videoTag = createAppendElement("video", {
                    className: "rounded-3",
                    attributes: {
                        "muted": "",
                        "controls": "",
                        "controlslist": "nodownload",
                        "autoplay": "none",
                        "preload": "metadata"
                    }
                });
                createAppendElement("source", {
                    attributes: {
                        "src": `${attachmentName}`,
                        "type": "video/mp4"
                    },
                    appendTo: videoTag
                });
                parent.append(videoTag);
                videoTag.pause();
                // Create img tags for attachment files
            } else if (attachmentName.endsWith("jpg") || attachmentName.endsWith("png")) {
                let fileName = attachmentName.split('/').pop().split('.')[0];
                let downloadBtn = createAppendElement("a", {
                    className: "btn btn-purple",
                    attributes: {
                        "href": `${attachmentName}`,
                        "download": `${fileName}`
                    },
                    textContent: "دانلود فایل ضمیمه",
                    appendTo: parent
                });
            }
        }
    </script>
<?php
    // If not logged in or enrolled
} elseif ((isset($_SESSION["login_state"]) && $_SESSION["login_state"] === false) || !isset($_SESSION["enroll$course"])) {
?>
    <script>
        function sessionContent(parent) {
            // Create lock icons
            parent.innerHTML = "<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='#FFF' viewBox='0 0 256 256'><path d='M128,112a28,28,0,0,0-8,54.83V184a8,8,0,0,0,16,0V166.83A28,28,0,0,0,128,112Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,128,152Zm80-72H176V56a48,48,0,0,0-96,0V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80ZM96,56a32,32,0,0,1,64,0V80H96ZM208,208H48V96H208V208Z'></path></svg>";
        }

        function attachmentContent(parent) {
            // Create lock icons
            parent.innerHTML = "<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' fill='#FFF' viewBox='0 0 256 256'><path d='M128,112a28,28,0,0,0-8,54.83V184a8,8,0,0,0,16,0V166.83A28,28,0,0,0,128,112Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,128,152Zm80-72H176V56a48,48,0,0,0-96,0V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80ZM96,56a32,32,0,0,1,64,0V80H96ZM208,208H48V96H208V208Z'></path></svg>";
        }
    </script>
<?php
}
ob_end_flush();
?>
<script src="../js/accordion.js"></script>
<script src="../js/courses.js"></script>