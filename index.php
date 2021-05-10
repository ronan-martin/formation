<?php
	require 'vendor/autoload.php';

	// Routing
	$page = 'home';
	if(isset($_GET['p'])) {
		$page = $_GET['p'];
	}

	// Rendu du template
	$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
	$twig = new \Twig\Environment($loader, [
		'debug' => true,
		'cache' => __DIR__ . '/tmp'
	]);
	
	switch ($page) {
		case 'home':
			echo $twig->render('home.twig', ['title' => 'Accueil']);
			break;
		case 'contact':
			echo $twig->render('contact.twig', ['title' => 'Contact']);
	}
?>