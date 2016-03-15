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
    private $_title;
    private $_author;
    private $_date;
    private $_category;

    public function __construct($title, $author, $date, $category = 0)
    {
        $this->_title = $title;
        $this->_author = $author;
        $this->_date = $date;
        $this->_category = $category;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function getAuthor()
    {
        return $this->_author;
    }

    public function getDate()
    {
        return $this->_date;
    }

    public function getCategory()
    {
        return $this->_category;
    }

    public function toArray()
    {
        //return (array) $this;
        return array(
            'title' => $this->getTitle(),
            'author' => $this->getAuthor(),
            'date' => $this->getDate(),
            'category' => $this->getCategory()
        );
    }
}
