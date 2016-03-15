<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 15/03/16
 * Time: 9:57
 */

namespace poly_write;

use poly_base\Article;


interface Writable
{
    // $obj is a type hint to restrict the type of the argument
    public function write(Article $obj);
}