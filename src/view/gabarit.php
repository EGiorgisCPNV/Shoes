<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="view/cssNewTemplate/linearicons.css">
    <link rel="stylesheet" href="view/cssNewTemplate/font-awesome.min.css">
    <link rel="stylesheet" href="view/cssNewTemplate/themify-icons.css">
    <link rel="stylesheet" href="view/cssNewTemplate/bootstrap.css">
    <link rel="stylesheet" href="view/cssNewTemplate/owl.carousel.css">
    <link rel="stylesheet" href="view/cssNewTemplate/nice-select.css">
    <link rel="stylesheet" href="view/cssNewTemplate/nouislider.min.css">
    <link rel="stylesheet" href="view/cssNewTemplate/ion.rangeSlider.css">
    <link rel="stylesheet" href="view/cssNewTemplate/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="view/cssNewTemplate/magnific-popup.css">
    <link rel="stylesheet" href="view/cssNewTemplate/main.css">

    <style>
        .active {
            color: orange;
        }

        .mlperso{
            margin-left: 40px;
        }
    </style>

</head>

<body>

<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php?action=home"><img src="view/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">

                        <!-- boutton accuiel-->
                        <li class="<?php if ($_GET['action'] == 'home') : ?>active<?php endif; ?> nav-item " <?php if ((@$_GET['action'] == "home") || (!isset($_GET['action'])))  : //les double points sont obligatoire sa remplace un "{" dans les fichier html?>
                        <?php endif ?>>
                            <a class="nav-link" href="index.php?action=home">Accueil</a></li>




                        <!-- boutton produit-->
                        <li class="nav-item <?php if (@$_GET['action'] == 'displayArticles') : ?>active<?php endif; ?>">
                            <a class="nav-link" href="index.php?action=displayArticles">Articles</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a href="index.php?action=bag" class="cart"><span
                                    <?php if ($_GET['action'] == 'bag') : ?>style="color: orange" <?php endif; ?>  class="ti-bag"></span>
                                <label style="color: black"><?php if (isset($_SESSION['cart'])) : ?> <?= $_SESSION['cart']->GetNbOfArticles() ?><?php endif; ?></label>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav menu_nav mlperso ">

                    <?php if (!isset($_SESSION['userEmailAddress']) || (!isset($_GET['action'])) || (($_GET['action'] == "logout"))) : ?>
                        <li class="nav-item <?php if (@$_GET['action'] == 'login') : ?>active<?php endif; ?>"><a
                                    class="nav-link" href="index.php?action=login">Login</a></li>
                        <li class="nav-item <?php if (@$_GET['action'] == 'register') : ?>active<?php endif; ?>"><a
                                    class="nav-link" href="index.php?action=register">S'inscrire</a></li>
                    <?php else : ?>
                        <!-- Display the button useful for logout-->
                        <li class="nav-item <?php if (@$_GET['action'] == 'logout') : ?>active<?php endif; ?>"><a
                                    class="nav-link" href="index.php?action=logout">Se déconnecter</a></li>
                        <label class="nav-link">Bonjour, <?php echo @$_SESSION['userEmailAddress'] ?></label>
                    <?php endif; ?></ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->

<div class="row-fluid">
    <!--Edit Main Content Area here-->
    <?= $content; ?>
    <!--End Main Content-->
</div>

<!-- start footer Area -->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore dolore
                        magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>Stay update with our latest</p>
                    <div class="" id="mc_embed_signup">

                        <form target="_blank" novalidate="true"
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="form-inline">

                            <div class="d-flex flex-row">

                                <input class="form-control" name="inputUserEmailAddress" placeholder="Enter Email"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                       required="" type="email">


                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                                                             aria-hidden="true"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                           type="text">
                                </div>

                                <!-- <div class="col-lg-4 col-md-4">
                                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                        </div>  -->
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="view/img/i1.jpg" alt=""></li>
                        <li><img src="view/img/i2.jpg" alt=""></li>
                        <li><img src="view/img/i3.jpg" alt=""></li>
                        <li><img src="view/img/i4.jpg" alt=""></li>
                        <li><img src="view/img/i5.jpg" alt=""></li>
                        <li><img src="view/img/i6.jpg" alt=""></li>
                        <li><img src="view/img/i7.jpg" alt=""></li>
                        <li><img src="view/img/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Follow Us</h6>
                    <p>Let us be social</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="view/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="view/js/vendor/bootstrap.min.js"></script>
<script src="view/js/jquery.ajaxchimp.min.jsj"></script>
<script src="view/js/jquery.nice-select.min.js"></script>
<script src="view/js/jquery.sticky.js"></script>
<script src="view/js/nouislider.min.js"></script>
<script src="view/js/countdown.js"></script>
<script src="view/js/jquery.magnific-popup.min.js"></script>
<script src="view/js/owl.carousel.min.js"></script>

<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="view/js/gmaps.min.js"></script>
<script src="view/js/main.js"></script>
</body>

</html>