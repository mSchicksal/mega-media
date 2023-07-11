<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/views');
$twig = new Environment($loader);

require_once('config.php');
require_once('daos.php');

$articles = Daos::getArticles();
echo $twig->render('index.twig', [ 'articles' => $articles]);