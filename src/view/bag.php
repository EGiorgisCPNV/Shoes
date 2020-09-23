<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 28.05.2020
 * Time: 10:26
 */

$title = 'Rent A Snow - Bag';

ob_start();
?>

    <!-- Start Header Area -->
    <!--
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    -->

    <!-- Brand and toggle get grouped for better mobile display -->
    <!--
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!--
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item submenu dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                                    <li class="nav-item active"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                                    <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
                            <li class="nav-item">
                                <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    -->
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Panier</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php?action=home">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="">Panier</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <?php if (!@$_SESSION['cart']) : ?>
                        <h2>Panier vide !</h2>
                        <a href="index.php?action=displayArticles"><button class="btn btn-dark">Voir articles</button></a>
                    <?php else : ?>
                        <table class="table">

                            <thead>
                            <tr>
                                <th scope="col">Produit</th>
                                <th scope="col">Description</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Total</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                            </thead>
                            <form action="index.php?action=cartAddItem" method="post">

                                <?php foreach ($_SESSION['cart']->GetItems() as $itemsCart) : ?>
                                    <tbody>

                                    <tr>
                                        <td>
                                            <img src="<?= $itemsCart->GetImgPath() ?>" alt="">
                                        </td>

                                        <td>
                                            <label style="font-size: 12px"><?= $itemsCart->GetDescription() ?></label>
                                        </td>

                                        <td>
                                            <h5><?= $itemsCart->GetPrice() ?>.- CHF</h5>
                                        </td>
                                        <td>
                                            <h5>
                                                <div class="product_count">
                                                    <input type="text" name="quantite" id="sst" maxlength="12"
                                                           value="<?= $itemsCart->GetQuantity() ?>" title="Quantity:"
                                                           class="input-text qty" disabled>


                                                    <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                                            class="increase items-count" type="button"><i
                                                                class="lnr lnr-chevron-up"></i>
                                                    </button>
                                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                                            class="reduced items-count" type="button"><i
                                                                class="lnr lnr-chevron-down"></i>
                                                    </button>
                                                    -->

                                                </div>
                                            </h5>
                                        </td>
                                        <td>
                                            <h5><?= $itemsCart->GetTotalPrice() ?>.- CHF</h5>
                                        </td>
                                        <td>
                                            <a class="cart" style="color: black;" href="#"><span
                                                        class="ti-trash"></span></a>
                                        </td>
                                    </tr>


                                    </tbody>
                                <?php endforeach ?>

                                <tr class="out_button_area">
                                    <td>

                                    </td>
                                    <td>

                                    </td>


                                    <td>
                                        <div  class="checkout_btn_inner text-center">
                                            <a class="primary-btn" href="index.php?action=displayArticles">Continuer le shoping</a>
                                             <a class="primary-btn" href="index.php?action=checkout">Finaliser la commande (cout : <?= $_SESSION['cart']->GetTotalPrice() ?> CHF)</a>
                                            <!-- <input style="border-color: black" class="primary-btn" type="submit" value="Add to Bag"> -->
                                        </div>

                                    </td>
                            </form>
                            </tr>

                        </table>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>


<?php
$content = ob_get_clean();
require 'gabarit.php';
?>