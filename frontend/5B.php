<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require 'database.php';

$sql = "SELECT * FROM mahasiswa where kelas = '5B'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
                    <p class="log"><a href="account.php">Login</a>
                        <span>or</span><a href="account.php">Signup</a>
                    </p>
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
                <div class="col-sm-2 number">
                    <span><i class="glyphicon glyphicon-phone"></i>0896 8933 8372</span>
                </div>
                <div class="col-sm-2 search">
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
    <!--content-->
    <div class="products">
        <div class="container">
            <h1>Converse</h1>

            <div class="col-md-9">
                <?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="col-md-4 col-md3">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.php">
                            <img class="img-responsive" src="images/<?php echo $row['photo'] ?>" alt="" />
                        </a>
                        <h3><a href="single.php"><?php echo $row['name'] ?></a></h3>
                        <div class="price">
                            <h5 class="item_price">$<?php echo $row['price'] ?></h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>

                        </div>
                    </div>
                </div>

                <?php
}
}
?>

                <!-- <div class="col-md-4 col-md3">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.php">
                                <img class="img-responsive" src="images/pi2.png" alt="" />
                            </a>
                            <h3><a href="single.php">T-Shirt</a></h3>
                            <div class="price">
                                <h5 class="item_price">$300</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div> -->
                <!-- <div class="col-md-4 col-md3">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.php">
                                <img class="img-responsive" src="images/pi4.png" alt="" />
                            </a>
                            <h3><a href="single.php">Shirt</a></h3>
                            <div class="price">
                                <h5 class="item_price">$300</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div> -->





                <!-- <div class="col-md-4 col-md3">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.php">
                                <img class="img-responsive" src="images/pi6.png" alt="" />
                            </a>
                            <h3><a href="single.php">Jeans</a></h3>
                            <div class="price">
                                <h5 class="item_price">$300</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div> -->
                <!-- <div class="col-md-4 col-md3">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.php">
                                <img class="img-responsive" src="images/pi7.png" alt="" />
                            </a>
                            <h3><a href="single.php">Tops</a></h3>
                            <div class="price">
                                <h5 class="item_price">$300</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div> -->
                <!-- <div class="col-md-4 col-md3">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.php">
                                <img class="img-responsive" src="images/pi.png" alt="" />
                            </a>
                            <h3><a href="single.php">Tops</a></h3>
                            <div class="price">
                                <h5 class="item_price">$300</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div> -->



            </div>

            <div class="col-md-3 product-bottom">
                <!--categories-->
                <div class=" rsidebar span_1_of_left">
                    <h3 class="cate">Categories</h3>
                    <ul class="menu-drop">
                        <!-- <li class="item1"><a href="#">Men </a>
                            <ul class="cute">
                                <li class="subitem1"><a href="single.php">Cute Kittens </a></li>
                                <li class="subitem2"><a href="single.php">Strange Stuff </a></li>
                                <li class="subitem3"><a href="single.php">Automatic Fails </a></li>
                            </ul>
                        </li>
                        <li class="item2"><a href="#">Women </a>
                            <ul class="cute">
                                <li class="subitem1"><a href="single.php">Cute Kittens </a></li>
                                <li class="subitem2"><a href="single.php">Strange Stuff </a></li>
                                <li class="subitem3"><a href="single.php">Automatic Fails </a></li>
                            </ul>
                        </li>
                        <li class="item3"><a href="#">Kids</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="single.php">Cute Kittens </a></li>
                                <li class="subitem2"><a href="single.php">Strange Stuff </a></li>
                                <li class="subitem3"><a href="single.php">Automatic Fails</a></li>
                            </ul>
                        </li>
                        <li class="item4"><a href="#">Accesories</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="single.php">Cute Kittens </a></li>
                                <li class="subitem2"><a href="single.php">Strange Stuff </a></li>
                                <li class="subitem3"><a href="single.php">Automatic Fails</a></li>
                            </ul>
                        </li> -->

                        <li class="item4"><a href="#">Shoes</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="converse.php">converse</a></li>
                                <li class="subitem2"><a href="converse.php">converse</a></li>
                                <li class="subitem3"><a href="converse.php">converse</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--initiate accordion-->
                <script type="text/javascript">
                $(function() {
                    var menu_ul = $('.menu-drop > li > ul'),
                        menu_a = $('.menu-drop > li > a');
                    menu_ul.hide();
                    menu_a.click(function(e) {
                        e.preventDefault();
                        if (!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true, true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true, true).slideUp('normal');
                        }
                    });

                });
                </script>
                <!--//menu-->
                <!--seller-->
                <div class="product-bottom">
                    <h3 class="cate">Best Sellers</h3>
                    <?php
require 'database.php';

$sql1 = "SELECT * FROM products where name = 'Converse' limit 2";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while ($row1 = mysqli_fetch_assoc($result1)) {
        ?>

                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.php"><img class="img-responsive " src="images/<?php echo $row1['photo'] ?>"
                                    alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.php"><?php echo $row1['name'] ?></a></h6>
                            <span class=" price-in1">$<?php echo $row1['price'] ?></span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <?php
}
}
?>
                    <!-- <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.php"><img class="img-responsive " src="images/pr1.jpg" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.php">Lorem ipsum dolor sitamet consectetuer </a></h6>
                            <span class=" price-in1"> $40.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.php"><img class="img-responsive " src="images/pr2.jpg" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.php">Lorem ipsum dolor sitamet consectetuer </a></h6>
                            <span class=" price-in1"> $40.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.php"><img class="img-responsive " src="images/pr3.jpg" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.php">Lorem ipsum dolor sitamet consectetuer </a></h6>
                            <span class=" price-in1"> $40.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div> -->
                </div>

                <!--//seller-->
                <!--tag-->
                <div class="tag">
                    <h3 class="cate">Tags</h3>
                    <div class="tags">
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">dress</a></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//content-->
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