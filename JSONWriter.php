<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 15/03/16
 * Time: 9:59
 */

namespace poly_write;

require_once 'Writable.php';

use poly_base\Article;

/**
 * XMLWrite class implementation
 * This class implementing the Writer interface will be sure to have write() method.
 */
class JSONWriter implements Writable
{
    public function write(Article $obj)
    {
        $array = array('article' => $obj->toArray());
        return json_encode($array);
    }
}