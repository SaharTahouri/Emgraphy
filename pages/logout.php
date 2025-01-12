<?php
session_start();
// Redirect to last visited page or default to index.php
$redirectTo = $_SESSION['last_page'] ?? '../index.php';
header("Location: $redirectTo");
session_unset();
session_destroy();
exit();
