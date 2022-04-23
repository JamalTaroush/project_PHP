<?php
include "../config/constants.php";
?>
    <html dir="rtl" >
    <head>
        <title>تسجيل دخول</title>
        <link rel="stylesheet" type="text/css" href="../css/login.css">

    </head>

<body>

<div class="login">
    <h1 class="text-center">تسجيل دخول </h1>
    <br><br>
    <?php
    if(isset($_SESSION['login'])){
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }
    if(isset($_SESSION['login_faild'])){
        echo $_SESSION['login_faild'];
        unset($_SESSION['login_faild']);
    }

    ?>
    <br><br>

    <form action="" method="POST" class="text-center">
        اسم المستخدم : <br>
        <input type="text" name="username" placeholder="ادخل اسم المستخدم"><br><br>

        كلمة المرور : <br>
        <input type="password" name="password" placeholder="ادخل كلمة المرور"><br><br>

        <input type="submit" name="submit" value="دخول" class="btn-primary">
        <br><br>
    </form>

</div>

<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password= md5($_POST['password']);
    $sql="select * from admin where username='$username'and password='$password'";
    $res=mysqli_query($conn,$sql);
    if($res->num_rows>0){
        $_SESSION['login']=$username;
        $_SESSION['timestamp']=time();
        header("location:".SITURL."admin/index.php");


    }else{
        $_SESSION['login']="<span style='color: red'> اسم المستخدم أو كلمة المرور غير صحيحة </span>";
        header("location:http://localhost:63342/php%20template/admin/login.php");

    }
}
