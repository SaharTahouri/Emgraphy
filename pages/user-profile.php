<?php
include "../includes/header.php";
?>
<!-- profile page -->
<main class="profile container py-4">
    <div class="personal-info">
        <h3>
            مشخصات فردی
        </h3>
        <?php
        // Check if user is logged in
        if (isset($_SESSION["login_state"])) {
            // Prepare and execute query to fetch user data
            $query = "SELECT lastName FROM users WHERE email = ?";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("s", $_SESSION["email"]);
            $stmt->execute();
            $stmt->bind_result($_SESSION["lastName"]);
            $stmt->fetch();
            $stmt->close();
        ?>
            <!-- full name -->
            <p class="full-name">
                <b>نام کامل:</b>
                <?= $_SESSION["firstName"] . " " . $_SESSION["lastName"]; ?>
            </p>
            <!-- showed name -->
            <p class="showed-name">
                <b>نام نمایشی:</b>
                <?= $_SESSION["showedName"]; ?>
            </p>
            <!-- email -->
            <p class="email">
                <b>ایمیل:</b>
                <?= $_SESSION["email"]; ?>
            </p>
        <?php
        }
        ?>
    </div>
    <div class="courses-info">
        <h3>
            دوره‌های من
        </h3>
        <?php
        // Function to sanitize the table name (basic example, extend as needed)
        function sanitizeTableName($email)
        {
            return preg_replace("/[^a-zA-Z0-9_]/", "_", $email); // Replace special characters with "_"
        }
        if (isset($_SESSION["login_state"]) && isset($_SESSION["email"])) {
            $email = $_SESSION["email"];
            $tableName = sanitizeTableName($email);

            // Check if the user table exists
            $checkUserTable = "SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ?";
            $stmt = $connection->prepare($checkUserTable);
            $stmt->bind_param("s", $tableName);
            $stmt->execute();
            $stmt->bind_result($tableCount);
            $stmt->fetch();
            $stmt->close();

            if ($tableCount > 0) {
                // Select the courses
                $selectCourses = "SELECT courseName FROM $tableName";
                $stmt = $connection->prepare($selectCourses);
                $stmt->execute();
                $stmt->bind_result($courseName);
                $courseNames = [];
                while ($stmt->fetch()) {
                    $courseNames[] = $courseName;
                }
                $stmt->close();
        ?>
                <!-- نام دوره‌های ثبت‌نام‌شده -->
                <?php
                foreach ($courseNames as $courseName) {
                    switch ($courseName) {
                        case "reels-cover":
                ?>
                            <a href="courses.php?course=<?= $courseName; ?>" class="text-black text-decoration-underline">
                                آموزش ساخت کاور ریلز در پیکسلب
                            </a>
                            <br>
                        <?php
                            break;
                        case "reels-cover-template":
                        ?>
                            <a href="courses.php?course=<?= $courseName; ?>" class="text-black text-decoration-underline">
                                آموزش استفاده از قالب پست آماده در پیکسلب
                            </a>
                            <br>
                        <?php
                            break;
                        case "set-cover-size":
                        ?>
                            <a href="courses.php?course=<?= $courseName; ?>" class="text-black text-decoration-underline">
                                آموزش تنظیم سایز کاور پست
                            </a>
                            <br>
                        <?php
                            break;
                        case "story-banner":
                        ?>
                            <a href="courses.php?course=<?= $courseName; ?>" class="text-black text-decoration-underline">
                                آموزش ساخت بنر استوری کفش
                            </a>
                            <br>
                        <?php
                            break;
                        default:
                        ?>
                            <a href="courses.php?course=<?= $courseName; ?>" class="text-black text-decoration-underline">
                                دوره‌های آموزشی پیکسلب
                            </a>
                            <br>
                <?php
                            break;
                    }
                }
            } else {
                ?>
                <p>
                    شما در حال حاضر در هیچ دوره‌ای شرکت نکرده‌اید.
                </p>
                <a href="<?= $basePath; ?>#courses-divider" class="btn btn-yellow col-2">
                    دوره‌های آموزشی
                </a>
        <?php
            }
        }
        ?>
    </div>
</main>
<?php
include "../includes/footer.php";
?>