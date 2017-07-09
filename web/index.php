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
	$teasers[] = array('file'  => 'suess1.jpeg', 'title' => 'Süßer Panda');
	$teasers[] = array('file'  => 'spiel3.jpeg', 'title' => 'Spielender Panda');
	$teasers[] = array('file'  => 'suess2.jpeg', 'title' => 'Fauler Panda');
	$teasers[] = array('file'  => 'suess1.jpeg', 'title' => 'Sportlicher Panda');

	$sideteasers = array();
	$sideteasers[] = array('file'  => 'pandaw.jpg', 'title' => 'Süßer Panda');
	$sideteasers[] = array('file'  => 'spiel6w.jpeg', 'title' => 'Rückwärtsrolle');
	$sideteasers[] = array('file'  => 'faul3w.jpeg', 'title' => 'Zu zweit');

	echo $twig->render('homepage.html.twig', array('teasers' => $teasers, 'sideteasers' => $sideteasers));
}



if ($_SERVER['REQUEST_URI'] == '/spielende-pandas') {
	$teasers = array();
	$teasers[] = array('file'  => 'spiel1.jpeg', 'title' => 'Raufbolde');
	$teasers[] = array('file'  => 'spiel4.jpeg', 'title' => 'Auf dem Schaukelpferd');
	$teasers[] = array('file'  => 'spiel5.jpeg', 'title' => 'Spaß im Korb');
	$teasers[] = array('file'  => 'spiel6.jpeg', 'title' => 'Rückwärtsrolle');

	$sideteasers = array();
	$sideteasers[] = array('file'  => 'faul2w.jpeg', 'title' => 'Abhängen');
	$sideteasers[] = array('file'  => 'fress2w.jpeg', 'title' => 'Noch mehr Bambus!');
	$sideteasers[] = array('file'  => 'suess1w.jpeg', 'title' => 'Sportlicher Panda');

	echo $twig->render('play.html.twig', array('teasers' => $teasers, 'sideteasers' => $sideteasers));
}



if ($_SERVER['REQUEST_URI'] == '/faule-pandas') {
	$teasers = array();
	$teasers[] = array('file'  => 'faul1.jpeg', 'title' => 'Auf dem Baum');
	$teasers[] = array('file'  => 'faul2.jpeg', 'title' => 'Abhängen');
	$teasers[] = array('file'  => 'faul3.jpeg', 'title' => 'Zu zweit');
	$teasers[] = array('file'  => 'faul4.jpeg', 'title' => 'Auf der Brücke');

	$sideteasers = array();
	$sideteasers[] = array('file'  => 'fress1w.jpeg', 'title' => 'Lecker Bambus!');
	$sideteasers[] = array('file'  => 'spiel5w.jpeg', 'title' => 'Spaß im Korb');
	$sideteasers[] = array('file'  => 'pandaw.jpg', 'title' => 'Süßer Panda');

	echo $twig->render('foul.html.twig', array('teasers' => $teasers, 'sideteasers' => $sideteasers));
}


if ($_SERVER['REQUEST_URI'] == '/fressende-pandas') {
	$teasers = array();
	$teasers[] = array('file'  => 'fress1.jpeg', 'title' => 'Lecker Bambus!');
	$teasers[] = array('file'  => 'fress2.jpeg', 'title' => 'Noch mehr Bambus!');
	$teasers[] = array('file'  => 'fress3.jpeg', 'title' => 'Super Bambus!');
	$teasers[] = array('file'  => 'fress4.jpeg', 'title' => 'Mampf!');

	$sideteasers = array();
	$sideteasers[] = array('file'  => 'suess2w.jpeg', 'title' => 'Fauler Panda');
	$sideteasers[] = array('file'  => 'faul3w.jpeg', 'title' => 'Zu zweit');
	$sideteasers[] = array('file'  => 'spiel1w.jpeg', 'title' => 'Raufbolde');

	echo $twig->render('eat.html.twig', array('teasers' => $teasers, 'sideteasers' => $sideteasers));
}



