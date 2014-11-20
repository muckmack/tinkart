<?php

function base_url() {
    return 'http://localhost/tinkart';
}

$link = mysql_connect('thebestgilde.de.w011e040.kasserver.com', 'd01c63bd', 'trkXMY9TH4C4EbAC');
if(!$link){
    die("kein server Zugriff/Server nicht gefunden");
}
mysql_select_db('d01c63bd') or die("datenbank nicht gefunden");
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