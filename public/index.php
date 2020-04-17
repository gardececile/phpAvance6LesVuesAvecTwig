<?php
require '../vendor/autoload.php';
$products=['chaussure', 'chausson','tong', 'escarpin', 'basket'];
$vetements=[
    'homme'=>'pull',
    'femme'=>'jupe',
    'bébé'=>'body',
]

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig',[
    "products" =>$products,
    "vetements" =>$vetements,
]);

