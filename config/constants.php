<?php
session_start();
define("SITURL",'http://localhost:63342/php%20template/');
define("ServerName","localhost");
define("username","root");
define("password","");
define("dbname","retaurent_test");
$conn = mysqli_connect(ServerName,username,password,dbname);

?>