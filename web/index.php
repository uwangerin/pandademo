<?php
require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => '../cache',
));

if ($_SERVER['REQUEST_URI'] == "/") $template = 'index'; 
else $template = substr($_SERVER['REQUEST_URI'], 1);
$templatefile = $template.'.html.twig'; 


if ($_SERVER['REQUEST_URI'] == '/') {


	$teasers = array();
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßerer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');

	$sideteasers = array();
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßerer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');

	echo $twig->render('homepage.html.twig', array('teasers' => $teasers, 'sideteasers' => $sideteasers));
}



if ($_SERVER['REQUEST_URI'] == '/spielende-pandas') {
	$teasers = array();
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßerer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');

	$sideteasers = array();
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßerer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');

	echo $twig->render('play.html.twig', array('teasers' => $teasers, 'sideteasers' => $sideteasers));
}



if ($_SERVER['REQUEST_URI'] == '/faule-pandas') {
	$teasers = array();
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßerer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');

	$sideteasers = array();
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßerer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');

	echo $twig->render('foul.html.twig', array('teasers' => $teasers, 'sideteasers' => $sideteasers));
}


if ($_SERVER['REQUEST_URI'] == '/fressende-pandas') {
	$teasers = array();
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßerer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$teasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');

	$sideteasers = array();
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßerer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');
	$sideteasers[] = array('file'  => 'panda.jpg', 'title' => 'Süßer Panda');

	echo $twig->render('eat.html.twig', array('teasers' => $teasers, 'sideteasers' => $sideteasers));
}



