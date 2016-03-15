<?php
require_once 'Article.php';
require_once 'Factory.php';

use poly_base\Article;
use poly_base\Factory;

try {
    $article = new Article('Polymorphism', 'Steve', time(), 0);
    $writer = Factory::getWriter('JSON');
    echo $writer->write($article);
}catch(Exception $e){
    echo $e->getMessage();
}