<?php
include "../config/constants.php";
include "check_login.php";

?>



<html dir="rtl" lang="ar">
<head>
    <title>Food Order Website - Home Page</title>

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
<!-- Menu Section Starts -->
<div class="menu text-center">
    <div class="wrapper">
        <ul>
            <li><a href="index.php">الرئيسية</a></li>
            <li><a href="manage-admin.php">لوحة المدير</a></li>
            <li><a href="manage-category.php">الفئات</a></li>
            <li><a href="manage-food.php">الطعام</a></li>
            <li><a href="manage-order.php">الطلبات</a></li>
            <li><a href="manage-contact.php">التواصل</a></li>

            <li><a href="logout.php">تسجيل خروج</a></li>
        </ul>
    </div>
</div>