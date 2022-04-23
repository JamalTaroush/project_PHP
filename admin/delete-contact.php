<?php
include "../config/constants.php";
$id = $_GET['id'];
$sql="delete from contact where id='$id'";
$res=mysqli_query($conn,$sql);

if ($res){
    $_SESSION['delete']="<span style='color: #2ed573'> admin is deleted </span>";
    header("location:".SITURL."/admin/manage-contact.php");
}else {
    $_SESSION['delete'] = "<span style='color: red'> admin is deleted </span>";
    header("location:" . SITURL . "/manage-contact.php");
}