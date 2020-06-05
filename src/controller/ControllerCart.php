<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 28.05.2020
 * Time: 12:31
 */

/**
 * @brief Cette fonction va rediriger sur la page panier (bag.php)
 */
function cartAddItem($addItemRequest)
{
    //cette condition va vérifier si il y a bien un id et un quantite selectionee
    if (isset($addItemRequest['code']) && isset($addItemRequest['quantite'])) {

        $articleIdToAdd = $addItemRequest['code'];
        $articleQtyToAdd = $addItemRequest['quantite'];


        require "model/cartManager.php";
        if (!@$_SESSION['cart']) {
            $_SESSION['cart'] = updateCart(null, $articleIdToAdd, $articleQtyToAdd);
        } else {
            $_SESSION['cart'] = updateCart($_SESSION['cart'], $articleIdToAdd, $articleQtyToAdd);
        }
    } else {
        echo "ne rentre pas dans la condition";

    }
    require "view/bag.php";

}


/**
 * @brief Cette fonction va rediriger sur la page panier (bag.php)
 */
function bag()
{

    require "view/bag.php";
}


/**
 * @brief Cette fonction va, quand l'utilisateur va finaliser l'achat ou les achats dans le panier
 */
function checkout()
{
    unset($_SESSION['cart']);
    require "view/checkout.php";
}