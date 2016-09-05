<?php
/**
 * Created by PhpStorm.
 * User: Geert
 * Date: 02/02/16
 * Time: 09:19
 */

error_reporting(E_ALL);
ini_set('display',1);


// model inladen

include_once 'models/Page_Data.class.php';

$pageData = new Page_Data();

$pageData->title ='Magazijn';
$pageData->subTitle ='Stock-verwerking';
$pageData->externalCss="<link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/cyborg/bootstrap.min.css\" rel=\"stylesheet\" />";


$pageData->css ='';
$pageData->embeddedStyle ='';


$pageData->header = include_once 'views/header.php';
//$pageData->navigation = include_once 'views/navigation.php';
$pageData->sidebar = include_once 'views/sidebar.php';


// connection database
$dbInfo ="mysql:host=localhost;dbname=stock";
$dbUser ="root";
$dbPassword ="root";

try{
  $db = new PDO($dbInfo,$dbUser,$dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $pageData->content .= "<h3> We're connected</h3>";
} catch (Exception $error) {
    $pageData->content .="<h3> Connection failed!</h3><br><p>$error</p>";
}


//$pageData->content .= "<h2>Everytjing works so far</h2>";
$pageData->content .= include_once 'controllers/stock.php';



// view inladen
$page = include_once 'views/page.php';

// model koppelen aan view

echo $page;