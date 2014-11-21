<?php

function base_url() {
    return 'http://localhost/tinkart';
}
//$dbhost = 'thebestgilde.de.w011e040.kasserver.com';
//$dbname = 'd01c63bd';
//$dbpass = 'trkXMY9TH4C4EbAC';

$dbhost = 'localhost';
$dbname = 'root';
$dbpass = '';

$link = mysql_connect($dbhost, $dbname, $dbpass);

if(!$link){
    die("kein server Zugriff/Server nicht gefunden");
}
mysql_select_db('mydb') or die("datenbank nicht gefunden");
mysql_query("SET NAMES 'utf8'");

include('classes/View.php');
include('classes/controllers/Controller.php');
include('classes/models/Project.php');

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