<?php
include "partials/menu.php"

?>
        <div class="main-content">
            <div class="wrapper">
                <h1>لوحة القيادة</h1>
                <br><br>

                <br><br>

                <div class="col-4 text-center">

                    <?php
                    $sql = "select * from category ";
                    $res = mysqli_query($conn , $sql);
                    $category = mysqli_num_rows($res);
                    ?>

                    <h1> <?php echo $category?></h1>

                    <br />

                    فئات
                </div>

                <div class="col-4 text-center">

                    <?php
                    $sql = "select * from foodrequset ";
                    $res = mysqli_query($conn , $sql);
                    $food = mysqli_num_rows($res);
                    ?>

                    <h1> <?php echo $food ?></h1>

                    <br />
                    طعام
                </div>

                <div class="col-4 text-center">
                    <?php
                    $sql = "select * from register ";
                    $res = mysqli_query($conn , $sql);
                    $order = mysqli_num_rows($res);
                    ?>

                    <h1> <?php echo $order?></h1>


                    <br />
                    إجمالي الطلبات                </div>


        </div>

<?php
include "partials/footer.php"

?>