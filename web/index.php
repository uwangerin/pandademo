<?php
require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => '../cache',
));

if ($_SERVER['REQUEST_URI'] == "/") $template = 'index'; 
else $template = substr($_SERVER['REQUEST_URI'], 1);
$templatefile = $template.'.html.twig'; 
echo $twig->render($templatefile, array('filename' => $template));

