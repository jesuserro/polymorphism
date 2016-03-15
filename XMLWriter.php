<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 15/03/16
 * Time: 9:59
 */

namespace poly_write;

use poly_base;

/**
 * XMLWrite class implementation
 * This class implementing the Writer interface will be sure to have write() method.
 */
class XMLWriter implements Writable
{
    public function write(Article $obj)
    {
        $ret = '<article>';
        $ret .= '<article>' . $obj->title . '</title>';
        $ret .= '<author>' . $obj->author . '</author>';
        $ret .= '<date>' . $obj->date . '</date>';
        $ret .= '<category>' . $obj->category . '</category>';
        $ret .= '</article>';
        return $ret;
    }
}