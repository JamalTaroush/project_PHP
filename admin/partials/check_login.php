<?php

if (isset($_SESSION['login'])) {

} else {
    $_SESSION['login_faild'] = " قم بتسجيل دخول اولا !";
    header("location:" . SITURL . "admin/login.php");

}




