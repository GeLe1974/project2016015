<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 02/02/16
 * Time: 09:32
 */

//model


include_once  'models/Poll.class.php';

$poll =new Poll($db);                  // variabele poll is object v classe Poll



$isPollSubmitted = isset($_POST['user-input']);
if($isPollSubmitted){
    $input = $_POST['user-input'];
    $poll->updatePoll($input);
}

$pollData = $poll->getPollData();   // method


//view

$pollView = include_once "views/poll-html.php";

// koppeling
return $pollView;

