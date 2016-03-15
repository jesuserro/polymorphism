<?php
require_once 'Article.php';
require_once 'Factory.php';

use Jei\Base\Article;
use Jei\Base\Factory;

$format = (isset($_GET['format']) ? $_GET['format'] : 'JSON');

try {
    $article = new Article('Polymorphism', 'Steve', time(), 0);
    $writer = Factory::getWriter($format);
    $response = $writer->write($article);

    switch($format){
        case 'JSON':
            header("Content-type: application/json; charset=utf-8");
            break;
        case 'XML';
            header("Content-Type: application/xml; charset=utf-8");
            break;
    }
    echo $response;

}catch(Exception $e){
    echo $e->getMessage();
}