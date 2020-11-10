<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 28.05.2020
 * Time: 15:21
 */

require_once "Cart.php";
require_once "CartItem.php";

/**
 * @param $cart
 * @param $articleId
 * @param $quantity
 * @return Cart
 */
function updateCart($cart,$articleId, $quantity){
    $cartItem = new CartItem($articleId,$quantity);//le fait de créer un objet corespondant a l'article

    if($cart==null){
        $cart= new Cart();
    }
    $cart->AddItemInCart($cartItem); //ajoute l'objet $cartItem qui lui est l'article selectionné
    return $cart;
}