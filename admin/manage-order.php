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
                    <th>السعر</th>
                    <th>العنوان</th>
                    <th>الجنس</th>


                </tr>
                <?php
                $sql="select * from register";
                $res=mysqli_query($conn,$sql);
                if ($res->num_rows>0){
                    while ($row=$res->fetch_assoc()){
                        $id=$row ['id'];
                        $username=$row['username'];
                        $email=$row['email'];
                        $price=$row['price'];
                        $address=$row['address'];
                        $gender=$row['gender'];

                        ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $username ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $price ?></td>
                            <td><?php echo $address ?></td>
                            <td><?php echo $gender ?></td>


                            <td>
                                <a href="delete-order.php?id=<?php echo $id ?>" class="btn-danger"> حذف </a>&nbsp;


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