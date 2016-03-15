<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 15/03/16
 * Time: 9:59
 */

namespace Jei\Write;

require_once 'Writable.php';

use Jei\Base\Article;

/**
 * WriterJSON class implementation
 * This class implementing the Writer interface will be sure to have write() method.
 */
class WriterJSON implements Writable
{
    public function write(Article $obj)
    {
        $array = array('article' => $obj->toArray());
        return json_encode($array);
    }
}