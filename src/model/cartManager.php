<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 28.05.2020
 * Time: 15:21
 */

require_once "Cart.php";
require_once "CartItem.php";
require "dbConnector.php";

/*
function updateCart($cart,$articleId, $quantity){
    $cartItem = new CartItem($articleId,$quantity);//le fait de créer un objet corespondant a l'article

    if($cart==null){
        $cart= new Cart();
    }
    $cart->AddItemInCart($cartItem); //ajoute l'objet $cartItem qui lui est l'article selectionné
    return $cart;
}
*/

function cart($purchase){
    if (isset($purchase['qtyItem'])){

        $requete = "select brand, model, price from shoes where code = '".$_GET['code']."';";

        $queryResult = executeQuerySelect($requete);

        $_SESSION['brand'] = $queryResult[0]["brand"];
        $_SESSION['model'] = $queryResult[0]["model"];
        $_SESSION['price'] = $queryResult[0]["price"];
        $_SESSION['code'] = $_GET['code'];
        $_SESSION['cart'] = true;
        return true;
    }
    return false;
}