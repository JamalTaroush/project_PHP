<?php
include ("config/constants.php");
ob_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Title Page-->
        <title>Register order </title>

        <!-- Icons font CSS-->
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/main.css" rel="stylesheet" media="all">
    </head>
<body>
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Registration food</h2>
                <?php
                if(isset($_SESSION['order'])){
                    echo ($_SESSION['order']);
                    unset($_SESSION['order']);
                }
                ?>
                <form action="" method="POST">
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Name" name="username">
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-2 js-datepicker" type="text" placeholder="Email" name="email">
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="gender">
                                        <option disabled="disabled" selected="selected">Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Price" name="price">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Address" name="address">
                            </div>
                        </div>
                    </div>

                        <input class="btn btn--radius btn--green" type="submit" name="submit"></input>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

    </html>
    <!-- end document-->

<?php
if(isset($_POST['submit'])){
    $Username = $_POST['username'];
    $Email =    $_POST['email'];
    $Price =  $_POST['price'];
    $Address =  $_POST['address'];
    $Gender =  $_POST['gender'];

    $sql = "INSERT Into register SET 
            username = '$Username' ,
            email = '$Email' ,
            price = '$Price' ,
            address = '$Address' , 
            gender = '$Gender'";
      $res=mysqli_query($conn,$sql);
                if ($res){
                    $_SESSION['order'] = "<span style='color: #2ed573'> Your request successfully</span>";
                    header("location:".SITURL."order.php");
                }else {
                    $_SESSION['order'] = "<span style='color: red'> Your request  Failed</span>";
                    header("location:" . SITURL . "order.php");
                } }
?>