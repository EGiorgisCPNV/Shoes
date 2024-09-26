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
                        <a href="index.php?action=displayArticles">
                            <button class="btn btn-dark">Voir articles</button>
                        </a>
                    <?php else : ?>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Produit</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Total</th>
                                <th scope="col">Retirer</th>
                            </tr>
                            </thead>
                            <tbody>
                            <form action="index.php?action=cartAddItem" method="post">
                                <?php foreach ($_SESSION['cart']->GetItems() as $itemsCart) : ?>
                                    <tr class="text-center">
                                        <div id="div1">
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="<?= $itemsCart->GetImgPath() ?>" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <p><?= $itemsCart->GetDescription() ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5><?= $itemsCart->GetPrice() ?>CHF</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <input type="text" name="qty" id="sst" maxlength="12"
                                                           value="<?= $itemsCart->GetQuantity() ?>" title="Quantity:"
                                                           class="input-text qty">
                                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                                            class="increase items-count" type="button"><i
                                                                class="lnr lnr-chevron-up"></i></button>
                                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                                            class="reduced items-count" type="button"><i
                                                                class="lnr lnr-chevron-down"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <h5><?= $itemsCart->GetPrice() * $itemsCart->GetQuantity() ?>CHF</h5>
                                            </td>
                                            <td>
                                                <a class="cart" style="color: black;" href="#"><span
                                                            class="ti-trash"></span></a>
                                            </td>
                                        </div>
                                    </tr>
                                <?php endforeach ?>
                                <tr class="text-center">
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <b><h5>Total:</h5></b>
                                    </td>
                                    <td>
                                        <h5><?= $_SESSION['cart']->GetTotalPrice() ?>CHF</h5>
                                    </td>
                                </tr>
                                <tr class="out_button_area">
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <div class="checkout_btn_inner d-flex align-items-center" st>
                                            <a class="gray_btn" href="index.php?action=displayArticles">Continuer
                                                Shopping</a>
                                            <a class="primary-btn" href="index.php?action=checkout">Finaliser
                                                l'achat</a>
                                        </div>
                                    </td>
                                </tr>
                            </form>
                            </tbody>
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