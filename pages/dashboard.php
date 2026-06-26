<?php
session_start();
require_once "../functions/users.php";
 
//checkLogin();


if (!isset($_SESSION['user_id'], $_SESSION['role'])) {
    header("Location: ../index.php");
    exit;
}

if ($_SESSION['role'] == "Admin") {
    header("Location: ../partials/dashboard_admin.php");
    exit;
}

if ($_SESSION['role'] == "Agent") {
    header("Location: ../partials/dashboard_agent.php");
    exit;
}


?>