<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 15/03/16
 * Time: 10:08
  */

namespace poly_base;

use poly_write\JSONWriter;

class Factory
{
    public static function getWriter( $type='JSON' )
    {
        try {
            // construct our class name and check its existence
            $class = 'poly_write\\' .$type . 'Writer';
            require_once 'JSONWriter.php';
            if (class_exists($class)) {
                // return a new Writer object
                return new $class();
            }
            // otherwise we fail
            //throw new Exception('Unsupported format '.$type);
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
}