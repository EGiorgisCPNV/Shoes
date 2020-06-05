<?php
/**
 * @file      articlesManager.php
 * @brief     This model is designed to implement the articles business logic
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Esteban:giorgis
 * @version   14.05.202
 */

/**
 * @brief This function is designed to get all active articles
 * @return array : containing all information about the articles. Array can be empty.
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function getArticles()
{

    //ATTENTION il va afficher les snow pcq dans DBconector la fonction openDBConnector se connect a la base snows et non shoes


    $snowsQuery = 'SELECT code, brand, model, qtyAvailable, description, price, photo, active FROM shoes'; //change le snows en shoes et aussi dans dbConnector.php

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}


/*
function getArticles()
{

    //ATTENTION il va afficher les snow pcq dans DBconector la fonction openDBConnector se connect a la base snows et non shoes


    $snowsQuery = 'SELECT code, brand, model, snowLength, dailyPrice, qtyAvailable, photo, active FROM snows';

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}
*/


//cette fonction va afficher un snow precis avec ces détails la différence entre la fonction codeVerification() c'est dans cette fonction il affiche tout les par rapport au code contrairement a codeVerification() qui affiche que les codes
function detailSingleSnow($code)
{


    $requete = "SELECT * FROM shoes where code ='$code';";

    require_once 'model/dbConnector.php';

    return  executeQuerySelect($requete);//     IMPORTANT     [0]      est obligatoir car sinon il ne trouvera pas dans la class CART.php quand tu demandera la description pa rexemple il ne trouvera pas ça va etre null car c'est un Tableau dans un tableau
}