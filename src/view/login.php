<?php
/**
 * @file      login.php
 * @brief     This view is designed to display the login form
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Esteban:giorgis
 * @version   14.05.202
 */

$title = 'Rent A Snow - Login/Logout';

ob_start();
?>
<?php if(isset($loginErrorMessage)) : ?>
    <h5><span style="color:red"><?= $loginErrorMessage; ?></span></h5>
<?php endif ?>
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Login/Register</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php?action=home">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="">Login/Register</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="view/img/login.jpg" alt="">
                        <div class="hover">
                            <h4>Pas de compte ?</h4>
                            <p>Crééez un compte maintenant en cliquant</p>
                            <a class="primary-btn" href="index.php?action=register">ICI</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Connectez-vous</h3>
                        <form class="row login_form" action="index.php?action=login" method="post" id="contactForm">
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="inputUserEmailAddress" placeholder="Email" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="psw" name="inputUserPsw" placeholder="Password" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Log In</button>
                                <a href="#">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>