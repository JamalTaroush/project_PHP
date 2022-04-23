<?php
include "partials/menu.php";
?>

    <div class="main-content">
        <div class="wrapper">
            <h1>ترتيب</h1>

            <br/>

            <?php
            if(isset($_SESSION['delete'])){
                echo ($_SESSION['delete']);
                unset($_SESSION['delete']);
            }
            ?>

            <table class="tbl-full">
                <tr>
                    <th>الرقم - مميز</th>
                    <th>اسم المستخدم</th>
                    <th>البريد الالكتروني</th>
                    <th>الهاتف</th>
                    <th>رسالة</th>


                </tr>
                <?php
                $sql="select * from contact";
                $res=mysqli_query($conn,$sql);
                if ($res->num_rows>0){
                    while ($row=$res->fetch_assoc()){
                        $id=$row ['id'];
                        $username=$row['name'];
                        $email=$row['email'];
                        $phone=$row['phone'];
                        $message=$row['message'];

                        ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $username ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $phone ?></td>
                            <td><?php echo $message ?></td>


                            <td>
                                <a href="delete-contact.php?id=<?php echo $id ?>" class="btn-danger"> حذف </a>&nbsp;


                            </td>
                        </tr>
                        <?php
                    }
                } else { ?>
                    <tr>
                        <td>
                            <p> لا طلب </p></td>
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