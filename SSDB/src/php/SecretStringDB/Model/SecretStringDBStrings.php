<?php
namespace SecretStringDB\Model;
/**
 * class:SecretStringDBStrings
 *
 * @package SecretStringDB
 * @author Tomoo Matsuno <tomoo.m@gmail.com>
 * @since PHP 5.3
 * @version $Id: SecretStringDBStrings.php, ver 1.0 2013/06/26 $
 * @license Apache License 2.0
 * @copyright  Copyright (c) 2013 Tomoo Matsuno.
 */
require_once("SplClassLoader.php");
$classLoader = new \SplClassLoader();
$classLoader->register();

use SecretStringDBString;

class SecretStringDBStrings implements \Iterator
{
    /**
     * @var array
     */
    private $strings;

    /**
     * @var int
     */
    private $posision;

    /**
     * @var int
     */
    private $max_id;

    /**
     * @var \DateTime
     */
    private $longest_expire_datetime;
    /**
     * @var int
     */
    private $longest_expire_id;

    /**
     * @var \DateTime
     */
    private $longest_expire_valid_datetime;

    /**
     * @var int
     */
    private $longest_expire_valid_id;

    /**
     * @var \DateTime
     */
    private $newest_create_datetime;

    /**
     * @var int
     */
    private $newest_create_id;

    /**
     * @var \DateTime
     */
    private $newest_create_valid_datetime;

    /**
     * @var int
     */
    private $newest_create_valid_id;


    public function __construct(){
        $this->strings = array();
        $this->position = 0;
    }

    /** (non-PHPdoc)
     * @see Iterator::current()
     * @return SecretStringDBString
     */
    public function current(){
        return $this->strings[$this->position];
    }

    /* (non-PHPdoc)
     * @see Iterator::next()
     */
    public function next() {
        ++$this->position;
    }

    /** (non-PHPdoc)
     * @see Iterator::key()
     * @return int
     */
    public function key() {
        return $this->position;
    }

    /** (non-PHPdoc)
     * @see Iterator::valid()
     * @return bool
     */
    public function valid() {
        return isset($this->strings[$this->position]);
    }

    /* (non-PHPdoc)
     * @see Iterator::rewind()
     */
    public function rewind() {
        $this->posision = 0;
    }

    /**
     * @param SecretStringDBString $string
     * @return int
     */
    public function push(SecretStringDBString $string){
        return array_push($this->strings, $string);
    }

    /**
     * @param int $id
     * @return string $data
     */
    public function getIdData($id){
        $this->rewind();
        while($this->valid()){
            if ($this->current()->getId() == $id) {
                return $this->current()->getData();
            }
            $this->next();
        }
    }

}

