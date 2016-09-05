<?php

/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 02/02/16
 * Time: 09:39
 */
class Stock
{
    private $db;                                        // object uit index;
    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getStockData()                           //cRud
    {
        //$stockData = new stdClass();                     // om te testen zonder database
        //$stockData->poll_question ="just testing...";    // om te testen zonder database
        //$stockData->yes =0;                              // om te testen zonder database
        //$stockData->no=0;                                // om te testen zonder database

        $sql = "SELECT product, aankoop, verkoop FROM voorraad WHERE SKU =1";
        $statement = $this->db->prepare($sql);
        $statement-> execute();
        $stockData = $statement->fetchObject();
        $stockData->voorraad =$stockData->aankoop - $stockData->verkoop;
        if($stockData->voorraad < 5) {
            $stockData->waarschuwing = '<li class="list-group-item">Voorraad is laag ! Bijbestellen aub</li>';
        } else {$stockData->waarschuwing = ''; }


        return $stockData;
    }

    public function updateStock($input){                     //crUd
        if ($input === 'aankoop'){

            $sql = "UPDATE voorraad SET aankoop = aankoop + 1 WHERE SKU = 1";
        } elseif ($input === 'verkoop'){


                $sql = "UPDATE voorraad SET verkoop = verkoop +1 WHERE SKU = 1";



        }
        $statement = $this->db->prepare($sql);
        $statement ->execute();
    }



}