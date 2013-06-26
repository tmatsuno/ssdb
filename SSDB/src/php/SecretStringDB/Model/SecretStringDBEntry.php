<?php
namespace SecretStringDB\Model;
/**
 * class:SecretStringDBEntry
 *
 * @package SecretStringDB
 * @author Tomoo Matsuno <tomoo.m@gmail.com>
 * @since PHP 5.3
 * @version $Id: SecretStringDBEntry.php, ver 1.0 2013/06/26 $
 * @license Apache License 2.0
 * @copyright  Copyright (c) 2013 Tomoo Matsuno.
 */
require_once("SplClassLoader.php");
$classLoader = new \SplClassLoader();
$classLoader->register();

use SecretStringDBStrings;
use SecretStringDBString;

class SecretStringDBEntry
{
    private $name;
    private $strings;

}
