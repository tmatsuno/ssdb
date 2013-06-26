<?php
namespace SecretStringDB\Model;
/**
 * class:SecretStringDBEntries
 *
 * @package SecretStringDB
 * @author Tomoo Matsuno <tomoo.m@gmail.com>
 * @since PHP 5.3
 * @version $Id: SecretStringDBEntries.php, ver 1.0 2013/06/26 $
 * @license Apache License 2.0
 * @copyright  Copyright (c) 2013 Tomoo Matsuno.
 */
require_once("SplClassLoader.php");
$classLoader = new \SplClassLoader();
$classLoader->register();

use SecretStringDBEntry;
use SecretStringDBStrings;
use SecretStringDBString;

class SecretStringDBEntries implements Iterator
{
    private $entries;
    private $posision;

    public function __construct(){
        $this->position = 0;
    }

    public function current(){
        return $this->entries[$this->position];
    }

    public function next() {
        ++$this->position;
    }

    public function key() {
        return $this->position;
    }

    public function valid() {
        return isset($this->entries[$this->position]);
    }

    public function rewind() {
        $this->posision = 0;
    }
}