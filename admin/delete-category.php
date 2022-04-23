<?php
session_start();
include "../config/constants.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql="delete from category where id='$id'";
$res=mysqli_query($conn,$sql);
    if ($res){
    $_SESSION['category']="<span style='color: #2ed573'> category is deleted </span>";
    header("location:".SITURL."/admin/manage-category.php");
}else {
    $_SESSION['category'] = "<span style='color: red'> category is not deleted </span>";
    header("location:".SITURL."/admin/manage-category.php");
}}
