<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 15/03/16
 * Time: 10:08
  */

namespace poly_base;

require_once 'WriterJSON.php';
require_once 'WriterXML.php';


class Factory
{
    public static function getWriter( $type='JSON' )
    {
        $class = 'poly_write\\'.'Writer'.$type;
        if (class_exists($class)) {
            return new $class();
        }
        // otherwise we fail
        throw new Exception('Unsupported format '.$type);
    }
}