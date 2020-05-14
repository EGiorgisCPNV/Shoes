<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Esteban:giorgis
 * @version   14.05.202
 */

session_start();
require "controller/articles.php";
require "controller/navigation.php";
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

        default :
            lost();
    }
} else {
    home();
}














