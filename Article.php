<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 15/03/16
 * Time: 9:54
 */

namespace poly_base;

class Article
{
    private $title;
    private $author;
    private $date;
    private $category;

    public function __construct($title, $author, $date, $category = 0)
    {
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }

    public function getTitle()
    {
        return $this->title;
    }
    //...other getters defined here...

    public function toArray()
    {
        return (array) $this;
    }
}
