<?php
include "partials/menu.php";

?>

<div class="main-content">
    <div class="wrapper">
        <h1>اضافة مشرف جديد</h1>

        <br><br>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>الاسم كامل :</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>
                <tr>
                    <td>اسم المستخدم :</td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>
                <tr>
                    <td>كلمة المرور :</td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                    </tr>

            </table>

        </form>


    </div>
</div>

<?php
if(isset($_POST['submit'])){
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $sql="INSERT Into admin SET 
        full_name='$full_name',
        username='$username',
        password='$password'";

    $res=mysqli_query($conn,$sql);
            if ($res){
                $_SESSION['admin']="<span style='color: #2ed573'> تمت إضافة المشرف </span>";
                header("location:".SITURL."/admin/manage-admin.php");
            }else{
                $_SESSION['admin']="<span style='color: red'> تمت إضافة المشرف </span>";
                 header("location:".SITURL."/admin/manage-admin.php");

            }
}
include "partials/footer.php";
