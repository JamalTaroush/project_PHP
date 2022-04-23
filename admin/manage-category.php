<?php
include 'partials/menu.php';
?>
<div class="main-content">
    <div class="wrapper">
        <h1>إدارة الفئة</h1>
        <br>

        <?php
        if(isset($_SESSION['category'])){
            echo $_SESSION['category'];
            unset($_SESSION['category']);
        }
        ?>
        <br>

        <!-- Button to Add Admin -->
        <a href="add-category.php" class="btn-primary">إضافة فئة</a>

        <br>
        <br>
        <br>
        <table class="tbl-full">
            <tr>
                <th>العدد</th>
                <th>العنوان</th>
                <th>الصورة</th>
                <th>متميز</th>
                <th>نشيط</th>
                <th>نشيط</th>
            </tr>

            <?php
            $sql="select * from category";
            $res=mysqli_query($conn,$sql);
            if($res->num_rows>0){
                while ($row=$res->fetch_assoc()){
                    $id=$row['id'];
                    $title=$row['title'];
                    $image_name=$row['image_name'];
                    $featured=$row['featured'];
                    $active=$row['active'];

                    ?>
                    <tr>
                        <td> <?php echo $id?></td>
                        <td> <?php echo $title?></td>

                        <td>
                            <img src=<?php echo "../".$image_name?> " width="50px">


                        </td>

                        <td><?php echo $featured?></td>
                        <td><?php echo $active?></td>
                        <td>
                            <a href="update-category.php?id=<?php echo $id?>" class="btn-secondary">تحديث الفئة</a>
                            <a href="update-category.php?id=<?php echo $id?>" class="btn-secondary">تحديث الفئة</a>
                            <a href="delete-category.php?id=<?php echo $id?>" class="btn-danger">حذف الفئة</a>
                        </td>
                    </tr>
                    <?php

                }}

            else{
                ?>
                <tr>
                    <td colspan="6">
                        <div class="error">لا توجد فئة مضافة.</div>
                    </td>
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