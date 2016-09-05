<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 02/02/16
 * Time: 09:32
 */

//model


include_once  'models/Stock.class.php';

$stock =new Stock($db);                  // variabele stock is object v classe Stock



$isStocklSubmitted = isset($_POST['user-input']);
if($isStocklSubmitted){
    $input = $_POST['user-input'];
    $stock->updateStock($input);
}

$stockData = $stock->getStockData();   // method


//view

$pollView = include_once "views/stock-html.php";

// koppeling
return $pollView;

