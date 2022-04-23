<?php

include "partials/menu.php";
?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Food</h1>
            <br><br>
            <?php if (isset($_SESSION['food'])){
                echo ($_SESSION['food']);
                unset($_SESSION['food']);
            } ?>
            <form action="" method="POST" >
                <table class="tbl-30">
                    <tr>
                        <td>Title:</td>
                        <td>
                            <input type="text" name="title" placeholder="Title of the Food">
                        </td>
                    </tr>

                    <tr>
                        <td>Description: </td>
                        <td>
                            <textarea name="description" cols="30" rows="5" placeholder="Description of the Food."></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Price: </td>
                        <td>
                            <input type="number" name="price">
                        </td>
                    </tr>

                    <tr>
                        <td>Category: </td>
                        <td>
                            <select name="category">
                                <option>jamal</option>
                                <option>jamal</option>
                                <option>jamal</option>
                                <option>jamal</option>
                                <option>jamal</option>
                                <option>jamal</option>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Featured: </td>
                        <td>
                            <input type="radio" name="featured" value="Yes"> Yes
                            <input type="radio" name="featured" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td>Active: </td>
                        <td>
                            <input type="radio" name="active" value="Yes"> Yes
                            <input type="radio" name="active" value="No"> No
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Food" class="btn-secondary">
                        </td>
                    </tr>

                </table>

            </form>


        </div>
    </div>


<?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $image=$_POST['image'];
        $featured=$_POST['featured'];
        $active=$_POST['active'];
        $category=$_POST['category'];
        $sql="INSERT Into foodrequset SET 
            titlea	='$title',
            descriptionb ='$description',
            pricec='$price',
            imagef='$image',
            featurede='$featured',
            activet='$active',
            category ='$category'";

    $res=mysqli_query($conn,$sql);
    if ($res){
        $_SESSION['food']="<span style='color: #2ed573'> food is added </span>";
        header("location:".SITURL."/admin/manage-food.php");
    }else{
        $_SESSION['food']="<span style='color: red'> admin is added </span>";
        header("location:".SITURL."/admin/manage-food.php");

    }
}
include "partials/footer.php";