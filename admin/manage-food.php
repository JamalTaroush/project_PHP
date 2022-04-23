<?php
include "partials/menu.php";

?>

    <div class="main-content">
    <div class="wrapper">
        <h1>إدارة الغذاء</h1>
        <br>
        <br>
        <?php
        if(isset($_SESSION['food'])){
            echo ($_SESSION['food']);
            unset($_SESSION['food']);
        }
        ?>
        <br/><br/>

        <!-- Button to Add Admin -->
        <a href="add-food.php" class="btn-primary">اضافة طعام</a>

        <br/><br/><br/>


        <table class="tbl-full">
            <tr>
                <th>العدد</th>
                <th>العنوان</th>
                <th>السعر</th>
                <th>الصورة</th>
                <th>متميز</th>
                <th>نشيط</th>
                <th>نشيط</th>
                <th>الفئة</th>

            </tr>

            <?php
            $sql="select * from foodrequset";
            $res=mysqli_query($conn,$sql);
            if ($res->num_rows>0){
                while ($row=$res->fetch_assoc()){
                    $id=$row['id'];
                    $title=$row['titlea'];
                    $description=$row['descriptionb'];
                    $price=$row['pricec'];
                    $image=$row['imagef'];
                    $featured=$row['featurede'];
                    $active=$row['activet'];
                    $category =$row['category'];
                    ?>
                    <tr>
                        <td><?php echo $title ?></td>
                        <td><?php echo $description ?></td>
                        <td><?php echo $price ?></td>
                        <td><?php echo $image ?></td>
                        <td><?php echo $featured ?></td>
                        <td><?php echo $active ?></td>
                        <td><?php echo $category ?></td>

                        <td>
                            <a href="update-food.php?id=<?php echo $id ?>" class="btn-secondary"> تحديث </a> &nbsp;
                            <a href="delete-food.php?id=<?php echo $id?>" class="btn-danger"> حذف </a>&nbsp;

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
    <!-- Main Content Setion Ends -->

<?php
include "partials/footer.php";

?>