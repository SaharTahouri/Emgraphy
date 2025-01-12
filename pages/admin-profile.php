<?php
include "../includes/header.php";
?>
<!-- profile page -->
<main class="profile container py-4">
    <div class="personal-info mb-md-4 mb-3">
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
    <div class="messages mb-md-4 mb-3">
        <h3>
            پیام‌های کاربران (بخش ارتباط با ما)
        </h3>
        <?php
        // Check if there are any messages
        $checkMessagesTable = "SELECT COUNT(*) FROM messages";
        $stmt = $connection->prepare($checkMessagesTable);
        $stmt->execute();
        $stmt->bind_result($messagesCount);
        $stmt->fetch();
        $stmt->close();

        if ($messagesCount > 0) {
            // Select the messages
            $selectMessages = "SELECT messageNumber, senderName, senderSubject, senderMessage FROM messages";
            $stmt = $connection->prepare($selectMessages);
            $stmt->execute();
            $stmt->bind_result($messageNumber, $senderName, $senderSubject, $senderMessage);
            $messages = [];
            while ($stmt->fetch()) {
                // Create an array for each message
                $message = [
                    $messageNumber,
                    $senderName,
                    $senderSubject,
                    $senderMessage
                ];
                // Add the message array to the parent array
                $messages[] = $message;
            }
            $stmt->close();
        ?>
            <ul class="accordion-list list-unstyled p-0">
                <!-- پیام‌های کاربران -->
                <?php
                foreach ($messages as $message) {
                ?>
                    <li class="py-1 px-2 mb-1 rounded-2">
                        <p class="accordion-item d-flex justify-content-between align-items-center gap-1 m-0">
                            <span>
                                <span class="ms-sm-3">
                                    <?php
                                    echo $message[0] . ". ";
                                    ?>
                                    <b>
                                        فرستنده:&nbsp;
                                    </b>
                                    <?php
                                    echo $message[1];
                                    ?>
                                </span>
                                <br class="d-sm-none">
                                <span>
                                    <b>
                                        موضوع:&nbsp;
                                    </b>
                                    <?php
                                    echo $message[2];
                                    ?>
                                </span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
                                <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        </p>
                        <div class="accordion-sample mt-2 mb-1">
                            <b>
                                متن پیام:
                            </b>
                            <br>
                            <?php
                            echo nl2br($message[3]);
                            ?>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        <?php
        } else {
        ?>
            <p>
                در حال حاضر پیامی برای نمایش وجود ندارد.
            </p>
        <?php
        }
        ?>
    </div>
    <div class="orders mb-md-4 mb-3">
        <h3>
            سفارش‌های ادیت ویدیو
        </h3>
        <?php
        // Check if there are any orders
        $checkOrderTable = "SELECT COUNT(*) FROM editvideoorder";
        $stmt = $connection->prepare($checkOrderTable);
        $stmt->execute();
        $stmt->bind_result($ordersCount);
        $stmt->fetch();
        $stmt->close();

        if ($ordersCount > 0) {
            // Select the orders
            $selectOrders = "SELECT orderID, personName, numberOrId, editLevel, description FROM editvideoorder";
            $stmt = $connection->prepare($selectOrders);
            $stmt->execute();
            $stmt->bind_result($orderNumber, $personName, $numberOrId, $editLevel, $description);
            $editOrders = [];
            while ($stmt->fetch()) {
                // Create an array for each order
                $editOrder = [
                    $orderNumber,
                    $personName,
                    $numberOrId,
                    $editLevel,
                    $description
                ];
                // Add the order array to the parent array
                $editOrders[] = $editOrder;
            }
            $stmt->close();
        ?>
            <ul class="accordion-list list-unstyled p-0">
                <!-- سفارش‌های ادیت ویدیو -->
                <?php
                foreach ($editOrders as $editOrder) {
                ?>
                    <li class="py-1 px-2 mb-1 rounded-2">
                        <p class="accordion-item d-flex justify-content-between align-items-center gap-1 m-0">
                            <span>
                                <span class="ms-sm-3">
                                    <?php
                                    echo $editOrder[0] . ". ";
                                    ?>
                                    <b>
                                        نام:&nbsp;
                                    </b>
                                    <?php
                                    echo $editOrder[1];
                                    ?>
                                </span>
                                <br class="d-sm-none">
                                <span class="ms-sm-3">
                                    <b>
                                        شماره یا آیدی تلگرام:&nbsp;
                                    </b>
                                    <?php
                                    echo $editOrder[2];
                                    ?>
                                </span>
                                <br class="d-sm-none">
                                <span>
                                    <b>
                                        سطح ادیت:&nbsp;
                                    </b>
                                    <?php
                                    switch ($editOrder[3]) {
                                        case "simple":
                                            echo "ساده";
                                            break;
                                        case "medium":
                                            echo "متوسط";
                                            break;
                                        case "pro":
                                            echo "حرفه‌ای";
                                            break;
                                        default:
                                            echo $editOrder[3];
                                    }
                                    ?>
                                </span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
                                <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        </p>
                        <div class="accordion-sample mt-2 mb-1">
                            <b>
                                متن سفارش:
                            </b>
                            <br>
                            <?php
                            echo nl2br($editOrder[4]);
                            ?>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        <?php
        } else {
        ?>
            <p>
                در حال حاضر سفارشی برای نمایش وجود ندارد.
            </p>
        <?php
        }
        ?>
    </div>
    <div class="orders mb-md-4 mb-3">
        <h3>
            سفارش‌های کاور پست و ریلز
        </h3>
        <?php
        // Check if there are any orders
        $checkOrderTable = "SELECT COUNT(*) FROM coverorder";
        $stmt = $connection->prepare($checkOrderTable);
        $stmt->execute();
        $stmt->bind_result($ordersCount);
        $stmt->fetch();
        $stmt->close();

        if ($ordersCount > 0) {
            // Select the orders
            $selectOrders = "SELECT orderID, personName, numberOrId, description FROM coverorder";
            $stmt = $connection->prepare($selectOrders);
            $stmt->execute();
            $stmt->bind_result($orderNumber, $personName, $numberOrId, $description);
            $coverOrders = [];
            while ($stmt->fetch()) {
                // Create an array for each order
                $coverOrder = [
                    $orderNumber,
                    $personName,
                    $numberOrId,
                    $description
                ];
                // Add the order array to the parent array
                $coverOrders[] = $coverOrder;
            }
            $stmt->close();
        ?>
            <ul class="accordion-list list-unstyled p-0">
                <!-- سفارش‌های کاور پست و ریلز -->
                <?php
                foreach ($coverOrders as $coverOrder) {
                ?>
                    <li class="py-1 px-2 mb-1 rounded-2">
                        <p class="accordion-item d-flex justify-content-between align-items-center gap-1 m-0">
                            <span>
                                <span class="ms-sm-3">
                                    <?php
                                    echo $coverOrder[0] . ". ";
                                    ?>
                                    <b>
                                        نام:&nbsp;
                                    </b>
                                    <?php
                                    echo $coverOrder[1];
                                    ?>
                                </span>
                                <br class="d-sm-none">
                                <span>
                                    <b>
                                        شماره یا آیدی تلگرام:&nbsp;
                                    </b>
                                    <?php
                                    echo $coverOrder[2];
                                    ?>
                                </span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
                                <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        </p>
                        <div class="accordion-sample mt-2 mb-1">
                            <b>
                                متن سفارش:
                            </b>
                            <br>
                            <?php
                            echo nl2br($coverOrder[3]);
                            ?>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        <?php
        } else {
        ?>
            <p>
                در حال حاضر سفارشی برای نمایش وجود ندارد.
            </p>
        <?php
        }
        ?>
    </div>
    <div class="orders mb-md-4 mb-3">
        <h3>
            سفارش‌های بنر استوری
        </h3>
        <?php
        // Check if there are any orders
        $checkOrderTable = "SELECT COUNT(*) FROM storybannerorder";
        $stmt = $connection->prepare($checkOrderTable);
        $stmt->execute();
        $stmt->bind_result($ordersCount);
        $stmt->fetch();
        $stmt->close();

        if ($ordersCount > 0) {
            // Select the orders
            $selectOrders = "SELECT orderID, personName, numberOrId, description FROM storybannerorder";
            $stmt = $connection->prepare($selectOrders);
            $stmt->execute();
            $stmt->bind_result($orderNumber, $personName, $numberOrId, $description);
            $storyBannerOrders = [];
            while ($stmt->fetch()) {
                // Create an array for each order
                $storyBannerOrder = [
                    $orderNumber,
                    $personName,
                    $numberOrId,
                    $description
                ];
                // Add the order array to the parent array
                $storyBannerOrders[] = $storyBannerOrder;
            }
            $stmt->close();
        ?>
            <ul class="accordion-list list-unstyled p-0">
                <!-- سفارش‌های بنر استوری -->
                <?php
                foreach ($storyBannerOrders as $storyBannerOrder) {
                ?>
                    <li class="py-1 px-2 mb-1 rounded-2">
                        <p class="accordion-item d-flex justify-content-between align-items-center gap-1 m-0">
                            <span>
                                <span class="ms-sm-3">
                                    <?php
                                    echo $storyBannerOrder[0] . ". ";
                                    ?>
                                    <b>
                                        نام:&nbsp;
                                    </b>
                                    <?php
                                    echo $storyBannerOrder[1];
                                    ?>
                                </span>
                                <br class="d-sm-none">
                                <span>
                                    <b>
                                        شماره یا آیدی تلگرام:&nbsp;
                                    </b>
                                    <?php
                                    echo $storyBannerOrder[2];
                                    ?>
                                </span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
                                <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        </p>
                        <div class="accordion-sample mt-2 mb-1">
                            <b>
                                متن سفارش:
                            </b>
                            <br>
                            <?php
                            echo nl2br($storyBannerOrder[3]);
                            ?>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        <?php
        } else {
        ?>
            <p>
                در حال حاضر سفارشی برای نمایش وجود ندارد.
            </p>
        <?php
        }
        ?>
    </div>
    <div class="orders mb-md-4 mb-3">
        <h3>
            سفارش‌های استوری موشن
        </h3>
        <?php
        // Check if there are any orders
        $checkOrderTable = "SELECT COUNT(*) FROM storymotionorder";
        $stmt = $connection->prepare($checkOrderTable);
        $stmt->execute();
        $stmt->bind_result($ordersCount);
        $stmt->fetch();
        $stmt->close();

        if ($ordersCount > 0) {
            // Select the orders
            $selectOrders = "SELECT orderID, personName, numberOrId, description FROM storymotionorder";
            $stmt = $connection->prepare($selectOrders);
            $stmt->execute();
            $stmt->bind_result($orderNumber, $personName, $numberOrId, $description);
            $storyMotionOrders = [];
            while ($stmt->fetch()) {
                // Create an array for each order
                $storyMotionOrder = [
                    $orderNumber,
                    $personName,
                    $numberOrId,
                    $description
                ];
                // Add the order array to the parent array
                $storyMotionOrders[] = $storyMotionOrder;
            }
            $stmt->close();
        ?>
            <ul class="accordion-list list-unstyled p-0">
                <!-- سفارش‌های استوری موشن -->
                <?php
                foreach ($storyMotionOrders as $storyMotionOrder) {
                ?>
                    <li class="py-1 px-2 mb-1 rounded-2">
                        <p class="accordion-item d-flex justify-content-between align-items-center gap-1 m-0">
                            <span>
                                <span class="ms-sm-3">
                                    <?php
                                    echo $storyMotionOrder[0] . ". ";
                                    ?>
                                    <b>
                                        نام:&nbsp;
                                    </b>
                                    <?php
                                    echo $storyMotionOrder[1];
                                    ?>
                                </span>
                                <br class="d-sm-none">
                                <span>
                                    <b>
                                        شماره یا آیدی تلگرام:&nbsp;
                                    </b>
                                    <?php
                                    echo $storyMotionOrder[2];
                                    ?>
                                </span>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" viewBox="0 0 256 256">
                                <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        </p>
                        <div class="accordion-sample mt-2 mb-1">
                            <b>
                                متن سفارش:
                            </b>
                            <br>
                            <?php
                            echo nl2br($storyMotionOrder[3]);
                            ?>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        <?php
        } else {
        ?>
            <p>
                در حال حاضر سفارشی برای نمایش وجود ندارد.
            </p>
        <?php
        }
        ?>
    </div>
    <div class="users mb-md-4 mb-3">
        <h3>
            کاربران سایت
        </h3>
        <?php
        // Check if there are any users
        $checkUsersTable = "SELECT COUNT(*) FROM users";
        $stmt = $connection->prepare($checkUsersTable);
        $stmt->execute();
        $stmt->bind_result($usersCount);
        $stmt->fetch();
        $stmt->close();

        if ($usersCount > 0) {
            // Select the users
            $selectUsers = "SELECT email, firstName, lastName, showedName FROM users";
            $stmt = $connection->prepare($selectUsers);
            $stmt->execute();
            $stmt->bind_result($userEmail, $firstName, $lastName, $showedName);
            $usersInfo = [];
            while ($stmt->fetch()) {
                // Create an array for each user
                $userInfo = [
                    $userEmail,
                    $firstName,
                    $lastName,
                    $showedName
                ];
                // Add the user array to the parent array
                $usersInfo[] = $userInfo;
            }
            $stmt->close();
        ?>
            <ul>
                <!-- لیست کاربران سایت -->
                <?php
                foreach ($usersInfo as $userInfo) {
                ?>
                    <li class="mb-2">
                        <b>
                            ایمیل:&nbsp;
                        </b>
                        <span>
                            <?php
                            echo $userInfo[0];
                            ?>
                        </span>
                        <br>
                        <b>
                            نام:&nbsp;
                        </b>
                        <span>
                            <?php
                            echo $userInfo[1];
                            ?>
                        </span>
                        <br>
                        <b>
                            نام خانوادگی:&nbsp;
                        </b>
                        <span>
                            <?php
                            echo $userInfo[2];
                            ?>
                        </span>
                        <br>
                        <b>
                            نام نمایشی:&nbsp;
                        </b>
                        <span>
                            <?php
                            echo $userInfo[3];
                            ?>
                        </span>
                    </li>
                <?php
                }
                ?>
            </ul>
        <?php
        } else {
        ?>
            <p>
                در حال حاضر سفارشی برای نمایش وجود ندارد.
            </p>
        <?php
        }
        ?>
    </div>
</main>
<?php
include "../includes/footer.php";
?>
<script src="../js/accordion.js"></script>
<script>
    accordionBehavior();
</script>