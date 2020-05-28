<?php
/**
 * @file      articles.php
 * @brief     this controller is designed to manage articles actions
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Esteban:giorgis
 * @version   14.05.202
 */

/**
 * @brief This function is designed to display Articles
 */
function displayArticles()
{
    require_once "model/articlesManager.php";
    try {
        $snowsResults = getArticles();
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/articles.php";
    }
}

/**
 * @brief This function is designed to display a single article
 */
function singleArticles($code)
{
    require_once "model/articlesManager.php";


    try {
        $tableSingleSnow = detailSingleSnow($code);
    } catch (ModelDataBaseException $ex) {
        $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
    } finally {
        require "view/detailArticle.php";
    }

}


/**
 * @brief Cette fonction va rediriger sur la page panier
 */
function bag()
{
    $asd=$_SESSION['cart'];
    require "view/bag.php";
}


