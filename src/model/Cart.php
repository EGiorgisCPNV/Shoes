<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 28.05.2020
 * Time: 15:13
 */

class Cart
{
//region private attributes
    private $totalPrice;
    private $nbOfArticles;
    private $items = array();
    //endregion private attributes

    //region constructor
    public function __construct()
    {
    }
    //endregion constructor

    //region private methods
    private function SetTotal($items)
    {
        $this->totalPrice = (double)0;
        foreach ($items as $CartItem) {
            $this->totalPrice += $CartItem->GetTotalPrice();
        }
    }

    private function SetNbOfArticles($items)
    {
        $this->nbOfArticles = 0;
        foreach ($items as $CartItem) {
            $this->nbOfArticles += $CartItem->getQuantity();
        }
    }

    private function UpdateTotals()
    {
        $this->SetNbOfArticles($this->items);
        $this->SetTotal($this->items);
    }
    //endregion private methods

    //region accessors and mutators
    /**
     * This method gets the cart's total (price)
     * @return float : Total Price of the Cart
     */
    public function GetTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * This method gets an array of all cart's items
     * @return array : All cart's items
     */
    public function GetItems()
    {
        return $this->items;
    }

    /**
     * This method gets the number cart's items
     * @return int : number of items in cart
     */
    public function GetNbOfArticles()
    {
        return $this->nbOfArticles;
    }
    //endregion accessors and mutators

    //region public methods
    /**
     * @brief This method add the item in the cart
     *        There are 2 ways:
     *        -Either the item alredy exist in the cart, we have to update
     *        the quantity of an existing item.
     *        -Or this is a new article to add in the cart
     * @param $cartItemToAdd : Item to add in the cart
     */
    public function AddItemInCart($cartItemToAdd)
    {
        $updated = false;

        //cette condition va vérifier si il y a déja un article ou non
        if (count($this->items) != 0) {
            //ce foreach va rechercher dans tout son tableau donc la ou il y a des objet (article) si l'objet que l'utilisateur veut ajouter n'est pas déjà dans ce tableau, si il n'y a pas déja un objet corespondant a l'article que l'utilisateur veut ajouter
            foreach ($this->items as $cartItem) {
                if ($cartItem->GetArticleId() == $cartItemToAdd->GetArticleId()) {
                    //we update the quantity of the existing article
                    $cartItem->SetQuantity($cartItem->GetQuantity() + $cartItemToAdd->GetQuantity());
                    $updated = true; // ne pas oublier c'est pour dire qu'il y a eu une maj, pour qu'il ne rentre pas dans la condition du dessous
                    break;//ce break sert a quitter le foreach
                }
            }
        }

        if (!$updated) {
            //this is a new article to add
            require "articlesManager.php";
            $itemsAttributes = detailSingleSnow($cartItemToAdd->GetArticleId());

            $cartItemToAdd->SetAttributes($itemsAttributes[0]['description'], $itemsAttributes[0]['photo'], $itemsAttributes[0]['price']);//tu peux aussi mettre [0] avant chaque truc sa marchera aussi pcq tu spécifie le tableau [0]

            $this->items[] = $cartItemToAdd;

        }
        $this->UpdateTotals();
    }
}
