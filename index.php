<?php

function base_url() {
    return 'http://localhost/tinkart';
}
function logged_in(){
   return @$_SESSION['logged_in'];
}

require '/vendor/rb.php';
R::setup('mysql:host=localhost;dbname=mydb','root', '');
//R::debug(false);


//$dbhost = 'thebestgilde.de.w011e040.kasserver.com';
//$dbname = 'd01c63bd';
//$dbpass = 'trkXMY9TH4C4EbAC';


/********************ALTER DATENBANK ZUGRIFF****************/
//$dbhost = 'localhost';
//$dbname = 'root';
//$dbpass = '';
//
//$link = mysql_connect($dbhost, $dbname, $dbpass);
//
//if(!$link){
//    die("kein server Zugriff/Server nicht gefunden");
//}
//mysql_select_db('mydb') or die("datenbank nicht gefunden");
////mysql_select_db($dbname) or die("datenbank nicht gefunden");
//mysql_query("SET NAMES 'utf8'");


include('classes/View.php');
include('classes/controllers/Controller.php');
include('classes/models/model.php');
include('classes/models/Model_Project.php');
include('classes/models/Model_Comment.php');
include('classes/models/Model_Content.php');
include('classes/models/Model_User.php');
include('classes/models/Model_Vote.php');

$controller = new Controller();

$querystring = $_SERVER['QUERY_STRING'];

$controller->display($querystring);


//$view = View::make('startseite')
//            ->set([
//                'title' => 'Tinkart',
//                'heading' => 'Sehr schöne Seite',
//                'projects' => [
//                    ['description' => 'ich bin das erste projekt', 'comments' => 123, 'upvotes' => 12, 'downvotes' => 100],
//                    ['description' => 'ich bin das erste projekt', 'comments' => 123, 'upvotes' => 12, 'downvotes' => 100],
//                    ['description' => 'ich bin das erste projekt', 'comments' => 123, 'upvotes' => 12, 'downvotes' => 100],
//                ]
//            ]);
//
//echo $view;
R::close();