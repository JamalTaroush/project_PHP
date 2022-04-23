<?php
session_start();
include "../config/constants.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="delete from foodrequset where id='$id'";
    $res=mysqli_query($conn,$sql);
    if ($res){
        $_SESSION['foodrequset']="<span style='color: #2ed573'> food is deleted </span>";
        header("location:".SITURL."/admin/manage-food.php");
    }else {
        $_SESSION['foodrequset'] = "<span style='color: red'> food is not deleted </span>";
        header("location:".SITURL."/admin/manage-food.php");
    }}


