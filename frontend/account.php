<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
require "database.php";

error_reporting(0);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "SELECT * FROM  where email ='$email' and password ='$password'";
    $result = mysqli_query($conn, $sql);
    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['login'] = $row['email'];
        $_SESSION['name'] = $row['fname'];
        $_SESSION['role'] = "Dosen";
        // alihkan ke halaman dashboard pegawai
        header("location:index.php");

        // cek jika user login sebagai pengurus

        // buat session login dan username

        // alihkan ke halaman dashboard admin

        // cek jika user login sebagai pegawai

    }
    mysqli_close($conn);
    // if (mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while ($row = mysqli_fetch_assoc($result)) {

    //         $_SESSION['login'] = $email;
    //         header('Location:index.php');
    //         echo $row['email'];
    //         echo $row['password'];
    //         break;
    //     }

    // }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Fashion Mania A Ecommerce Category Flat Bootstarp Resposive Website Template | Account :: w3layouts</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/stylepassword.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- start menu -->
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/memenu.js"></script>
    <script>
    $(document).ready(function() {
        $(".memenu").memenu();
    });
    </script>
    <script src="js/simpleCart.min.js"> </script>
    <!-- slide -->
</head>

<body>
    <!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="col-md-4 world">
                    <ul>
                        <li>
                            <select class="in-drop">
                                <option>English</option>
                                <option>Japanese</option>
                                <option>French</option>
                            </select>
                        </li>
                        <li><select class="in-drop1">
                                <option>Dollar</option>
                                <option>Euro</option>
                                <option>Yen</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 logo">
                    <a href="index.php"><img src="images/logo.png" alt=""></a>
                </div>

                <div class="col-md-4 header-left">
                    <?php if (isset($_SESSION['login'])) {
    ?>

                    <p class="log"><a href="logout.php">Log out</a>

                    </p>
                    <?php
}?>
                    <?php if (empty($_SESSION['login'])) {
    ?>
                    <p class="log"><a href="account.php">Login</a>
                        <span>or</span><a href="account.php">Signup</a>
                    </p>
                    <?php }?>
                    <div class="cart box_1">
                        <a href="checkout.php">
                            <h3>
                                <div class="total">
                                    <span class="simpleCart_total"></span>
                                </div>
                                <img src="images/cart.png" alt="" />
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="container">
            <div class="head-top">
                <div class="col-md-2 number">
                    <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                </div>
                <div class="col-md-8 h_menu4">
                    <ul class="memenu skyblue">
                        <li class=" grid"><a href="index.php">Home</a></li>
                        <li><a href="#">Men</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>All Clothing</h4>
                                            <ul>
                                                <li><a href="products.php">Shirts</a></li>
                                                <li><a href="products.php">Sports Wear</a></li>
                                                <li><a href="products.php">Shorts</a></li>
                                                <li><a href="products.php">Suits & Blazers</a></li>
                                                <li><a href="products.php">Formal Shirts</a></li>
                                                <li><a href="products.php">Sweatpants</a></li>
                                                <li><a href="products.php">Swimwear</a></li>
                                                <li><a href="products.php">Trousers & Chinos</a></li>
                                                <li><a href="products.php">T-Shirts</a></li>
                                                <li><a href="products.php">Underwear & Socks</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Footwear</h4>
                                            <ul>
                                                <li><a href="products.php">Formal Shoes</a></li>
                                                <li><a href="products.php">Boots</a></li>
                                                <li><a href="products.php">Sports Shoes</a></li>
                                                <li><a href="products.php">Casual Shoes</a></li>
                                                <li><a href="products.php">Running Shoes</a></li>
                                                <li><a href="products.php">Sneakers</a></li>
                                                <li><a href="products.php">Loafers</a></li>
                                                <li><a href="products.php">Slippers</a></li>
                                                <li><a href="products.php">Sandals</a></li>
                                                <li><a href="products.php">Flip-flops</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                <li><a href="products.php">Levis</a></li>
                                                <li><a href="products.php">Persol</a></li>
                                                <li><a href="products.php">Nike</a></li>
                                                <li><a href="products.php">Edwin</a></li>
                                                <li><a href="products.php">New Balance</a></li>
                                                <li><a href="products.php">Jack & Jones</a></li>
                                                <li><a href="products.php">Paul Smith</a></li>
                                                <li><a href="products.php">Ray-Ban</a></li>
                                                <li><a href="products.php">Wood Wood</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#"> Women</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>All Clothing</h4>
                                            <ul>
                                                <li><a href="products.php">Shirts & Tops</a></li>
                                                <li><a href="products.php">Sports Wear</a></li>
                                                <li><a href="products.php">Kurtas & Kurties</a></li>
                                                <li><a href="products.php">Suits & Blazers</a></li>
                                                <li><a href="products.php">Sarees</a></li>
                                                <li><a href="products.php">Sweatpants</a></li>
                                                <li><a href="products.php">Swimwear</a></li>
                                                <li><a href="products.php">Night-Suits</a></li>
                                                <li><a href="products.php">T-Shirts</a></li>
                                                <li><a href="products.php">Jeans</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Footwear</h4>
                                            <ul>
                                                <li><a href="products.php">Heels</a></li>
                                                <li><a href="products.php">Flats</a></li>
                                                <li><a href="products.php">Sports Shoes</a></li>
                                                <li><a href="products.php">Casual Shoes</a></li>
                                                <li><a href="products.php">Running Shoes</a></li>
                                                <li><a href="products.php">Wedges</a></li>
                                                <li><a href="products.php">Boots</a></li>
                                                <li><a href="products.php">Pumps</a></li>
                                                <li><a href="products.php">Slippers</a></li>
                                                <li><a href="products.php">Flip-flops</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                <li><a href="products.php">Levis</a></li>
                                                <li><a href="products.php">Persol</a></li>
                                                <li><a href="products.php">Nike</a></li>
                                                <li><a href="products.php">Edwin</a></li>
                                                <li><a href="products.php">New Balance</a></li>
                                                <li><a href="products.php">Jack & Jones</a></li>
                                                <li><a href="products.php">Paul Smith</a></li>
                                                <li><a href="products.php">Ray-Ban</a></li>
                                                <li><a href="products.php">Wood Wood</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="typo.php">Blog</a></li>
                        <li><a class="color6" href="contact.php">Conact</a></li>
                    </ul>
                </div>
                <div class="col-md-2 search">
                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i
                            class="glyphicon glyphicon-search"> </i> </a>
                </div>
                <div class="clearfix"> </div>
                <!---pop-up-box---->
                <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
                <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                <!---//pop-up-box---->
                <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                        <div class="login">
                            <input type="submit" value="">
                            <input type="text" value="Type something..." onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = '';}">
                        </div>
                        <p> Shopping</p>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
                </script>
                <!---->
            </div>
        </div>
    </div>
    <!--//header-->
    <div class="account">
        <div class="container">
            <h1>Account</h1>
            <div class="account_grid">
                <div class="col-md-6 login-right">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        <span>Email Address</span>
                        <input type="text" name="email">

                        <span>Password</span>
                        <input type="password" name="password">
                        <div class="word-in">
                            <a class="forgot" href="#">Forgot Your Password?</a>
                            <input type="submit" value="Login" name="submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-left">
                    <h4>NEW CUSTOMERS</h4>
                    <p>By creating an account with our store, you will be able to move through the checkout process
                        faster, store multiple shipping addresses, view and track your orders in your account and more.
                    </p>
                    <a class="acount-btn" href="register.php">Create an Account</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-8 top-footer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.91163207516!2d2.3470599!3d48.85885894999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1436340519910"
                        allowfullscreen=""></iframe>
                </div>
                <div class="col-md-4 top-footer1">
                    <h2>Newsletter</h2>
                    <form>
                        <input type="text" value="" onfocus="this.value='';"
                            onblur="if (this.value == '') {this.value ='';}">
                        <input type="submit" value="SUBSCRIBE">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="col-md-3 footer-bottom-cate">
                    <h6>Categories</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>

                    </ul>
                </div>
                <div class="col-md-3 footer-bottom-cate">
                    <h6>Feature Projects</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>

                    </ul>
                </div>
                <div class="col-md-3 footer-bottom-cate">
                    <h6>Top Brands</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>

                    </ul>
                </div>
                <div class="col-md-3 footer-bottom-cate cate-bottom">
                    <h6>Our Address</h6>
                    <ul>
                        <li>Aliquam metus dui. </li>
                        <li>orci, ornareidquet</li>
                        <li> ut,DUI.</li>
                        <li>nisi, dignissim</li>
                        <li>gravida at.</li>
                        <li class="phone">PH : 6985792466</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <p class="footer-class"> © 2015 Fashion Mania. All Rights Reserved | Design by <a
                        href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
        </div>
    </div>

    <!--//footer-->
</body>

</html>