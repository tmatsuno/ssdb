<?php
namespace SecretStringDB\Model;
/**
 * class:SecretStringDBString
 *
 * @package SecretStringDB
 * @author Tomoo Matsuno <tomoo.m@gmail.com>
 * @since PHP 5.3
 * @version $Id: SecretStringDBString.php, ver 1.0 2013/06/26 $
 * @license Apache License 2.0
 * @copyright  Copyright (c) 2013 Tomoo Matsuno.
 */
require_once("SplClassLoader.php");
$classLoader = new \SplClassLoader();
$classLoader->register();

class SecretStringDBString
{
    /**
     * @var String
     */
    private $data;

    /**
     * @var \DateTime
     */
    private $create;

    /**
     * @var \DateTime
     */
    private $expire;

    /**
     * @var bool
     */
    private $status;

    /**
     * @var int
     */
    private $id;

    /**
     * @param string $data
     * @param \DateTime $create
     * @param \DateTime $expire
     * @param bool $status
     * @param int $id
     */
    public function __construct($data, \DateTime $create, \DateTime $expire, $status, $id){
        $this->data = (string) $data;
        $this->create = $create;
        $this->expire = $expire;
        $this->status = (bool) $status;
        $this->id = (int) $id;
    }

    /**
     * @return string
     */
    public function getData(){
        return $this->data;
    }

    /**
     * @return \DateTime
     */
    public function getCreate(){
        return $this->create;
    }

    /**
     * @return \DateTime
     */
    public function getExpire(){
        return  $this->expire;
    }

    /**
     * @return boolean
     */
    public function getStatus(){
        return $this->status;
    }

    /**
     * @return int
     */
    public function getId(){
        return $this->id;
    }

}
