<?php

/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 02/02/16
 * Time: 09:39
 */
class Poll
{
    private $db;                                        // object uit index;
    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getPollData()                           //cRud
    {
        //$pollData = new stdClass();                     // om te testen zonder database
        //$pollData->poll_question ="just testing...";    // om te testen zonder database
        //$pollData->yes =0;                              // om te testen zonder database
        //$pollData->no=0;                                // om te testen zonder database

        $sql = "SELECT poll_question, yes, no FROM poll WHERE poll_id =1";
        $statement = $this->db->prepare($sql);
        $statement-> execute();
        $pollData = $statement->fetchObject();



        return $pollData;
    }

    public function updatePoll($input){                     //crUd
        if ($input === 'yes'){
            $sql = "UPDATE poll SET yes = yes + 1 WHERE poll_id = 1";
        } elseif ($input === 'no'){
            $sql = "UPDATE poll SET no = no +1 WHERE poll_id = 1";
        }
        $statement = $this->db->prepare($sql);
        $statement ->execute();
    }



}