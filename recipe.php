<?php
include ("config/constants.php");
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Spicyo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
 
<body class="main-layout Recipes_page">


     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li >
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="active">
                        <a href="recipe.html">Recipe</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.html"><img src="images/logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone">Contact Us : <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">987-654-3210</a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">demo@gmail.com</a></li>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">104 New york , USA</a></li>
                                <li class="button_user"><a class="button active" href="#">Login</a><a class="button" href="#">Register</a></li>
                                <li><img style="margin-right: 15px;" src="images/search_icon.png" alt="#"></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    
    <div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Our Recipes</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>
    <!-- section -->
    <section class="resip_section">
        <div class="container">
            <div class="row">
               
                <div class="col-md-12">
            <div class="owl-carousel owl-theme">

                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs1.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Homemade</h3>
                        <h4><span class="theme_color">$</span>10</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs2.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Noodles</h3>
                        <h4><span class="theme_color">$</span>20</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs3.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Egg</h3>
                        <h4><span class="theme_color">$</span>30</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs4.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Sushi Dizzy</h3>
                        <h4><span class="theme_color">$</span>40</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs5.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>The Coffee Break</h3>
                        <h4><span class="theme_color">$</span>50</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs1.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Homemade</h3>
                        <h4><span class="theme_color">$</span>10</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs2.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Noodles</h3>
                        <h4><span class="theme_color">$</span>20</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs3.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Egg</h3>
                        <h4><span class="theme_color">$</span>30</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs4.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>Sushi Dizzy</h3>
                        <h4><span class="theme_color">$</span>40</h4>
                    </div>
                </div>
                <div class="item">
                    <div class="product_blog_img">
                        <img src="images/rs5.png" alt="#" />
                    </div>
                    <div class="product_blog_cont">
                        <h3>The Coffee Break</h3>
                        <h4><span class="theme_color">$</span>50</h4>
                    </div>
                </div>

            </div>
        </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <fooetr>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2>Request  A<strong class="white"> Call  Back</strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form class="main_form" action="" method="post">
                            <div class="row">
                             
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input required class="form-control" placeholder="Name" type="text" name="Name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input required class="form-control" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input required class="form-control" placeholder="Phone" type="text" name="Phone">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea required class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input type="submit" class="send" name="submit">
                                </div>
                            </div>
                        </form>

                        <?php
                        if(isset($_SESSION['call'])){
                            echo ($_SESSION['call']);
                            unset($_SESSION['call']);
                        }
                        ?>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="img-box">
                            <figure><img src="images/img.jpg" alt="img" /></figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href="index.php"><img src="images/logo1.jpg" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="lik">
                            <li > <a href="index.php">Home</a></li>
                            <li> <a href="about.php">About</a></li>
                            <li class="active"> <a href="recipe.php">Recipe</a></li>
                            <li> <a href="blog.php">blog</a></li>
                            <li> <a href="contact.php">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="new">
                            <h3>Newsletter</h3>
                            <form class="newtetter">
                                <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                <button class="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>?? 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                </div>
            </div>
        </div>
    </fooetr>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>

</body>

</html>

<?php
if(isset($_POST['submit'])){
    $Username = $_POST['Name'];
    $Email =    $_POST['Email'];
    $Price =  $_POST['Phone'];
    $Message =  $_POST['Message'];

    $sql = "INSERT Into contact SET 
            name = '$Username' ,
            email = '$Email' ,
            phone = '$Price' ,
            message = '$Message' ";
    $res=mysqli_query($conn,$sql);
    if ($res){
        $_SESSION['call'] = "<span style='color: #000000'>  successfully Message </span>";
        header("location:".SITURL."recipe.php");
    }else {
        $_SESSION['call'] = "<span style='color: #000000'> Failed Message </span>";
        header("location:" . SITURL . "recipe.php");
    } }
?>