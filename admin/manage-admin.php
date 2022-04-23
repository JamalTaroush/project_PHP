<?php
include "partials/menu.php";
?>

<div class="main-content">
    <div class="wrapper">
        <h1>إدارة المسؤول</h1>
        <?php
            if(isset($_SESSION['admin'])){
              echo ($_SESSION['admin']);
              unset($_SESSION['admin']);
            }
        ?>

        <br/>

        <br><br><br>

        <a href="add-admin.php" class="btn-primary">إضافة مسؤول</a>

        <br/><br/><br/>

        <table class="tbl-full">
            <tr>
                <th>العدد</th>
                <th>الاسم كامل</th>
                <th>اسم المستخدم</th>
                <th>أجراءات</th>
            </tr>
            <?php
                $sql="select * from admin";
                $res=mysqli_query($conn,$sql);
                    if ($res->num_rows>0){
                        while ($row=$res->fetch_assoc()){
                                $id=$row ['id'];
                                $username=$row['username'];
                                $fullname=$row['full_name'];

                            ?>
                            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $fullname ?></td>
                <td><?php echo $username ?></td>
                <td>
                    <a href="update-admin.php?id=<?php echo $id ?>" class="btn-secondary"> تحديث </a> &nbsp;
                    <a href="delete-admin.php?id=<?php echo $id ?>" class="btn-danger"> حذف </a>&nbsp;
                    <a href="update-password.php?id=<?php echo $id ?>" class="btn-primary"> تغيير كلمة المرور </a>&nbsp;

                </td>
            </tr>
            <?php
                        }
                    } else { ?>
                        <tr>
                <td>
                    <p> no admin yet ! </p></td>
            </tr>
            <?php
                    }
            ?>





        </table>

    </div>
</div>

<?php
include "partials/footer.php";

?>