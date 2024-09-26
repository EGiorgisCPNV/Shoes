<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 28.05.2020
 * Time: 10:26
 */

$title = 'Rent A Snow - checkout';

ob_start();
?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Panier</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php?action=home">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="index.php?action=bag">Panier</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->


    <section class="cart_area">
        <div class="container">
            <h4>Votre panier est actuellement vide!</h4>
        </div>
    </section>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>