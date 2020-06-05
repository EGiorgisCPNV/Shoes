<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Esteban:giorgis
 * @version   14.05.2020
 */
require "model/Cart.php";
require "model/CartItem.php";

session_start();//grace a ca tu pourra créer plein de $_SESSION qui sera transportable a traver les page php

require "controller/articles.php";
require "controller/navigation.php";
require "controller/ControllerCart.php";
require "controller/users.php";


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {

        case 'displayArticles' :
            displayArticles();
            break;

        case 'singleArticles' :
            singleArticles($_GET['code']);
            break;

        case 'home' :
            home();
            break;

        case 'login' :
            login($_POST);
            break;


        case 'logout' :
            logout();
            break;

        case 'register' :
            register($_POST);
            break;

        case 'bag' :
            bag();
            break;


        case 'checkout' :
            checkout();
            break;

        case 'cartAddItem' :
            cartAddItem($_POST);
            break;


        default :
            lost();
    }
} else {
    home();
}














