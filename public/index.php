<?php

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre'];

require '../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader( __DIR__.'/../src/View');
$twig = new Twig\Environment($loader, []);

echo $twig->render('index.html.twig', ['products' => $products]);

$twig = new \Twig\Environment($loader, [
    'debug' => true,
    // ...
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
