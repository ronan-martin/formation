<?php
	require 'vendor/autoload.php';

	// Routing
	$page = 'home';
	if(isset($_GET['p'])) {
		$page = $_GET['p'];
	}

	// Rendu du template
	$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
	$twig = new Twig_Environment($loader, [
		'debug' => true,
		'cache' => __DIR__ . '/tmp'
	]);
	
	if($page === 'home') {
		echo $twig-> render('home.twig');
	}
?>